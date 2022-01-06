<div class="collapsible__header categories__header">
    <button class="btn categories--btn btn--accent">
        <svg class="icon icon--white collapsible__chevron">
            <use href="/images/sprite.svg#chevron"></use>
        </svg>
        {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}
    </button>
</div>

<div class="collapsible__content categories--items">


    <a class="category--links" href="/" style="{{ request('category') ? '' : 'background-color: #ff4f23' }}">All</a>

    @foreach ($categories as $category)

        <a class="category--links"
            href="?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}"
            style="{{ isset($currentCategory) && $currentCategory->is($category) ? 'background-color: #ff4f23' : '' }}">{{ ucwords($category->name) }}</a>

    @endforeach

</div>
