@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content mt-4">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form method="POST" action="{{route('admin.user.store')}}">
                        @csrf

                        <div class="form-group">

                            <label for="">New user</label>
                            <br/>
                            <input name="name" class="mt-3" type="text" placeholder="User name">
                            <br/>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input name="email" class="mt-3" type="text" placeholder="User email">
                            <br/>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input name="password" class="mt-3" type="text" placeholder="User password">
                            <br/>
                            @error('password')
                                <div class="text-danger">{{$message}}</div>
                            @enderror

                            <input type="submit" class="btn btn-primary mt-3" value="Create!">
                        </div>

                    </form>

                </div>
            </div>

        </section>
    </div>

@endsection

