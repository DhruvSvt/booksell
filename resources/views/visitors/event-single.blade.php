@extends('visitors.layouts.visitors',['title' => 'Events'])
@section('content')

@php
$protocol =
(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443
? 'https://'
: 'http://';
$cpurl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

@endphp

<div class="header-height"></div>


<section class="blog-section bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 sm-padding">
                <div class="blog-items single-post">
                    <img src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}">
                    <h2>{{ $post->title }}</h2>
                    <div class="meta-info">
                        <span>
                            <i class="ti-clock"></i> {{ date('F j, Y', strtotime($post->created_at)) }}
                        </span>
                    </div><!-- Meta Info -->
                    <div>
                        {!! $post->body !!}
                    </div>
                    <div class="share-wrap">
                        <h4>Share This Article</h4>
                        <ul class="share-icon">
                            <li><a target="_blank"
                                    href="https://www.facebook.com/sharer.php?u={{ $cpurl }}&display=popup"><i
                                        class="ti-facebook"></i> Facebook</a></li>
                            <li><a target="_blank"
                                    href="https://twitter.com/intent/tweet?url={{ $cpurl }}&via=Books&Beyond"><i
                                        class="ti-twitter"></i> Twitter</a></li>
                            <li><a target="_blank" href="https://web.whatsapp.com/send?text={{ $cpurl }}"><i
                                        class="ti-whatsapp"></i> Whatsapp</a></li>
                            <li><a target="_blank"
                                    href="https://www.linkedin.com/shareArticle?mini=true&url={{ $cpurl }}&title={{ $post->title }}"><i
                                        class="ti-linkedin"></i> Linkedin</a></li>
                        </ul>
                    </div><!-- Share Wrap -->
                </div><!-- Share Wrap -->
            </div><!-- Blog Posts -->
            <div class="col-lg-3 xs-padding">
                <div class="sidebar-wrap">


                    <div class="sidebar-widget mb-50">
                        <h4>Featured Events</h4>
                        <ul class="recent-posts">
                            @foreach ($featured as $row)
                            <li>
                                <img src="{{ Voyager::image($row->image) }}" alt="{{$row->title}}">
                                <div>
                                    <h4><a href="{{route('blogSingle',$row->slug)}}">{{$row->title}}</a></h4>
                                    <span class="date"><i class="fa fa-clock-o"></i> {{date('F j,
                                        Y',strtotime($row->created_at))}}</span>
                                </div>
                            </li>
                            @endforeach


                        </ul>
                    </div><!-- Recent Posts -->

                </div><!-- /Sidebar Wrapper -->
            </div>
        </div>
    </div>
</section><!-- /Blog Section -->
@endsection
