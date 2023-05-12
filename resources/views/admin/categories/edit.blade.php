@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form method="POST" action="{{ route('admin.category.update', $category->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">

                            <label for="">Change category</label>
                            <br/>
                            <input class="form-control" value="{{$category->title}}" name="title" class="mt-3" type="text" placeholder="Category name">
                            <br/>

                            @error('title')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input class="form-control" type="submit" class="btn btn-primary mt-3" value="Update">
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>

@endsection

