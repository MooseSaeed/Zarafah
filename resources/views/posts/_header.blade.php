<section class="block block--yellow block--skewed-left hero">
    <div class="container grid grid--1x2">
        <header class="block__header hero__content">
            <a href="/">
                <h1 data-aos="fade-right" class="block__heading">
                    Zarafah
                </h1>
            </a>
            <p class="hero__tagline">
                Order your item.
            </p>
            <a href="#newsletter" class="btn btn--accent btn--stretched">Newsletter</a>
        </header>
        <picture data-aos="zoom-in">
            {{-- <source type="image/webp" srcset="/images/banner.webp 1x, /images/banner@2x.webp 2x" />
                <source type="image/png" srcset="/images/banner.png 1x, /images/banner@2x.png 2x" /> --}}
            <img class="hero__image" src="/images/ZarafahLogo.jpg" alt="" />
        </picture>
    </div>
</section>

{{-- Filtering --}}

<section id="filtering" data-aos="fade-up" class="block container block-domain">

    <header class="block__header">

        <h2>Search for whatever you need!</h2>

    </header>

    {{-- Search --}}

    <div class="input-group">

        <form method="GET" action="#">

            @if (request('category'))

                <input type="hidden" name="category" value="{{ request('category') }}">

            @endif

            <input type="text" class="input" name="search" placeholder="What are you looking for?"
                value="{{ request('search') }}" />
            <button class="btn btn--accent">
                <svg class="icon icon--white">
                    <use href="/images/sprite.svg#search"></use>
                </svg>Search
            </button>
        </form>

    </div>
</section>
