<!DOCTYPE html>
<html lang="en">
    
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

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <meta charset="UTF-8">
    <title>Example: Browsing Files</title>
    
   
    <script>
        // Helper function to get parameters from the query string.
        
        function getUrlParam( paramName ) {
            var reParam = new RegExp( '(?:[\?&]|&)' + paramName + '=([^&]+)', 'i' );
            var match = window.location.search.match( reParam );

            return ( match && match.length > 1 ) ? match[1] : null;
        }
         
             function returnFileUrl() {

            var funcNum = getUrlParam( 'CKEditorFuncNum' );
  var imagess=document.getElementById('imagess');
                var fileUrl = "imagrr";           
    
           console.log(imagess+"   imagess");
            window.opener.CKEDITOR.tools.callFunction( funcNum, fileUrl );
            window.close();
        }
    </script>
        // Simulate user action of selecting a file to be returned to CKEditor.
   
    
   
</head>
<body>
        <form role="form" action="{{url('/upload/article_img')}}" method="post" enctype="multipart/form-data" >
                {{csrf_field()}}
                <div class="box-body">
                
                    <div class="form-group">
                        <label for="exampleInputPassword1" dir="rtl"> Image </label>
                        <input name="image" type='file'>
                                @if ($errors->has('image'))
                            <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                        @endif                                     
                                                            
                      
                    </div>


                    <div class="modal-footer">
          
                        <button type="submit" class="btn btn-success text-black">Save Image</button>
                    </div>

                </div>
            </form>
         
            @if(isset($filname1))
            
        <img src="{{asset('img/'.$filname1)}}" alt="" />
        <input id="imagess" type='text' value="{{asset('img/'.$filname1)}}">

             @else
                          
    @endif
    <button onclick="returnFileUrl()">Select File</button>
</body>
</html>

