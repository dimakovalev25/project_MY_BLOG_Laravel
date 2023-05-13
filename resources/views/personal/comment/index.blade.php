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
                                        <th>Update comment</th>
                                        <th>Delete comment</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($comments as $comment)

                                        <tr>
                                            <td>{{$comment->id}}</td>
                                            <td>
                                                <a href="{{route('admin.post.show', $comment->id)}}">{{$comment->message}}</a>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.post.show', $comment->id)}}">{{$comment->message}}</a>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.post.show', $comment->id)}}"><i
                                                        class="far fa-eye"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{route('personal.comment.edit', $comment->id)}}"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="{{route('personal.comment.delete', $comment->id)}}">
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
                    <!-- ./col -->
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

