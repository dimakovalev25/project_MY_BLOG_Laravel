@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form method="POST" action="{{ route('admin.tag.update', $tag->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">

                            <label for="">Update tag</label>
                            <br/>
                            <input class="form-control" value="{{$tag->title}}" name="title" class="mt-3" type="text" placeholder=" New tag name">
                            <br/>

                            @error('title')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input type="submit" class="btn btn-primary mt-3" value="Update">
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>

@endsection

