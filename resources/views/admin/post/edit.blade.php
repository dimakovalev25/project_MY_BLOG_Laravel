@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form method="POST" action="{{ route('admin.post.update', $post->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">

                            <label for="">Update post</label>
                            <br/>
                            <input value="{{$post->title}}" name="title" class="mt-3" type="text" placeholder=" New post title">

                            @error('title')
                                <div class="text-danger">{{$message}}</div>
                            @enderror

                            <br/>
                            <input value="{{$post->content}}" name="content" class="mt-3" type="text" placeholder=" New post content">

                            @error('content')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <br/>

                            <input value="{{$post->category_id}}" name="category_id" class="mt-3" type="number" placeholder=" New post category">
                            @error('category_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror

                            <br/>
                            <input type="submit" class="btn btn-primary mt-3" value="Update">
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>

@endsection

