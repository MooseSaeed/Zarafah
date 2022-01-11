<x-mianLayout>



    {{-- Filtering --}}

    <section id="filtering" data-aos="fade-up" class="block container block-domain">

        {{-- Search --}}

        <div class="input-group">

            <form method="GET" action="#">

                @if (request('category'))

                    <input type="hidden" name="category" value="{{ request('category') }}">

                @endif

                <input type="text" class="input" name="search" placeholder="What are you looking for?"
                    value="{{ request('search') }}" />
                <button class="btn btn--accent">
                    <svg class="icon icon--white">
                        <use href="/images/sprite.svg#search"></use>
                    </svg>Search
                </button>
            </form>

        </div>
    </section>


</x-mianLayout>
