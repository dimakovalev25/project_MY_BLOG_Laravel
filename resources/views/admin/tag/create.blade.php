@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form method="POST" action="{{route('admin.tag.store')}}">
                        @csrf

                        <div class="form-group">

                            <label for="">New tag</label>
                            <br/>

                            <input class="form-control" name="title" class="mt-3" type="text" placeholder="Tag name">
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

