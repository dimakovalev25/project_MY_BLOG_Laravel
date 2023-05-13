@extends('personal.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row  mt-3">

                    <div class="ml-2 col-12 mt-3">
                        <h2>
                            Personal Liked Posts Table
                        </h2>

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
                                            <th>Show post</th>
                                            <th>Delete like</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($posts as $post)

                                            <tr>
                                                <td>{{$post->id}}</td>
                                                <td>
                                                    <a href="{{route('admin.post.show', $post->id)}}">{{$post->title}}</a>
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.post.show', $post->id)}}">{{$post->content}}</a>
                                                </td>
                                                <td><a href="{{route('admin.post.show', $post->id)}}"><i
                                                            class="far fa-eye"></i></a></td>
{{--                                                <td><a href="{{route('admin.post.edit', $post->id)}}"><i--}}
{{--                                                            class="fas fa-pencil-alt"></i></a></td>--}}
                                                <td>
                                                    <form method="POST"
                                                          action="{{route('personal.liked.delete', $post->id)}}">
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

{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-success h-100">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>Likes Posts</h3>--}}
{{--                                <p>10</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fas fa-heart"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- ./col -->

                    <!-- ./col -->
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

