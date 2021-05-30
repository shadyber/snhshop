@extends('layouts.app')
@section('title','Blog')
@section('content')

    <div class="blog-grid pb-100px  main-blog-page single-blog-page">
        <div class="container">
            <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-6 col-md-6 col-xl-4 mb-50px">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="/blog/{{$blog->slug}}"><img src="{{$blog->thumb}}" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date height-shape" href="#"><i class="fa fa-calendar" aria-hidden="true"></i> 24 Aug, 2021</a>
                                <a class="blog-mosion" href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 1.5
                                    K</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">There are many variations of
                                    passages of Lorem</a></h5>

                            <p>Lorem ipsum dolor, sit amet cons adipisicing elit. Cumque, quam aperiam alias modi sed
                                totam possimus illo.</p>

                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More<i class="fa fa-arrow-right ml-5px" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                @endforeach
            </div>

            <!--  Pagination Area Start -->
            <div class="pro-pagination-style text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="pages">

                    <ul>
                        <li class="li"><a class="page-link" href="?page=prev"><i class="fa fa-angle-left"></i></a></li>
                        <li class="li"><a class="page-link active" href="?page=1">1</a></li>
                        <li class="li"><a class="page-link" href="?page=2">2</a></li>
                        <li class="li"><a class="page-link" href="?page=next"><i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--  Pagination Area End -->
        </div>
    </div>

@endsection
