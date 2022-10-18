<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Husaria Games')</title>

    <!-- Bootstrap (https://github.com/twbs/bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Feather icons (https://github.com/feathericons/feather) -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- Vue (https://github.com/vuejs/vue) -->
    @if (config('app.debug'))
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    @else
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    @endif

    <!-- Axios (https://github.com/axios/axios) -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Pickr (https://github.com/Simonwep/pickr) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Sortable (https://github.com/SortableJS/Sortable) -->
    <script src="//cdn.jsdelivr.net/npm/sortablejs@1.10.1/Sortable.min.js"></script>
    <!-- Vue.Draggable (https://github.com/SortableJS/Vue.Draggable) -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.23.2/vuedraggable.umd.min.js"></script>

</head>
<body style="font-size:2.3rem; font-weight:100;">
    <nav class="topnav menubar" style="position: absolute; top:-95px;">
        <a class="topnav-logo" href="{{ route('AboutUs') . '/#s1' }}"><img style="max-height: 95px;" src="../../images/HUSARIA_GAMES_LOGO_ALL_BIG.png"></a>
        <div class="topnav-content">
            <a href="{{ url(config('forum.web.router.prefix')) }}"><p class="topnav-content-hover">Forum</p></a>
        </div>
        <div class="topnav-content dropdown">
            <a href="{{ route('forum.recent') }}"><p class="topnav-content-hover">{{ trans('forum::threads.recent') }}</p></a>
        </div>
        @auth
            <div class="topnav-content">
                <a href="{{ route('forum.unread') }}"><p class="topnav-content-hover">{{ trans('forum::threads.unread_updated') }}</p></a>
            </div>
        @endauth
        @can('moveCategories')
            <div class="topnav-content">
                <a href="{{ route('forum.category.manage') }}"><p class="topnav-content-hover">{{ trans('forum::general.manage') }}</p></a>
            </div>
        @endcan

        @guest
        <div class="topnav-content">
                <a href="{{ route('login') }}"><p class="topnav-content-hover">LOG<img style="width: auto" src="../../images/LOG_Icon.png" alt="About us"></p></a>
        </div>
        @if (Route::has('register'))
        <div class="topnav-content">
                <a href="{{ route('register') }}"><p class="topnav-content-hover">REG<img style="width: auto" src="../../images/REG_Icon.png" alt="About us"></p></a>
        </div>
        @endif
            @else
            <div class="topnav-content">
                <a href="{{ route('Profile') }}"><p class="topnav-content-hover">PROFILE<img style="width: auto" src="../../images/LOGOUT_Icon.png" alt="About us"></p></a>
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
                <div class="div-menu">
                    <a href="{{ url(config('forum.web.router.prefix')) }}">Forum</a>
                </div>
                <div class=" div-menu">
                    <a href="{{ route('forum.recent') }}">{{ trans('forum::threads.recent') }}</a>
                </div>
                @auth
                    <div class=" div-menu">
                        <a href="{{ route('forum.unread') }}">{{ trans('forum::threads.unread_updated') }}</a>
                    </div>
                @endauth
                @can('moveCategories')
                    <div class=" div-menu">
                        <a href="{{ route('forum.category.manage') }}">{{ trans('forum::general.manage') }}</a>
                    </div>
                @endcan
                @guest
                    <div class="div-menu">
                            <a href="{{ route('login') }}"><img src="../../images/LOG_Icon.png" alt="About us"></p></a>
                    </div>
                    @if (Route::has('register'))
                        <div class="div-menu">
                                <a href="{{ route('register') }}"><img src="../../images/REG_Icon.png" alt="About us"></p></a>
                        </div>
                    @endif
                @else
                    <div class="div-menu">
                        <a href="{{ route('Profile') }}"><img src="../../images/LOGOUT_Icon.png" alt="About us"></a>
                    </div>
                    <div class="div-menu">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <p class=""><img src="../../images/LOGOUT_Icon.png" alt="About us"></p></a>
                    </div>
                    <div class="div-menu">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </nav>
        </section>
    </nav>
    <div id="main" class="container">
        @include('forum::partials.breadcrumbs')
        @include('forum::partials.alerts')

        @yield('content')
    </div>

    <div class="mask"></div>

    <script>
    new Vue({
        el: '.v-navbar',
        name: 'Navbar',
        data: {
            isExpanded: false,
            isUserDropdownOpen: false
        },
        methods: {
            onWindowClick (event) {
                if (event.target.classList.contains('dropdown-toggle')) return;
                if (this.isExpanded) this.isExpanded = false;
                if (this.isUserDropdownOpen) this.isUserDropdownOpen = false;
            }
        },
        created: function () {
            window.addEventListener('click', this.onWindowClick);
        }
    });

    const mask = document.querySelector('.mask');

    function findModal (key)
    {
        const modal = document.querySelector(`[data-modal=${key}]`);

        if (! modal) throw `Attempted to open modal '${key}' but no such modal found.`;

        return modal;
    }

    function openModal (modal)
    {
        modal.style.display = 'block';
        mask.style.display = 'block';
        setTimeout(function()
        {
            modal.classList.add('show');
            mask.classList.add('show');
        }, 200);
    }

    document.querySelectorAll('[data-open-modal]').forEach(item =>
    {
        item.addEventListener('click', event =>
        {
            event.preventDefault();

            openModal(findModal(event.target.dataset.openModal));
        });
    });

    document.querySelectorAll('[data-modal]').forEach(modal =>
    {
        modal.addEventListener('click', event =>
        {
            if (event.target.hasAttribute('data-close-modal'))
            {
                modal.classList.remove('show');
                mask.classList.remove('show');
                setTimeout(function()
                {
                    modal.style.display = 'none';
                    mask.style.display = 'none';
                }, 200);
            }
        });
    });

    document.querySelectorAll('[data-dismiss]').forEach(item =>
    {
        item.addEventListener('click', event => event.target.parentElement.style.display = 'none');
    });

    document.addEventListener('DOMContentLoaded', event =>
    {
        const hash = window.location.hash.substr(1);
        if (hash.startsWith('modal='))
        {
            openModal(findModal(hash.replace('modal=','')));
        }

        feather.replace();

        const input = document.querySelector('input[name=color]');

        if (! input) return;

        const pickr = Pickr.create({
            el: '.pickr',
            theme: 'classic',
            default: input.value || null,

            swatches: [
                '{{ config('forum.web.default_category_color') }}',
                '#f44336',
                '#e91e63',
                '#9c27b0',
                '#673ab7',
                '#3f51b5',
                '#2196f3',
                '#03a9f4',
                '#00bcd4',
                '#009688',
                '#4caf50',
                '#8bc34a',
                '#cddc39',
                '#ffeb3b',
                '#ffc107'
            ],

            components: {
                preview: true,
                hue: true,
                interaction: {
                    input: true,
                    save: true
                }
            },

            strings: {
                save: 'Apply'
            }
        });

        pickr
            .on('save', instance => pickr.hide())
            .on('clear', instance =>
            {
                input.value = '';
                input.dispatchEvent(new Event('change'));
            })
            .on('cancel', instance =>
            {
                const selectedColor = instance
                    .getSelectedColor()
                    .toHEXA()
                    .toString();

                input.value = selectedColor;
                input.dispatchEvent(new Event('change'));
            })
            .on('change', (color, instance) =>
            {
                const selectedColor = color
                    .toHEXA()
                    .toString();

                input.value = selectedColor;
                input.dispatchEvent(new Event('change'));
            });
    });
    </script>
    <footer class="py-4 mt-auto">
        <div class="container-fluid footer">
            <div >
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
</body>
</html>
