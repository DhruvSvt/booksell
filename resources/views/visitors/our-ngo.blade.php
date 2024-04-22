@extends('visitors.layouts.visitors',['title' => 'OUR-NGO'])
@section('content')


        <div class="header-height"></div>

        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    {{-- <h2>Recent Causes</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p> --}}
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Our-NGO</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->

        {{-- <section class="causes-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="causes-wrap row">
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-1.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">25%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>First charity activity of this summer.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-1 -->
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-2.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">45%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Big charity: build school for poor children.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-2 -->
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-3.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">75%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Building clean-water system for rural poor.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-3 -->
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-1.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">25%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>First charity activity of this summer.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-4 -->
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-2.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">45%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Big charity: build school for poor children.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-5 -->
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-3.jpg" alt="causes">
                                <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">75%</span></div>
                                </div>
                           </div>
                            <div class="causes-details">
                                <h3>Building clean-water system for rural poor.</h3>
                                <p>Help today because tomorrow you may be the one who needs more helping!</p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                    <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-6 -->
                </div>
            </div>
        </section><!-- /Causes Section --> --}}
        <section class="about-section bg-grey bd-bottom padding">
            <h2 class="align-center">NGO's we work with us : </h2>

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
                            <p><b><li>Lotus Petal:</b> The Lotus Petal Charitable Foundation focuses on providing exemplary education, nutritious meals,
                            healthcare facilities and skill development to underprivileged children living in urban and semi-urban areas, through
                            their school at Dhunela, Haryana. We have helped build their new library from scratch, with a donation of more than 800
                            books.</li>
                            </p>

                            <p><b><li> Sarvahitey:</b> Sarvahitey is an NGO run by a large group of young adults coming together from different professions, working with
                            Corporate and Government institutions for their mission to provide employable skills to 10,000 students through their
                            Project 'Vidya Vistar', and set up 1000 libraries by end of 2025 through Project 'Paper Bridge’. With this NGO, we also
                            kickstarted our campaign for books for adults to encourage the reading habit across age groups. For Sarvahitey, our
                            volunteers have collected more than 1500 books for libraries across India, especially Kashmir and Manipur.</li>
                            </p>

                          <p><b><li>Andhra Education Society:</b> Andhra Education Society is a 75-year old Society founded to provide facilities for imparting
                            and promoting education of Telugu (a regional Indian language) among Telugu People living in Delhi. Now it provides
                            Telugu as well as English education in five schools in Delhi. Our team helped donate 500 books to the library of one of
                            the schools. We are also helping the librarian with recommendations on age-wise/ grade-wise books that the library
                            should house.</li></p>

                            <p><b><li>Har Nand Rai and Chhotu Ram Rathee Friendship Memorial Trust: </b>This is a family run Trust that has sent up schools for girls across rural areas of Haryana. In order to encourage these
                            girls to develop their reading skills in English, we have been regularly sharing age appropriate books to encourage
                            them.</li></p>

                            <p><b><li>Sarvam Foundation:</b>Sarvam Foundation is a well-known name in the Indian arts circles for promoting and perpetuating India's artistes and
                            art forms through innumerable creative events and collaborations. Sarvam Shakti, its non-profit organization for women,
                            dedicated to empowering women through education, healthcare, and skill trainings, supports 300 marginalized girls in 3
                            Indian states in various dance forms. We, at Books&Beyond, are helping them regularly to collected pre-loved dance
                            costumes and accessories. The NGO organizes for English speaking classes, and helps educated girls acquire jobs such as
                            teaching interns at schools. For the interns, Books & Beyond helps collect formal attire, Indian as well as Western,
                            watches, handbags etc.</li></p>

                        </div>
                    </div>
                </div>
            </div>
            <section class="events-section bg-grey bd-bottom padding">
                <h1 class="align-center">
       <section class="events-section bg-grey bd-bottom padding">
        <h1 class="align-center">Images of Adhit working with libraries/ Manipur libraries</h1>
        <br><div class="container text-center my-3">
            {{-- <h2 class="font-weight-light">Letter From</h2> --}}
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{ config('app.url') }}\img\andhra6.jpeg">
                                </div>
                                {{-- <h2 style="background-color: #a7baff">Lotus Petal</h2> --}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{ config('app.url') }}\img\andhra1.jpeg">
                                </div>
                                {{-- <h2 style="background-color: #a7baff">Sarv Hitey</h2> --}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{ config('app.url') }}\img\abhit.jpg">
                                </div>
                                {{-- <h2 style="background-color: #a7baff">Andhara Society</h2> --}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{ config('app.url') }}\img\arbit20.jpeg">
                                </div>
                                {{-- <h2 style="background-color: #a7baff">Har Nand Rai and Chhotu Ram Rathee <br>Friendship Memorial Trust</h2> --}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{ config('app.url') }}\img\arbit11.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{ config('app.url') }}\img\IMG_3871.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{ config('app.url') }}\img\IMG_3864.jpg">
                                </div>
                            </div>
                        </div>
