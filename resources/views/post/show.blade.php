@extends('layouts.main')

@section('content')

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                {{--                <img src="{{asset('storage/'.$post->preview_image)}}" alt="featured image" class="w-100">--}}
                <img src="{{asset('assets/'.$post->preview_image)}}" alt="featured image" class="w-100">
            </section>

            <section class="post-content mb-5">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <h3 class="pb-5">
                            {!! $post->content !!}
                        </h3>
                    </div>
                </div>


            </section>
        </div>
    </main>
@endsection


