@extends('frontend.layout')
@section('content')
    <h1 style="display: none">{{$title}}</h1>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                    <img class="d-block w-100" src="/images/sliders/61d876cfc354c.png" alt="First slide">
                </div>

        </div>

    </header>

    <!-- Page Content -->
    <div class="container">


        <!-- Portfolio Section -->
        <h2 class="mt-4">Makaleler</h2>

        <div class="row">

            @foreach($data['blog'] as $blog)
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">

                        <a href="{{route('blog.Detail',$blog->blog_slug)}}"><img class="card-img-top" src="/images/blogs/{{$blog->blog_file}}" style="width: 100%; height: 200px;" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{route('blog.Detail',$blog->blog_slug)}}">{{$blog->blog_title}}</a>
                            </h4>
                            <p class="card-text">{!! substr($blog->blog_content,0,140) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>{{$home_title}}</h2>
               {!! $home_detail !!}
            </div>
            <div class="col-lg-6">
               <img class="img-fluid rounded" src="/images/settings/{{$home_image}}" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p>{{$slogan}}</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="{{route('contact.Detail')}}">Bize Ulaşın</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

@endsection
@section('css') @endsection
@section('js') @endsection
