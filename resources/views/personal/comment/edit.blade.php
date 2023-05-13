@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form method="POST" action="{{ route('personal.comment.update', $comment->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">

                            <label for="">Change comment</label>
                            <br/>
                            <textarea class="form-control" name="message" value="{{$comment->message}}" cols="30" rows="10">{{$comment->message}}</textarea>
                            @error('message')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input class="form-control" type="submit" class="btn btn-primary mt-3" value="Update comment">
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>

@endsection

