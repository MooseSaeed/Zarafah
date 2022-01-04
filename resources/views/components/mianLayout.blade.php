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
    <link rel="stylesheet" href="/normalize.css" />
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    {{-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500
    underline">Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif
    @endauth
    </div>
    @endif

    <header>
        <nav class="nav collapsible">
            <a class="nav__brand" href="/"><img src="/images/logo.svg" alt="" /></a>
            <svg class="icon icon--white nav__toggler">
                <use href="/images/sprite.svg#menu"></use>
            </svg>
            <ul class="list nav__list collapsible__content">
                <li class="nav__item"><a href="#">Hosting</a></li>
                <li class="nav__item"><a href="#">VPS</a></li>
                <li class="nav__item"><a href="#">Domain</a></li>
                <li class="nav__item"><a href="#">Pricing</a></li>
            </ul>
        </nav>
    </header> --}}

    {{ $slot }}

    <footer class="block block--yellow footer">
        <div class="container grid footer__sections">
            <section class="collapsible footer__section">
                <div class="collapsible__header">
                    <h2 class="collapsible__heading footer__heading">Company</h2>
                    <svg class="icon icon--white collapsible__chevron">
                        <use href="/images/sprite.svg#chevron"></use>
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
                        <use href="/images/sprite.svg#chevron"></use>
                    </svg>
                </div>
                <div class="collapsible__content">
                    <ul class="list">
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </section>
            <div class="footer__brand">
                <img src="/images/logo.svg" alt="" />
                <p class="footer__copyright">Copyright 2022 Mostafa Said</p>
            </div>
        </div>
    </footer>
    <script src="/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>