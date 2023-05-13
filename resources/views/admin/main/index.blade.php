@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row  mt-3">


                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info h-100">
                            <div class="inner">
                                <h3>Users</h3>
                                <p>{{$data['$usersCount']}}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success h-100">
                            <div class="inner">
                                <h3>Posts</h3>
                                <p>{{$data['$postsCount']}}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->


                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger h-100">
                            <div class="inner">
                                <h3>Categories</h3>
                                <p>{{$data['$categoriesCount']}}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-th-list"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->


                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger h-100">
                            <div class="inner">
                                <h3>Tags</h3>
                                <p>{{$data['$tagsCount']}}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-tags"></i>
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

