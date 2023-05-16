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

            @auth()
                <section class="comment-list">
                    @foreach($post->comments as $comment)
                        <div class="card-footer card-comments pb-5">
                            <div class="card-comment">
                                <div class="comment-text">
                    <span class="username">
                        <h5>
                      {{$comment->user->name}}

                            {{--                            @dd($comment->DateAsCarbon)--}}
                        </h5>
{{--                      <span class="text-muted float-right">{{$comment->created_at}}</span>--}}
                      <span class="text-muted float-right">{{$comment->DateAsCarbon->diffForHumans()}}</span>
                    </span>
                                    {{$comment->message}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>


            <section class="comment-section">
                <h2 class="section-title" data-aos="fade-up">Add comment</h2>
                <form action="{{route('post.comment.store', $post->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12" data-aos="fade-up">
                            <label for="comment" class="sr-only">New comment</label>
                            <textarea name="message" id="comment" class="form-control" placeholder=""
                                      rows="10"></textarea>
                        </div>
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                    </div>

                    <div class="row">
                        <div class="col-12" data-aos="fade-up">
                            <input type="submit" value="Send comment" class="btn btn-warning">
                        </div>
                    </div>
                </form>
            </section>
            @endauth

        </div>
    </main>
@endsection


