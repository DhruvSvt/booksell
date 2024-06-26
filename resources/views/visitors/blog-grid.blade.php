<@extends('visitors.layouts.visitors',['title' => 'Blog-Grid'])
@section('content')

        <div class="header-height"></div>

        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Blog Grid</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->

        <section class="blog-section bg-grey padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 xs-padding">
                        <div class="blog-items grid-list row">
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-1.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Standard gallery post</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference </p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 1 -->
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-2.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Blog post with couple photos</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference </p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 2 -->
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-3.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Standard gallery post</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference </p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 3 -->
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-4.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Blog post with couple photos</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference </p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 4 -->
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-5.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Standard gallery post</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference </p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 5 -->
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-6.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                             <p>The secret to happiness lies in helping others. Never underestimate the difference </p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 6 -->
                        </div>
                        <ul class="pagination_wrap align-center mt-30">
                            <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                        </ul><!-- Pagination -->
                    </div><!-- Blog Posts -->
                </div>
            </div>
        </section><!-- /Blog Section -->

         <h3><a href="#">Blog post with couple photos</a></h3>
@endsection
