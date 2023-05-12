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
                            <input class="form-control" name="name" class="mt-3" type="text" placeholder="User name">
                            <br/>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input class="form-control" name="email" class="mt-3" type="text" placeholder="User email">
                            <br/>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input class="form-control" name="password" class="mt-3" type="text" placeholder="User password">
                            <br/>
                            @error('password')
                                <div class="text-danger">{{$message}}</div>
                            @enderror


{{--                            <div class="form-group">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Choose roles</label>--}}
{{--                                    <select name="role" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">--}}
{{--                                        @foreach($roles as $id => $role)--}}
{{--                                            <option value="{{$id}}">{{$role}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                @error('role')--}}
{{--                                <div class="text-danger">{{$message}}</div>--}}
{{--                                @enderror--}}


                                    <div class="form-group">
                                        <label>Choose roles</label>
                                        <select name="role" class="form-control select2 select2-hidden-accessible" style="width: 100%;"  tabindex="-1" aria-hidden="true">
                                            <option selected="selected" ></option>
                                            @foreach($roles as $id => $role)
                                                <option value="{{$id}}">{{$role}}</option>
                                            @endforeach
                                        </select>
                                        @error('role')
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

