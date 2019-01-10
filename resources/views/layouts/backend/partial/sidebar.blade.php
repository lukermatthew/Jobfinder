<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ Storage::disk('public')->url('profile/'.Auth::user()->image) }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>{{ Auth::user()->name }}</strong></div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                     @if(Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                
                <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">work</i>
                            <span>JOB MANAGEMENT</span>
                        </a>


                        <ul class="ml-menu" style="display: none;">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                    <span>Manage Job</span>
                                </a>
                                <ul class="ml-menu" style="display: none;">





                   
                              <li class="{{ Request::is('admin/job') ? 'active' : '' }}">
                        <a href="{{ Auth::user()->role->id == 1 ? route('admin.job.index') : route('admin.job.index')}}">
                        
                        <span>Posted Job</span>
                        </a>
                    </li>

                    
                    <li class="{{ Request::is('admin/appjob') ? 'active' : '' }}">
                        <a href="{{ Auth::user()->role->id == 1 ? route('admin.appjob.index') : route('admin.appjob.index')}}">
                        
                        <span>Job Application</span>
                        </a>
                    </li>








                                </ul>
                            </li>


                            <li>
                                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                    <span>Manage Client</span>
                                </a>
                                <ul class="ml-menu">
                               
                                        <li class="{{ Request::is('admin/client*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.client.index') }}">
                                        
                                            <span>All Client</span>
                                        </a>
                                    </li>

                                   
                                </ul>
                            </li>




                            <li>
                                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                    <span>Manage Applicant</span>
                                </a>
                                <ul class="ml-menu">
                               
                                        <li>
                                        <a href="{{ route('admin.applicant.index') }}">
                                        
                                            <span>All Applicant</span>
                                        </a>
                                    </li>

                                   
                                </ul>
                            </li>


                            <li>
                                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                    <span>Job Maintenance</span>
                                </a>
                                <ul class="ml-menu">
                               
                                        <li class="{{ Request::is('admin/jobcategory*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.jobcategory.index') }}">
                                        
                                            <span>Job Category</span>
                                        </a>
                                    </li>

                                    <li class="{{ Request::is('admin/jobtypecategory*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.jobtypecategory.index') }}">
                                        
                                            <span>Job Type</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            
                        </ul>
                    </li>


                
                  

              
              


                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">assignment</i>
                            <span>POST MANAGEMENT</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">
                              <li class="{{ Request::is('admin/post') ? 'active' : '' }}">
                        <a href="{{ Auth::user()->role->id == 1 ? route('admin.post.index') : route('admin.post.index')}}">
                        
                        <span>Post</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}">
                       
                        <span>Category</span>
                    </a>
                </li>

                <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}">
                       
                        <span>Tag</span>
                    </a>
                </li>

                 <li class="{{ Request::is('admin/favorite') ? 'active' : '' }}">
                    <a href="{{ route('admin.favorite.index') }}">
                       
                        <span>Favorite Posts</span>
                    </a>
                </li>

              

             
                        </ul>
                    </li>


                    <li class="{{ Request::is('admin/authors') ? 'active' : '' }}">
                    <a href="{{ route('admin.author.index') }}">
                        <i class="material-icons">account_circle</i>
                        <span>Authors</span>
                    </a>
                </li>

                    <li class="{{ Request::is('admin/subscriber') ? 'active' : '' }}">
                    <a href="{{ route('admin.subscriber.index') }}">
                        <i class="material-icons">subscriptions</i>
                        <span>Subscribers</span>
                    </a>
                </li>

                



                 

                 <li class="{{ Request::is('admin/settings') ? 'active' : '' }}">
                        <a href="{{ Auth::user()->role->id == 1 ? route('admin.settings') : route('admin.settings')}}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                        </a>
                    </li>

                @endif

                   @if(Request::is('client*'))
                <li class="{{ Request::is('client/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('client.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="{{ Request::is('client/job') ? 'active' : '' }}">
                    <a href="{{ route('client.job.index') }}">
                        <i class="material-icons">work</i>
                        <span>Job</span>
                    </a>
                </li>

                 <li class="{{ Request::is('client/post') ? 'active' : '' }}">
                    <a href="{{ route('client.post.index') }}">
                        <i class="material-icons">library_books</i>
                        <span>Post</span>
                    </a>
                </li>

                

                 

                     <li class="{{ Request::is('client/settings') ? 'active' : '' }}">
                        <a href="{{ Auth::user()->role->id == 2 ? route('client.settings') : route('client.settings')}}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                        </a>
                    </li>

                 
                
            @endif
                    



                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->