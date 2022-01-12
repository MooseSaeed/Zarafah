<div class="collapsible__header categories__header">
    <button class="btn categories--btn btn--accent">
        <svg class="icon icon--white collapsible__chevron">
            <use href="/images/sprite.svg#chevron"></use>
        </svg>
        {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}
    </button>
</div>

<ul style="{{ $categories->count() > 3
    ? 'grid-template-rows: repeat(2, 1fr); 
    grid-template-columns: repeat(3, 1fr);'
    : '' }}"
    class="list list--inline collapsible__content categories--items">

    <li class="list__item">
        <a class="category--links" href="/"
            style="{{ request('category') ? '' : 'background-color: #ff4f23' }}">All</a>
    </li>



    @foreach ($categories as $category)

        <li class="list__item"><a class="category--links"
                href="?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}"
                style="{{ isset($currentCategory) && $currentCategory->is($category) ? 'background-color: #ff4f23' : '' }}">{{ ucwords($category->name) }}</a>
        </li>


    @endforeach

</ul>
