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

        <a href="/" style="{{ request()->is('/') ? 'background-color: #ff4f23' : '' }}">All</a>

        @foreach ($categories as $category)

            <a href="/?category={{ $category->slug }}"
                style="{{ isset($currentCategory) && $currentCategory->is($category) ? 'background-color: #ff4f23' : '' }}">{{ ucwords($category->name) }}</a>

        @endforeach
    </div>
</div>
