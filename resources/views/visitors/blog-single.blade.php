@extends('visitors.layouts.visitors',['title' => 'Blog-single'])
@section('content')

        <div class="header-height"></div>

        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Blog Single</h2>
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
                    <div class="col-lg-9 sm-padding">
                        <div class="blog-items single-post row">
                            <img src="img/post-1.jpg" alt="blog post">
                            <h2>Standard single blog post with image.</h2>
                            <div class="meta-info">
                                <span>
                                    <i class="ti-user"></i> Written By <a href="#">David Cameroon</a>
                                </span>
                                <span>
                                    <i class="ti-bookmark"></i> Tagged As <a href="#">Wordpress Development</a>
                                </span>
                            </div><!-- Meta Info -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only centuries, but also the electronic more typesetting, remaining essentially unchanged.Nullam id dolor ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.This time is more Cras justo dapibus ac facilisis not only centuriemen, business type but also the in typesetting industry.</p>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Nullam id dolor ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                            <div class="share-wrap">
                                <h4>Share This Article</h4>
                                <ul class="share-icon">
                                    <li><a href="#"><i class="ti-facebook"></i> Facebook</a></li>
                                    <li><a href="#"><i class="ti-twitter"></i> Twitter</a></li>
                                    <li><a href="#"><i class="ti-google"></i> Google+</a></li>
                                    <li><a href="#"><i class="ti-instagram"></i> Instagram</a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i> Linkedin</a></li>
                                </ul>
                            </div><!-- Share Wrap -->

                            <div class="comments-wrapper">
                                <h4>There are 4 comments</h4>
                                <ul id="comments-list" class="comments-list">
                                    <li>
                                        <div class="comment-main-level">
                                            <!-- Avatar -->
                                            <div class="comment-avatar"> <img src="img/comment-1.jpg" alt="comment"> </div>
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                                                    <span>hace 20 minutos</span>
                                                    <i class="fa fa-reply"></i>
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Respuestas de los comentarios -->
                                        <ul class="comments-list reply-list">
                                            <li>
                                                <!-- Avatar -->
                                                <div class="comment-avatar"> <img src="img/comment-2.jpg" alt="comment"> </div>
                                                <!-- Contenedor del Comentario -->
                                                <div class="comment-box">
                                                    <div class="comment-head">
                                                        <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                                                        <span>hace 10 minutos</span>
                                                        <i class="fa fa-reply"></i>
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                    <div class="comment-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <!-- Avatar -->
                                                <div class="comment-avatar"> <img src="img/comment-3.jpg" alt="comment"> </div>
                                                <!-- Contenedor del Comentario -->
                                                <div class="comment-box">
                                                    <div class="comment-head">
                                                        <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                                                        <span>hace 10 minutos</span>
                                                        <i class="fa fa-reply"></i>
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                    <div class="comment-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment-main-level">
                                            <!-- Avatar -->
                                            <div class="comment-avatar"> <img src="img/comment-4.jpg" alt="comment"> </div>
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                                                    <span>hace 10 minutos</span>
                                                    <i class="fa fa-reply"></i>
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="comment-form">
                                    <h4>Leave a reply</h4>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <form action="https://html.dynamiclayers.net/dl/charitify/contact.php" method="post" id="ajax_form" class="form-horizontal">
                                        <div class="form-group colum-row row">
                                            <div class="col-sm-4">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="website" id="website" name="website" class="form-control" placeholder="Website" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
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
                        </div>
                    </div><!-- Blog Posts -->
                    <div class="col-lg-3 sm-padding">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget mb-50">
                                <h4>Search Posts</h4>
                                <form action="#" class="search-form">
                                    <input type="text" class="form-control" placeholder="Type here">
                                    <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="sidebar-widget mb-50">
                                <h4>Categories</h4>
                                <ul class="cat-list">
                                    <li><a href="#">Wed design</a><span>(2)</span></li>
                                    <li><a href="#">Graphics design</a><span>(4)</span></li>
                                    <li><a href="#">Wordpress</a><span>(7)</span></li>
                                    <li><a href="#">Joomla</a><span>(5)</span></li>
                                    <li><a href="#">Marketing</a><span>(3)</span></li>
                                    <li><a href="#">Music</a><span>(2)</span></li>
                                </ul>
                            </div><!-- Categories -->
                            <div class="sidebar-widget mb-50">
                                <h4>Recent Posts</h4>
                                <ul class="recent-posts">
                                    <li>
                                        <img src="img/rel-post-1.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Standard post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/rel-post-2.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Post with small image</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/rel-post-3.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Quote post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/rel-post-4.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Standard video post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/rel-post-5.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">gallery post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- Recent Posts -->
                            <div class="sidebar-widget mb-50">
                                <h4>Tags</h4>
                                <ul class="tags">
                                    <li><a href="#">Audio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Magazine</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Post</a></li>
                                    <li><a href="#">Quotes</a></li>
                                </ul>
                            </div><!-- Tag -->
                        </div><!-- /Sidebar Wrapper -->
                    </div>
                </div>
            </div>
        </section><!-- /Blog Section -->
@endsection
