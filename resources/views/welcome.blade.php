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
            <h2>Starting at $9 per month</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti,
                exercitationem?
            </p>
        </header>
        <div class="input-group">
            <input type="text" class="input" placeholder="Enter domain name here..." />
            <button class="btn btn--accent">
                <svg class="icon icon--white">
                    <use href="images/sprite.svg#search"></use>
                </svg>Search
            </button>
        </div>
        <ul class="list block-domain__prices">
            <li><span class="badge badge--secondary">.com $9</span></li>
            <li>.sg $10</li>
            <li>.space $11</li>
            <li>.info $14</li>
            <li>.net $10</li>
            <li>.xyz $10</li>
        </ul>
    </section>
    <section data-aos="fade-up" class="block container block-plans">
        <div class="grid grid--1x3">
            <div class="plan">
                <div class="card card--secondary">
                    <header class="card__header">
                        <h3 class="plan__name">Entry</h3>
                        <span class="plan__price">$14</span>
                        <span class="plan__billing-cycle">/month</span>
                        <span class="badge badge--secondary badge--small">10% OFF</span>
                        <span class="plan__description">Easy start on the cloud</span>
                    </header>
                    <div class="card__body">
                        <ul class="list list--tick">
                            <li class="list__item">Unlimited Websites</li>
                            <li class="list__item">Unlimited Bandwidth</li>
                            <li class="list__item">100 GB SSD Sotrage</li>
                            <li class="list__item">3 GB RAM</li>
                        </ul>
                        <button class="btn btn--outline btn--block">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="plan plan--popular">
                <div class="card card--primary">
                    <header class="card__header">
                        <h3 class="plan__name">Entry</h3>
                        <span class="plan__price">$14</span>
                        <span class="plan__billing-cycle">/month</span>
                        <span class="badge badge--primary badge--small">10% OFF</span>
                        <span class="plan__description">Easy start on the cloud</span>
                    </header>
                    <div class="card__body">
                        <ul class="list list--tick">
                            <li class="list__item">Unlimited Websites</li>
                            <li class="list__item">Unlimited Bandwidth</li>
                            <li class="list__item">100 GB SSD Sotrage</li>
                            <li class="list__item">3 GB RAM</li>
                        </ul>
                        <button class="btn btn--outline btn--block">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="plan">
                <div class="card card--secondary">
                    <header class="card__header">
                        <h3 class="plan__name">Entry</h3>
                        <span class="plan__price">$14</span>
                        <span class="plan__billing-cycle">/month</span>
                        <span class="badge badge--secondary badge--small">10% OFF</span>
                        <span class="plan__description">Easy start on the cloud</span>
                    </header>
                    <div class="card__body">
                        <ul class="list list--tick">
                            <li class="list__item">Unlimited Websites</li>
                            <li class="list__item">Unlimited Bandwidth</li>
                            <li class="list__item">100 GB SSD Sotrage</li>
                            <li class="list__item">3 GB RAM</li>
                        </ul>
                        <button class="btn btn--outline btn--block">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block container">
        <header class="block__header">
            <h2>Host on the Cloud to Keep Growing</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,
                voluptatem.
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
        <article class="grid grid--1x2 feature">
            <div class="feature__content">
                <span class="icon-container">
                    <svg class="icon icon--primary">
                        <use href="images/sprite.svg#computer"></use>
                    </svg>
                </span>
                <h3 class="feature__heading">Simply Fast Websites</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                    obcaecati vel ad unde est illo at. Labore excepturi officia dolores!
                </p>
                <a href="#" class="link-arrow">Learn More</a>
            </div>
            <picture>
                <source type="image/webp" srcset="images/fast.webp 1x, images/fast@2x.webp 2x" />
                <source type="image/jpg" srcset="images/fast.jpg 1x, images/fast@2x.jpg 2x" />
                <img class="feature__image" src="images/fast@2x.jpg" alt="" />
            </picture>
        </article>
        <article class="grid grid--1x2 feature">
            <div class="feature__content">
                <span class="icon-container">
                    <svg class="icon icon--primary">
                        <use href="images/sprite.svg#wordpress"></use>
                    </svg>
                </span>
                <h3 class="feature__heading">Wordpress Made Easy</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                    obcaecati vel ad unde est illo at. Labore excepturi officia dolores!
                </p>
                <a href="#" class="link-arrow">Learn More</a>
            </div>
            <picture>
                <source type="image/webp" srcset="images/wordpress.webp 1x, images/wordpress@2x.webp 2x" />
                <source type="image/jpg" srcset="images/wordpress.jpg 1x, images/wordpress@2x.jpg 2x" />
                <img class="feature__image" src="images/wordpress@2x.jpg" alt="" />
            </picture>
        </article>
        <article class="grid grid--1x2 feature">
            <div class="feature__content">
                <span class="icon-container">
                    <svg class="icon icon--primary">
                        <use href="images/sprite.svg#clock"></use>
                    </svg>
                </span>
                <h3 class="feature__heading">24/7 Expert Support</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                    obcaecati vel ad unde est illo at. Labore excepturi officia dolores!
                </p>
                <a href="#" class="link-arrow">Learn More</a>
            </div>
            <picture>
                <source type="image/webp" srcset="images/support.webp 1x, images/support@2x.webp 2x" />
                <source type="image/jpg" srcset="images/support.jpg 1x, images/support@2x.jpg 2x" />
                <img class="feature__image" src="images/support@2x.jpg" alt="" />
            </picture>
        </article>
    </section>
    <section class="block block--dark block--skewed-right block-showcase">
        <header class="block__header">
            <h2>User-friendly Control Panel</h2>
        </header>
        <div class="container grid grid--1x2">
            <picture data-aos="fade-right" class="block-showcase__image">
                <source type="image/webp" srcset="images/ipad.webp 1x, images/ipad@2x.webp 2x" />
                <source type="image/png" srcset="images/ipad.png 1x, images/ipad@2x.png 2x" />
                <img src="images/ipad.png" alt="" />
            </picture>
            <ul class="list" data-aos="fade-up">
                <li>
                    <div class="media">
                        <div class="media__image">
                            <svg class="icon icon--primary">
                                <use href="images/sprite.svg#snap"></use>
                            </svg>
                        </div>
                        <div class="media__body">
                            <h3 class="media__title">Easy Start & Managed Updates</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Veniam quisquam, ex nostrum vero voluptates dicta excepturi
                                vel perspiciatis consequuntur ab.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <div class="media__image">
                            <svg class="icon icon--primary">
                                <use href="images/sprite.svg#growth"></use>
                            </svg>
                        </div>
                        <div class="media__body">
                            <h3 class="media__title">Staging, GIT & WP-CLI</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Veniam quisquam, ex nostrum vero voluptates dicta excepturi
                                vel perspiciatis consequuntur ab.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <div class="media__image">
                            <svg class="icon icon--primary">
                                <use href="images/sprite.svg#wordpress"></use>
                            </svg>
                        </div>
                        <div class="media__body">
                            <h3 class="media__title">Dynamic Caching & More</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Veniam quisquam, ex nostrum vero voluptates dicta excepturi
                                vel perspiciatis consequuntur ab.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
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
                    <h2 class="callout__heading">Ready to Get Started?</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi
                        voluptate tempora qui distinctio consequatur aliquid pariatur
                        cupiditate quas cum fugit.
                    </p>
                </div>
                <a href="#" class="btn btn--secondary btn--stretched">Get Started</a>
            </div>
        </div>
    </div>

    <footer class="block block--dark footer">
        <div class="container grid footer__sections">
            <section class="collapsible collapsible--expanded footer__section">
                <div class="collapsible__header">
                    <h2 class="collapsible__heading footer__heading">Products</h2>
                    <svg class="icon icon--white collapsible__chevron">
                        <use href="images/sprite.svg#chevron"></use>
                    </svg>
                </div>
                <div class="collapsible__content">
                    <ul class="list">
                        <li><a href="#">Website Hosting</a></li>
                        <li><a href="#">Free Automated Wordpress</a></li>
                        <li><a href="#">Migrations</a></li>
                    </ul>
                </div>
            </section>
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
                        <li><a href="#">Affiliates</a></li>
                        <li><a href="#">Blog</a></li>
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
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Knowledge Base</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </section>
            <section class="collapsible footer__section">
                <div class="collapsible__header">
                    <h2 class="collapsible__heading footer__heading">Domains</h2>
                    <svg class="icon icon--white collapsible__chevron">
                        <use href="images/sprite.svg#chevron"></use>
                    </svg>
                </div>
                <div class="collapsible__content">
                    <ul class="list">
                        <li><a href="#">Domain Checker</a></li>
                        <li><a href="#">Domain Transfer</a></li>
                        <li><a href="#">Free Domain</a></li>
                    </ul>
                </div>
            </section>
            <div class="footer__brand">
                <img src="images/logo.svg" alt="" />
                <p class="footer__copyright">Copyright 2020 Mosh Hamedani</p>
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
