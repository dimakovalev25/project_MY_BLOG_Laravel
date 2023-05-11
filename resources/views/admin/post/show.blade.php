@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="ml-2 col-12 mt-3 d-flex align-items-center">
                        <h2 class="mr-2">
                            {{$post->title}}
                        </h2>
                        <td>
                            <a href="{{route('admin.post.edit', $post->id)}}">
                                <i class="fas fa-pencil-alt"> </i>
                            </a>
                        </td>
                    </div>

                    <div class="col-12 ml-0 mt-3">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 >Tag Table</h4>
                                </div>
                                <div class="card-body table-responsive p-0">

                                    <table class="table table-hover text-nowrap">

                                        <tbody>
                                        <tr>
                                            <td>id:</td>
                                            <td>{{$post->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>name:</td>
                                            <td>{{$post->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>content:</td>
                                            <td>{{$post->content}}</td>
                                        </tr>
                                        <tr>
                                            <td>category_id:</td>
                                            <td>{{$post->category_id}}</td>
                                        </tr>

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

