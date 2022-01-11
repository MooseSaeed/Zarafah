<x-mianLayout>

    @include('posts._header')

    <section class="block container">

        @if ($posts->count())

            <header class="block__header">
                <h2>Our Products</h2>
                <p>
                    Select the product you like and get it right away!
                </p>

                {{-- Categories --}}

                <section class="collapsible categories--dropdown">

                    <x-category-dropdown />

                </section>

            </header>

            @foreach ($posts as $post)
                <x-post-card :post=$post />
            @endforeach

        @else

            <header class="block__header">
                <p>
                    No products matches your search, please submit a request for a customized product.
                </p>
            </header>
        @endif

    </section>


    <div id="newsletter" class="container">
        <div class="callout callout--primary callout-signup">
            <div class="grid grid--1x2">
                <div class="callout__content">
                    <h2 class="callout__heading">Subscribe for Newsletter</h2>
                    <p>
                        Subscribe for our Newsletter to recieve our latest offers and newest products.
                    </p>
                </div>

                <form method="POST" action="/newsletter">
                    @csrf

                    @error('email')
                        <p style="font-size: 1rem; color:#fff; margin-top:0.5rem;">{{ $message }}</p>
                    @enderror

                    <input id="email" type="email" class="input newsletter-input" name="email"
                        placeholder="Write your E-Mail" />

                    <button type="submit" class="btn newsletter--btn">
                        Submit
                    </button>

                </form>

            </div>
        </div>
    </div>

</x-mianLayout>
