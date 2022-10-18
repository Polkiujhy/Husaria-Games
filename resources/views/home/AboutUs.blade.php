@extends('layout.main')

@section('content')
<div class="CSSgal">

    <!-- Don't wrap targets in parent -->

    <s class="Galtop" id="s1"></s>
    <s class="Galtop" id="s2"></s>
    <s class="Galtop" id="s3"></s>
    <s class="Galtop" id="s4"></s>
    <s class="Galtop" id="s5"></s>
    <s class="Galtop" id="s6"></s>

    <div class="slider">
      <div>
        <div class="imgbackground">
            <img style="object-position: 0% 50%;" src="../images/woodcutter_gal.png">
        </div>
        <img src="../images/woodcutter_animacjax4.gif">
      </div>
      <div>
        <div class="imgbackground">
            <img style="left: 100%;" src="../images/Space_gal.png">
        </div>
        <img src="../images/Space.png">
      </div>
      <div >
        <div class="imgbackground">
            <img style="left: 200%;" src="../images/space-shooter_gal.png">
        </div>
        <img src="../images/Space-shooter.png">
      </div>
      <div >
        <div class="imgbackground">
            <img style="left: 300%; object-position: 0% 100%;" src="../images/arkona_gal.png">
        </div>
        <img src="../images/arkona.png">
      </div>
      <div >
        <div class="imgbackground">
            <img style="left: 400%;" src="../images/pixel-monsters_gal.png">
        </div>
        <img src="../images/Pixel-Monsters.png">
      </div>
      <div>
        <div class="imgbackground">
            <img style="left: 500%; object-position: 0% 60%;" src="../images/cyber-city_gal.png">
        </div>
        <img src="../images/cyber_city_animacjax4.gif">
      </div>
    </div>

    <div class="prevNext">
      <div><a href="#s6"><b><</b></a> <a href="#s2"><b>></b></a></div>
      <div><a href="#s1"><b><</b></a> <a href="#s3"><b>></b></a></div>
      <div><a href="#s2"><b><</b></a> <a href="#s4"><b>></b></a></div>
      <div><a href="#s3"><b><</b></a> <a href="#s5"><b>></b></a></div>
      <div><a href="#s4"><b><</b></a> <a href="#s6"><b>></b></a></div>
      <div><a href="#s5"><b><</b></a> <a href="#s1"><b>></b></a></div>
    </div>

    <div class="bullets">
      <a href="#s1"></a>
      <a href="#s2"></a>
      <a href="#s3"></a>
      <a href="#s4"></a>
      <a href="#s5"></a>
      <a href="#s6"></a>
    </div>
