@extends('layouts.app')
@section('content')
    <section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% -46.5px;">
        <div class="position-center-center">
            <div class="container">
                <h4>Blog List</h4>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="/blog">BLOG</a></li>
                </ol>
            </div>
        </div>
    </section>


    <div id="content">

        <!-- Blog List -->
        <section class="blog-list blog-list-3 padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                    @foreach($blogs as $blog)
                        <!-- Article -->
                        <article>
                            <div class="row">
                                <div class="col-sm-5">
                                    <!-- Post Img -->
                                    <img class="img-responsive" src="{{$blog->thumb}}" alt="{{$blog->title}}"> </div>
                                <div class="col-sm-7">
                                    <!-- Tittle -->
                                    <div class="post-tittle left"> <a href="/blog/{{$blog->slug}}" class="tittle">{{$blog->title}}</a>
                                        <!-- Post Info -->
                                        <span><i class="primary-color icon-user"></i> by {{$blog->user->name}}</span>
                                        <span><i class="primary-color icon-calendar"></i>{{$blog->created_at->diffForHumans()}}</span>
                                        <span><i class="primary-color icon-bubble"></i> 05</span>
                                        <span><i class="primary-color icon-tag"></i> Fashion</span>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="text-left">
                                        <p> {{\Illuminate\Support\Str::substr($blog->detail,0,400)}}</p>
                                        <a href="/blog/{{$blog->slug}}" class="red-more">READ MORE</a> </div>
                                </div>
                            </div>
                        </article>

                        @endforeach
                        <!-- Article -->


                        <!-- Pagination -->
                        <ul class="pagination in-center">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>

                    @include('components.blogSidebar')
                </div>
            </div>
        </section>
    </div>


@endsection
