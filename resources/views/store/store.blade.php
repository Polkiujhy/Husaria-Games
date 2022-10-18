@extends('layout.main')

@section('content')

<script src="https://www.paypal.com/sdk/js?client-id=AX1AFaGd4dx2iSLB6zwcvnNcpi740jyVQ3ZveM2sOV3cthRfofs4qLbbrInNVpiF2qWkpPFu-cTYogJw&currency=USD&disable-funding=credit,card,p24"></script>
<script>
    function handleClick(radioBtn) {
        productValue = radioBtn.value;

        document.getElementById('paypal-button-container-'+productValue).style.display = 'block';
        document.getElementById(productValue).style.display = 'none';
    }
    // Render the PayPal button into #paypal-button-container

    function buttonshow(radioBtn){
        productValue = radioBtn.value;
        email = radioBtn.name;
    paypal.Buttons({

        // Call your server to set up the transaction
        createOrder: function(data, actions) {
            return fetch('/api/paypal/order/create/', {
                method: 'post',
                body:JSON.stringify({
                    "value":productValue,
                    "email":email
                })
            }).then(function(res) {
                return res.json();
            }).then(function(orderData) {
                return orderData.id;
            });
        },

        // Call your server to finalize the transaction
        onApprove: function(data, actions) {
            return fetch('/api/paypal/order/capture/', {
                method: 'post',
                body:JSON.stringify({
                    orderId : data.orderID
                })
            }).then(function(res) {
                return res.json();
            }).then(function(orderData) {
                // Three cases to handle:
                //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                //   (2) Other non-recoverable errors -> Show a failure message
                //   (3) Successful transaction -> Show confirmation or thank you

                // This example reads a v2/checkout/orders capture response, propagated from the server
                // You could use a different API or structure for your 'orderData'
                var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                    return actions.restart(); // Recoverable state, per:
                    // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                }

                if (errorDetail) {
                    var msg = 'Sorry, your transaction could not be processed.';
                    if (errorDetail.description) msg += '\n\n' + errorDetail.description;
                    if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
                    return alert(msg); // Show a failure message (try to avoid alerts in production environments)
                }

                // Successful capture! For demo purposes:
                location.reload();
            });
        }

    }).render('#paypal-button-container-'+productValue);
}
</script>
@if (Auth::check())
    @include('shared.messages')
@endif
<div class="layout-wrapper" style="margin-top: 5vh;">

    @foreach ($games ?? [] as $game)
    <div class="center">
        <div class="section-4">
            <figure><img style=
                "background-image: url(../images/{{$game->value}}_gal.png);
                background-position: 80% 60%;"
                src="../images/{{$game->value}}.png"/>
            </figure>
        </div>
    </div>
    <aside class="full-width-span">
    </aside>
    <div class="center">
        <div class="section-4">
            <h2>{{$game->name}}</h2>
            <p>Version: {{$game->version}}</p>
            <p>Released on STEAM, ITCH.IO!</p>
            <p>Platforms: {{$game->platform}}</p>
            <p>Developer: {{$game->developer}}</p>
            <p>Publisher: {{$game->publisher}}</p>
            <p>Released on NINTENDO SWITCH</p>
            <p>Developer: {{$game->developer}}</p>
            <p>Port: {{$game->port}}</p>
            <p>Publisher: {{$game->portpublisher}}</p>
            <p>Publish date: {{$game->published}}</p>
            <p>Genre: {{$game->genre}}</p>
            <p>Controls: {{$game->controls}}</p>
            <p>Players: {{$game->players}}</p>
            <p>Rating: {{$game->rating}}</p>
            <p>Price: {{$game->price}}</p>
            <p>MINIMAL REQUIREMENTS:</p>
            <p>Windows 64-bit system</p>
            <p>Integrated graphics and music:</p>
            <p>Intel Celeron DualCore 1.10GHz</p>
            <p>4GB of RAM</p>
            @if ($game->filename == 'Woodcutter_Deluxe_Edition')
            <iframe src="https://store.steampowered.com/widget/1876670/" onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="padding:20px;height:250px;width:100%;border:none;overflow:hidden;">></iframe>
            @endif
            @guest
            <p><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} too buy the game</a></p>
            @if ($game->filename == 'Woodcutter_Deluxe_Edition' || $game->filename =='Cyber_City_Deluxe_Edition')
            <p><a href={{ asset('download/'. $game->filename . '_DEMO.zip') }}>Free Demo</a></p>
            @endif
                @else
                {{$game_1 = " "}}
                @if (!$orders->isEmpty())
                        {{$order = null}}
                        @foreach ($orders ?? [] as $order)
                            @if ($order != null && Auth::user()->email == $order->email && $order->status == 'COMPLETED' && $order->description == $game->name)
                            <p><div id="paypal-button-container-{{$game->value}}-COMPLETED"><a href="{{ asset('download/' . $order->filename) }}">DOWNLOAD GAME</a></div></p>
                            {{$game_1 = null}}
                            @endif
                            @endforeach
                            @endif
                            @if (($game->name == 'Woodcutter Deluxe Edition' || $game->name == 'Cyber City Deluxe Edition'))
                            <p><a href={{ asset('download/'. $game->filename . '_DEMO.zip') }}>Free Demo</a></p>
                            @endif

                        @if ($game_1 != null)
                        <p><button type="radio" id="{{$game->value}}" name="{{Auth::user()->email}}" onclick="handleClick(this), buttonshow(this)" value="{{$game->value}}">BUY NOW</button>
                        <div id="paypal-button-container-{{$game->value}}"></div></p>
                        @endif

            @endguest
        </div>
    </div>
    @endforeach
@endsection
