@extends('layouts.backend.app')

@section('title','Post')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <a href="{{ route('client.job.index') }}" class="btn btn-danger waves-effect">BACK</a>
      
        <br>
        <br>
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h2>Job Info</h2>
                        </div>

                        
                        <div class="body">

                        <h4>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Posted: {{ $job->created_at->toFormattedDateString() }}<br>
                        <i class="material-icons">home</i>
                        <span>Company: {{ $job->company }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <br>
                        <i class="material-icons">work</i> 
                        <span>Job Title: {{ $job->job_title }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
                        <i class="material-icons">dashboard</i> 
                        <span>Job Type:  {{ $job->jobtypecategory->name }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        
                       
                        </h4><br>
                        <h4>
                        About Company
                        </h4>   {!! $job->description !!}
                         
                        <hr>

                           
                        <h4>Job Description  </h4>
                       
                            {!! $job->description !!}<br>
                     

                         <h4>Job Requirement </h4>
                       
                            {!! $job->description !!}
                            
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header ">
                            <h2>
                                Contact Info
                            </h2>
                        </div>
                        <div class="body">
                          
                                <p><strong>Location :</strong> {{ $job->location }}</p>
                                <p><strong>Contact Person :</strong> {{ $job->contact_user }}</p>
                                <p><strong>Contact no# :</strong> {{ $job->phone }}</p>
                                <p><strong>Website :</strong>www.greatimage.com.ph</p>
                           
                        </div>
                    </div>
                    <div class="card">
                        <div class="header bg-green">
                            <h2>
                                Job Category
                            </h2>
                        </div>
                        <div class="body">
                          
                                <span class="label bg-green">{{ $job->jobcategory->name }}</span>
                          
                        </div>
                    </div>
                    <div class="card">
                        <div class="header bg-amber">
                            <h2>
                                Company Photo
                            </h2>
                        </div>
                      
                    </div>

                </div>
            </div>
    </div>



    <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Applicant- Job Applied</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                <tr>
                                    <th>ID#</th>
                                    <th>Applicant Name</th>
                                    <th>Job Applied</th>
                                    <th>Email</th>
                                    <th>Date Applied</th>
                                   
                                    <th>Action</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($job->appjobs as $key=>$appjob)
                                
                                <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $appjob->user->name }}</td>
                                            <td>{{ $appjob->job->job_title }}</td>
                                            <td>{{ $appjob->user->email }}</td>
                                            <td>{{ $appjob->created_at }}</td>
                                
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->

        </div>
    </div>
@endsection

@push('js')
    <!-- Select Plugin Js -->
    <script src="{{ asset('backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- TinyMCE -->
    <script src="{{ asset('backend/plugins/tinymce/tinymce.js') }}"></script>
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script>
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });
        function approvePost(id) {
            swal({
                title: 'Are you sure?',
                text: "You went to approve this post ",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, approve it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('approval-form').submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'The post remain pending :)',
                        'info'
                    )
                }
            })
        }
    </script>

@endpush