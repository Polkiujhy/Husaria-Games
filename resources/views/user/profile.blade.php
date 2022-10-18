@extends('layout.main')

@section('content')




<div class="layout-wrapper">
    @guest
    <div class="center">
        <div class="section-4">
            <p>Log in too see your games,</p>
            <p>also I think u can search better than no authorized profiles,</p>
            <p>go to <a href="{{route('Symulation.AtomLife')}}">this site</a> and have some fun with it.</p>
        </div>
    </div>

    @else
    @include('shared.messages')
    <div class="center">
        <div class=" section-5" style="position: relative; top:-100px;">
            <h2 class="card-header">You are logged in to account: {{Auth::user()->email}}</h2>
        </div>
        <div class="section-5">
                <h2 class="card-header">Games you own</h2>
            <table>
                <tr>
                    <style>
                    th{padding: 10px;}
                    td{padding: 10px;}
                    </style>
                <th>NAME</th>
                <th>DATE</th>
                <th>PRICE</th>
                <th>FILE</th>
                <th>DOWNLOAD</th>
                </tr>
                @if ($orders != null)
                    {{$order = null}}
                    @foreach ($orders ?? [] as $order)
                        <tr>
                        @if ($order != null && Auth::user()->email == $order->email && $order->status == 'COMPLETED' && ($order->description == "Woodcutter Deluxe Edition" || $order->description == "Cyber City Deluxe Edition" || $order->description == "Space" || $order->description == "Space Shooter" || $order->description == "Arkona" || $order->description == "Pixel Monsters"))
                            <td>{{$order->description}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->price}}</td>
                            <td>.ZIP</td>
                            <td><a href="{{ asset('download/'. $order->filename)}}">DOWNLOAD GAME</a></td>
                        @endif
                        </tr>
                    @endforeach
                @else
                    <p>Something went wrong...</p>
                @endif
            </table>
        </div>
    </div>
</div>
@endguest

@endsection
