<x-mianLayout>

    <section class="block" data-aos="zoom-in">

        <div class="container">
            <div class="card testimonial">
                <div class="grid grid--1x2">
                    <div class="testimonial__image">
                        <img src="/images/testimonial.jpg" alt="A happy, smiling customer" />
                        <span class="icon-container icon-container--accent">
                            <svg class="icon icon--white icon--small">
                                <use href="/images/sprite.svg#quotes"></use>
                            </svg>
                        </span>
                    </div>
                    <blockquote class="quote">
                        <h2 class="feature__heading">{{ $post->title }}</h2>
                        <p>Published <time>{{ $post->created_at->diffForHumans() }}</time>
                            in
                            <span class="badge badge--secondary badge--small"><a
                                    href="/categories/{{ $post->category->slug }}">
                                    {{ $post->category->name }}
                                </a></span>
                        </p>

                        <p>
                            {{ $post->body }}
                        </p>
                        <footer>
                            <div class="media">
                                <div class="media__image">
                                    <svg class="icon icon--primary quote__line">
                                        <use href="/images/sprite.svg#line"></use>
                                    </svg>
                                </div>
                                <div class="media__body">
                                    <a href="/?author={{ $post->author->username }}">
                                        <h3 class="media__title quote__author">{{ $post->author->name }}</h3>
                                    </a>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

</x-mianLayout>
