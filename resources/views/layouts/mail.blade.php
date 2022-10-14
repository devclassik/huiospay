<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0" />
	<title>{{config('app.name', 'Application')}}</title>
    <style>
        /*-- Reset --*/
        body {
            margin: 0;
            padding: 0;
            mso-padding-alt: 0;
            mso-margin-top-alt: 0;
            width: 100% !important;
            height: 100% !important;
            mso-margin-bottom-alt: 0;
            /*background-color: #f0f0f0;*/
            font-family: lato, Helvetica, sans-serif; 
        }

        body, table, td, p, a, li, blockquote {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table { border-spacing: 0; }
        table, td {
            width: 100%;
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        img, a img {
            border: 0;
            outline: none;
            text-decoration: none;  
        }
        img { -ms-interpolation-mode: bicubic; }

        p, h1, h2, h3, h4, h5, h6 {
            margin: 0;
            padding: 0;
        }

        .ReadMsgBody { width: 100%; }
        .ExternalClass { width: 100%; }
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
            line-height: 100%;
        }

        #outlook a { padding: 0; }

        img{
            max-width: 100%;
            height: auto;
        }

        @media only screen and (max-width: 620px) {

            #foxeslab-email .table1 { width: 91% !important; }
            #foxeslab-email .table1-2 { width: 98% !important; }
            #foxeslab-email .table1-3 { width: 98% !important; }
            #foxeslab-email .table1-4 { width: 98% !important; }

            #foxeslab-email .tablet_no_float {
                clear: both;
                width: 100% !important;
                margin: 0 auto !important;
                text-align: center !important;
            }
            #foxeslab-email .tablet_wise_float {
                clear: both;
                float: none !important;
                width: auto !important;
                margin: 0 auto !important;
                text-align: center !important;
            }

            #foxeslab-email .tablet_hide { display: none !important; }

            #foxeslab-email .image1 { width: 100% !important; }
            #foxeslab-email .image1-290 {
                width: 100% !important;
                max-width: 290px !important;
            }

            .center_content{
                text-align: center !important;
            }
            .center_button{
                width: 50% !important;
                margin-left: 25% !important;
                max-width: 300px !important;
            }
        }


        @media only screen and (max-width: 479px) {
            #foxeslab-email .table1 { width: 98% !important; }
            #foxeslab-email .no_float {
                clear: both;
                width: 100% !important;
                margin: 0 auto !important;
                text-align: center !important;
            }
            #foxeslab-email .wise_float {
                clear: both;
                float: none !important;
                width: auto !important;
                margin: 0 auto !important;
                text-align: center !important;
            }

            #foxeslab-email .mobile_hide { display: none !important; }

        }

        @media (max-width: 480px){
            .container_400{
                width: 95%;
            }
        }
    </style>
</head><!-- /head -->
    <body style="padding: 0;margin: 0;" id="foxeslab-email">
        @include('templates.mail.header')
        @yield('content')
        @include('templates.mail.footer')
    </body>
</html>