@extends('layout.main')

@section('content')
<div class="layout-wrapper" style="margin-top: 9.5vh;">
    <div class="section-4">
        <div>
            <aside class="center">
                Contact Us:
            </aside>
            <div class="container">
                <form action="{{route('send.email')}}" method="POST">
                    @csrf
                  <div class="row">
                    <div class="col-25">
                      <label for="fname">E-mail</label>
                    </div>
                    <div class="col-75">
                        @guest
                            <input type="text" id="fname" name="email" placeholder="Your Email...">
                        @else
                            <input type="text" id="fname" name="email" placeholder="{{Auth::user()->email}}">
                         @endguest
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="subject">Subject</label>
                    </div>
                    <div class="col-75">
                      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    </div>
                  </div>
                  <div style="margin-top: 20px">
                    <input class="float-right" type="submit" value="Submit"><br/>
                  </div>
                </form>
              </div>
            <aside>If you have any issues with the above form contact us on:</aside>
            <aside style="margin-bottom: 30px">husaria.games.office@gmail.com</aside>
        </div>
    </div>
</div>


@endsection
