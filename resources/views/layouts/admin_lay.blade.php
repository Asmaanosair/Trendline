<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css");
        select { font-family: 'FontAwesome', Verdana }</style>


    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/kt_admin/dashboard')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b> {{ Auth::user()->name }}</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('img/1551347379.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Trend Line   </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>


            <ul class="sidebar-menu" data-widget="tree">




                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span> Catogory </span>
                        <span class="pull-right-container">

            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('/kt_admin/category')}}"><i class="fa fa-circle-o text-red"></i> Show All Categories </a></li>
                        <li><a href="{{url('/kt_admin/product')}}"><i class="fa fa-circle-o text-red"></i> Show All Product </a></li>
                        <!--<li><a href="{{url('/kt_admin/stock')}}"><i class="fa fa-circle-o text-red"></i> Show All Stocks </a></li>-->

                    </ul>







                </li>



                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>  Service </span>
                        <span class="pull-right-container">

            </span>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="{{url('/kt_admin/service')}}"><i class="fa fa-circle-o text-red"></i> Show All Main Service</a></li>
                        <li><a href="{{url('/kt_admin/f_service')}}"><i class="fa fa-circle-o text-red"></i> Show All  Service</a></li>
                        <li><a href="{{url('/kt_admin/o_service')}}"><i class="fa fa-circle-o text-red"></i> Show All Description of  Service</a></li>
                        <!--<li><a href="{{url('/kt_admin/agent')}}"><i class="fa fa-circle-o text-red"></i> Show All Agent</a></li>-->

                    </ul>
                </li>
                
                

              
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>   Testimonial </span>
                        <span class="pull-right-container">
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('/kt_admin/test')}}"><i class="fa fa-circle-o text-red"></i> Show All </a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>   About </span>
                        <span class="pull-right-container">

            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('/kt_admin/about')}}"><i class="fa fa-circle-o text-red"></i> Show All </a></li>
                         <li><a href="{{url('/kt_admin/feat')}}"><i class="fa fa-circle-o text-red"></i>Feature</a></li>

                    </ul>
                </li>


                <li class="header">LABELS</li>
                <li><a href="{{url('/kt_admin/slider')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Slider</span></a></li>
                <!--<li><a href="{{url('/kt_admin/faq')}}"><i class="fa fa-circle-o text-yellow"></i> <span>FAQ</span></a></li>-->
                 <li><a href="{{url('/kt_admin/visit')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Visitors</span></a></li>
                <!--<li><a href="{{url('/kt_admin/how')}}"><i class="fa fa-circle-o text-yellow"></i> <span>How It Work</span></a></li>-->
                
                  <!--<li><a href="{{url('/kt_admin/offer')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Offers</span></a></li>-->
                <!--<li><a href="{{url('/kt_admin/anniversary')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Anniversary</span></a></li>-->
                <li><a href="{{url('/kt_admin/contact')}}"><i class="fa fa-circle-o text-red"></i> <span>Contact</span></a></li>
                
                     <li><a href="{{url('/kt_admin/trans')}}"><i class="fa fa-circle-o text-red"></i> <span>Translation</span></a></li>
                
                 
                 
                 <li><a href="{{url('/kt_admin/change_pass')}}"><i class="fa fa-circle-o text-red"></i> <span>Chang Password</span></a></li>
                 
                <li><a href="{{url('/KT_admin/logout')}}"><i class="fa fa-circle-o text-blue"></i> <span>Logout</span></a></li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            @yield("content")

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2018-2019 <a href="knocktarget.com" style="color:red;">Knock Target</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
<script>
    $('#sent').on('submit',function(e){
        //  var brand=$('.val_brand').val();
        // console.log(brand);
        var chkArray = [];
        $(".val_brand:checked").each(function() {
            chkArray.push($(this).val());
        });
        var selected;
        selected = chkArray.join(',') ;
        console.log(chkArray);
        /* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
        if(selected.length > 0){
            alert("You have selected " + selected);
        }else{
            alert("Please at least check one of the checkbox");
        }


    })




</script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //   config.embed_provider = '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}';
    CKEDITOR.replace('editor1', {
        // contentsLangDirection: "rtl"
        language: 'en',
        filebrowserBrowseUrl : '{{url('/article_img')}}',
        filebrowserUploadUrl : '{{url('/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('/article_img')}}'


    });
</script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //  config.embed_provider = '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}';
    CKEDITOR.replace('editor2', {
        // contentsLangDirection: "rtl"
        language: 'ar',
        filebrowserBrowseUrl : '{{url('/article_img')}}',
        filebrowserUploadUrl : '{{url('/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('/article_img')}}'


    });
</script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //  config.embed_provider = '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}';
    CKEDITOR.replace('editor3', {
        // contentsLangDirection: "rtl"
        language: 'en',
        filebrowserBrowseUrl : '{{url('/article_img')}}',
        filebrowserUploadUrl : '{{url('/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('/article_img')}}'



    });
</script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //  config.embed_provider = '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}';
    CKEDITOR.replace('editor4', {
        // contentsLangDirection: "rtl"
        language: 'ar',
        filebrowserBrowseUrl : '{{url('/article_img')}}',
        filebrowserUploadUrl : '{{url('/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('/article_img')}}'

    });
</script>
</body>
</html>
