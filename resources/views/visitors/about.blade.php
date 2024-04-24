@extends('visitors.layouts.visitors',['title' => 'About'])
@section('content')

<div class="header-height"></div>

<div class="pager-header">
    <div class="container">
        <div class="page-content">
            {{-- <h2>About Us</h2>
            <p>Help today because tomorrow you may be the one who <br>needs more helping!</p> --}}
            <nav aria-label="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- /Page Header -->


<section class="about-section bg-grey bd-bottom">
    <h2 class="align-center">About Us
        <hr>
    </h2>

    {{-- <div class="container"> --}}
        {{-- <div class="row about-wrap">
            <div class="col-md-6 xs-padding">
                <div class="about-image">
                    <img src="img/img3.jpg" alt="about image">
                </div>
            </div> --}}
            <div class="p-5 xs-padding">
                <div class="about-content">
                    {{-- <h2>You are definitely intrigued to <br> discover who we are.</h2> --}}
                    <p>Books & Beyond is an initiative to drive recycling and reuse of all kinds of resources related to
                        Education. The
                        initiative started off with collections of books for existing as well as new libraries being set
                        up by Education
                        societies and NGOs across the country, with a purpose to promote literacy, and the joy of
                        reading among disadvantaged
                        children. The books donations have come from students across schools. The initiative is now
                        extended to books for
                        adults, to help inculcate a reading habit across age groups. We encourage communities to give a
                        second life to their
                        books and bring knowledge and inspiration to those who need it most.<br>
                        <br>
                        We now help with several other resources required by schools run by NGOs – stationery,
                        notebooks, and even clothes,
                        handbags and footwear, for older kids working as interns in offices and schools. We continue to
                        participate in the “Joy
                        of Giving” events of corporates.
                    </p>
                    {{-- <a href="#" class="default-btn">More About Us</a> --}}
                    <br>
                    <h3>Books from multiple authors</h3>
                    <br>

                    <li>Encyclopedias, fiction, non-fiction, autobiograpies.</li><br>
                    <li>International Authors like Eric Carle, Thea Stilton, Geronimo Stilton, Dr Seuss, Eric Carle,
                        Julia Donaldson, Enid
                        Blyton, Roald Dahl, Anushka Ravishankar, and the Big Nate and Wimpy kid series, for younger
                        kids. Authors like Percy
                        Jackson, Arthur Conan Doyle, Michael Morpurgo, Anne Sewell, for high school students.</li><br>
                    <li>Indian - Amar Chitra Katha collections, Sudha Murthy, Ruskin Bond, Premchand.</li>

                </div>
            </div>
        </div>
    </div>
    <section class="events-section bg-grey bd-bottom padding">
        <div class="container text-center my-3">
            <h2 class="font-weight-light">Images of Books of Different Genres</h2>
            <br>
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-crousel" src="{{ config('app.url') }}\img\books1.jpeg">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-crousel" src="{{ config('app.url') }}\img\books2.jpeg">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-crousel" src="{{ config('app.url') }}\img\books3.jpeg">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-crousel" src="{{ config('app.url') }}\img\books4.jpeg">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-crousel" src="{{ config('app.url') }}\img\books5.jpeg">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-crousel" src="{{ config('app.url') }}\img\books7.jpeg">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-crousel" src="{{ config('app.url') }}\img\books9.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-crousel" src="{{ config('app.url') }}\img\books8.jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle about-crousal-arrow " aria-hidden="true"
                style="margin-top: 49rem;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle about-crousal-arrow" aria-hidden="true"
                style="margin-top: 49rem;"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </section>

    <!-- /About Section -->

    {{-- <section class="testimonial-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Books of Different Genres</h2>
                <span class="heading-border"></span>

            </div><!-- /Section Heading -->
            <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                <div class="testimonial-item">
                    <div class="card card-body">
                        <img class="img-fluid" src="{{ config('app.url') }}\img\books1.jpeg">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="card card-body">
                        <img class="img-fluid" src="{{ config('app.url') }}\img\books2.jpeg">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="card card-body">
                        <img class="img-fluid" src="{{ config('app.url') }}\img\books3.jpeg">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="card card-body">
                        <img class="img-fluid" src="{{ config('app.url') }}\img\books4.jpeg">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="card card-body">
                        <img class="img-fluid" src="{{ config('app.url') }}\img\books5.jpeg">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="card card-body">
                        <img class="img-fluid" src="{{ config('app.url') }}\img\books7.jpeg">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="card card-body">
                        <img class="img-fluid" src="{{ config('app.url') }}\img\books9.jpg">
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="card card-body">
                        <img class="img-fluid" src="{{ config('app.url') }}\img\books8.jpeg">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{--
    <section class="team-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Meet Out Volunteers</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div class="team-wrapper row">
                <div class="col-lg-6 sm-padding">
                    <div class="team-wrap row">
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-1.jpg" alt="team">
                                <div class="hover">
                                    <h3>Jonathan Smith <span>Communicator</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-1 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-2.jpg" alt="team">
                                <div class="hover">
                                    <h3>Angelina Rose <span>Certified Reader</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-2 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-3.jpg" alt="team">
                                <div class="hover">
                                    <h3>Taylor Swift <span>Event Creator</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-3 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-4.jpg" alt="team">
                                <div class="hover">
                                    <h3>Michel Brown <span>Internet Specialist</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-4 -->
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="team-content">
                        <h2>Become a Volunteer?</h2>
                        <h3>Join your hand with us for a better life and beautiful future.</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                            make
                            in the lives of the poor, the abused and the helpless.</p>
                        <ul class="check-list">
                            <li><i class="fa fa-check"></i>We are friendly to each other.</li>
                            <li><i class="fa fa-check"></i>If you join with us,We will give you free training.</li>
                            <li><i class="fa fa-check"></i>Its an opportunity to help poor children.</li>
                            <li><i class="fa fa-check"></i>No goal requirements.</li>
                            <li><i class="fa fa-check"></i>Joining is tottaly free. We dont need any money from you.
                            </li>
                        </ul>
                        <a href="#" class="default-btn">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Team Section --> --}}

    {{-- <section id="counter" class="counter-section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-money"></i>
                        <h3 class="counter">85389</h3>
                        <h4 class="text-white">Money Donated</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-face-smile"></i>
                        <h3 class="counter">10693</h3>
                        <h4 class="text-white">Volunteer Around The World</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-user"></i>
                        <h3 class="counter">50177</h3>
                        <h4 class="text-white">People Impacted</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-comments"></i>
                        <h3 class="counter">669</h3>
                        <h4 class="text-white">Positive Feedbacks</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Counter Section --> --}}

    {{-- <div class="sponsor-section bd-bottom">
        <div class="container">
            <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                <li class="sponsor-item">
                    <img src="img/books1.jpeg" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-2.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-3.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-4.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-5.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-6.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-7.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-8.png" alt="sponsor-image">
                </li>
            </ul>
        </div>
    </div><!-- ./Sponsor Section --> --}}
    {{-- <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Images of books of different genres </h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img\books1.jpeg">
                                            <div class="card-body">
                                                {{-- <h4 class="card-title"></h4> --}}
                                                {{-- <p class="card-text">With supporting text below as a natural
                                                    lead-in to
                                                    additional content.</p> --}}
                                                {{--
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img\books 2.jpeg">
                                            <div class="card-body"> --}}
                                                {{-- <h4 class="card-title">Special title treatment</h4> --}}
                                                {{-- <p class="card-text">With supporting text below as a natural
                                                    lead-in to
                                                    additional content.</p> --}}

                                                {{-- </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img\books 3.jpeg">
                                            <div class="card-body"> --}}
                                                {{-- <h4 class="card-title">Special title treatment</h4> --}}
                                                {{-- <p class="card-text">With supporting text below as a natural
                                                    lead-in to
                                                    additional content.</p> --}}

                                                {{-- </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4> --}}
                                                {{-- <p class="card-text">With supporting text below as a natural
                                                    lead-in to
                                                    additional content.</p> --}}

                                                {{--
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4> --}}
                                                {{-- <p class="card-text">With supporting text below as a natural
                                                    lead-in to
                                                    additional content.</p> --}}

                                                {{--
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4> --}}
                                                {{-- <p class="card-text">With supporting text below as a natural
                                                    lead-in to
                                                    additional content.</p> --}}

                                                {{--
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4> --}}
                                                {{-- <p class="card-text">With supporting text below as a natural
                                                    lead-in to
                                                    additional content.</p> --}}
                                                {{--
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4> --}}
                                                {{-- <p class="card-text">With supporting text below as a natural
                                                    lead-in to
                                                    additional content.</p> --}}

                                                {{--
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                            <div class="card-body"> --}}
                                                {{-- <h4 class="card-title">Special title treatment</h4> --}}
                                                {{-- <p class="card-text">With supporting text below as a natural
                                                    lead-in to
                                                    additional content.</p> --}}
                                                {{-- </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

</section>
@endsection
