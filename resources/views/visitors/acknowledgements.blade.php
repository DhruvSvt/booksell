@extends('visitors.layouts.visitors',['title' => 'Acknowledgements'])
@section('content')

        <div class="header-height"></div>

        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Upcoming Events</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Events</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->

       <section class="events-section bg-grey bd-bottom padding">
           <div class="container">
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
        </section><!-- Events Section -->

        <section class="cta-section d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                       <div class="cta-content">
                           <h2>Ready to Join With Us?</h2>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference <br> the abused and the helpless.</p>
                       </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center text-right">
                        <a href="#" class="default-btn">Contact With Us</a>
                    </div>
               </div>
            </div>
        </section><!-- Call To Action Section -->

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

        <div class="sponsor-section bd-bottom">
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
        </div><!-- ./Sponsor Section -->

@endsection
