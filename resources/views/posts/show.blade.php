<x-mianLayout>

    <head>
        <link rel="stylesheet" href="/show-styles.css" />
    </head>

    <section class="block" data-aos="zoom-in">

        <div class="container">
            <div class="card testimonial">
                <div class="grid grid--1x2">
                    <div class="testimonial__image">
                        <img class="feature__image" src="{{ asset('storage/' . $post->thumbnail) }}" alt="" />
                        <span class="icon-container icon-container--post">
                            <img src="/images/T-ZarafahLogo.png" class="icon icon--white icon--small">
                            </img>
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


                            {{-- <div class="media">
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
            </div> --}}
                        </footer>
                    </blockquote>
                </div>

                <div class="block__header">
                    <h2>Order now</h2>
                    <p>You can order this item by simply filling the below form.</p>
                </div>

                <div class="from-container">
                    <form method="POST" action="/formorder">
                        @csrf

                        <div class="row">
                            <div class="col-25">
                                <label for="firstname">First Name</label>
                            </div>
                            <div class="col-75">
                                <input type="string" id="firstname" name="firstname" placeholder="Your first name.."
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="lastname">Last Name</label>
                            </div>
                            <div class="col-75">
                                <input type="string" id="lastname" name="lastname" placeholder="Your last name.."
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="fulladdress">Full Address</label>
                            </div>
                            <div class="col-75">
                                <input type="string" id="fulladdress" name="fulladdress"
                                    placeholder="Your full address.." required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="city">City</label>
                            </div>
                            <div class="col-75">
                                <input type="string" id="city" name="city" placeholder="Your city.." required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="phonenumber">Phone Number</label>
                            </div>
                            <div class="col-75">
                                <input type="number" id="phonenumber" name="phonenumber"
                                    placeholder="Your phone number.." required>
                            </div>
                        </div>

                        <input type="hidden" id="productname" name="productname" value="{{ $post->title }}" required>

                        <div class="row">
                            <input type="submit" value="Submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</x-mianLayout>
