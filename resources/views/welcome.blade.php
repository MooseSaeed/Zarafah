<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Get your scarves and gloves right away" />
    <meta property="og:title" content="Zarafah... " />
    <meta property="og:description" content="Zarafah for clothes " />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://" />
    <meta property="og:url" content="https://Zarafah.com" />
    <title>Zarafah</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>


    {{-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}

    <header>
        <nav class="nav collapsible">
            <a class="nav__brand" href="/"><img src="images/logo.svg" alt="" /></a>
            <svg class="icon icon--white nav__toggler">
                <use href="images/sprite.svg#menu"></use>
            </svg>
            <ul class="list nav__list collapsible__content">
                <li class="nav__item"><a href="#">Hosting</a></li>
                <li class="nav__item"><a href="#">VPS</a></li>
                <li class="nav__item"><a href="#">Domain</a></li>
                <li class="nav__item"><a href="#">Pricing</a></li>
            </ul>
        </nav>
    </header>
    <section class="block block--yellow block--skewed-left hero">
        <div class="container grid grid--1x2">
            <header class="block__header hero__content">
                <h1 data-aos="fade-right" class="block__heading">
                    Zarafah
                </h1>
                <p class="hero__tagline">
                    Order your item.
                </p>
                <a href="" class="btn btn--accent btn--stretched">Get Started</a>
            </header>
            <picture data-aos="zoom-in">
                {{-- <source type="image/webp" srcset="images/banner.webp 1x, images/banner@2x.webp 2x" />
                <source type="image/png" srcset="images/banner.png 1x, images/banner@2x.png 2x" /> --}}
                <img class="hero__image" src="images/ZarafahLogo.jpg" alt="" />
            </picture>
        </div>
    </section>
    <section data-aos="fade-up" class="block container block-domain">
        <header class="block__header">
            <h2>Search for whatever you need!</h2>
        </header>
        <div class="input-group">
            <input type="text" class="input" placeholder="Enter domain name here..." />
            <button class="btn btn--accent">
                <svg class="icon icon--white">
                    <use href="images/sprite.svg#search"></use>
                </svg>Search
            </button>
        </div>
    </section>
    <section class="block container">
        <header class="block__header">
            <h2>Our Products</h2>
            <p>
                Select the product you like and get it right away!
            </p>
        </header>
        <article class="grid grid--1x2 feature">
            <div class="feature__content" data-aos="fade-right">
                <span class="icon-container">
                    <svg class="icon icon--primary">
                        <use href="images/sprite.svg#easy"></use>
                    </svg>
                </span>
                <h3 class="feature__heading">Super Easy to Use</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                    obcaecati vel ad unde est illo at. Labore excepturi officia dolores!
                </p>
                <a href="#" class="link-arrow">Learn More</a>
            </div>
            <picture data-aos="zoom-in-left">
                <source type="image/webp" srcset="images/easy.webp 1x, images/easy@2x.webp 2x" />
                <source type="image/jpg" srcset="images/easy.jpg 1x, images/easy@2x.jpg 2x" />
                <img class="feature__image" src="images/easy@2x.jpg" alt="" />
            </picture>
        </article>
    </section>

    <section class="block" data-aos="zoom-in">
        <header class="block__header">
            <h2>What our Customers are Saying</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, ipsam.
            </p>
        </header>
        <div class="container">
            <div class="card testimonial">
                <div class="grid grid--1x2">
                    <div class="testimonial__image">
                        <img src="images/testimonial.jpg" alt="A happy, smiling customer" />
                        <span class="icon-container icon-container--accent">
                            <svg class="icon icon--white icon--small">
                                <use href="images/sprite.svg#quotes"></use>
                            </svg>
                        </span>
                    </div>
                    <blockquote class="quote">
                        <p class="quote__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Incidunt optio officiis dolore earum error eaque perferendis
                            laudantium sed praesentium dolorum.
                        </p>
                        <footer>
                            <div class="media">
                                <div class="media__image">
                                    <svg class="icon icon--primary quote__line">
                                        <use href="images/sprite.svg#line"></use>
                                    </svg>
                                </div>
                                <div class="media__body">
                                    <h3 class="media__title quote__author">John Smith</h3>
                                    <p class="quote__organization">ABC Company</p>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="callout callout--primary callout-signup">
            <div class="grid grid--1x2">
                <div class="callout__content">
                    <h2 class="callout__heading">Subscribe for Newsletter</h2>
                    <p>
                        Subscribe for our Newsletter to recieve our latest offers and newest products.
                    </p>
                </div>
                <a href="#" class="btn btn--secondary btn--stretched">Subscribe</a>
            </div>
        </div>
    </div>

    <footer class="block block--dark footer">
        <div class="container grid footer__sections">
            <section class="collapsible footer__section">
                <div class="collapsible__header">
                    <h2 class="collapsible__heading footer__heading">Company</h2>
                    <svg class="icon icon--white collapsible__chevron">
                        <use href="images/sprite.svg#chevron"></use>
                    </svg>
                </div>
                <div class="collapsible__content">
                    <ul class="list">
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </section>
            <section class="collapsible footer__section">
                <div class="collapsible__header">
                    <h2 class="collapsible__heading footer__heading">Support</h2>
                    <svg class="icon icon--white collapsible__chevron">
                        <use href="images/sprite.svg#chevron"></use>
                    </svg>
                </div>
                <div class="collapsible__content">
                    <ul class="list">
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </section>
            <div class="footer__brand">
                <img src="images/logo.svg" alt="" />
                <p class="footer__copyright">Copyright 2022 Mostafa Said</p>
            </div>
        </div>
    </footer>
    <script src="main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
