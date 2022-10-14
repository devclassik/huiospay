                <footer class="bg-footer page-section py-lg-32pt">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mb-24pt mb-md-0">
                                <p class="text-white-70 mb-8pt"><strong>Made with <i class="fa fa-heart text-danger heart"></i> by:</strong>
                                    <a href="https://www.scnip.com" class="text-warning">Scnip</a>                                
                                </p>
                            </div>
                            <div class="col-md-6 text-md-right">
                                <p class="text-white-50 mb-0">Copyrights &copy; {{(date('Y')==2019)? date('Y'): ' 2019 - '.date('Y') }}, {{$settings->app}}. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </footer>
                
            </main>            
        </div>
        <div class="modal fade p-0" id="slide-panel" tabindex="-1" role="dialog" aria-labelledby="slide-panellabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title d-inline py-3 px-5">Result Checker</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="font-weight-normal" style="font-size:30px">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-5">
                        <form action="{{route('dashboard.result')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="text" action="" value="contact" class="d-none"/>
                            <h3 class="py-5">Enter details to check your result</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Matric Number <span class="text-danger">*</span></label>
                                        <input name="matric" type="text" class="form-control disabled matric" required="required" value="{{$user->matric}}" readonly placeholder="Enter your matric number" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        @php $years = ['100','200','300','400']; @endphp
                                        <label>Select Level <span class="text-danger">*</span></label>
                                        <select name="level" class="selectpicker show-tick level" required="required" data-live-search="false" title="Select an option..." data-width="100%">
                                            @foreach($years as $year)
                                            <option value="{{$year}}" {{($year==$user->level?'selected':'')}}>{{$year}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Select Exam Semester <span class="text-danger">*</span></label>
                                        <select name="semester" class="selectpicker show-tick semester" required="required" data-live-search="false" title="Select an option..." data-width="100%">
                                            <option value="1st">1St Semester</option>
                                            <option value="2nd">2nd Semester</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Result Checker PIN <span class="text-danger">*</span></label>
                                        <input name="pin" type="text" class="form-control pin" minlength="12" maxlength="12" required="required" placeholder="Enter your valid PIN" required="">
                                    </div>
                                </div>
                            </div>
                            <p><b>Note:</b> a PIN becomes invalid after the third time its used.</p>
                        </form>
                    </div>
                    <div class="modal-footer py-3 px-5">
                        <button type="button" class="btn btn-sm btn-danger py-3 px-4" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-success action-button py-3 px-4 d-inline-block float-right">Check Result</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{asset('shared/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/bootstrap-sweetalert/sweetalert.js')}}"></script>

        <script type="text/javascript" src="{{asset('shared/plugins/selectpicker/js/bootstrap-select.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/uploader/1.3/jquery.fileuploader.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/bootstrap-multiselect/js/bootstrap-multiselect.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/plugins/jquery-print/jquery-print.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('dash/js/vendor/datatables.min.js')}}"></script>        
        <script type="text/javascript" src="{{asset('dash/js/vendor/perfect-scrollbar.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('dash/js/vendor/perfect-scrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('dash/js/vendor/dom-factory.js')}}"></script>
        <script type="text/javascript" src="{{asset('dash/js/vendor/material-design-kit.js')}}"></script>

        <script type="text/javascript" src="{{asset('dash/js/app.js')}}"></script>

        <script type="text/javascript" src="{{asset('shared/js/app.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/js/scnip.js')}}"></script>
        <script type="text/javascript" src="{{asset('shared/js/functions.js')}}"></script>
        <script type="text/javascript" src="{{asset('dash/js/script.js')}}"></script>
        <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
        <script type="text/javascript" src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
        
        @php $domain = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http")."://".env("APP_API").'.'.env("APP_DOMAIN").'/'.$settings->api; @endphp
        <script type="text/javascript" id='script'>
            let app = new App('{{$settings->app}}', '3.0', '{{$settings->server}}', '{{($settings->mode=="Production")?$domain:$settings->server.$settings->api}}', 'Scnip - https://www.scnip.com', '{{(Auth::check())?$user->secret:$home->key}}');
            app.initialize();
        </script>
        
        @if(session()->has('status') && session()->get('status')=='success')
        <script>
            $('.site-action .site-action-toggle').click();
            swal("Success!", "{{session()->get('message')}}", "success");
        </script>
        @elseif(session()->has('status') && session()->get('status')=='error')
        <script>
            swal("Failed!", "{{session()->get('message')}}", "error");
        </script>
        @endif
    </body>
</html>