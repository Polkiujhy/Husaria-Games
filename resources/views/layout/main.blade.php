<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>@yield('title', 'Husaria Games')</title>
        <meta name="description" content=""/>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>

<body>
    <nav class="topnav menubar">
        <a class="topnav-logo" href="{{ route('AboutUs') . '/#s1' }}"><img src="../../images/HUSARIA_GAMES_LOGO_ALL_BIG.png" width="110%" height="110%"></a>
            <div class="topnav-content">
                <a href="{{ route('AboutUs'). '/#s1' }}"><img class="topnav-content-hover" src="../../images/about_us.png" alt="About us"></a>
            </div>
            <div class="topnav-content">
                <a href="{{ url(config('forum.web.router.prefix')) }}"><img class="topnav-content-hover" src="../../images/News.png" alt="About us"></a>
            </div>
            <div class="topnav-content dropdown">
                <img class="topnav-content-hover " src="../../images/Released_Games.png">
                    <div class="dropdown-content">
                        <a href="{{ route('Produced.WoodCutter') }}">WoodCutter Deluxe Edition</a></li>
                        <a href="{{ route('Produced.Space') }}">Space</a></li>
                        <a href="{{ route('Produced.Spaceshooter') }}">Space Shooter</a></li>
                    </div>
            </div>
            <div class="topnav-content dropdown">
                <img class="topnav-content-hover" src="../../images/Games_In_Development.png">
                <div class="dropdown-content">
                    <a href="{{ route('InProduction.Arkona') }}">Arkona</a>
                    <a href="{{ route('InProduction.Cyber_City') }}">Cyber City Deluxe Edition</a>
                    <a href="{{ route('InProduction.Pixel_Monsters') }}">Pixel Monsters</a>
                </div>
            </div>
            <div class="topnav-content dropdown">
                <a href="{{ route('store') }}"><img class="topnav-content-hover" src="../../images/Store.png"></a>
            </div>

            <div class="topnav-content">
                <a href="{{ route('Contact') }}"><img class="topnav-content-hover" src="../../images/Contact.png"></a>
            </div>
            @guest
            <div class="topnav-content">
                    <a class="" href="{{ route('login') }}"><p class="topnav-content-hover">LOG<img style="width: auto" src="../../images/LOG_Icon.png" alt="About us"></p></a>
            </div>
            @if (Route::has('register'))
            <div class="topnav-content">
                    <a class="" href="{{ route('register') }}"><p class="topnav-content-hover">REG<img style="width: auto" src="../../images/REG_Icon.png" alt="About us"></p></a>
            </div>
            @endif
                @else
                <div class="topnav-content">
                    <a href="{{ route('Profile') }}"><p class="topnav-content-hover">PROF<img style="width: auto" src="../../images/LOGOUT_Icon.png" alt="About us"></p></a>
                </div>
                <div class="topnav-content">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <p class="topnav-content-hover">LOGOUT<img style="width: auto" src="../../images/LOGOUT_Icon.png" alt="About us"></p></a>
                </div>
                        <div class="topnav-content" >
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
            @endguest
            <section class="p-menu1">
                <input id="toggle1" type="checkbox" />
                <label class="hamburger1" for="toggle1">
                  <div class="top"></div>
                  <div class="meat"></div>
                  <div class="bottom"></div>
                </label>

                <nav class="menu1">
                    <div class="div-menu ">
                        <a href="{{ route('AboutUs'). '/#s1' }}">About Us</a>
                    </div>
                    <div class="div-menu ">
                        <a href="{{ url(config('forum.web.router.prefix')) }}">News</a>
                    </div>
                    <div class=" div-menu">
                        <a href="{{ route('Produced.WoodCutter') }}">WoodCutter Deluxe Edition</a></li>
                    </div>
                    <div class=" div-menu">
                        <a href="{{ route('Produced.Space') }}">Space</a></li>
                    </div>
                    <div class=" div-menu">
                        <a href="{{ route('Produced.Spaceshooter') }}">Space Shooter</a></li>
                    </div>
                    <div class=" div-menu">
                            <a href="{{ route('InProduction.Arkona') }}">Arkona</a>
                    </div>
                    <div class=" div-menu">
                            <a href="{{ route('InProduction.Cyber_City') }}">Cyber City Deluxe Edition</a>
                    </div>
                    <div class=" div-menu">
                            <a href="{{ route('InProduction.Pixel_Monsters') }}">Pixel Monsters</a>
                    </div>
                    <div class="div-menu ">
                        <a href="{{ route('store') }}">Store</a>
                    </div>
                    <div class="div-menu">
                        <a href="{{ route('Contact') }}">Contact</a>
                    </div>
                    @guest
                    <div class="div-menu">
                            <a href="{{ route('login') }}"><img src="../../images/LOG_Icon.png" alt="About us"></a>
                    </div>
                    @if (Route::has('register'))
                    <div class="div-menu">
                            <a href="{{ route('register') }}"><img src="../../images/REG_Icon.png" alt="About us"></a>
                    </div>
                    @endif
                        @else
                        <div class="div-menu">
                            <a href="{{ route('Profile') }}"><img src="../../images/LOGOUT_Icon.png" alt="About us"></a>
                        </div>
                        <div class="div-menu ">
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <img src="../../images/LOGOUT_Icon.png" alt="About us"></a>
                        </div>
                            <div class="div-menu">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            </div>
                    @endguest
                </nav>
            </section>
        </nav>
            <main>
                <div id="layoutMain_content container">
                    @yield('content')
                </div>
                <footer class="py-4 mt-auto">
                <div class="container-fluid footer">
                    <div class="text-muted">
                        <div class="container-fluid">
                            <table>
                                <tr>
                                <th>STORES</th>
                                <th>MULTIMEDIA</th>
                                <th>COMMUNICATION</th>
                                </tr>
                                <tr>
                                    <td><img style="max-width: 16px; max-height:16px" src="../../images/itchio.png">
                                    <a href="https://husaria-games.itch.io/" target="_blank">ITCH.IO</a></td>
                                    <td><img style="max-width: 16px; max-height:16px" src="../../images/yt.png">
                                    <a href="https://www.youtube.com/channel/UCSgJ2YPqEYAq6DEcIRWcfTg" target="_blank">YOUTUBE</a></td>
                                    <td><img style="max-width: 16px; max-height:16px" src="../../images/dc.png">
                                    <a href="https://discord.gg/hkr7bPk6vD" target="_blank">DISCORD</a></td>
                                </tr>
                                <tr>
                                    <td><img style="max-width: 16px; max-height:16px" src="../../images/steam.png">
                                    <a href="https://steamcommunity.com/groups/husariagamespl" target="_blank">STEAM</a></td>
                                    <td><img style="max-width: 16px; max-height:16px" src="../../images/tiktok.png">
                                    <a href="https://www.tiktok.com/@husaria_games" target="_blank">TIKTOK</a></td>
                                    <td><img style="max-width: 16px; max-height:16px" src="../../images/fb.png">
                                    <a href="https://www.facebook.com/Husaria-Games-110870391631393/" target="_blank">FACEBOOK</a></td>
                                </tr>
                                <div class="center" style="position: relative; float: right; font-size:1rem;">
                                    @Adam_Kurek | 2022
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
        </footer>
    </main>
    <script>
    function myFunction(x) {
        x.classList.toggle("change");
      }
    </script>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
