@extends('visitors.layouts.visitors',['title' => 'HOME'])
@section('content')

<div class="header-height"></div>

<section class="slider-section">
    <div class="slider-wrapper">
        <div id="main-slider" class="nivoSlider">
            <img src="{{ config('app.url') }}\img\mainpic1.jpg" alt="" title="#slider-caption-1" />
            <img src="{{ config('app.url') }}\img\mainpic2.jpg" alt="" title="#slider-caption-2" />
            <img src="{{ config('app.url') }}\img\mainpic3.jpg" alt="" title="#slider-caption-2" />
        </div><!-- /#main-slider -->

        <h2 class="align-center">Mahatma Gandhi said, “The future depends on what we do in the present.”</h2>

        <section id="counter" class="counter-section">
            <div class="container">
                <ul class="row counters">
                    <li class="col sm-padding">
                        <div class="counter-content">
                            <i class="ti-book"></i>
                            <h3 class="counter">5000</h3>
                            <h4 class="text-black">Books found homes in existing and new libraries</h4>
                        </div>
                    </li>
                    <li class="col sm-padding">
                        <div class="counter-content">
                            <i class="ti-pencil"></i>
                            <h3 class="counter">10000</h3>
                            <h4 class="text-black">Students Impacted</h4>
                        </div>
                    </li>
                    <li class="col sm-padding">
                        <div class="counter-content">
                            <i class="ti-face-smile"></i>
                            <h3 class="counter">22</h3>
                            <h4 class="text-black">Liabries Helped</h4>
                        </div>
                    </li>
                    <li class="col sm-padding">
                        <div class="counter-content">
                            <i class="ti-user"></i>
                            <h3 class="counter">28</h3>
                            <h4 class="text-black">Volunteers Involved</h4>
                        </div>
                    </li>
                    <li class="col sm-padding">
                        <div class="counter-content">
                            <i class="ti-comments"></i>
                            <h3 class="counter">5</h3>
                            <h4 class="text-black">NGO's Supported</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        {{-- <div id="slider-caption-1" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                            <h1 class="wow cssanimation leFadeInRight sequence">Better Life for People</h1>
                            <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you
                                may be the one who needs helping! <br>Forget what you can get and see what you can give.
                            </p>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join
                                With Us</a>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /#slider-caption-1 -->
        <div id="slider-caption-2" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                                Together we <br>can make a Difference</h1>
                            <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">Help today because tomorrow you
                                may be the one who needs helping! <br>Forget what you can get and see what you can give.
                            </p>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join
                                With Us</a>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /#slider-caption-2 -->
        <div id="slider-caption-3" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                            <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">Give a little.
                                Change a lot.</h1>
                            <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you
                                may be the one who needs helping! <br>Forget what you can get and see what you can give.
                            </p>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join
                                With Us</a>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /#slider-caption-3 -->
    </div>
</section><!-- /#slider-Section --> --}}
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
{{-- <section class="events-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Upcoming Events</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div id="event-carousel" class="events-wrap owl-Carousel">
            <div class="events-item">
                <div class="event-thumb">
                    <img src="img/events-1.jpg" alt="events">
                </div>
                <div class="event-details">
                    <h3>Let's talk about the poor children.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-1 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="img/events-2.jpg" alt="events">
                </div>
                <div class="event-details">
                    <h3>Insure clean water to everyone in Africa.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-2 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="img/events-3.jpg" alt="events">
                </div>
                <div class="event-details">
                    <h3>Nepal Earthquake Clean Water Initiative.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-3 -->
        </div>
    </div>
</section> --}}
<br>


