@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form method="POST" action="{{route('admin.post.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">

                            <label class="mt-3" for="">Title post</label>
                            <div class="form-group mt-3">
                                <input name="title" type="text" placeholder="Post title">
                                <br/>
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Preview image</label>
                                <div class="input-group">
                                    <div class="custom-fil">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                               name="preview_image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose image
                                            file</label>
                                    </div>
                                    <div class="input-group-append">
                                        {{--                                        <span class="input-group-text">Upload</span>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label for="">Content post</label>

                                <textarea id="summernote" name="content"></textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Categories post</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        {{$category->id == old('category_id') ? 'selected' : ''}}
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <input type="submit" class="btn btn-primary mt-3" value="Create">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection

