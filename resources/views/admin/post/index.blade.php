@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    {{--                    @dd($categories)--}}

                    <div class="ml-2 col-12 mt-3">
                        <h2>
                            Posts Table
                        </h2>
                        <a href="{{route('admin.post.create')}}" class="btn-block btn-primary col-12 w-25">Add new
                            post</a>
                    </div>

                    <div class="col-12 ml-0 mt-3">
                        <div class="col-10">
                            <div class="card">
                                <div class="card-body table-responsive p-0">

                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Post title</th>
                                            <th>Post content</th>
                                            <th>Show</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($posts as $post)

                                                <tr>
                                                    <td>{{$post->id}}</td>
                                                    <td><a href="{{route('admin.post.show', $post->id)}}">{{$post->title}}</a></td>
                                                    <td><a href="{{route('admin.post.show', $post->id)}}">{{$post->content}}</a></td>
                                                    <td><a href="{{route('admin.post.show', $post->id)}}"><i
                                                                class="far fa-eye"></i></a></td>
                                                    <td><a href="{{route('admin.post.edit', $post->id)}}"><i
                                                                class="fas fa-pencil-alt"></i></a></td>
                                                    <td>
                                                        <form method="POST"
                                                              action="{{route('admin.post.delete', $post->id)}}">
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