<section style="background-color: #edf1ff;">
    <div class="">
        <div class="container">
            {{-- <h1 class="projo">Our Projects</h1> --}}
            <div class="row">
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="img/icon-1.png" alt="prmo icon">
                        <h3>Our Projects</h3>
                        <p>In many parts of the country, even today, there is a paucity of good reading material for
                            young children as well as
                            adults. For local language schools in particular, there is a dearth of good books,
                            especially in English. We have
                            ensured that our volunteers, through their small contributions, have brought about a huge
                            difference by stocking up
                            almost non-existent libraries.
                            Contact us to donate your pre-loved books.</p>
                        {{-- <a href="#">Read More</a> --}}
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="img/icon-2.png" alt="prmo icon">
                        <h3>Storytelling, puzzles and quizzes workshops</h3>
                        <p>Our volunteers conduct several storytelling, quizzes and puzzles workshops for the students
                            from the various NGOs we
                            volunteer with. Our sessions are conducted across various age groups, on both online and
                            offline platforms.
                            Volunteer with us and get involved!</p>
                        {{-- <a href="#">Read More</a> --}}
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="img/icon-3.png" alt="prmo icon">
                        <h3>Become A Volunteer</h3>
                        <p>We are working with Sarvam Shakti NGO that works with marginalized girls in slums to provide
                            them life skills and jobs
                            such as teaching interns. You could donate watches, hand bags, formal and semi formal
                            clothes for girls who are working
                            as interns in schools. You could also donate dance costumes and costume jewelry for girls
                            who are learning classical
                            dance.</p>
                        {{-- <a href="#">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Promo Section -->


{{-- <section class="causes-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Recent Causes</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> </p>
        </div><!-- /Section Heading -->
        <div class="causes-wrap row">
            <div class="col-md-4 xs-padding">
                <div class="causes-content">
                    <div class="causes-thumb">
                        <img src="img/causes-1.jpg" alt="causes">
                        <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"><span
                                    class="wow cssanimation fadeInLeft">25%</span></div>
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
            <div class="col-md-4 xs-padding">
                <div class="causes-content">
                    <div class="causes-thumb">
                        <img src="img/causes-2.jpg" alt="causes">
                        <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"><span
                                    class="wow cssanimation fadeInLeft">45%</span></div>
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
            <div class="col-md-4 xs-padding">
                <div class="causes-content">
                    <div class="causes-thumb">
                        <img src="img/causes-3.jpg" alt="causes">
                        <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"><span
                                    class="wow cssanimation fadeInLeft">75%</span></div>
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
        </div>
    </div>
</section><!-- /Causes Section --> --}}

{{-- <section class="about-section bd-bottom shape circle padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 xs-padding">
                <div class="profile-wrap">
                    <img class="profile" src="img/profile.jpg" alt="profile">
                    <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                        in the lives of the poor, the abused and the helpless.</p>
                    <img src="img/sign.png" alt="sign">
                </div>
            </div>
            <div class="col-md-8 xs-padding">
                <div class="about-wrap row">
                    <div class="col-md-6 xs-padding">
                        <img src="img/history.jpg" alt="about-thumb">
                        <h3>Our History</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                            make in the lives of the poor.</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <img src="img/mission.jpg" alt="about-thumb">
                        <h3>Our Mission</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                            make in the lives of the poor.</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Causes Section --> --}}

{{-- <section class="campaigns-section bd-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 xs-padding">
                <div class="campaigns-wrap">
                    <h4>Featured Campaigns</h4>
                    <h2>Featured project to built a School.</h2>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                        in the lives of the poor, the abused and the helpless.</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">35%</span>
                        </div>
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
                        <a class="img-popup" data-autoplay="true" data-vbtype="video"
                            href="https://www.youtube.com/watch?v=_IlLwfC2dNc"><i class="ti-control-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Featured Campaigns Section --> --}}
{{-- <div class="container h-100">
    <div class="row mx-auto h-100">
        <div id="gallery" class="carousel slide w-100 align-self-center" data-ride="carousel">
            <div class="carousel-inner mx-auto w-90" role="listbox" data-toggle="modal" data-target="#lightbox">
                <div class="carousel-item">
                    <div class="col-lg-5 col-md-4">
                        <img class="img-fluid" src="http://placehold.it/1400x920?text=1" data-target="#lightbox-gallery"
                            data-slide-to="0">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-5 col-md-4">
                        <img class="img-fluid" src="http://placehold.it/1400x920?text=2" data-target="#lightbox-gallery"
                            data-slide-to="1">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-5 col-md-4">
                        <img class="img-fluid" src="http://placehold.it/1400x920?text=3" data-target="#lightbox-gallery"
                            data-slide-to="2">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-5 col-md-4">
                        <img class="img-fluid" src="http://placehold.it/1400x920?text=4" data-target="#lightbox-gallery"
                            data-slide-to="3">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-5 col-md-4">
                        <img class="img-fluid" src="http://placehold.it/1400x920?text=5" data-target="#lightbox-gallery"
                            data-slide-to="4">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-5 col-md-4">
                        <img class="img-fluid" src="http://placehold.it/1400x920?text=6" data-target="#lightbox-gallery"
                            data-slide-to="5">
                    </div>
                </div>
            </div>
            <div class="w-100">
                <a class="carousel-control-prev w-auto" href="#gallery" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#gallery" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="modal fade h-100" id="lightbox" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/101123/close.png" />
                </button>
            </div>
            <div class="modal-body">
                <div id="lightbox-gallery" class="carousel slide" data-ride="carousel" data-interval="false">

                    <ol class="carousel-indicators">
                        <li data-target="#lightbox-gallery" data-slide-to="0"></li>
                        <li data-target="#lightbox-gallery" data-slide-to="1"></li>
                        <li data-target="#lightbox-gallery" data-slide-to="2"></li>
                        <li data-target="#lightbox-gallery" data-slide-to="3"></li>
                        <li data-target="#lightbox-gallery" data-slide-to="4"></li>
                        <li data-target="#lightbox-gallery" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://placehold.it/1400x920?text=1">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://placehold.it/1400x920?text=2">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://placehold.it/1400x920?text=3">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://placehold.it/1400x920?text=4">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://placehold.it/1400x920?text=5">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://placehold.it/1400x920?text=6">
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#lightbox-gallery" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#lightbox-gallery" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div> --}}
{{-- <section class="team-section bg-grey bd-bottom circle shape padding">
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
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                        in the lives of the poor, the abused and the helpless.</p>
                    <ul class="check-list">
                        <li><i class="fa fa-check"></i>We are friendly to each other.</li>
                        <li><i class="fa fa-check"></i>If you join with us,We will give you free training.</li>
                        <li><i class="fa fa-check"></i>Its an opportunity to help poor children.</li>
                        <li><i class="fa fa-check"></i>No goal requirements.</li>
                        <li><i class="fa fa-check"></i>Joining is tottaly free. We dont need any money from you.</li>
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
{{--
<section class="events-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Upcoming Events</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div id="event-carousel" class="events-wrap owl-Carousel">
            <div class="events-item">
                <div class="event-thumb">
                    <img src="img/events-1.jpg" alt="events">
                </div>
                <div class="event-details">
                    <h3>Let's talk about the poor children.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-1 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="img/events-2.jpg" alt="events">
                </div>
                <div class="event-details">
                    <h3>Insure clean water to everyone in Africa.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-2 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="img/events-3.jpg" alt="events">
                </div>
                <div class="event-details">
                    <h3>Nepal Earthquake Clean Water Initiative.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-3 -->
        </div>
    </div>
</section><!-- Events Section --> --}}
{{--
<section class="testimonial-section bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>What People Say</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in
                    the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                    <img src="img/team-1.jpg" alt="profile">
                    <h4>Jonathan Smith <span>Marketer</span></h4>
                </div>
            </div>
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in
                    the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                    <img src="img/team-2.jpg" alt="profile">
                    <h4>Angelina Rose <span>Designer</span></h4>
                </div>
            </div>
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in
                    the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                    <img src="img/team-3.jpg" alt="profile">
                    <h4>Taylor Swift <span>Developer</span></h4>
                </div>
            </div>
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in
                    the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                    <img src="img/team-4.jpg" alt="profile">
                    <h4>Michel Brown <span>Programer</span></h4>
                </div>
            </div>
        </div>
    </div>
</section><!-- Testimonial Section --> --}}

{{-- <section class="blog-section bg-grey bd-bottom padding">
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
                                <p>The secret to happiness lies in helping others. Never underestimate the difference
                                    YOU can make in the lives of the poor, the abused and the helpless.</p>
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
                                <p>The secret to happiness lies in helping others. Never underestimate the difference
                                    YOU can make in the lives of the poor, the abused and the helpless.</p>
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
                                <p>The secret to happiness lies in helping others. Never underestimate the difference
                                    YOU can make in the lives of the poor, the abused and the helpless.</p>
                                <a href="#" class="post-meta">Read More</a>
                            </div>
                        </div>
                    </div><!-- Post 3 -->
                </div>
            </div><!-- Blog Posts -->
        </div>
    </div>
</section><!-- Blog Section --> --}}

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
{{-- <section class="events-section bg-grey bd-bottom padding">
    <h1 class="align-center">Our Gallery</h1>
    <br>
    <div class="container text-center my-3"> --}}
        {{-- <h2 class="font-weight-light">Letter From</h2> --}}
        {{-- <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\maingallery2.jpeg">
                            </div> --}}
                            {{-- <h2 style="background-color: #a7baff">Lotus Petal</h2> --}}
                            {{--
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\galleryimg7.JPG">
                            </div> --}}
                            {{-- <h2 style="background-color: #a7baff">Sarv Hitey</h2> --}}
                            {{--
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\maingallery3.JPG">
                            </div> --}}
                            {{-- <h2 style="background-color: #a7baff">Andhara Society</h2> --}}
                            {{--
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\abhit.jpg">
                            </div> --}}
                            {{-- <h2 style="background-color: #a7baff">Har Nand Rai & Chhotu Ram Rathee</h2> --}}
                            {{--
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="{{ config('app.url') }}\img\galleryimg10.jpg"">
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class=" carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="http://placehold.it/380?text=6">
                                    </div>
                                </div>
                            </div> --}}
                            {{--
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
                </div> --}}
                {{-- <h5 class="mt-2">Advances one slide at a time</h5> --}}
                {{--
            </div>
</section> --}}

<section class="testimonial-section bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Our Gallery</h2>
            <span class="heading-border"></span>

        </div><!-- /Section Heading -->
        <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
            <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\maingallery2.jpeg">
                </div>
            </div>
            <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\galleryimg7.JPG">
                </div>
            </div>
            <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\abhit.jpg">
                </div>
            </div>
            <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\galleryimg10.jpg">
                </div>
            </div>
            <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\maingallery3.JPG">
                </div>
            </div>
            {{-- <div class="testimonial-item">
                <div class="card card-body">
                    <img class="img-fluid" src="{{ config('app.url') }}\img\lotus.1.png">
                </div>
            </div> --}}
        </div>
    </div>
</section>

<section class="contact-section padding" style="background-color: #edf1ff;">
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 xs-padding">
                <div class="contact-info">
                    <h3>Donate books</h3>
                    <p>Here is a list of books provided by Lotus Petal Foundation required for their library. You may
                        buy these books or donate
                        funds to purchase them.</p>
                    <h3>Donate other resources</h3>
                    <p>Donate dance costumes, formal attire – Indian and Western, watches, costume jewelry.</p>
                    <h3>Volunteer</h3>
                    <p>Become a volunteer to help us collect resources, have them delivered to the right recipients,
                        help in cataloguing books
                        at libraries.</p>
                    {{-- <ul>
                        <li><i class="ti-location-pin"></i> 315 West 33rd Street New York, NY 10001</li>
                        <li><i class="ti-mobile"></i> +1 212 425 8617, +1 212 425 8533</li>
                        <li><i class="ti-email"></i> Youremail@companyname.com</li>
                    </ul> --}}
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="contact-form">
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <h3>Let's Connect With Us !</h3>
                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
                    <form action="contact" method="post" class="form-horizontal">@csrf
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                                    required>
                                @error('name')
                                <div class="text-danger">{{ $mesaage }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                    required>
                                @error('email')
                                <div class="text-danger">{{ $mesaage }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message"
                                    placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn" type="submit">Send Message</button>
                            </div>
                        </div>

                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>

                </div>
            </div>

            <div class="text-center w-100 mt-3">
                <h3 class="p-1">It takes a pencil to write a story, a book to open minds... and a<br> small donation to
                    make a
                    difference!</h3>
            </div>
        </div>
    </div>
</section><!-- /Contact Section -->
@endsection