<a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
</div>
{{-- <h5 class="mt-2">Advances one slide at a time</h5> --}}
</div>


                <br>
                {{-- <div class="container text-center my-3"> --}}
                    {{-- <h2 class="font-weight-light">Letter From</h2> --}}
                    {{-- <div class="row mx-auto my-auto">
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
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="{{ config('app.url') }}\img\harnand.png">
                                        </div>
                                        <h2 style="background-color: #a7baff">Har Nand Rai and Chhotu Ram Rathee <br>Friendship
                                            Memorial Trust</h2>
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
                                </div>
                            </div> --}}
            {{-- <section class="events-section bg-grey bd-bottom padding">


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
                                        {{-- <h2 style="background-color: bisque">Lotus Petal</h2> --}}
                                    {{-- </div>
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
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-crousel" src="{{ config('app.url') }}\img\books9.jpeg">
                                    </div>
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

        {{-- <section class="campaigns-section bd-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 xs-padding">
                        <div class="campaigns-wrap">
                            <h4>Featured Campaigns</h4>
                            <h2>Featured project to built a School.</h2>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">35%</span></div>
                            </div>
                            <div class="donation-box">
                                <h3><i class="ti-bar-chart"></i>Goal: $450000</h3>
                                <h3><i class="ti-thumb-up"></i>Raised: $55000</h3>
                            </div>
                            <a href="#" class="default-btn">Donate Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="video-wrap">
                            <img src="img/video.jpg" alt="video">
                            <div class="play">
                                <a class="img-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=_IlLwfC2dNc"><i class="ti-control-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Featured Campaigns Section --> --}}

        <section class="testimonial-section bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>What People Say</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div><!-- /Section Heading -->
                <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="img/team-1.jpg" alt="profile">
                            <h4>Jonathan Smith <span>Marketer</span></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="img/team-2.jpg" alt="profile">
                            <h4>Angelina Rose <span>Designer</span></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="img/team-3.jpg" alt="profile">
                            <h4>Taylor Swift <span>Developer</span></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="testi-footer">
                           <img src="img/team-4.jpg" alt="profile">
                            <h4>Michel Brown <span>Programer</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Testimonial Section -->

        <section class="blog-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Recent Stories</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div><!-- /Section Heading -->
                <div class="row">
                    <div class="col-lg-12 xs-padding">
                        <div class="blog-items grid-list row">
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/home-blog-1.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">The History of Donation Told</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 1 -->
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/home-blog-2.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">Help the Comunity</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 2 -->
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/home-blog-3.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">Charity Ever Rule the World?</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 3 -->
                        </div>
                    </div><!-- Blog Posts -->
                </div>
            </div>
        </section><!-- Blog Section -->

        {{-- <div class="sponsor-section bd-bottom">
            <div class="container">
                <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                    <li class="sponsor-item">
                        <img src="img/sponsor-1.png" alt="sponsor-image">
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

@endsection