</div>
    <div class="layout-wrapper">
        <nav class="cover-wrapper">
            <header class="page-header">
                <img src="../images/cyber_city_animacjax4.gif">
                <div class="page-sub">
                    <div class="subhead-container">
                        <h2 class="subhead">The next generation of arcade gamers</h2>
                    </div>
                </div>
            </header>
        </nav>
        <div class="section-1">
            <p class="article-tags">
                <span class="tag"> What is Woodcutter?</span>
            </p>
            <p class="first-paragraph ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quidem est minima quam! Laborum odit quidem earum perferendis eius laudantium perspiciatis similique deleniti delectus suscipit, cum corrupti facere reprehenderit esse.</p>
            <p>Animi aut, atque quibusdam similique distinctio enim iure, blanditiis rerum autem illum eum in. Dolorem quasi aspernatur nemo deserunt quo, libero dolore atque magni, ullam nihil corrupti et illo earum?</p>
            <p>Quos, ad? Et, iure. Officia fuga unde quibusdam nemo modi perspiciatis quisquam consectetur voluptates, dolore ab eaque voluptatem corporis placeat consequatur itaque qui asperiores. Consequuntur quas vitae animi est ea!</p>
            <p>Accusantium nemo labore corrupti laudantium! Quo reprehenderit ea perspiciatis temporibus! Illo sapiente harum fuga molestias temporibus iste animi. Velit, tenetur mollitia sit magni nulla quos veniam molestias consectetur aliquam eaque.</p>
            <p>Voluptatem, omnis, placeat recusandae iste explicabo accusantium velit laboriosam voluptatum similique, fugit culpa enim! Suscipit labore odit porro assumenda, molestiae aperiam laboriosam explicabo nemo soluta facere sed libero magnam. Odio.</p>
        </div>
        <aside class="full-width-span">
            <p>"</p>
            <p>Quos, ad? Et, iure. Libero dolore atque magni.</p>
            <p>"</p>
        </aside>
        <div>
            <div class="section-2">
                <h2>Title</h2>
                <figure><img src="../images/woodcutter_animacjax4.gif"/></figure>
                <p>Voluptatem, omnis, placeat recusandae iste explicabo accusantium velit laboriosam voluptatum similique, fugit culpa enim! Suscipit labore odit porro assumenda, molestiae aperiam laboriosam explicabo nemo soluta facere sed libero magnam. Odio.</p>
                <p>Animi aut, atque quibusdam similique distinctio enim iure, blanditiis rerum autem illum eum in. Dolorem quasi aspernatur nemo deserunt quo, libero dolore atque magni, ullam nihil corrupti et illo earum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quidem est minima quam! Laborum odit quidem earum perferendis eius laudantium perspiciatis similique deleniti delectus suscipit, cum corrupti facere reprehenderit esse.</p>
                <p>Voluptatem, omnis, placeat recusandae iste explicabo accusantium velit laboriosam voluptatum similique, fugit culpa enim! Suscipit labore odit porro assumenda, molestiae aperiam laboriosam explicabo nemo soluta facere sed libero magnam. Odio.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id amet ad blanditiis vero delectus incidunt tempore reiciendis eius qui vel placeat reprehenderit, ut, dolore asperiores possimus impedit. Ipsum, culpa eaque!</p>
                <p>Velit vero esse quisquam accusantium? Dolore alias, quaerat quod excepturi officiis ipsa placeat officia necessitatibus illo, vero quasi esse aut. Doloremque nesciunt placeat animi saepe tempore aspernatur, officia vitae laudantium!</p>

            </div>
        </div>
        <div>
            <div class="section-2">
                <h2>Title</h2>

                <p>Animi aut, atque quibusdam similique distinctio enim iure, blanditiis rerum autem illum eum in. Dolorem quasi aspernatur nemo deserunt quo, libero dolore atque magni, ullam nihil corrupti et illo earum?</p>

                <figure><img src="../images/woodcutter_animacjax4.gif" /></figure>


                <p>Velit vero esse quisquam accusantium? Dolore alias, quaerat quod excepturi officiis ipsa placeat officia necessitatibus illo, vero quasi esse aut. Doloremque nesciunt placeat animi saepe tempore aspernatur, officia vitae laudantium!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quidem est minima quam! Laborum odit quidem earum perferendis eius laudantium perspiciatis similique deleniti delectus suscipit, cum corrupti facere reprehenderit esse.</p>
                <p>Aperiam est ab harum alias quae rem, cumque vero. Dolore possimus quas eius dolor voluptatibus cumque velit, ratione aspernatur voluptatem? Nulla voluptatem quaerat placeat error, ipsam alias dignissimos odit excepturi?</p>
                <p>Consectetur sed, itaque modi fugit asperiores similique maxime voluptatum incidunt labore vero cumque provident, deleniti nam? Molestiae impedit nostrum soluta quo iure, iste, nobis expedita minus ad officia dolor saepe.</p>
                <aside>
                    <p>"Quote"</p>
                </aside>
                <p>Consectetur sed, itaque modi fugit asperiores similique maxime voluptatum incidunt labore vero cumque provident, deleniti nam? Molestiae impedit nostrum soluta quo iure, iste, nobis expedita minus ad officia dolor saepe.</p>
                <p>Aperiam est ab harum alias quae rem, cumque vero. Dolore possimus quas eius dolor voluptatibus cumque velit, ratione aspernatur voluptatem? Nulla voluptatem quaerat placeat error, ipsam alias dignissimos odit excepturi?</p>
            </div>
        </div>

    </div>

@endsection
