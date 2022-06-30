<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.8
*
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>INFORMATION SYSTEMS AND INNOVATIONS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{asset('insipinia/css/bootstrap.min.css' )}}" rel="stylesheet">
    <link href="{{asset('insipinia/css/font-awesome.css' )}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('insipinia/css/plugins/toastr/toastr.min.css' )}}" rel="stylesheet">
    <link href="{{asset('insipinia/css/plugins/dataTables/datatables.min.css' )}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('insipinia/js/plugins/gritter/jquery.gritter.css' )}}" rel="stylesheet">
    <link href="{{asset('insipinia/css/animate.css' )}}" rel="stylesheet">
    <link href="{{asset('insipinia/css/style.css' )}}" rel="stylesheet">
</head>

<body>
    <div id="wrapper" style="background-color: #113054;">
        <nav class="navbar-default navbar-static-side "  role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu"id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" style="width: 120px; height: 120px" src="{{ asset('img/udsm.png' )}}" />
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                {{-- <span class="block m-t-xs font-bold">Quantam Consultant</span> --}}
                              
                            </a>
                          
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    
                    <li class="active">
                        <a href="/dashboard"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
                    </li>
                    <li class="active">
                        <a href="/a_activity"><i class="fa fa-diamond"></i> <span class="nav-label">Activities Management</span></a>
                    </li>  
                    <li class="active">
                        <a href="/a_research"><i class="fa fa-book"></i> <span class="nav-label">Research Management</span></a>
                    </li>  
                    <li class="active">
                        <a href="/a_news"><i class="fa fa-diamond"></i> <span class="nav-label">News Management</span></a>
                    </li>  
                    <li class="active">
                        <a href="/a_members"><i class="fa fa-book"></i> <span class="nav-label">Members Management</span></a>
                    </li> 
                    <li class="active">
                        <a href="/a_publications"><i class="fa fa-diamond"></i> <span class="nav-label">Manage Publications</span></a>
                    </li>  
                              
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top bg-white" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header ">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links bg-white navbar-left">
                        <li style="padding: 20px">
                            
                            <span class="m-r.-sm  welcome-message" style="color: #022950; font-size: 18px;"><strong>INFORMATION SYSTEMS AND INNOVATION RESEARCH GROUP ADMIN DASHBOARD</strong></span>
                        </li>

                        
                        <li>
                            <a href="signout">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                        <li>
                            <a class="right-sidebar-toggle">
                                <i class="fa fa-tasks"></i>
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            @include('auth.messages')
           @yield('content')
        </div>

        <!-- Mainly scripts -->
        {{-- <script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
        <script>CKEDITOR.replace('article-ckeditor');</script>
        <script>CKEDITOR.replace('article-ckeditor2');</script>
        <script>CKEDITOR.replace('article-ckeditor3');</script>
        <script>CKEDITOR.replace('article-ckeditor4');</script>
        <script>CKEDITOR.replace('article-ckeditor5');</script>
        <script>CKEDITOR.replace('article-ckeditor6');</script>
        <script>CKEDITOR.replace('article-ckeditor7');</script> --}}
        <script src="{{asset('insipinia/js/jquery-3.1.1.min.js' )}}"></script>
        <script src="{{asset('insipinia/js/popper.min.js' )}}"></script>
        <script src="{{asset('insipinia/js/bootstrap.js' )}}"></script>
        <script src="{{asset('insipinia/js/plugins/metisMenu/jquery.metisMenu.js' )}}"></script>
        <script src="{{asset('insipinia/js/plugins/slimscroll/jquery.slimscroll.min.js' )}}"></script>

        <!-- Flot -->
        <script src="{{asset('insipinia/js/plugins/flot/jquery.flot.js' )}}"></script>
        <script src="{{asset('insipinia/js/plugins/flot/jquery.flot.tooltip.min.js' )}}"></script>
        <script src="{{asset('insipinia/js/plugins/flot/jquery.flot.spline.js' )}}"></script>
        <script src="{{asset('insipinia/js/plugins/flot/jquery.flot.resize.js' )}}"></script>
        <script src="{{asset('insipinia/js/plugins/flot/jquery.flot.pie.js' )}}"></script>

        <!-- Peity -->
        <script src="{{asset('insipinia/js/plugins/peity/jquery.peity.min.js' )}}"></script>
        <script src="{{asset('insipinia/js/demo/peity-demo.js' )}}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{asset('insipinia/js/inspinia.js' )}}"></script>
        <script src="{{asset('insipinia/js/plugins/pace/pace.min.js' )}}"></script>

        <!-- jQuery UI -->
        <script src="{{asset('insipinia/js/plugins/jquery-ui/jquery-ui.min.js' )}}"></script>

        <!-- GITTER -->
        <script src="{{asset('insipinia/js/plugins/gritter/jquery.gritter.min.js' )}}"></script>

        <!-- Sparkline -->
        <script src="{{asset('insipinia/js/plugins/sparkline/jquery.sparkline.min.js' )}}"></script>

        <!-- Sparkline demo data  -->
        <script src="{{asset('insipinia/js/demo/sparkline-demo.js' )}}"></script>

        <!-- ChartJS-->
        <script src="{{asset('insipinia/js/plugins/chartJs/Chart.min.js' )}}"></script>

        <!-- Toastr -->
        <script src="{{asset('insipinia/js/plugins/toastr/toastr.min.js' )}}"></script>

        <script src="{{asset('insipinia/js/plugins/dataTables/datatables.min.js' )}}"></script>
        <script src="{{asset('insipinia/js/plugins/dataTables/dataTables.bootstrap4.min.js' )}}"></script>
      <script src="https://cdn.tiny.cloud/1/9kwmev7of6r1gwfblgyke70ptjc8153as3hzygkrfa2kc91n/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  

        <script>
            $(document).ready(function(){
                $('.dataTables-example').DataTable({
                    pageLength: 25,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [
                        { extend: 'copy'},
                        {extend: 'csv'},
                        {extend: 'excel', title: 'ExampleFile'},
                        {extend: 'pdf', title: 'ExampleFile'},
    
                        {extend: 'print',
                         customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');
    
                                $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                        }
                        }
                    ]
    
                });
    
            });
            setTimeout(function() {
                $('#successMessage').fadeOut('fast');
            }, 30000);
        </script>
    
</body>

</html>