@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form method="POST" action="{{ route('admin.user.update', $user->id)}}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">

                            <label for="">Change user</label>
                            <br/>

                            <input value="{{$user->name}}" name="name" class="mt-3" type="text" placeholder="User name">
                            <br/>
                            @error('name')
                                <div class="text-danger">{{$message}}</div>
                            @enderror

                            <input value="{{$user->email}}" name="email" class="mt-3" type="text" placeholder="User email">
                            <br/>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror

{{--                            <input value="{{$user->password}}" name="password" class="mt-3" type="text" placeholder="User password">--}}
{{--                            <br/>--}}
{{--                            @error('password')--}}
{{--                            <div class="text-danger">{{$message}}</div>--}}
{{--                            @enderror--}}


                            <input type="submit" class="btn btn-primary mt-3" value="Update">
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>

@endsection

