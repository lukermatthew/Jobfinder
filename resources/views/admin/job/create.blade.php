@extends('layouts.backend.app')

@section('title','JOB')

@push('css')
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <form action="{{ route('admin.job.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row clearfix">
            
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADD JOB
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                       
                                            <input type="text" id="company" name="company" class="form-control" placeholder="Company: eg. Google">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="job_title" name="job_title" class="form-control" placeholder="Job Title: eg. Professional UI/UX Designer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="salary" name="salary" class="form-control" placeholder="Salary">
                                        </div>
                                    </div>
                                </div>

                              
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="contact_user" name="contact_user" class="form-control" placeholder="Contact Person">
                                        </div>
                                    </div>
                                </div>
                            </div>




                          

                       


                                <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="location" name="location" class="form-control" placeholder="Adress/Location">
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>




















                
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Job Categories and Type
                            </h2>
                        </div>
                        <div class="body">
                            <div class="form-group form-float">
                                

                            
                            <div class="form-line {{ $errors->has('categories') ? 'focused error' : '' }}">
                        <label class="form-control-label">*Select Category</label>
                        <select class="form-control" name="category">
                                   <option value="" disabled {{ old('category') ? '' : 'selected' }}>Nothing Selected</option>
                                   @foreach($jobcategories as $jobcategory)
                                        <option value="{{$jobcategory->id}}" {{ old('jobcategory') ? 'selected' : '' }}>{{$jobcategory->name}}</option>
                                    @endforeach
                        </select>
                      </div></div>


                        
                            <div class="form-line {{ $errors->has('categories') ? 'focused error' : '' }}">
                        <label class="form-control-label">*Select Type</label>
                        <select class="form-control" name="type">
                                   <option value="" disabled {{ old('type') ? '' : 'selected' }}>Nothing Selected</option>
                                   @foreach($jobtypecategories as $jobtypecategory)
                                        <option value="{{$jobtypecategory->id}}" {{ old('jobtypecategory') ? 'selected' : '' }}>{{$jobtypecategory->name}}</option>
                                    @endforeach
                        </select>
                      
                    </div>
                  </div>
                  </div>

                          

                            <a  class="btn btn-danger btn-lg" href="{{ route('admin.job.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary btn-lg ">POST JOB</button>

                       
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Description
                            </h2>
                        </div>
                        <div class="description">
                            <textarea id="tinymce" name="description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <!-- Select Plugin Js -->
    <script src="{{ asset('backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- TinyMCE -->
    <script src="{{ asset('backend/plugins/tinymce/tinymce.js') }}"></script>
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
            tinyMCE.baseURL = '{{ asset('backend/plugins/tinymce') }}';
        });
    </script>

@endpush