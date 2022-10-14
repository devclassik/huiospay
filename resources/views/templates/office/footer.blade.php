        
                </div>
            </div>
        </section>
        <!-- End Page -->
        <!-- Footer -->
        <footer class="site-footer">
            <div class="site-footer-legal">Copyrights &copy; {{(date('Y')==2020)? date('Y'): ' 2020 - '.date('Y') }}, {{$settings->app}}. All rights reserved.</div>
            <div class="site-footer-right">
                Made with <i class="fa fa-heart text-red heart"></i> By <a href="https://www.scnip.com" class="text-warning">Scnip</a>
            </div>
        </footer>

        <!-- Core  -->
        <script type="text/javascript" src="{{asset('office/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/babel-external-helpers/babel-external-helpers.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/animsition/animsition.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/mousewheel/jquery.mousewheel.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/asscrollbar/jquery-asScrollbar.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/asscrollable/jquery-asScrollable.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
        <!-- Plugins -->        
        <script type="text/javascript" src="{{asset('office/plugins/intro-js/intro.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/toastr/toastr.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/bootbox/bootbox.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/switchery/switchery.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/screenfull/screenfull.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/select2/select2.full.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/slidepanel/jquery-slidePanel.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/jquery-print/jquery-print.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/texteditor/jquery-te-1.4.0.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/bootstrap-sweetalert/sweetalert.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/datepicker/bootstrap-datepicker.js')}}"></script>        
        <script type="text/javascript" src="{{asset('shared/plugins/bootstrap-rating/bootstrap-rating.js')}}"></script>
        {{-- <script type="text/javascript" src="{{asset('office/plugins/bootstrap-select/bootstrap-select.js')}}"></script> --}}
        <script type="text/javascript" src="{{asset('office/plugins/aspaginator/jquery-asPaginator.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('office/plugins/uploader/1.3/jquery.fileuploader.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/jquery-placeholder/jquery.placeholder.js')}}"></script>
        <script type='text/javascript' src="{{asset('office/plugins/image-picker/image-picker/image-picker.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
        
        @if(strtolower($action->view)!='office.listings.view')        
        <script type="text/javascript" src="{{asset('office/plugins/skycons/skycons.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/stickyfill/stickyfill.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/isotope/isotope.pkgd.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/jvectormap/jquery-jvectormap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/matchheight/jquery.matchHeight-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/jvectormap/maps/jquery-jvectormap-au-mill-en.js')}}"></script>
        @endif
        <!-- Scripts -->
        <script type="text/javascript" src="{{asset('office/scripts/Component.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/Plugin.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/Base.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/Config.js')}}"></script>        
        <script type="text/javascript" src="{{asset('office/assets/js/Section/Menubar.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/Section/GridMenu.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/Section/Sidebar.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/Section/PageAside.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/Plugin/menu.js')}}"></script>        
        <script type="text/javascript" src="{{asset('office/scripts/config/colors.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/config/tour.js')}}"></script>
        <script>Config.set('assets', "{{asset('office/assets/')}}");</script>
        <!-- Page -->
        <script type="text/javascript" src="{{asset('office/assets/js/Site.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/bootbox.js')}}"></script>
        {{-- <script type="text/javascript" src="{{asset('office/scripts/plugin/select2.js')}}"></script> --}}
        <script type="text/javascript" src="{{asset('office/scripts/plugin/editlist.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/material.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/switchery.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/selectable.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/slidepanel.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/action-btn.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/aspaginator.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/asscrollable.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/asselectable.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/animate-list.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/sticky-header.js')}}"></script>
        {{-- <script type="text/javascript" src="{{asset('office/scripts/plugin/bootstrap-select.js')}}"></script> --}}
        <script type="text/javascript" src="{{asset('office/scripts/plugin/jquery-placeholder.js')}}"></script>
        @if(strtolower($action->view)!='office.listings.view')
        <script type="text/javascript" src="{{asset('office/scripts/plugin/panel.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/filterable.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/jvectormap.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/matchheight.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/examples/js/layouts/panel-transition.js')}}"></script>
        @endif
        <!-- Customs -->        
        @if(strtolower($title)=='media')
        <script type="text/javascript" src="{{asset('office/assets/examples/js/pages/gallery.js')}}"></script>        
        @elseif(strtolower($action->view)=='office.listings.view')
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net/jquery.dataTables.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-fixedheader/dataTables.fixedHeader.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-fixedcolumns/dataTables.fixedColumns.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-rowgroup/dataTables.rowGroup.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-scroller/dataTables.scroller.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-responsive/dataTables.responsive.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-responsive-bs4/responsive.bootstrap4.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-buttons/dataTables.buttons.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-buttons/buttons.html5.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-buttons/buttons.flash.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-buttons/buttons.print.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-buttons/buttons.colVis.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/datatables.net-buttons-bs4/buttons.bootstrap4.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/asrange/jquery-asRange.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/datatables.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/BaseApp.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/js/App/Contacts.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/examples/js/apps/contacts.js')}}"></script>
        @elseif(strtolower($title)=='dashboard' || strtolower($title)=='reports')
        {{-- <script type="text/javascript" src="{{asset('office/scripts/plugin/gmaps.js')}}"></script> --}}
        {{-- <script type="text/javascript" src="{{asset('office/plugins/gmaps/gmaps.js')}}"></script> --}}
        <script type="text/javascript" src="{{asset('office/plugins/morris/morris.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/plugin/aspieprogress.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/chartist/chartist.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/examples/js/dashboard/v1.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/assets/examples/js/dashboard/v2.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/plugins/aspieprogress/jquery-asPieProgress.js')}}"></script>
        {{-- <script type="text/javascript" src="{{asset('office/assets/examples/js/dashboard/team.js')}}"></script> --}}
        <script type="text/javascript" src="{{asset('office/assets/examples/js/dashboard/analytics.js')}}"></script>
        @endif
        <script type="text/javascript" src="{{asset('shared/js/functions.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/js/app.js')}}"></script>
        @php $domain = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http")."://".env("APP_API").'.'.env("APP_DOMAIN").'/'.$settings->api; @endphp
        <script type="text/javascript" id='script'>
            let app = new App('{{$settings->app}}', '1.0', '{{$settings->server}}', '{{($settings->mode=="Production")?$domain:$settings->server.$settings->api}}', 'Scnip - https://www.scnip.com', '{{(Auth::check())?$user->secret:$controller->key}}');
            app.initialize();
		</script>
        <script type="text/javascript" src="{{asset('shared/js/scnip.js')}}"></script>
        <script type="text/javascript" src="{{asset('office/scripts/script.js')}}"></script>
        
        <!-- file upload modal -->
        <div class="modal fade p-0" id="file-upload-browse" aria-hidden="false" aria-labelledby="exampleFillIn" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple m-0">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h3 class="modal-title" id="exampleFillInModalTitle">Media Manager</h3>
                    </div>
                    <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                        <li class="nav-item file-upload" role="presentation"><a class="nav-link" data-toggle="tab" href="#file-upload" aria-controls="file-upload" role="tab"><h5>Upload Media</h5></a></li>
                        <li class="nav-item browse-file" role="presentation"><a class="nav-link active" data-toggle="tab" href="#browse-file" aria-controls="browse-file" role="tab"><h5>Browse Files</h5></a></li>
                    </ul>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div class="tab-pane" id="file-upload" role="tabpanel">
                                <form method="post" class="media-upload-form"  enctype="multipart/form-data" action="{{route('office.action','media')}}">
                                    <div class="form-group {{$errors->has('image')? 'has-error':''}}">
                                        <input id="image" type="file" name="image">
                                        @if ($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                        @endif
                                        {{ csrf_field() }}
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane active" id="browse-file" role="tabpanel">
                                <div class="row display-flex equal-height">
                                    <select class="imagepicker pages">
                                        @foreach($medias as $media)
                                        @php
                                        $images = ['jpg','jpeg','gif','png'];
                                        $ext =  pathinfo(public_path()."/".$media->path.$media->name, PATHINFO_EXTENSION);
                                        $name = ($ext=='doc'||$ext=='docx')?'docx':$ext;
                                        $name = ($ext=='xls'||$ext=='xlsx')?'xlsx':$name;
                                        @endphp
                                        @if(file_exists(public_path()."/".$media->path.$media->name) && in_array($ext,$images))
                                        <option data-img-src="{{asset($media->path.$media->name)}}" data-path="{{$media->path}}" data-name="{{$media->name}}" data-img-alt="{{$media->name}}" value="{{$media->id}}" {{ ($media->id==$selected->media)? 'selected':'' }}>{{$media->name}}</option>
                                        @elseif(!in_array($ext,$images))
                                        <option data-img-src="{{asset('medias/images/docs/'.$name.'.png')}}" data-path="{{$media->path}}" data-name="{{$media->name}}" data-img-alt="{{$media->name}}" value="{{$media->id}}" {{ ($media->id==$selected->media)? 'selected':'' }}>{{$media->name}}</option>
                                        @else
                                        <option data-img-src="{{asset('medias/images/placeholder.png')}}" data-path="{{$media->path}}" data-name="{{$media->name}}" data-img-alt="{{$media->name}}" value="{{$media->id}}" {{ ($media->id==$selected->media)? 'selected':'' }}>{{$media->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary file-upload" style="display:none">Upload File</button>
                        <button type="button" class="btn btn-primary select-file">Select File</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end file Modal -->
        @if(in_array($action->action,$apps) && $action->action=='users')
        <div id="users" data-action="new" style="display:none">
            <header class="slidePanel-header overlay" style="background-image: url({{asset('medias/images/placeholder.png')}});')">
                <div class="overlay-panel overlay-background vertical-align">
                    <div class="slidePanel-actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-pure btn-inverse icon wb-trash" aria-hidden="true"></button>
                            <button type="button" class="btn btn-pure btn-inverse slidepanel-close icon wb-close" aria-hidden="true"></button>
                        </div>
                    </div>
                    <div class="vertical-align-middle">
                        <a class="avatar" href="javascript:void(0)">
                            <img src="{{asset($user->image->path.$user->image->name)}}" alt="...">
                        </a>
                        <h3 class="name">Create {{$action->command_trimed_cap}} {{empty($action->command)?$action->action_trimed_cap:$action->item_trimed_cap}}</h3>
                    </div>
                </div>
            </header>
            <div class="slidePanel-inner py-50">
                <form class="form-horizontal col-md-12" method="POST" action="{{route('office.action.create',$action->action)}}">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('firstname')? 'has-error':''}}">
                                <label for="firstname" class="col-md-12 control-label pl-0"><b>Firstname</b></label>
                                <input type="text" class="form-control empty" name="firstname" required="required" value="{{old('firstname')}}" placeholder="Enter account firstname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('lastname')? 'has-error':''}}">
                                <label for="lastname" class="col-md-12 control-label pl-0"><b>Lastname</b></label>
                                <input type="text" class="form-control empty" name="lastname" required="required" value="{{old('lastname')}}" placeholder="Enter account lastname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                <label for="email" class="col-md-12 control-label pl-0"><b>Email Address</b></label>
                                <input type="email" class="form-control empty" name="email" value="{{old('email')}}" placeholder="Enter account email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('mobile')? 'has-error':''}}">
                                <label for="mobile" class="col-md-12 control-label pl-0"><b>Mobile Number</b></label>
                                <input type="tel" class="form-control empty" name="mobile" required="required" value="{{old('mobile')}}" placeholder="Enter account phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('username')? 'has-error':''}}">
                                <label for="username" class="col-md-12 control-label pl-0"><b>Username</b></label>
                                <input type="text" class="form-control empty" name="username" required="required" value="{{old('username')}}" placeholder="Enter account username">
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('gender')? 'has-error':''}}">
                                <label for="gender" class="col-md-12 control-label pl-0"><b>Gender</b></label>
                                <select name="gender" class="form-control" required="required" title="Select an Option...">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('position')? 'has-error':''}}">
                                <label for="position" class="col-md-12 control-label pl-0"><b>Position</b></label>
                                <input type="text" class="form-control empty" name="position" value="{{old('position')}}" placeholder="Enter account position">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('type')? 'has-error':''}}">
                                <label for="type" class="col-md-12 control-label pl-0"><b>Account Type</b></label>
                                <select name="type" class="form-control" required="required" title="Select an Option...">
                                    <option value="0">Frontend User</option>
                                    <option value="1">Administrator User</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-muted">Address</label>
                                <textarea name="address" placeholder="Enter address" class="form-control" style="height:50">{{old('address')}}</textarea>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-muted">About</label>
                                <textarea class="form-control d-none d-md-none description" name="about">{!!old('about')!!}</textarea>
                                <textarea name="about" placeholder="About the User" style="min-height:50px;height:150px" class="form-control texteditor description">{{old('about') }}</textarea>
                                @if ($errors->has('about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                @endif
                            </div>                            
                        </div>                            
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group {{$errors->has('image')? 'has-error':''}}">
                                <label for="picture" class="col-md-12 control-label pl-0"><b>Profile Picture</b></label>
                                <input id="picture-user-new" class="d-none" name="image" value="{{old('image',0)}}">
                                <p>Click the bordered line below to select file</p>
                                <div class="droperly preview-images-zone my-5" data-target="#file-upload-browse" data-parent="panel-new-user" data-input="picture-user-new" data-toggle="modal" ></div>
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('password')? 'has-error':''}}">
                                <label for="password" class="col-md-12 control-label pl-0"><b>Create Password</b></label>
                                <input type="password" class="form-control empty" name="password" required="required" value="" placeholder="Create a password for the user">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('mobile')? 'has-error':''}}">
                                <label for="confirm" class="col-md-12 control-label pl-0"><b>Confirm Password</b></label>
                                <input type="password" class="form-control empty" name="confirm" required="required" value="" placeholder="Confirm password for teh user">
                            </div>
                        </div>
                        <div class="col-12 row py-4">                        
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">                   
                                    <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                        <input type="radio" name="access" data-id="user-access-grant" value="0" class="custom-control-input" id="user-access-grant">
                                        <label class="custom-control-label" for="user-access-grant">Deny access to user Account</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                        <input type="radio" name="access" data-id="user-access-deny" checked value="1" class="custom-control-input" id="user-access-deny">
                                        <label class="custom-control-label" for="user-access-deny">Grant access to user Account</label>
                                    </div>                       
                                </div>                       
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="pull-right"><button type="submit" class="btn btn-primary publish submit"><i class="far fa-paper-plane mr-2"></i>Publish Post</button></div>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
        <div id="users" data-action="edit" style="display:none">
            <header class="slidePanel-header overlay" style="background-image: url({{asset('medias/images/placeholder.png')}});')">
                <div class="overlay-panel overlay-background vertical-align">
                    <div class="slidePanel-actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-pure btn-inverse icon wb-trash" aria-hidden="true"></button>
                            <button type="button" class="btn btn-pure btn-inverse slidepanel-close icon wb-close" aria-hidden="true"></button>
                        </div>
                    </div>
                    <div class="vertical-align-middle">
                        <a class="avatar" href="javascript:void(0)">
                            <img src="{{asset($user->image->path.$user->image->name)}}" alt="...">
                        </a>
                        <h3 class="name">Modify {{$action->command_trimed_cap}} {{empty($action->command)?$action->action_trimed_cap:$action->item_trimed_cap}} Profile</h3>
                    </div>
                </div>
            </header>
            <div class="slidePanel-inner py-50">
                <form class="form-horizontal col-md-12" method="POST" action="" data-action="{{route('office.action.modify',[$action->action,''])}}">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('firstname')? 'has-error':''}}">
                                <label for="firstname" class="col-md-12 control-label pl-0"><b>Firstname</b></label>
                                <input type="text" class="form-control firstname" name="firstname" required="required" value="{{old('firstname')}}" placeholder="Enter account firstname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('lastname')? 'has-error':''}}">
                                <label for="lastname" class="col-md-12 control-label pl-0"><b>Lastname</b></label>
                                <input type="text" class="form-control lastname" name="lastname" required="required" value="{{old('lastname')}}" placeholder="Enter account lastname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                <label for="email" class="col-md-12 control-label pl-0"><b>Email Address</b></label>
                                <input type="email" class="form-control email" name="email" required="required" value="{{old('address')}}" placeholder="Enter account email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('mobile')? 'has-error':''}}">
                                <label for="mobile" class="col-md-12 control-label pl-0"><b>Mobile Number</b></label>
                                <input type="tel" class="form-control mobile" name="mobile" required="required" value="{{old('mobile')}}" placeholder="Enter account phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('username')? 'has-error':''}}">
                                <label for="username" class="col-md-12 control-label pl-0"><b>Username</b></label>
                                <input type="text" class="form-control username" name="username" required="required" value="{{old('username')}}" placeholder="Enter account username">
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('page')? 'has-error':''}}">
                                <label for="gender" class="col-md-12 control-label pl-0"><b>Gender</b></label>
                                <select name="gender" class="form-control gender" required="required" title="Select an Option...">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('page')? 'has-error':''}}">
                                <label for="position" class="col-md-12 control-label pl-0"><b>Position</b></label>
                                <input type="text" class="form-control position" name="position" value="{{old('position')}}" placeholder="Enter account position">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('page')? 'has-error':''}}">
                                <label for="type" class="col-md-12 control-label pl-0"><b>Account Type</b></label>
                                <select name="type" class="form-control" required="required" title="Select an Option...">
                                    <option value="0">Frontend User</option>
                                    <option value="1">Administrator User</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-muted">Address</label>
                                <textarea name="address" placeholder="Enter address" class="form-control address" style="height:50">{{old('address')}}</textarea>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-muted">About</label>
                                <textarea class="form-control d-none d-md-none description about" name="about">{!!old('about')!!}</textarea>
                                <textarea name="about" placeholder="About the User" style="min-height:50px;height:150px" class="form-control texteditor description about">{!!old('about')!!}</textarea>
                                @if ($errors->has('about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                @endif
                            </div>                            
                        </div>                            
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group {{$errors->has('image')? 'has-error':''}}">
                                <label for="picture" class="col-md-12 control-label pl-0"><b>Profile Picture</b></label>
                                <input id="picture-user-edit" class="d-none picture" name="image" value="{{old('image',0)}}">
                                <p>Click the bordered line below to select file</p>
                                <div class="droperly preview-images-zone my-5" data-target="#file-upload-browse" data-parent="panel-edit-user" data-input="picture-user-edit" data-toggle="modal" ></div>
                            </div>
                        </div>
                        <div class="col-12 row py-4">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                        <input type="radio" name="access" data-id="user-access-deny" value="0" class="custom-control-input access-false" id="user-access-deny">
                                        <label class="custom-control-label" for="user-access-deny">Deny access to user Account</label>
                                    </div>                       
                                </div>                       
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">                   
                                    <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                        <input type="radio" name="access" data-id="user-access-grant" checked value="1" class="custom-control-input access-true" id="user-access-grant">
                                        <label class="custom-control-label" for="user-access-grant">Grant access to user Account</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="pull-right"><button type="submit" class="btn btn-primary publish submit"><i class="far fa-paper-plane mr-2"></i>Save Account</button></div>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>        
        <div id="users" data-action="roles" style="display:none">
            <header class="slidePanel-header overlay" style="background-image: url({{asset('medias/images/placeholder.png')}});')">
                <div class="overlay-panel overlay-background vertical-align">
                    <div class="slidePanel-actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-pure btn-inverse icon wb-trash" aria-hidden="true"></button>
                            <button type="button" class="btn btn-pure btn-inverse slidepanel-close icon wb-close" aria-hidden="true"></button>
                        </div>
                    </div>
                    <div class="vertical-align-middle">
                        <a class="avatar" href="javascript:void(0)">
                            <img src="{{asset($user->image->path.$user->image->name)}}" alt="...">
                        </a>
                        <h3 class="name">Manage {{$action->command_trimed_cap}} {{empty($action->command)?$action->action_trimed_cap:$action->item_trimed_cap}} Roles</h3>
                    </div>
                </div>
            </header>
            <div class="slidePanel-inner py-50">
                <form class="form-horizontal col-md-12" method="POST" action="" data-action="{{route('office.action.modify',['roles',''])}}">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-12 row py-4 roles p-0">
                            
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="pull-right"><button type="submit" class="btn btn-primary publish submit"><i class="far fa-paper-plane mr-2"></i>Save Account</button></div>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>        
        <div id="users" data-action="password" style="display:none">
            <header class="slidePanel-header overlay" style="background-image: url({{asset('medias/images/placeholder.png')}});')">
                <div class="overlay-panel overlay-background vertical-align">
                    <div class="slidePanel-actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-pure btn-inverse icon wb-trash" aria-hidden="true"></button>
                            <button type="button" class="btn btn-pure btn-inverse slidepanel-close icon wb-close" aria-hidden="true"></button>
                        </div>
                    </div>
                    <div class="vertical-align-middle">
                        <a class="avatar" href="javascript:void(0)">
                            <img src="{{asset($user->image->path.$user->image->name)}}" alt="...">
                        </a>
                        <h3 class="name">Update {{$action->command_trimed_cap}} {{empty($action->command)?$action->action_trimed_cap:$action->item_trimed_cap}} Password</h3>
                    </div>
                </div>
            </header>
            <div class="slidePanel-inner py-50">
                <form class="form-horizontal col-md-12" method="POST" action="" data-action="{{route('office.action.item.command',[$action->action,'password',''])}}">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group {{$errors->has('password')? 'has-error':''}}">
                                <label for="password" class="col-md-12 control-label pl-0"><b>Password</b></label>
                                <input type="password" class="form-control empty" name="password" value="" placeholder="Create Password">
                            </div>
                        </div>
                        <div class="col-md-12 pt-20">
                            <div class="form-group {{$errors->has('confirm')? 'has-error':''}}">
                                <label for="confirm" class="col-md-12 control-label pl-0"><b>Confirm Password</b></label>
                                <input type="password" class="form-control empty" name="confirm" value="" placeholder="Confirm Password">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="pull-right"><button type="submit" class="btn btn-primary publish submit"><i class="far fa-paper-plane mr-2"></i>Update Password</button></div>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
        @elseif(in_array($action->action,$apps) && $action->action=='students')
        <div id="students" data-action="new" style="display:none">
            <header class="slidePanel-header overlay" style="background-image: url({{asset('medias/images/placeholder.png')}});')">
                <div class="overlay-panel overlay-background vertical-align">
                    <div class="slidePanel-actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-pure btn-inverse icon wb-trash" aria-hidden="true"></button>
                            <button type="button" class="btn btn-pure btn-inverse slidepanel-close icon wb-close" aria-hidden="true"></button>
                        </div>
                    </div>
                    <div class="vertical-align-middle">
                        <a class="avatar" href="javascript:void(0)">
                            <img src="{{asset($user->image->path.$user->image->name)}}" alt="...">
                        </a>
                        <h3 class="name">Create {{$action->command_trimed_cap}} {{empty($action->command)?$action->action_trimed_cap:$action->item_trimed_cap}}</h3>
                    </div>
                </div>
            </header>
            <div class="slidePanel-inner py-50">
                <form class="form-horizontal col-md-12" method="POST" action="{{route('office.action.create',$action->action)}}">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('firstname')? 'has-error':''}}">
                                <label for="firstname" class="col-md-12 control-label pl-0"><b>Firstname</b></label>
                                <input type="text" class="form-control empty" name="firstname" required="required" value="{{old('firstname')}}" placeholder="Enter account firstname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('lastname')? 'has-error':''}}">
                                <label for="lastname" class="col-md-12 control-label pl-0"><b>Lastname</b></label>
                                <input type="text" class="form-control empty" name="lastname" required="required" value="{{old('lastname')}}" placeholder="Enter account lastname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                <label for="email" class="col-md-12 control-label pl-0"><b>Email Address</b></label>
                                <input type="email" class="form-control empty" name="email" value="{{old('email')}}" placeholder="Enter account email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('mobile')? 'has-error':''}}">
                                <label for="mobile" class="col-md-12 control-label pl-0"><b>Mobile Number</b></label>
                                <input type="tel" class="form-control empty" minlength="11" maxlength="11" name="mobile" required="required" value="{{old('mobile')}}" placeholder="Enter account phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('username')? 'has-error':''}}">
                                <label for="username" class="col-md-12 control-label pl-0"><b>Username</b></label>
                                <input type="text" class="form-control empty" name="username" value="{{old('username')}}" placeholder="Enter account username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('gender')? 'has-error':''}}">
                                <label for="gender" class="col-md-12 control-label pl-0"><b>Gender</b></label>
                                <select name="gender" class="form-control" required="required">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="marital" class="col-md-12 control-label pl-0"><b>Marital Status <small class="text-purple">*</small></b></label>
                                <select name="marital" class="form-control">
                                    <option value="Single" {{(old('marital')=='Single')?'selected':''}}>Single</option>
                                    <option value="Married" {{(old('marital')=='Married')?'selected':''}}>Married</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="birthday" class="col-md-12 control-label pl-0"><b>Date of Birth <small class="text-purple">*</small></b></label>
                                <input name="birthday" type="text" value="{{old('birthday')}}" class="form-control datepicker full" placeholder="Select Date">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" class="col-md-12 control-label pl-0"><b>House Address <small class="text-purple">*</small></b></label>
                                <input name="address" type="text" value="{{old('address')}}" class="form-control address" placeholder="Enter house or block number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="location" class="col-md-12 control-label pl-0"><b>Select Address Landmark, Street Name or Neasrest Bus Stop <small class="text-purple">*</small></b></label>
                                <input name="location" type="text" value="{{old('location')}}" class="form-control location location-search" placeholder="Enter address landmark">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="matric" class="col-md-12 control-label pl-0"><b>Matric Number <small class="text-purple">*</small></b></label>
                                <input name="matric" type="text" value="{{old('matric')}}" class="form-control matric" placeholder="Enter matric number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="level" class="col-md-12 control-label pl-0"><b>Level <small class="text-purple">*</small></b></label>
                                <select name="level" class="form-control level">
                                    <option value="100" {{(old('level')=='100')?'selected':''}}>100</option>
                                    <option value="200" {{(old('level')=='200')?'selected':''}}>200</option>
                                    <option value="300" {{(old('level')=='300')?'selected':''}}>300</option>
                                    <option value="400" {{(old('level')=='400')?'selected':''}}>400</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('faculty')? 'has-error':''}}">
                                <label for="faculty" class="col-md-12 control-label pl-0"><b>Faculty</b></label>
                                @php $faculties = DB::table('faculties')->get();@endphp
                                <select name="faculty" class="panel-drop-selectpicker form-control faculty" data-select="selectpicker" data-live-search="true"title="Select an option..." data-width="100%">
                                    @foreach($faculties as $faculty)
                                        <option value="{{$faculty->id}}" data-id="{{$faculty->name}}" data-tokens="{{$faculty->name}}" {{($faculty->name==old('faculty'))?'selected':''}}>{{$faculty->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('department')? 'has-error':''}}">
                                <label for="course" class="col-md-12 control-label pl-0"><b>Course</b></label>
                                @php $departments = DB::table('departments')->get() @endphp
                                <select name="department" class="panel-drop-selectpicker form-control department" data-select="selectpicker" data-live-search="true"title="Select an option..." data-width="100%">
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}" data-id="{{$department->id}}" data-tokens="{{$department->name}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-muted">About</label>
                                <textarea class="form-control d-none d-md-none description" name="about">{!!old('about')!!}</textarea>
                                <textarea name="about" placeholder="About the User" style="min-height:50px;height:150px" class="form-control texteditor description">{{old('about') }}</textarea>
                                @if ($errors->has('about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                @endif
                            </div>                            
                        </div>                            
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group {{$errors->has('image')? 'has-error':''}}">
                                <label for="picture" class="col-md-12 control-label pl-0"><b>Profile Picture</b></label>
                                <input id="picture-user-new" class="d-none" name="image" value="{{old('image',0)}}">
                                <p>Click the bordered line below to select file</p>
                                <div class="droperly preview-images-zone my-5" data-target="#file-upload-browse" data-parent="panel-new-artisan" data-input="picture-user-new" data-toggle="modal" ></div>
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('password')? 'has-error':''}}">
                                <label for="password" class="col-md-12 control-label pl-0"><b>Create Password</b></label>
                                <input type="password" class="form-control empty" name="password" required="required" value="" placeholder="Create a password for the user">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('mobile')? 'has-error':''}}">
                                <label for="confirm" class="col-md-12 control-label pl-0"><b>Confirm Password</b></label>
                                <input type="password" class="form-control empty" name="confirm" required="required" value="" placeholder="Confirm password for teh user">
                            </div>
                        </div>
                        <div class="col-12 row py-4">                        
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">                   
                                    <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                        <input type="radio" name="access" data-id="user-access-grant" value="0" class="custom-control-input" id="user-access-grant">
                                        <label class="custom-control-label" for="user-access-grant">Deny access to user Account</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                        <input type="radio" name="access" data-id="user-access-deny" checked value="1" class="custom-control-input" id="user-access-deny">
                                        <label class="custom-control-label" for="user-access-deny">Grant access to user Account</label>
                                    </div>                       
                                </div>                       
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="pull-right"><button type="submit" class="btn btn-primary publish submit"><i class="far fa-paper-plane mr-2"></i>Create Student</button></div>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
        <div id="students" data-action="edit" style="display:none">
            <header class="slidePanel-header overlay" style="background-image: url({{asset('medias/images/placeholder.png')}});')">
                <div class="overlay-panel overlay-background vertical-align">
                    <div class="slidePanel-actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-pure btn-inverse icon wb-trash" aria-hidden="true"></button>
                            <button type="button" class="btn btn-pure btn-inverse slidepanel-close icon wb-close" aria-hidden="true"></button>
                        </div>
                    </div>
                    <div class="vertical-align-middle">
                        <a class="avatar" href="javascript:void(0)">
                            <img src="{{asset($user->image->path.$user->image->name)}}" alt="...">
                        </a>
                        <h3 class="name">Modify {{$action->command_trimed_cap}} {{empty($action->command)?$action->action_trimed_cap:$action->item_trimed_cap}} Profile</h3>
                    </div>
                </div>
            </header>
            <div class="slidePanel-inner py-50">
                <form class="form-horizontal col-md-12" method="POST" action="" data-action="{{route('office.action.modify',[$action->action,''])}}">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('firstname')? 'has-error':''}}">
                                <label for="firstname" class="col-md-12 control-label pl-0"><b>Firstname</b></label>
                                <input type="text" class="form-control empty firstname" name="firstname" required="required" value="{{old('firstname')}}" placeholder="Enter account firstname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('lastname')? 'has-error':''}}">
                                <label for="lastname" class="col-md-12 control-label pl-0"><b>Lastname</b></label>
                                <input type="text" class="form-control empty lastname" name="lastname" required="required" value="{{old('lastname')}}" placeholder="Enter account lastname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                <label for="email" class="col-md-12 control-label pl-0"><b>Email Address</b></label>
                                <input type="email" class="form-control empty email" name="email" value="{{old('email')}}" placeholder="Enter account email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('mobile')? 'has-error':''}}">
                                <label for="mobile" class="col-md-12 control-label pl-0"><b>Mobile Number</b></label>
                                <input type="tel" class="form-control empty mobile" minlength="11" maxlength="11" name="mobile" required="required" value="{{old('mobile')}}" placeholder="Enter account phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('username')? 'has-error':''}}">
                                <label for="username" class="col-md-12 control-label pl-0"><b>Username</b></label>
                                <input type="text" class="form-control empty username" name="username" value="{{old('username')}}" placeholder="Enter account username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('gender')? 'has-error':''}}">
                                <label for="gender" class="col-md-12 control-label pl-0"><b>Gender</b></label>
                                <select name="gender" class="form-control gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="marital" class="col-md-12 control-label pl-0"><b>Marital Status <small class="text-purple">*</small></b></label>
                                <select name="marital" class="form-control marital">
                                    <option value="Single" {{(old('marital')=='Single')?'selected':''}}>Single</option>
                                    <option value="Married" {{(old('marital')=='Married')?'selected':''}}>Married</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="birthday" class="col-md-12 control-label pl-0"><b>Date of Birth <small class="text-purple">*</small></b></label>
                                <input name="birthday" type="text" value="{{old('birthday')}}" class="form-control datepicker full birthday" placeholder="Select Date">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" class="col-md-12 control-label pl-0"><b>Address <small class="text-purple">*</small></b></label>
                                <input name="address" type="text" value="{{old('address')}}" class="form-control address" placeholder="Enter house or block number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="location" class="col-md-12 control-label pl-0"><b>Location <small class="text-purple">*</small></b></label>
                                <input name="location" type="text" value="{{old('location')}}" class="form-control location location-search" placeholder="Enter address landmark">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="matric" class="col-md-12 control-label pl-0"><b>Matric Number <small class="text-purple">*</small></b></label>
                                <input name="matric" type="text" value="{{old('matric')}}" class="form-control matric" placeholder="Enter matric number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="level" class="col-md-12 control-label pl-0"><b>Level <small class="text-purple">*</small></b></label>
                                <select name="level" class="form-control level">
                                    <option value="100" {{(old('level')=='100')?'selected':''}}>100</option>
                                    <option value="200" {{(old('level')=='200')?'selected':''}}>200</option>
                                    <option value="300" {{(old('level')=='300')?'selected':''}}>300</option>
                                    <option value="400" {{(old('level')=='400')?'selected':''}}>400</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('faculty')? 'has-error':''}}">
                                <label for="faculty" class="col-md-12 control-label pl-0"><b>Faculty</b></label>
                                @php $faculties = DB::table('faculties')->get();@endphp
                                <select name="faculty" class="panel-drop-selectpicker form-control faculty" data-select="selectpicker" data-live-search="true"title="Select an option..." data-width="100%">
                                    @foreach($faculties as $faculty)
                                        <option value="{{$faculty->id}}" data-id="{{$faculty->name}}" data-tokens="{{$faculty->name}}" {{($faculty->name==old('faculty'))?'selected':''}}>{{$faculty->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('department')? 'has-error':''}}">
                                <label for="course" class="col-md-12 control-label pl-0"><b>Course</b></label>
                                @php $departments = DB::table('departments')->get() @endphp
                                <select name="department" class="panel-drop-selectpicker form-control department" data-select="selectpicker" data-live-search="true"title="Select an option..." data-width="100%">
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}" data-id="{{$department->id}}" data-tokens="{{$department->name}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-muted">About</label>
                                <textarea class="form-control about" name="about">{!!old('about')!!}</textarea>
                                @if ($errors->has('about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                @endif
                            </div>                            
                        </div>                            
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group {{$errors->has('image')? 'has-error':''}}">
                                <label for="picture" class="col-md-12 control-label pl-0"><b>Profile Picture</b></label>
                                <input id="picture-user-new" class="d-none image" name="image" value="{{old('image',0)}}">
                                <p>Click the bordered line below to select file</p>
                                <div class="droperly preview-images-zone my-5" data-target="#file-upload-browse" data-parent="panel-edit-artisan" data-input="picture-user-new" data-toggle="modal" ></div>
                            </div>
                        </div>
                        <div class="col-12 row py-4">                        
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">                   
                                    <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                        <input type="radio" name="access" data-id="user-access-grant" value="0" class="custom-control-input" id="user-access-grant">
                                        <label class="custom-control-label" for="user-access-grant">Deny access to user Account</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                        <input type="radio" name="access" data-id="user-access-deny" checked value="1" class="custom-control-input" id="user-access-deny">
                                        <label class="custom-control-label" for="user-access-deny">Grant access to user Account</label>
                                    </div>                       
                                </div>                       
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="pull-right"><button type="submit" class="btn btn-primary publish submit"><i class="far fa-paper-plane mr-2"></i>Save Student</button></div>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
        <div id="students" data-action="view" style="display:none">
            <header class="slidePanel-header bg-success text-left pb-3">
                <div class="slidePanel-actions" aria-label="actions" role="group">
                    <button type="button" class="btn btn-pure btn-inverse slidepanel-close actions-top icon wb-close" aria-hidden="true"></button>
                    <div class="btn-group actions-bottom" role="group">
                        <button type="button" class="btn btn-pure btn-inverse icon wb-chevron-left slidepanel-posts-previous" aria-hidden="true"></button>
                        <button type="button" class="btn btn-pure btn-inverse icon wb-chevron-right slidepanel-posts-next" aria-hidden="true"></button>
                    </div>
                </div>
                <h1 class="title pb-5"></h1>
                <div class="forum-header author py-5">
                    <a class="avatar" href="javascript:void(0)">
                        <img class="image" src="" alt="...">
                        <div class="rating text-light d-inline-block py-10 pl-5" style="font-size: 16px;">
                            <span class="review text-light d-inline-block py-10 pr-5"></span> 
                        </div>
                        <div class="time text-light d-inline-block py-10 pl-5" style="font-size: 16px;"></div>
                    </a>
                </div>
                <h5 class="wallet pb-5 text-light"></h5>
            </header>
            <div class="slidePanel-inner pb-50">
                <table class="user-info w-p100">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="btn-group w-p100" role="group" aria-label="Group of buttons">
                                    <button type="button" class="btn btn-outline-secondary btn-sm pending">Pending</button>
                                    <button type="button" class="btn btn-outline-success btn-sm verified">Verified</button>
                                    <button type="button" class="btn btn-outline-primary btn-sm processing">Processing</button>
                                    <button type="button" class="btn btn-outline-danger btn-sm cancelled">Cancelled</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h3 class="bg-secondary text-light text-left py-1 px-2 m-0 w-p100"><small>Student's Detail</small></h3>
                            </td>
                        </tr>
                        <tr class="email">
                            <td class="info-label">Email: </td>
                            <td class="info-email"></td>
                        </tr>
                        <tr class="mobile">
                            <td class="info-label">Phone: </td>
                            <td class="info-mobile"></td>
                        </tr>
                        <tr class="gender">
                            <td class="info-label">Gender: </td>
                            <td class="info-gender"></td>
                        </tr>
                        <tr class="marital">
                            <td class="info-label">Marital: </td>
                            <td class="info-marital"></td>
                        </tr>
                        <tr class="birthday">
                            <td class="info-label">Birthday: </td>
                            <td class="info-birthday"></td>
                        </tr>
                        <tr class="state">
                            <td class="info-label">State: </td>
                            <td class="info-state"></td>
                        </tr>
                        <tr class="address">
                            <td class="info-label">Address: </td>
                            <td class="info-address"></td>
                        </tr>
                        <tr class="about">
                            <td class="info-label">About: </td>
                            <td class="info-about"></td>
                        </tr>
                        <tr class="default">
                            <td class="info-label">Default Password: </td>
                            <td class="info-default"></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <h3 class="bg-secondary text-light text-left py-1 px-2 m-0 w-p100"><small>Eduction Detail</small></h3>
                            </td>
                        </tr>

                        <tr class="matric">
                            <td class="info-label">Matric: </td>
                            <td class="info-matric"></td>
                        </tr>

                        <tr class="level">
                            <td class="info-label">Level: </td>
                            <td class="info-level"></td>
                        </tr>
                        <tr class="faculty">
                            <td class="info-label">Faculty: </td>
                            <td class="info-faculty"></td>
                        </tr>
                        <tr class="course">
                            <td class="info-label">Course: </td>
                            <td class="info-course"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h3 class="bg-secondary text-light text-left py-1 px-2 m-0 w-p100"><small>Student's Verification</small></h3>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <form method="POST" action="{{route('office.action.modify',[$action->action,''])}}" data-action="{{route('office.action.modify',[$action->action,''])}}">
                                    <div class="row">
                                        {{ csrf_field() }}
                                        <div class="col-12 row py-4 m-0 px-0 verification">                        
                                            <div class="col-lg-3 col-md-3">
                                                <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                                    <input type="radio" name="status" data-id="status-pending" checked value="0" class="custom-control-input status-change" id="status-pending">
                                                    <label class="custom-control-label" for="status-pending">Pending</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                                    <input type="radio" name="status" data-id="status-verified" value="1" class="custom-control-input status-change" id="status-verified">
                                                    <label class="custom-control-label" for="status-verified">Verified</label>
                                                </div>                       
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                                    <input type="radio" name="status" data-id="status-processing" value="2" class="custom-control-input status-change" id="status-processing">
                                                    <label class="custom-control-label" for="status-processing">Processing</label>
                                                </div>                       
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <div class="custom-control custom-switch" style="line-height: 25x !important;">
                                                    <input type="radio" name="status" data-id="status-cancelled" value="3" class="custom-control-input status-change" id="status-cancelled">
                                                    <label class="custom-control-label" for="status-cancelled">Cancelled</label>
                                                </div>                       
                                            </div>
                                        </div>
                                        <div class="col-12 py-4">                        
                                            <label class="d-block text-left">Status Comment</label>
                                            <textarea name="comment" class="form-control comment p-2" style="height:120px !important" placeholder="Prgoress status comment"></textarea>
                                        </div>
                                        <div class="col-12 py-4 m-0">                        
                                            <button class="btn btn-primary" data-dismiss="modal" type="submit"><i class="far fa-save mr-2"></i>Update Status</button>
                                        </div>
                                    </div>

                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        @elseif(in_array($action->action,$apps) && $action->action=='cards')
        <div id="cards" data-action="new" style="display:none">
            @php $series = DB::table('cards')->orderBy('id','DESC')->value('series'); @endphp
            <header class="slidePanel-header overlay" style="background-image: url({{asset('medias/images/placeholder.png')}});')">
                <div class="overlay-panel overlay-background vertical-align">
                    <div class="slidePanel-actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-pure btn-inverse icon wb-trash" aria-hidden="true"></button>
                            <button type="button" class="btn btn-pure btn-inverse slidepanel-close icon wb-close" aria-hidden="true"></button>
                        </div>
                    </div>
                    <div class="vertical-align-middle">
                        <a class="avatar" href="javascript:void(0)">
                            <img src="{{asset($user->image->path.$user->image->name)}}" alt="...">
                        </a>
                        <h3 class="name">Generate Result PIN</h3>
                    </div>
                </div>
            </header>
            <div class="slidePanel-inner py-50">
                <form class="form-horizontal col-md-12" method="POST" action="{{route('office.action.create',$action->action)}}">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="series" class="col-md-12 control-label pl-0"><b>PIN Series <small class="text-purple">*</small></b></label>
                                <input name="series" type="text"readonly disabled value="{{intval($series)+1}}" class="form-control address" placeholder="PIN generation series">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group {{$errors->has('count')? 'has-error':''}}">
                                <label for="count" class="col-md-12 control-label pl-0"><b>PIN Length?</b></label>
                                <select name="count" class="form-control" required="required">
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12" selected="selected">12</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group {{$errors->has('serial')? 'has-error':''}}">
                                <label for="serial" class="col-md-12 control-label pl-0"><b>Serial Length?</b></label>
                                <select name="serial" class="form-control" required="required">
                                    <option value="10">10</option>
                                    <option value="20" selected="selected">16</option>
                                    <option value="30">20</option>
                                    <option value="30">25</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group {{$errors->has('generate')? 'has-error':''}}">
                                <label for="generate" class="col-md-12 control-label pl-0"><b>How Many PIN?</b></label>
                                <select name="generate" class="form-control" required="required">
                                    <option value="21">21</option>
                                    <option value="42">42</option>
                                    <option value="84">84</option>
                                    <option value="168">168</option>
                                    <option value="336">336</option>
                                    <option value="672">672</option>
                                    <option value="1000">1000</option>
                                    <option value="5000">5000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="pull-right"><button type="submit" class="btn btn-primary publish submit"><i class="far fa-paper-plane mr-2"></i>Generate PIN</button></div>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
        @endif
        @if($user->id==0 || $user->id==1)
        <div id="settings" data-action="edit" style="display:none">
            <header class="slidePanel-header overlay" style="background-image: url({{asset('medias/images/placeholder.png')}});')">
                <div class="overlay-panel overlay-background vertical-align">
                    <div class="slidePanel-actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-pure btn-inverse icon wb-trash" aria-hidden="true"></button>
                            <button type="button" class="btn btn-pure btn-inverse slidepanel-close icon wb-close" aria-hidden="true"></button>
                        </div>
                    </div>
                    <div class="vertical-align-middle">
                        <a class="avatar" href="javascript:void(0)">
                            <img src="{{asset($user->image->path.$user->image->name)}}" alt="...">
                        </a>
                        <h3 class="name">Application Settings</h3>
                    </div>
                </div>
            </header>
            <div class="slidePanel-inner py-50">
                <form class="form-horizontal col-md-12" method="POST" action="{{route('office.action.modify',['settings',$settings->id])}}">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('app')? 'has-error':''}}">
                                <label for="app" class="col-md-12 control-label pl-0"><b>Application Name</b></label>
                                <input type="text" class="form-control app" name="app" required="required" value="{{old('app')}}" placeholder="Enter app name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('company')? 'has-error':''}}">
                                <label for="company" class="col-md-12 control-label pl-0"><b>Company Name</b></label>
                                <input type="text" class="form-control company" name="company" required="required" value="{{old('company')}}" placeholder="Enter company name">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-muted">Keywords (comma separeted)</label>
                                <textarea name="keywords" placeholder="Enter website keywords" class="form-control keywords" style="height:150px">{{old('keywords')}}</textarea>
                                @if ($errors->has('keywords'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keywords') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-muted">Description</label>
                                <textarea name="description" placeholder="Enter website description" class="form-control description" style="height:50">{{old('description')}}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if($user->id==0||$user->username=='Johnricho')
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('data')? 'has-error':''}}">
                                <label for="data" class="col-md-12 control-label pl-0"><b>Database Communication</b></label>
                                <select name="data" class="form-control data" required="required" title="Select an Option...">
                                    <option value="api">API</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('platform')? 'has-error':''}}">
                                <label for="platform" class="col-md-12 control-label pl-0"><b>Platform</b></label>
                                <input type="text" class="form-control platform" name="platform" required="required" value="{{old('platform')}}" placeholder="Enter platform type">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-muted">Application Data (comma separeted)</label>
                                <textarea name="application" placeholder="Enter application data" class="form-control application" style="height:50">{{old('application')}}</textarea>
                                @if ($errors->has('application'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-muted">Default Roles (comma separeted)</label>
                                <textarea name="roles" placeholder="Enter application roles" class="form-control roles" style="height:150px">{{old('roles')}}</textarea>
                                @if ($errors->has('roles'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roles') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('devName')? 'has-error':''}}">
                                <label for="devName" class="col-md-12 control-label pl-0"><b>Developer Name</b></label>
                                <input type="text" class="form-control devName" name="devName" required="required" value="{{old('devName')}}" placeholder="Enter platform developer name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('devMail')? 'has-error':''}}">
                                <label for="devMail" class="col-md-12 control-label pl-0"><b>Developer Email</b></label>
                                <input type="text" class="form-control devMail" name="devMail" required="required" value="{{old('devMail')}}" placeholder="Enter platform developer email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('devMobile')? 'has-error':''}}">
                                <label for="devMobile" class="col-md-12 control-label pl-0"><b>Developer Mobile</b></label>
                                <input type="text" class="form-control devMobile" name="devMobile" required="required" value="{{old('devMobile')}}" placeholder="Enter platform developer mobile">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('devWebsite')? 'has-error':''}}">
                                <label for="devWebsite" class="col-md-12 control-label pl-0"><b>Developer Website</b></label>
                                <input type="text" class="form-control devWebsite" name="devWebsite" required="required" value="{{old('devWebsite')}}" placeholder="Enter platform developer website">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group {{$errors->has('devAddress')? 'has-error':''}}">
                                <label for="devAddress" class="col-md-12 control-label pl-0"><b>Developer Address</b></label>
                                <input type="text" class="form-control devAddress" name="devAddress" required="required" value="{{old('devAddress')}}" placeholder="Enter platform developer address">
                            </div>
                        </div>
                        @endif
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                <label for="email" class="col-md-12 control-label pl-0"><b>Company Email</b></label>
                                <input type="email" class="form-control email" name="email" required="required" value="{{old('address')}}" placeholder="Enter account email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('mobile')? 'has-error':''}}">
                                <label for="mobile" class="col-md-12 control-label pl-0"><b>Company Number</b></label>
                                <input type="tel" class="form-control mobile" name="mobile" required="required" value="{{old('mobile')}}" placeholder="Enter account phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('logo')? 'has-error':''}}">
                                <label for="logo" class="col-md-12 control-label pl-0"><b>Application Logo</b></label>
                                <input type="text" class="form-control logo" name="logo" required="required" value="{{old('logo')}}" placeholder="Enter application logo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('icon')? 'has-error':''}}">
                                <label for="icon" class="col-md-12 control-label pl-0"><b>Application Icon</b></label>
                                <input type="text" class="form-control icon" name="icon" required="required" value="{{old('icon')}}" placeholder="Enter application icon">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('theme')? 'has-error':''}}">
                                <label for="theme" class="col-md-12 control-label pl-0"><b>Application Theme</b></label>
                                <select name="theme" class="form-control theme" required="required" title="Select an Option...">
                                    <option value="main">Default Theme</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('media')? 'has-error':''}}">
                                <label for="media" class="col-md-12 control-label pl-0"><b>Media Url</b></label>
                                <input type="text" class="form-control media" name="media" required="required" value="{{old('media')}}" placeholder="Enter application media url">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('root')? 'has-error':''}}">
                                <label for="root" class="col-md-12 control-label pl-0"><b>Root Url</b></label>
                                <input type="text" class="form-control root" name="root" required="required" value="{{old('root')}}" placeholder="Enter application root url">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('server')? 'has-error':''}}">
                                <label for="root" class="col-md-12 control-label pl-0"><b>Server Url</b></label>
                                <input type="text" class="form-control server" name="server" required="required" value="{{old('server')}}" placeholder="Enter application server url">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('api')? 'has-error':''}}">
                                <label for="api" class="col-md-12 control-label pl-0"><b>API Url</b></label>
                                <input type="text" class="form-control api" name="api" required="required" value="{{old('api')}}" placeholder="Enter application api url">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('office')? 'has-error':''}}">
                                <label for="office" class="col-md-12 control-label pl-0"><b>Office Url</b></label>
                                <input type="text" class="form-control office" name="office" required="required" value="{{old('office')}}" placeholder="Enter application office url">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('slide')? 'has-error':''}}">
                                <label for="slide" class="col-md-12 control-label pl-0"><b>Slider Type</b></label>
                                <input type="text" class="form-control slide" name="slide" required="required" value="{{old('slide')}}" placeholder="Enter application slider type">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('mode')? 'has-error':''}}">
                                <label for="mode" class="col-md-12 control-label pl-0"><b>APplication Mode</b></label>
                                <select name="mode" class="form-control mode" required="required" title="Select an Option...">
                                    <option value="Development">Development</option>
                                    <option value="Production">Production</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('commission')? 'has-error':''}}">
                                <label for="commission" class="col-md-12 control-label pl-0"><b>Commission</b></label>
                                <input type="text" class="form-control commission" name="commission" value="{{old('commission')}}" placeholder="Enter application commission charge">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('vat')? 'has-error':''}}">
                                <label for="vat" class="col-md-12 control-label pl-0"><b>Vat Percentage</b></label>
                                <input type="text" class="form-control vat" name="vat" value="{{old('vat')}}" placeholder="Enter application vat percentage">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('referral')? 'has-error':''}}">
                                <label for="referral" class="col-md-12 control-label pl-0"><b>Referral Reward</b></label>
                                <input type="text" class="form-control referral" name="referral" value="{{old('referral')}}" placeholder="Enter application referral reward">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('adminMail')? 'has-error':''}}">
                                <label for="adminMail" class="col-md-12 control-label pl-0"><b>Admin Sender Mail</b></label>
                                <input type="text" class="form-control adminMail" name="adminMail" value="{{old('adminMail')}}" placeholder="Enter application admin sender mail">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('mailPlatform')? 'has-error':''}}">
                                <label for="mailPlatform" class="col-md-12 control-label pl-0"><b>Mail Gateway</b></label>
                                <input type="text" class="form-control mailPlatform" name="mailPlatform" value="{{old('mailPlatform')}}" placeholder="Enter application mail gateway">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('mailSender')? 'has-error':''}}">
                                <label for="mailSender" class="col-md-12 control-label pl-0"><b>Mail Sender Name</b></label>
                                <input type="text" class="form-control mailSender" name="mailSender" value="{{old('mailSender')}}" placeholder="Enter application mail sender name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('smsPlatform')? 'has-error':''}}">
                                <label for="smsPlatform" class="col-md-12 control-label pl-0"><b>SMS Gateway</b></label>
                                <input type="text" class="form-control smsPlatform" name="smsPlatform" value="{{old('smsPlatform')}}" placeholder="Enter application sms gateway">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('smsSender')? 'has-error':''}}">
                                <label for="smsSender" class="col-md-12 control-label pl-0"><b>SMS Sender Name</b></label>
                                <input type="text" class="form-control smsSender" name="smsSender" value="{{old('smsSender')}}" placeholder="Enter application sms sender name">
                            </div>
                        </div>
                        <div class="col-12 row py-4">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control d-none updated_at" value="{{date('Y-m-d H:m:s')}}" name="updated_at" value="{{old('updated_at')}}" placeholder="Enter application setting updated time">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="pull-right"><button type="submit" class="btn btn-primary publish submit"><i class="far fa-paper-plane mr-2"></i>Save Settings</button></div>
                        </div>                        
                    </div>
                </form>
            </div>            
        </div>
        @endif        
        <div id="profile" data-action="edit" style="display:none">
            <header class="slidePanel-header overlay" style="background-image: url({{asset('medias/images/placeholder.png')}});')">
                <div class="overlay-panel overlay-background vertical-align">
                    <div class="slidePanel-actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-pure btn-inverse icon wb-trash" aria-hidden="true"></button>
                            <button type="button" class="btn btn-pure btn-inverse slidepanel-close icon wb-close" aria-hidden="true"></button>
                        </div>
                    </div>
                    <div class="vertical-align-middle">
                        <a class="avatar" href="javascript:void(0)">
                            <img src="{{asset($user->image->path.$user->image->name)}}" alt="...">
                        </a>
                        <h3 class="name">Modify Profile</h3>
                    </div>
                </div>
            </header>
            <div class="slidePanel-inner py-50">
                <form class="form-horizontal col-md-12" method="POST" action="{{route('office.action.modify',['users',$user->id])}}">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('firstname')? 'has-error':''}}">
                                <label for="firstname" class="col-md-12 control-label pl-0"><b>Firstname</b></label>
                                <input type="text" class="form-control firstname" name="firstname" required="required" value="{{old('firstname',$user->firstname)}}" placeholder="Enter account firstname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('lastname')? 'has-error':''}}">
                                <label for="lastname" class="col-md-12 control-label pl-0"><b>Lastname</b></label>
                                <input type="text" class="form-control lastname" name="lastname" required="required" value="{{old('lastname',$user->lastname)}}" placeholder="Enter account lastname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                <label for="email" class="col-md-12 control-label pl-0"><b>Email Address</b></label>
                                <input type="email" class="form-control email" name="email" required="required" value="{{old('email',$user->email)}}" placeholder="Enter account email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('mobile')? 'has-error':''}}">
                                <label for="mobile" class="col-md-12 control-label pl-0"><b>Mobile Number</b></label>
                                <input type="tel" class="form-control mobile" name="mobile" required="required" value="{{old('mobile',$user->mobile)}}" placeholder="Enter account phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('username')? 'has-error':''}}">
                                <label for="username" class="col-md-12 control-label pl-0"><b>Username</b></label>
                                <input type="text" class="form-control username" name="username" required="required" value="{{old('username',$user->username)}}" placeholder="Enter account username">
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('page')? 'has-error':''}}">
                                <label for="gender" class="col-md-12 control-label pl-0"><b>Gender</b></label>
                                <select name="gender" class="form-control gender" required="required" title="Select an Option...">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('page')? 'has-error':''}}">
                                <label for="position" class="col-md-12 control-label pl-0"><b>Position</b></label>
                                <input type="text" class="form-control position" name="position" value="{{old('position',$user->position)}}" placeholder="Enter account position">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{$errors->has('address')? 'has-error':''}}">
                                <label for="address" class="col-md-12 control-label pl-0"><b>House Address</b></label>
                                <input type="text" class="form-control address" name="address" value="{{old('address',$user->address)}}" placeholder="Enter your house address: No 9 Block B, Sunrise Estate">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group {{$errors->has('location')? 'has-error':''}}">
                                <label for="location" class="col-md-12 control-label pl-0"><b>Select Address Landmark, Street Name or Nearest Bus Stop?</b></label>
                                <input type="text" class="form-control location autocomplete" name="address" value="{{old('location',$user->location)}}" placeholder="Select your Address Landmark: Olori Street, Lekki Phase 1, Lagos">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-muted">About</label>
                                <textarea class="form-control about" name="about">{!!old('about',$user->about)!!}</textarea>
                                @if ($errors->has('about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                @endif
                            </div>                            
                        </div>                            
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="form-group {{$errors->has('image')? 'has-error':''}}">
                                <label for="picture" class="col-md-12 control-label pl-0"><b>Profile Picture</b></label>
                                <input id="picture-user-edit" class="d-none picture" name="image" value="{{old('image',0)}}">
                                <p>Click the bordered line below to select file</p>
                                <div class="droperly preview-images-zone my-5" data-target="#file-upload-browse" data-parent="panel-edit-profile" data-input="picture-user-edit" data-toggle="modal" ></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 py-2">
                            <div class="pull-right"><button type="submit" class="btn btn-primary publish submit"><i class="far fa-paper-plane mr-2"></i>Save Account</button></div>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
        @if(in_array($action->action,$apps))
        <div class="site-action" data-plugin="actionBtn">
            @foreach($user->actives as $role)
                @php $create = $action->action.'_create';@endphp
                @if($role->page==$create && $role->access==1)
                <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating" data-action="{{($action->action=='sessions'||$action->action=='pins'||$action->action=='results')?'':'new'}}" data-target="#{{$action->action}}">
                    <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
                    <i class="back-icon wb-close animation-scale-up" aria-hidden="true"></i>
                </button>
                @elseif($role->page==$create && $role->access==0)
                <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating" data-action="" data-target="#{{$action->action}}">
                    <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
                    <i class="back-icon wb-close animation-scale-up" aria-hidden="true"></i>
                </button>
                @endif
            @endforeach
            <div class="site-action-buttons">
                @foreach($user->actives as $role)
                @php 
                $view = $action->action;
                $edit = $action->action.'_edit';
                $roles = $action->action.'_roles';
                $delete = $action->action.'_delete';
                $password = $action->action.'_password';
                $create = $action->action.'_create';
                @endphp
                
                @if($action->action=='users')
                @if($role->page==$roles && $role->access==1)
                <button type="button" data-toggle="tooltip" data-placement="left" title="Edit {{$action->action_trimed_cap}} Roles" data-action="roles" data-target="#{{$action->action}}" class="btn-raised btn btn-secondary btn-floating animation-slide-bottom">
                    <i class="icon wb-signal" aria-hidden="true"></i>
                </button>
                @endif
                @if($role->page==$password && $role->access==1)
                <button type="button" data-toggle="tooltip" data-placement="left" title="Change {{$action->action_trimed_cap}} Password" data-action="password" data-target="#{{$action->action}}" class="btn-raised btn btn-warning btn-floating animation-slide-bottom">
                    <i class="icon wb-unlock" aria-hidden="true"></i>
                </button>
                @endif
                @endif

                @if(($action->action=='students') && ($role->page==$view && $role->access==1))
                <button type="button" data-toggle="tooltip" data-placement="left" title="View {{$action->action_trimed_cap}}" data-action="view" data-target="#{{$action->action}}" class="btn-raised btn btn-primary btn-floating animation-slide-bottom">
                    <i class="icon wb-eye" aria-hidden="true"></i>
                </button>
                @endif

                @if(( $action->action=='users' || $action->action=='students' || $action->action=='posts') && ($role->page==$edit && $role->access==1))
                <button type="button" data-toggle="tooltip" data-placement="left" title="Edit {{$action->action_trimed_cap}}" data-action="edit" data-target="#{{$action->action}}" class="btn-raised btn btn-warning btn-floating animation-slide-bottom">
                    <i class="icon wb-edit" aria-hidden="true"></i>
                </button>
                @endif                

                @if(($action->action=='cards' || $action->action=='results') && ($role->page==$edit && $role->access==1))
                <button type="button" data-toggle="tooltip" data-placement="left" title="Record Payment" data-action="record" data-view="{{$action->action}}/{{$action->item}}" data-target="#{{$action->action}}" class="btn-raised btn btn-secondary btn-floating animation-slide-bottom">
                    <i class="icon wb-payment" aria-hidden="true"></i>
                </button>
                @endif

                @if(($action->action=='cards' || $action->action=='results') && empty($action->item))
                @if(($action->action=='cards' || $action->action=='results') && ($role->page==$view && $role->access==1))
                <button type="button" data-toggle="tooltip" data-placement="left" title="View {{$action->action_trimed_cap}}" data-action="data-view" data-href="{{route('office.action.item',[$action->action,''])}}" class="btn-raised btn btn-primary btn-floating animation-slide-bottom">
                    <i class="icon wb-eye" aria-hidden="true"></i>
                </button>
                @endif

                @if(($action->action=='results') && ($role->page==$edit && $role->access==1))
                <button type="button" data-toggle="tooltip" data-placement="left" title="Edit {{$action->action_trimed_cap}}" data-action="data-edit" data-href="{{route('office.action.item',[$action->action,''])}}" class="btn-raised btn btn-warning btn-floating animation-slide-bottom">
                    <i class="icon wb-edit" aria-hidden="true"></i>
                </button>
                @endif
                @endif

                @if($action->action=='results' && empty($action->item))
                @if($role->page==$delete && $role->access==1)
                <button type="button" data-toggle="tooltip" data-placement="left" title="Delete {{$action->action_trimed_cap}}(s)" data-action="trash" class="btn-raised btn btn-danger btn-floating animation-slide-bottom">
                    <i class="icon wb-trash" aria-hidden="true"></i>
                </button>
                @endif
                @endif
                @endforeach
            </div>
        </div>
        @elseif($action->action=='media') 
        <div class="site-action" data-plugin="actionBtn">
            <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating" data-target="#file-upload-browse" data-input="picture-user-new" data-toggle="modal">
                <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
                <i class="back-icon wb-close animation-scale-up" aria-hidden="true"></i>
            </button>
        </div>
        @elseif($action->action=='resources' && !empty($action->item) && $action->command=='view') 
        <div class="site-action" data-plugin="actionBtn">
            <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating">
                <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
                <i class="back-icon wb-close animation-scale-up" aria-hidden="true"></i>
            </button>            
            <div class="site-action-buttons">
                @foreach($user->actives as $role)
                    @if($role->page==$action->action.'_delete' && $role->access==1)
                    <button type="button" data-toggle="tooltip" data-placement="left" title="Edit {{$action->action_trimed_cap}}" data-action="resource-edit" data-href="{{route('office.action.item.command',[$action->action,$action->item,''])}}" class="btn-raised btn btn-warning btn-floating animation-slide-bottom">
                        <i class="icon wb-edit" aria-hidden="true"></i>
                    </button>
                    @endif
                    
                    @if($role->page==$action->action.'_edit' && $role->access==1)
                    <button type="button" data-toggle="tooltip" data-placement="left" title="Delete {{$action->action_trimed_cap}}(s)" data-action="trash" class="btn-raised btn btn-danger btn-floating animation-slide-bottom">
                        <i class="icon wb-trash" aria-hidden="true"></i>
                    </button>
                    @endif
                @endforeach
            </div>
        </div>
        @elseif($action->action=='') 
        <div class="site-action" data-plugin="actionBtn">
            <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating" data-href="{{empty($action->command)?route('office.action.create',$action->action):route('office.action.item.command',[$action->action,$action->item,'command'=>'create'])}}">
                <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
                <i class="back-icon wb-close animation-scale-up" aria-hidden="true"></i>
            </button>
            <div class="site-action-buttons">
                @foreach($user->actives as $role)
                    @if($role->page=='posts_create' && $role->access==1)
                    <button type="button" data-toggle="tooltip" data-placement="left" title="Create {{$action->action_trimed_cap}}" data-action="new" data-href="{{route('office.action','posts')}}" class="btn-raised btn btn-primary btn-floating animation-slide-bottom">
                        <i class="icon wb-chat-group" aria-hidden="true"></i>
                    </button>
                    @endif
                    @if($role->page=='users_create' && $role->access==1)
                    <button type="button" data-toggle="tooltip" data-placement="left" title="Create {{$action->action_trimed_cap}}" data-action="new" data-href="{{route('office.action','users')}}" class="btn-raised btn btn-dark btn-floating animation-slide-bottom">
                        <i class="icon wb-user-add" aria-hidden="true"></i>
                    </button>
                    @endif
                    @if($role->page=='bookings_create' && $role->access==1)
                    <button type="button" data-toggle="tooltip" data-placement="left" title="Create {{$action->action_trimed_cap}}" data-action="new" data-href="{{route('office.action','bookings')}}" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
                        <i class="icon wb-grid-9" aria-hidden="true"></i>
                    </button>
                    @endif
                @endforeach
            </div>
        </div>
        @endif
        <div class="modal fade app-loader" data-backdrop="static" data-keyboard="false" aria-hidden="false" aria-labelledby="exampleFillIn" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
                <div class="modal-content rounded-circle">
                    <div class="spinner-grow" style="width: 50px; height: 50px;" role="status"></div>
                </div>
            </div>
        </div>
        <style>
            .modal.app-loader {
                z-index: 9090909;
                background: rgba(150,150,150,0.3);
            }
            .modal.app-loader .modal-dialog .modal-content {
                width: 50px;
                height: 50px;
                text-align: center;
                background: rgba(50,50,50,0.3);
                margin: calc(50vh - 25px) auto !important;
            }
        </style>
        <script>
            if ($('title').text().contains('Invoice')) {
                if(localStorage.getItem('invoice-create-task')!==null){
                    let task = localStorage.getItem('invoice-create-task');
                    localStorage.removeItem('invoice-create-task');
                    $('.selectpicker.invoice-task option[value="' + task + '"]').attr('selected', 'selected');
                }
            }
        </script>
        @if(session()->has('status') && session()->get('status')=='success')
        <script>
            $('.site-action .site-action-toggle').click();
            swal("Success!", "{{session()->get('message')}}", "success");
        </script>
        @elseif(session()->has('status') && session()->get('status')=='error')
        <script>
            $('.site-action .site-action-toggle').click();
            swal("Failed!", "{{session()->get('message')}}", "error");
        </script>
        @endif
    </body>
</html>