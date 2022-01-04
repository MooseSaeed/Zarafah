<x-mianLayout>


    @include('posts._header')

    <section class="block container">
        <header class="block__header">
            <h2>Our Products</h2>
            <p>
                Select the product you like and get it right away!
            </p>
        </header>


        @foreach ($posts as $post)
            <article class="grid grid--1x2 feature">
                <div class="feature__content" data-aos="fade-right">
                    <span class="icon-container">
                        <svg class="icon icon--primary">
                            <use href="images/sprite.svg#easy"></use>
                        </svg>
                    </span>
                    <a href="/posts/{{ $post->slug }}">
                        <h3 class="feature__heading">{{ $post->title }}</h3>
                    </a>
                    <p>
                        {{ $post->excerpt }}
                    </p>
                    <a href="/posts/{{ $post->slug }}" class="link-arrow">Learn More</a>
                </div>
                <picture data-aos="zoom-in-left">
                    <source type="image/webp" srcset="images/easy.webp 1x, images/easy@2x.webp 2x" />
                    <source type="image/jpg" srcset="images/easy.jpg 1x, images/easy@2x.jpg 2x" />
                    <img class="feature__image" src="images/easy@2x.jpg" alt="" />
                </picture>
            </article>
        @endforeach



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

</x-mianLayout>
