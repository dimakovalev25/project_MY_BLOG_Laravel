@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form method="POST" action="{{route('admin.post.store')}}">
                        @csrf

                        <div class="form-group">

                            <label for="">New post</label>
                            <br/>

                            <input name="title" class="mt-3" type="text" placeholder="Post title">
                            <br/>
                            @error('title')
                                <div class="text-danger">{{$message}}</div>
                            @enderror

                            <input name="content" class="mt-3" type="text" placeholder="Post content">
                            <br/>
                            @error('content')
                            <div class="text-danger">{{$message}}</div>
                            @enderror

                            <input name="category_id" class="mt-3" type="number" placeholder="Category">
                            <br/>
                            @error('category_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror




                            <input type="submit" class="btn btn-primary mt-3" value="Create">
                        </div>

                    </form>

                </div>
            </div>

        </section>
    </div>

@endsection

