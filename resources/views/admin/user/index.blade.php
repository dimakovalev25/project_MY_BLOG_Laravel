@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    {{--                    @dd($categories)--}}

                    <div class="ml-2 col-12 mt-3">
                        <h2>
                            Users Table
                        </h2>
                        <a href="{{route('admin.user.create')}}" class="btn-block btn-primary col-12 w-25">Add new
                            user</a>
                    </div>

                    <div class="col-12 ml-0 mt-3">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body table-responsive p-0">

                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User name</th>
                                            <th>Show</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td><a href="{{route('admin.user.show', $user->id)}}">{{$user->name}}</a></td>
{{--                                                <td>{{$category->title}}</td>--}}
                                                <td><a href="{{route('admin.user.show', $user->id)}}"><i
                                                            class="far fa-eye"></i></a></td>
                                                <td><a href="{{route('admin.user.edit', $user->id)}}"><i
                                                            class="fas fa-pencil-alt"></i></a></td>
                                                <td>
                                                    <form method="POST"
                                                          action="{{route('admin.user.delete', $user->id)}}">
                                                        <button class="border-0 bg-white" type="submit">
                                                            <i class="fas fa-trash text-danger" role="button">
                                                                @csrf
                                                                @method('DELETE')
                                                            </i>

                                                        </button>
                                                    </form>
                                                </td>


                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

