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
            <a href="" class="btn btn--accent btn--stretched">Get Started</a>
        </header>
        <picture data-aos="zoom-in">
            {{-- <source type="image/webp" srcset="/images/banner.webp 1x, /images/banner@2x.webp 2x" />
                <source type="image/png" srcset="/images/banner.png 1x, /images/banner@2x.png 2x" /> --}}
            <img class="hero__image" src="/images/ZarafahLogo.jpg" alt="" />
        </picture>
    </div>
</section>
<section data-aos="fade-up" class="search--container block container block-domain">
    <header class="block__header">
        <h2>Search for whatever you need!</h2>
    </header>
    <div class="input-group">
        <input type="text" class="input" placeholder="What are you looking for?" />
        <button class="btn btn--accent">
            <svg class="icon icon--white">
                <use href="/images/sprite.svg#search"></use>
            </svg>Search
        </button>

        <div class="collapsible categories--dropdown">

            <div class="collapsible__header">
                <button class="btn categories--btn btn--accent">
                    <svg class="icon icon--white collapsible__chevron">
                        <use href="/images/sprite.svg#chevron"></use>
                    </svg>
                    {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}
                </button>
            </div>

            <div class="collapsible__content">

                <div class="btn categories--items">

                    <a href="/">All</a>

                    @foreach ($categories as $category)

                        <a href="/categories/{{ $category->slug }}"
                            style="{{ isset($currentCategory) && $currentCategory->is($category) ? 'background-color: #ff4f23' : '' }}">{{ ucwords($category->name) }}</a>

                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>
