@props(['post'])

<article class="grid grid--1x2 feature">
    <div class="feature__content" data-aos="fade-right">
        <span class="icon-container">
            <svg class="icon icon--primary">
                <use href="/images/sprite.svg#easy"></use>
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
        <img class="feature__image" src="{{ asset('storage/' . $post->thumbnail) }}" alt="" />
    </picture>

</article>
