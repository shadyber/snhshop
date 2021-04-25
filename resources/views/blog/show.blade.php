@extends('layouts.app')
@section('content')
    <section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% -70.5px;">
        <div class="position-center-center">
            <div class="container">
                <h4>{{$blog->title}}</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/blog/{{$blog->slug}}">here</a></li>
                </ol>
            </div>
        </div>
    </section>



    <div id="content">

        <!-- Blog List -->
        <section class="blog-list blog-list-3 single-post padding-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        <!-- Article -->
                        <article>
                            <!-- Post Img -->
                            <img class="img-responsive" src="{{$blog->photo}}" alt="{{$blog->title}}">
                            <!-- Tittle -->
                            <div class="post-tittle left"> <a href="/blog/{{$blog->slug}}" class="tittle">{{$blog->title}}</a>
                                <!-- Post Info -->
                                <span><i class="primary-color icon-user"></i> by {{$blog->user->name}}</span>
                                <span><i class="primary-color icon-calendar"></i> {{$blog->created_at->diffForHumans()}}</span>
                                <span><i class="primary-color icon-bubble"></i> 05</span>
                                <span><i class="primary-color icon-tag"></i> Fashion</span> </div>
                            <!-- Post Content -->
                            <div class="text-left">

                                {{$blog->detail}}
                                <!-- Tags -->
                                <div class="row margin-top-50">
                                    <div class="col-md-7">
                                        <h5 class="shop-tittle">Tags</h5>
                                        <ul class="shop-tags padding-left-15">
                                          @foreach(explode(',',$blog->tags) as $tag)
                                              <li>{{$tag}}</li>
                                              @endforeach

                                        </ul>
                                    </div>

                                    <!-- Share With -->
                                    <div class="col-md-5">
                                        <h5 class="shop-tittle">share with</h5>
                                        <ul class="share-post padding-left-15">
                                            <li><a href="#."><i class="icon-social-facebook"></i> Facebook</a></li>
                                            <li><a href="#."><i class="icon-social-twitter"></i> twitter</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- ADMIN info -->
                                <div class="admin-info">
                                    <div class="media-left">
                                        <div class="admin-pic"> <img src="images/admin-avatar.jpg" alt=""> </div>
                                    </div>
                                    <div class="media-body">
                                        <h6>NATASHA S. <span>Co-Founder</span></h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. NullamMorbi ac scelerisque mauris. Etiam sodales a nulla ornare viverra. Nunc at blandit neque, bociis natoque penatcing e scelerisque miscing elit. </p>
                                        <div class="admin-social"> <a href="#."><i class="icon-social-facebook"></i></a> <a href="#."><i class="icon-social-twitter"></i></a> <a href="#."><i class="icon-social-dribbble"></i></a> <a href="#."><i class="icon-envelope"></i></a> </div>
                                    </div>
                                </div>

                                <!--=======  COMMENTS =========-->
                                <div class="comments margin-top-80">
                                    <h5 class="shop-tittle">Comments</h5>
                                    <ul class="media-list padding-left-15">
                                        <!--=======  COMMENTS =========-->
                                        <li class="media">
                                            <div class="media-left"> <a href="#" class="avatar"> <img class="media-object img-responsive" src="images/avatar-1.jpg" alt=""> <br>
                                                </a> </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">William Saron <span><i class="icon-clock primary-color"></i> April 27, 2016 - 10:00 am</span></h6>
                                                <p>Crack commando unit was sent to prison by a military court for a crime they didn't commit. ese men promptly escaped from a maximum security stockade to the Los Angeles. </p>
                                                <a href="#." class="raply"><i class="icon-bubble primary-color"></i> Reply</a> </div>
                                        </li>
                                        <!--=======  COMMENTS =========-->
                                        <li class="media">
                                            <div class="media-left"> <a href="#" class="avatar"> <img class="media-object img-responsive" src="images/avatar-3.jpg" alt=""> <br>
                                                </a> </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">William Saron <span><i class="icon-clock primary-color"></i> April 27, 2016 - 10:00 am</span></h6>
                                                <p>Crack commando unit was sent to prison by a military court for a crime they didn't commit. ese men promptly escaped from a maximum security stockade to the Los Angeles. </p>
                                                <a href="#." class="raply"><i class="icon-bubble primary-color"></i> Reply</a> </div>
                                        </li>
                                        <!--=======  COMMENTS =========-->
                                        <li class="media padding-left-100">
                                            <div class="media-left"> <a href="#" class="avatar"> <img class="media-object img-responsive" src="images/avatar-2.jpg" alt=""> <br>
                                                </a> </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">William Saron <span><i class="icon-clock primary-color"></i> April 27, 2016 - 10:00 am</span></h6>
                                                <p>Crack commando unit was sent to prison by a military court for a crime they didn't commit. ese men promptly escaped from a maximum security stockade to the Los Angeles. </p>
                                                <a href="#." class="raply"><i class="icon-bubble primary-color"></i> Reply</a> </div>
                                        </li>
                                        <!--=======  COMMENTS =========-->
                                        <li class="media">
                                            <div class="media-left"> <a href="#" class="avatar"> <img class="media-object img-responsive" src="images/avatar-3.jpg" alt=""> <br>
                                                </a> </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">William Saron <span><i class="icon-clock primary-color"></i> April 27, 2016 - 10:00 am</span></h6>
                                                <p>Crack commando unit was sent to prison by a military court for a crime they didn't commit. ese men promptly escaped from a maximum security stockade to the Los Angeles. </p>
                                                <a href="#." class="raply"><i class="icon-bubble primary-color"></i> Reply</a> </div>
                                        </li>
                                    </ul>
                                    <hr>

                                    <!--=======  LEAVE COMMENTS =========-->
                                    <h5 class="shop-tittle margin-top-80">POST YOUR COMMENTS</h5>
                                    <form class="padding-left-15">
                                        <ul class="row">
                                            <li class="col-sm-4">
                                                <label>Name
                                                    <input type="text" class="form-control" name="name" placeholder="">
                                                </label>
                                            </li>
                                            <li class="col-sm-4">
                                                <label>Email
                                                    <input type="text" class="form-control" name="name" placeholder="">
                                                </label>
                                            </li>
                                            <li class="col-sm-4">
                                                <label>Subject
                                                    <input type="text" class="form-control" name="name" placeholder="">
                                                </label>
                                            </li>
                                            <li class="col-sm-12">
                                                <label>COMMENTS
                                                    <textarea class="form-control" placeholder=""></textarea>
                                                </label>
                                            </li>
                                            <li class="col-sm-12">
                                                <button type="submit" class="btn margin-top-30">Submit Comment </button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </article>
                        <hr>


                    </div>

             @include('components.blogSidebar')
                </div>
            </div>
        </section>

        <!-- About -->
        <section class="small-about">
            <div class="container-full">
                <div class="news-letter padding-top-150 padding-bottom-150">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>We always stay with our clients and respect their business. We deliver 100% and provide instant response to help them succeed in constantly changing and challenging business world. </h3>
                            <ul class="social_icons">
                                <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                                <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                                <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                                <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                                <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h3>Subscribe Our Newsletter</h3>
                            <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac.</span>
                            <form>
                                <input type="email" placeholder="Enter your email address" required="">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
