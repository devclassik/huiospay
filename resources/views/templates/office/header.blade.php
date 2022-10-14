<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            @if(isset($description) && !empty($description))
            <meta name="description" content="{{$description}}">
            @endif
            @if(isset($keywords) && !empty($keywords))
            <meta name="keywords" content="{{$keywords}}">
            @endif
            @if(isset($author) && !empty($author))
            <meta name="author" content="{{$author}}">
            @endif
            <!-- icons -->
            <link rel="apple-touch-icon" href="{{asset('medias/images/'.$settings->icon)}}" type="image/x-icon">
            <link rel="shortcut icon" href="{{asset('medias/images/'.$settings->icon)}}" type="image/x-icon">
            <!-- Stylesheets -->
            <!-- <link rel="stylesheet" type="text/css" href="{{asset('office/css/bootstrap.min.css')}}"> -->
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/bootstrap/css/bootstrap.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/css/bootstrap-extend.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/assets/css/site.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/css/theme.css')}}">
            <link rel="stylesheet" type="text/css" media="print" href="{{asset('office/css/print.css')}}" />
            <!-- Plugins -->
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/toastr/toastr.css')}}">
            {{-- <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/select2/select2.css')}}"> --}}
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/intro-js/introjs.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/chartist/chartist.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/switchery/switchery.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/animsition/animsition.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/slidepanel/slidePanel.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/flag-icon-css/flag-icon.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/asscrollable/asScrollable.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/aspieprogress/asPieProgress.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/jvectormap/jquery-jvectormap.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/magnific-popup/magnific-popup.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/bootstrap-sweetalert/sweetalert.css')}}">            
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/bootstrap-rating/bootstrap-rating.css')}}"/>
            {{-- <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/bootstrap-select/bootstrap-select.css')}}"> --}}
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/datepicker/dist/css/bootstrap-datepicker.min.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
            <!-- Customs -->            
            <link rel="stylesheet" type="text/css" href="{{asset('office/assets/examples/css/dashboard/v1.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/assets/examples/css/dashboard/v2.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/assets/examples/css/dashboard/team.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/assets/examples/css/pages/gallery.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/assets/examples/css/apps/documents.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/plugins/uploader/1.3/jquery.fileuploader.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('shared/plugins/datepicker/dist/css/bootstrap-datepicker.min.css')}}"/>
            @if($action->view=='office.listings.view')
            <link rel="stylesheet" href="{{asset('office/plugins/datatables.net-bs4/dataTables.bootstrap4.css')}}">
            <link rel="stylesheet" href="{{asset('office/plugins/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css')}}">
            <link rel="stylesheet" href="{{asset('office/plugins/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css')}}">
            <link rel="stylesheet" href="{{asset('office/plugins/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css')}}">
            <link rel="stylesheet" href="{{asset('office/plugins/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css')}}">
            <link rel="stylesheet" href="{{asset('office/plugins/datatables.net-select-bs4/dataTables.select.bootstrap4.css')}}">
            <link rel="stylesheet" href="{{asset('office/plugins/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css')}}">
            <link rel="stylesheet" href="{{asset('office/plugins/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css')}}">
            <link rel="stylesheet" href="{{asset('office/assets/examples/css/tables/datatable.css')}}">
            @endif
            <!-- Fonts -->
            <link rel="stylesheet" type="text/css" href="{{asset('shared/css/fontawesome-pro/css/all.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{asset('office/fonts/web-icons/web-icons.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/fonts/weather-icons/weather-icons.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('office/fonts/brand-icons/brand-icons.min.css')}}">
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
            
            <!--[if lt IE 9]>
            <script src="{{asset('office/plugins/html5shiv/html5shiv.min.js')}}"></script>
            <![endif]-->
            
            <!--[if lt IE 10]>
            <script src="{{asset('office/plugins/media-match/media.match.min.js')}}"></script>
            <script src="{{asset('office/plugins/respond/respond.min.js')}}"></script>
            <![endif]-->
            
            <!-- Scripts -->
            <script src="{{asset('office/plugins/breakpoints/breakpoints.js')}}"></script>
            <link href="{{ asset('office/plugins/texteditor/jquery-te-1.4.0.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('office/plugins/image-picker/image-picker/image-picker.css') }}" rel="stylesheet" type="text/css" />
            <script> Breakpoints(); </script>
            <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCN8WowontDjBWgFjvwYNwNSjtG79Q11OE&libraries=places"></script>
            <style>.pac-container{ z-index: 10000 !important; }.pac-container .pac-item span{ color:rgb(100,100,100) !important; }</style>
            <script type="text/javascript">
                google.maps.event.addDomListener(window, "load", function () {
                    var input = document.getElementsByClassName("autocomplete");
                    for (i = 0; i < input.length; i++) {
                        var places = new google.maps.places.Autocomplete(input[i]);
                        places.setComponentRestrictions({"country": ["ng"]});
                        google.maps.event.addListener(places, "place_changed", function () {
                            var place = places.getPlace();
                        });                            
                    }
                });
            </script>
            <title>{{config('app.name', 'Application')}}  - {{$title}}</title>
        </head>
        <body class="animsition {{(strtolower($title)=='dashboard')?strtolower($title):''}} {{(strtolower($action->view)=='office.listings.view')?'app-contacts':''}}">
            
        @foreach($user->roles as $role)
            @php
            if(($role->page==$action->action && $role->access==0)||($role->page==$action->item && $role->access==0)){
                header("Location: ".route('office.home'), true, 302);
                exit();
            }
            @endphp
        @endforeach