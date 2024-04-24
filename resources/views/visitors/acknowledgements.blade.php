@extends('visitors.layouts.visitors',['title' => 'Acknowledgements'])
@section('content')

<div class="header-height"></div>

<div class="pager-header">
    <div class="container">
        <div class="page-content">
            {{-- <h2>Upcoming Events</h2>
            <p>Help today because tomorrow you may be the one who <br>needs more helping!</p> --}}
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">ACKNOWLEDGMENTS</li>
            </ol>
        </div>
    </div>
</div><!-- /Page Header -->

<section class="events-section bg-grey bd-bottom padding">
    <h1 class="align-center">Letters From NGO's
        <hr>
    </h1>
    <br>
    <div class="container text-center my-3">
        {{-- <h2 class="font-weight-light">Letter From</h2> --}}
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\lotusngo.png">
                            </div>
                            <h2 style="background-color: #a7baff">Lotus Petal</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="img\Sarvhiteyngo.webp">
                            </div>
                            <h2 style="background-color: #a7baff">Sarv Hitey</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\andhara1.jpeg">
                            </div>
                            <h2 style="background-color: #a7baff">Andhara Society</h2>
                        </div>
                    </div>
                    {{-- <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\harnand.png">
                            </div>
                            <h2 style="background-color: #a7baff">Har Nand Rai & Chhotu Ram Rathee</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="http://placehold.it/380?text=5">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="http://placehold.it/380?text=6">
                            </div>
                        </div>
                    </div>--}}
                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"
                        aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle"
                        aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        {{-- <h5 class="mt-2">Advances one slide at a time</h5> --}}
    </div>
</section>
{{-- <section class="events-section bg-grey bd-bottom padding">
    <h1 class="align-center">Acknowledgement letters from NGOs</h1>
    <br>
    <div class="container text-center my-3">
        {{-- <h2 class="font-weight-light">Letter From</h2> --}}
        {{-- <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\harngo.png">
                            </div> --}}
                            {{-- <h2 style="background-color: #a7baff">Lotus Petal</h2> --}}
                        {{-- </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\lotus.1.png">
                            </div> --}}
                            {{-- <h2 style="background-color: #a7baff">Sarv Hitey</h2> --}}
                        {{-- </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\ngosarv.png">
                            </div> --}}
                            {{-- <h2 style="background-color: #a7baff">Andhara Society</h2> --}}
                        {{-- </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\andhrango.png">
                            </div> --}}
                            {{-- <h2 style="background-color: #a7baff">Andhara Society</h2> --}}
                        {{-- </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\lotusbook.png">
                            </div>
                            {{-- <h2 style="background-color: #a7baff">Andhara Society</h2> --}}
                        {{-- </div>
                    </div> --}}
                    {{-- <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\harnand.png">
                            </div>
                            <h2 style="background-color: #a7baff">Har Nand Rai & Chhotu Ram Rathee</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="http://placehold.it/380?text=5">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="http://placehold.it/380?text=6">
                            </div>
                        </div>
                    </div> --}}
                {{-- </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"
                        aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle"
                        aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        {{-- <h5 class="mt-2">Advances one slide at a time</h5> --}}
    {{-- </div>
</section> --}}



<section class="testimonial-section bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Acknowledgement letters from NGOs</h2>
            <span class="heading-border"></span>

        </div><!-- /Section Heading -->
        <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
            <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\lotus.1.png">
                </div>
            </div>
            <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\harngo.png">
                </div>
            </div>
            <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\ngosarv.png">
                </div>
            </div>
            <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\andhrango.png">
                </div>
            </div>
            {{-- <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\ngoletter7.png">
                </div>
            </div> --}}
            {{-- <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\lotus.1.png">
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection
