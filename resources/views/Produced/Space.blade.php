@extends('layout.main')

@section('content')
    <div class="layout-wrapper">
        <nav class="cover-wrapper">
            <header class="page-header">
                <img src="../images/Space.png">
                <div class="page-sub">
                    <div class="subhead-container">
                        <h2 class="subhead">Asteroids, Asteroids, Asteroids and U.F.O.s...</h2>
                    </div>
                </div>
            </header>
        </nav>
        <div class="section-1">
            <p class="article-tags">
                <span class="tag card-header ="> What is Space?</span>
            </p>
            <p class="first-paragraph">In "Space", you play as a spaceship pilot and destroy asteroids and U.F.O. in your path that attack you.</p>
            <p>Play alone or in cooperation-mode with another player in the local multiplayer mode, and when you get bored, fight on 13 amazing maps in Battle mode also in local multiplayer mode for 2, 3 and 4 players.</p>
            <p>You can choose from ten epic spaceships on your journey through space.</p>
        </div>

        <aside class="full-width-span" style="padding: 0; margin:0;"></aside>

        <div>
            <div class="section-2">
                <h2 class="card-header" style="padding:20px; margin:20px;">OVERALL GAMEPLAY INFO</h2>
                <p>-Single player mode (1 PLAYER),</p>
                <p>-Cooperative mode (2 PLAYERS),</p>
                <p>-Battle mode (2, 3 and 4 PLAYERS),</p>
                <p>-Leaderboards (Single player and Cooperative),</p>
                <p>-Customizable keyboard for all 4 players (two keyboards can be used),</p>
                <p>-10 Space ships to choose:</p>
                <p>-Language (English),</p>
                <p>-Very long product support is planned!</p>

                <figure><img src="../images/Space_ships.png"/></figure>
                <figure><img src="../images/Space_ships2.png"/></figure>
            </div>
        </div>
        <div>
            <div class="section-2">
                <h2 class="card-header" style="margin:20px;">MAPS</h2>
                <p>MAP 1: SPACE</p>
                <p>MAP 2: MINE FIELD</p>
                <p>MAP 3: ASTEROIDS</p>
                <p>MAP 4: UNIDENTIFIED FLYING OBJECTS</p>
                <p>MAP 5: CLASSIC SPACE</p>
                <p>MAP 6: ANNIHILATION</p>
                <p>MAP 7: ANOTHER MINE FIELD</p>
                <p>MAP 8: BARRAGE</p>
                <p>MAP 9: CRAZY MINE FIELD</p>
                <p>MAP 10: MAIN ASTEROID BELT</p>
                <p>MAP 11: BATTLEFIELD</p>
                <p>MAP 12: INVASION</p>
                <p>MAP 13: TRAPPED</p>
            </div>
        </div>
    </div>
@endsection
