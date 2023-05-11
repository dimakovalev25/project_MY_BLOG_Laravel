@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content mt-4">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form method="POST" action="{{route('admin.category.store')}}">
                        @csrf

                        <div class="form-group">

                            <label for="">New category</label>
                            <br/>
                            <input name="title" class="mt-3" type="text" placeholder="Category name">
                            <br/>

                            @error('title')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input type="submit" class="btn btn-primary mt-3">
                        </div>

                    </form>

                </div>
            </div>

        </section>
    </div>

@endsection

