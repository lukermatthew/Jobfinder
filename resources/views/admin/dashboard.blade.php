@extends('layouts.backend.app')

@section('title','Dashboard')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL JOBS</div>
                        <div class="number count-to" data-from="0" data-to="{{ $jobs->count() }}" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">favorite</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL BLOG</div>
                        <div class="number count-to" data-from="0" data-to="{{ $posts->count() }}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-red hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">library_books</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL SUBSCRIBERS</div>
                        <div class="number count-to" data-from="0" data-to="{{ $subscriber_count }}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL VIEWS</div>
                        <div class="number count-to" data-from="0" data-to="{{ $all_views }}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                <div class="info-box bg-pink hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">apps</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL CLIENTS</div>
                        <div class="number count-to" data-from="0" data-to="{{ $client_count }}" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
              
                <div class="info-box bg-purple hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">account_circle</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL APPLICANT</div>
                        <div class="number count-to" data-from="0" data-to="{{ $applicant_count }}" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>

                <div class="info-box bg-blue-grey hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">labels</i>
                    </div>
                    <div class="content">
                        <div class="text">JOB CATEGORY</div>
                        <div class="number count-to" data-from="0" data-to="{{ $jobcategory_count }}" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
                <div class="info-box bg-deep-purple hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">fiber_new</i>
                    </div>
                    <div class="content">
                        <div class="text">TODAY CLIENT</div>
                        <div class="number count-to" data-from="0" data-to="{{ $new_clients_today }}" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                <div class="card">
                    <div class="header">
                        <h2>MOST POPULAR POST</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Job Title</th>
                                        <th>Client</th>
                                        <th>Job Type</th>
                                        <th>Date Posted</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jobs as $key=>$job)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ str_limit($job->job_title,'20') }}</td>
                                            <td>{{ $job->user->name }}</td>
                                            <td>{{ $job->jobtypecategory->name }}</td>
                                            <td>{{ $job->created_at }}</td>
                                           
                                           
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- #END# Widgets -->

        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>TOP 10 ACTIVE CLIENT </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                <tr>
                                    <th>Rank List</th>
                                    <th>Name</th>
                                    <th>Job Posted</th>
                                    <th>Blog</th>
                                    <th>Comments</th>
                                    <th>Favorite</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($active_clients as $key=>$client)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $client->name }}</td>
                                            <td>{{ $client->jobs_count }}</td>
                                            <td>{{ $client->posts_count }}</td>
                                            <td>{{ $client->comments_count }}</td>
                                            <td>{{ $client->favorite_posts_count }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>NEWEST APPLICANT </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Applicant</th>
                                    <th>Availabilty</th>
                                    <th>Date Register</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($active_applicants as $key=>$applicant)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $applicant->name }}</td>
                                            <td>{{ $applicant->jobtypecategory->name }}</td>
                                            <td>{{ $applicant->created_at }}</td>
                                            
                                           
                                            
                                           
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>MOST POPULAR POST </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>Rank</th>
                                        <th>Title</th>
                                        <th>Client</th>
                                        <th>Views</th>
                                        <th>Favorite</th>
                                        <th>Comments</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($popular_posts as $key=>$post)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ str_limit($post->title,'20') }}</td>
                                            <td>{{ $post->user->name }}</td>
                                            <td>{{ $post->view_count }}</td>
                                            <td>{{ $post->favorite_to_users_count }}</td>
                                            <td>{{ $post->comments_count }}</td>
                                            <td>
                                                @if($post->status == true)
                                                    <span class="label bg-green">Published</span>
                                                @else
                                                    <span class="label bg-red">Pending</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-primary waves-effect" target="_blank" href="{{ route('post.details',$post->slug) }}">View</a>
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
@endsection

@push('js')
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('backend/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('backend/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('backend/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="backend/plugins/flot-charts/jquery.flot.js"></script>
    <script src="backend/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="backend/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="backend/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="backend/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="backend/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="{{ asset('backend/js/pages/index.js') }}"></script>
@endpush