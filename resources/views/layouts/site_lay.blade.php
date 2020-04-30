<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yiwu Market, Yiwu China Market - Yiwu Agent For Trendline-group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="Yiwu Market is the biggest market in yiwu china, Trendline-group Yiwu Agent providing 100% guarantee and we can help you import goods from any city in china." />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <style>
  

        .navbar-light .navbar-nav .nav-link {
    padding: 0.3em 15px;
    color: #181713a8;
    background: transparent;
    font-size: 1em;
    letter-spacing: 1px;
    font-weight: 600;
    
    
}

.navbar-nav {
    margin:0 auto;
}

.nav.navbar li.dropdown ul.dropdown-menu {
    border-top-color: #f43438 !important;
    width: 450px;
}

ul.menu-col li :hover, ul.menu-col li a:focus {
    color: #e10000;
    
    text-decoration: none;
    background-color: #f0f0f1;
}
    </style>
    <link href="{{asset('site/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('site/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('site/css/contact.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('site/css/owl.theme.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('site/css/owl.carousel.css')}}" type="text/css" media="screen" property="" />
    <link href="{{asset('site/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('site/css/minimal-slider.css')}}" type="text/css" media="all" />
    <link href="{{asset('site/css/fontawesome-all.cssp')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/bootsnav.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/style1.css')}}" rel="stylesheet"> 
 
 <style>
     .col_white_amrc {
    color: #ca1818;
}
.footer_ul_amrc li a:hover{
    color:#ca1818;
}
  body{
            width: 100%;
    }
    .social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    text-align: center;
    width: 46px;
    height: 46px;
    font-size: 20px;
}

 </style>
</head>
<body>
<div class="mian-content inner-page ">
     <?php
        if(session()->has('vistis'))
        {
            
        }
        else
        {
        session()->put('vistis',"1");
            //
            $vistit_count=\App\visit::find(1);
            if($vistit_count ==null){
                $vistit_count=new \App\visit();
                $vistit_count->number=$vistit_count->number+1;
                $vistit_count->save();

            }
            else{
                $vistit_count->number=$vistit_count->number+1;
                $vistit_count->save();
            }
        }
        ?>

    @yield('slider')
    </div>
<div class="content ">
    <div class="header-top"  style="padding:6px;">
        <div>
            <header>
                <div class="top-head-agile text-left container">
                    <div class="row top-content-info-wthree">
                        <!--<div class="col-lg-5 top-content-left">-->
                        <!--    <h6><a href="{{url('/Anniversary')}}">{{$aniversary->title}}</a></h6>-->
                        <!--</div>-->
                        <div class="col-lg-12 top-content-right">
                            <div class="row">
                                <div class="col-md-12 callnumber text-left text-center">
                                  @foreach($phone as $row)  <h6> {{$row->title}} <span>
                                        {{$row->phone}}
                                    </span> 
                                 </h6>   @endforeach
                                </div>
                                <!--<div class="col-md-6 top-social-icons p-0">-->
                                <!--     <ul class="social-network social-circle text-center">-->
                                <!--        <li><a  href="{{$con->what}}" class="icoRss" title="whatsapp"><i style="color: #000;" class="fab fa-whatsapp fa-sm "></i></a></li>-->
                                <!--        <li><a  href="{{$con->fb}}" class="icoFacebook" title="Facebook"><i style="color: #000;"  class="fab fa-facebook fa-sm "></i></a></li>-->
                                <!--        <li><a  href="{{$con->tw}}" class="icoTwitter" title="Twitter"><i style="color: #000;" class="fab fa-twitter fa-sm "></i></a></li>-->
                                <!--        <li><a  href="{{$con->insta}}" class="icoGoogle" title="instagram"><i  style="color: #000;"class="fab fa-instagram fa-sm "></i></a></li>-->
                                <!--        <li><a  href="{{$con->yt}}" class="icoInsta" title="youtube"><i style="color: #000;" class="fab fa-youtube fa-sm "></i></a></li>-->
                                        
                                <!--    </ul>-->
                                    
                                <!--</div>-->
                                
                            </div>
                            
                        </div>

                    </div>
                    
                </div>
                
                <div class="clearfix"></div>
                <nav class="navbar navbar-expand-lg navbar-light">
                    
                    <div class="logo"> <a class="navbar-brand" href="{{url('/'.Config::get('app.locale'))}}"><img src="{{asset('/img/'.$con->logo)}}"></a></div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" style="margin-left: 70%;" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class=" nav-link active" style="padding: 0.3em 15px;"><a href="{{url('/'.Config::get('app.locale'))}}">  @php(
           $home=explode(',',$transl->home)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$home[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$home[1]}}
             
            @else
      
            
            
            {{$home[0]}}
            @endif</a></li>
                    
                     <!--<li class="nav-item dropdown">-->
                     <!--           <a class="nav-link dropdown-toggle" style="padding: 0.3em 15px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                     <!--               Services-->
                     <!--               <i class="fas fa-angle-down"></i>-->
                     <!--           </a>-->
                     <!--           <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="   border-top-color: #f43438 !important; border-top: solid 5px;">-->
                     <!--               <a class="dropdown-item" href="{{url('/Service')}}">Services</a>-->
                     <!--               <a class="dropdown-item" href="{{url('/Agent')}}" title="">Agent</a>-->
                     <!--           </div>-->
                     <!--       </li>-->
                     <!--<li class="nav-item dropdown">-->
                     <!--           <a class="nav-link dropdown-toggle" style="padding: 0.3em 15px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                     <!--               About-->
                     <!--               <i class="fas fa-angle-down"></i>-->
                     <!--           </a>-->
                     <!--           <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-top-color: #f43438 !important; border-top: solid 5px;">-->
                     <!--               <a class="dropdown-item" href="{{url('/About')}}">about</a>-->
                     <!--               <a class="dropdown-item" href="{{url('/Faq')}}" title="">FAQ</a>-->
                     <!--           </div>-->
                     <!--       </li>-->
                     
                    <!--<li class="dropdown megamenu-fw" >-->
                    <!--    <a href="#" class="dropdown-toggle nav-link" style="padding: 0.3em 15px;" data-toggle="dropdown">China Market</a>-->
                       
                    </li>
                    
                    
                     <!--<li class="dropdown megamenu-fw">-->
                     <!--   <a href="#" class="dropdown-toggle nav-link" style="padding: 0.3em 15px;" data-toggle="dropdown">China Guide</a>-->
                       
                    </li>
                 
                    
                    
                   <!--<li class="nav-item dropdown" >-->
                   <!--             <a class="nav-link dropdown-toggle"  style="padding: 0.3em 15px;"href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                   <!--                 Ecommerce-->
                   <!--                 <i class="fas fa-angle-down"></i>-->
                   <!--             </a>-->
                   <!--             <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="   border-top-color: #f43438 !important; border-top: solid 5px;">-->
                   <!--                 <a class="dropdown-item" href="{{url('/Category')}}">Products</a>-->
                   <!--                 <a class="dropdown-item" href="{{url('/Stock')}}" title="">Stocks</a>-->
                   <!--             </div>-->
                   <!--         </li>-->
                            
                
                            
                    <li class="nav-item" >
                                <a class="nav-link"  style="padding: 0.3em 15px;" href="{{url('/Contact/'.Config::get('app.locale'))}}"> @php(
           $help=explode(',',$transl->help)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$help[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$help[1]}}
             
            @else
      
            
            
            {{$help[0]}}
            @endif</a>
                            </li>
                            
                                        @if(Config::get('app.locale')=="en")
             <li class="nav-item" >
                                <a class="nav-link"  style="padding: 0.3em 15px;" href="ch"><img style="width:25px" src="http://shop.flagshop.com/media/catalog/product/cache/1/thumbnail/128x128/9df78eab33525d08d6e5fb8d27136e95/t/a/tattoo-flag-china.jpg">中文語言</a>
                            </li>
           
            @elseif(Config::get('app.locale')=="ch")
             <li class="nav-item" >
                                <a class="nav-link"  style="padding: 0.3em 15px;" href="en">ENG</a>
                            </li>
            @else
             <li class="nav-item" >
                                <a class="nav-link"  style="padding: 0.3em 15px;" href="ch">中文語言</a>
                            </li>
            @endif
                            
                         
                            
                            <!--<li class="nav-item" >-->
                            <!--    <a class="nav-link"  style="padding: 0.3em 15px;" href="#">English</a>-->
                            <!--</li>-->
                            
                            
                            
                            
                </ul>
                
<!--                            <form class="form-inline" action="{{url('Search')}}">-->
                                
<!--                                 {{csrf_field()}}-->
<!--    <input class="form-control mr-sm-2" type="search" name="city" placeholder="Enter a keyword" aria-label="Search" style="-->
<!--    width: 135px;     height: 29px;-->
<!--}">-->
<!--    <button class="my-2 my-sm-0" style="    display: inline-block;" type="submit"><i class="fas fa-search"></i></button>-->
<!--  </form>-->
  
                
            </div>
  
                
                </nav>
            </header>
        </div>
    </div>
   </div>

@yield('content')



<!--/newsletter-->
<footer class="footer" style="min-height:auto">
    <div class="container bottom_border">
        <div class="row">
          
                
                       
                 


            <!--<div class=" col-sm-4 col-md  col-6 col">-->
            <!--    <h5 class="headin5_amrc col_white_amrc pt2">YIWU MARKET</h5>-->
                <!--headin5_amrc-->
            <!--    <ul class="footer_ul_amrc">-->
            <!--        <li><a href="#">INTERNATIONAL TRADE CITY</a></li>-->
            <!--        <li><a href="#">ARTIFICIAL FLOWER MARKET</a></li>-->
            <!--        <li><a href="#">YIWU BAGS MARKET</a></li>-->
            <!--        <li><a href="#">MORE</a></li>-->
            <!--    </ul>-->
                <!--footer_ul_amrc ends here-->
            <!--</div>-->


            <!--<div class=" col-sm-4 col-md  col-6 col">-->
            <!--    <h5 class="headin5_amrc col_white_amrc pt2">GUANGZHOU CITY GUIDE</h5>-->
                <!--headin5_amrc-->
            <!--    <ul class="footer_ul_amrc">-->
            <!--        <li><a href="#">GUANGZHOU CITY</a></li>-->
            <!--        <li><a href="#">GUANGZHOU CITY MAP</a></li>-->
            <!--        <li><a href="#">GUANGZHOU HOTEL</a></li>-->
            <!--        <li><a href="#">MORE</a></li>-->
            <!--    </ul>-->
                <!--footer_ul_amrc ends here-->
            <!--</div>-->


            <!--<div class=" col-sm-4 col-md  col-6 col">-->
            <!--    <h5 class="headin5_amrc col_white_amrc pt2">GUANGZHOU MARKET</h5>-->
                <!--headin5_amrc-->
            <!--    <ul class="footer_ul_amrc">-->
            <!--        <li><a href="#">GARMENT WHOLESALE MARKET</a></li>-->
            <!--        <li><a href="#">FABRIC MARKET</a></li>-->
            <!--        <li><a href="#">LUGGAGE LEATHER MARKET</a></li>-->
            <!--        <li><a href="#">MORE</a></li>-->
            <!--    </ul>-->
                <!--footer_ul_amrc ends here-->
            <!--</div>-->
        </div>
    </div>


    <div class="container">
        <ul class="foote_bottom_ul_amrc">
            <li><a href="{{url('/'.Config::get('app.locale'))}}">
                 @php(
           $home=explode(',',$transl->home)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$home[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$home[1]}}
             
            @else
      
            
            
            {{$home[0]}}
            @endif
            
            </a></li>
            <li><a href="{{url('/About/'.Config::get('app.locale'))}}">  
            @php(
           $about=explode(',',$transl->about)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$about[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$about[1]}}
             
            @else
      
            
            
            {{$about[0]}}
            @endif
            </a></li>
            <li><a href="{{url('/Service/'.Config::get('app.locale'))}}"> @php(
           $service=explode(',',$transl->service)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$service[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$service[1]}}
             
            @else
      
            
            
            {{$service[0]}}
            @endif</a></li>
            <li><a href="{{url('/Contact/'.Config::get('app.locale'))}}">@php(
           $help=explode(',',$transl->help)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$help[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$help[1]}}
             
            @else
      
            
            
            {{$help[0]}}
            @endif</a></li>
        </ul>
        <!--foote_bottom_ul_amrc ends here-->
<div class="row">

        
        
        <!--social_footer_ul ends here-->
        
        
        
        <div class="col-md-3" style="background-color: #e10000;max-width:20%;margin:0 auto;text-align:center">
         <div class="panel-right panel-icon bg-reverse">
                <p style="font-size: 16px;color: white;margin-bottom:0;display:inline-block;">{{\App\visit::find(1)->number}} </p>
                <p style="font-size: 16px;color: white;margin-bottom:0;display:inline-block;"> visitor</p>
    
            </div>
                    

            </div>
 
            
            <div class="col-md-12 text-center">
           <a  target="_blanck"styl="    margin-left: 100px;" href="https://play.google.com/store/apps/details?id=com.kt.trendline" class="icoInsta" title="youtube"><img src="{{asset('img/googel.png')}}"  style="width: 156px;
    height: 59px;"></a>
    
    </div>
            
            </div>
            <p class="text-center">Copyright 1998 -
            @php(
             $rr=date("Y")
           )
           {{$rr}}
            Trendline-Group</p>
    </div>
    
    <div class="col-md-12 text-center">
    
        <ul class="social-network social-circle text-center">
            <li><a href="{{$con->wh}}" class="icoRss" title="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="{{$con->fb}}" class="icoFacebook" title="Facebook"><i class="fab fa-facebook"></i></a></li>
            <li><a href="{{$con->tw}}" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="{{$con->insta}}" class="icoGoogle" title="instagram"><i class="fab fa-instagram"></i></a></li>
            <li><a href="{{$con->in}}" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="{{$con->yt}}" class="icoInsta" title="youtube"><i class="fab fa-youtube"></i></a></li>
            
          
        </ul>
        </div>

</footer>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    .sweet-alert h2{
        color: red;
    }
    .sweet-alert p{
        color: #000;
        font-weight: bold;
        font-size: 15px;
    }
</style>
@if(Session::has('success'))
    <script>
        swal({
            title: "{{Session::get('success')}}",
            text: "",
            timer: 4000,
            showConfirmButton:false,
            animation: true,
            icon: "success",
        });
        <?php if(isset($_SESSION['danger'])){ unset($_SESSION['danger']); } ?>
    </script>
 @endif
  <script src="{{asset('site/js/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('site/js/minimal-slider.js')}}"></script>
    <!-- carousel -->
    <script src="{{asset('site/js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!--/ start-smoth-scrolling -->
    <script src="{{asset('site/js/move-top.js')}}"></script>
    <script src="{{asset('site/js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    
  
    
    
   

    <!--// end-smoth-scrolling -->
	<!-- /js -->
    <script src="{{asset('site/js/bootstrap.js')}}"></script>
    <!-- //js -->
    <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <!--// end-smoth-scrolling -->
    <script src="{{asset('site/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('site/js/jquery.quicksand.js')}}"></script>
    <script src="{{asset('site/js/pretty-script.js')}}"></script>
    <script src="{{asset('site/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('site/js/waypoints.min.js')}}"></script>
    <script src="{{asset('site/jquery.counterup.min.js')}}"></script>
    
   <script>
        jQuery(document).ready(function($) {
            $('.timer').counterUp({
                delay: 10,
                time: 3000
            });
        });
    </script>
    
      <script>
        $(function() {


            function countUp(count) {
                var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.countdown_first'),
                    run_count = 1,
                    int_speed = 24;
                var int = setInterval(function() {
                    if (run_count < div_by) {
                        $display.text(speed * run_count);
                        run_count++;
                    } else if (parseInt($display.text()) < count) {
                        var curr_count = parseInt($display.text()) + 1;
                        $display.text(curr_count);
                    } else {
                        clearInterval(int);
                    }
                }, int_speed);
            }
            countUp(88888);

            function countUp2(count) {
                var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.countdown_second'),
                    run_count = 1,
                    int_speed = 24;
                var int = setInterval(function() {
                    if (run_count < div_by) {
                        $display.text(speed * run_count);
                        run_count++;
                    } else if (parseInt($display.text()) < count) {
                        var curr_count = parseInt($display.text()) + 1;
                        $display.text(curr_count);
                    } else {
                        clearInterval(int);
                    }
                }, int_speed);
            }
            countUp2(555);

            function countUp3(count) {
                var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.countdown_fourth'),
                    run_count = 1,
                    int_speed = 24;
                var int = setInterval(function() {
                    if (run_count < div_by) {
                        $display.text(speed * run_count);
                        run_count++;
                    } else if (parseInt($display.text()) < count) {
                        var curr_count = parseInt($display.text()) + 1;
                        $display.text(curr_count);
                    } else {
                        clearInterval(int);
                    }
                }, int_speed);
            }
            countUp3(999);

        });
    </script>
    
    
    <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
  
     <script>
         $(document).ready(function () {

    $('.navbar .dropdown-item').on('click', function (e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({"top": -999, "left": -999});
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });

});

     </script>
     
     
      <script>
//         $(document).ready(function() {
//   var bigimage = $("#big");
//   var thumbs = $("#thumbs");
//   //var totalslides = 10;
//   var syncedSecondary = true;

//   bigimage
//     .owlCarousel({
//     items: 1,
//     slideSpeed: 2000,
//     nav: true,
//     autoplay: true,
//     dots: false,
//     loop: true,
//     responsiveRefreshRate: 200,
//     navText: [
//       '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
//       '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
//     ]
//   })
//     .on("changed.owl.carousel", syncPosition);

//   thumbs
//     .on("initialized.owl.carousel", function() {
//     thumbs
//       .find(".owl-item")
//       .eq(0)
//       .addClass("current");
//   })
//     .owlCarousel({
//     items: 4,
//     dots: true,
//     nav: true,
//     navText: [
//       '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
//       '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
//     ],
//     smartSpeed: 200,
//     slideSpeed: 500,
//     slideBy: 4,
//     responsiveRefreshRate: 100
//   })
//     .on("changed.owl.carousel", syncPosition2);

//   function syncPosition(el) {
//     //if loop is set to false, then you have to uncomment the next line
//     //var current = el.item.index;

//     //to disable loop, comment this block
//     var count = el.item.count - 1;
//     var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

//     if (current < 0) {
//       current = count;
//     }
//     if (current > count) {
//       current = 0;
//     }
//     //to this
//     thumbs
//       .find(".owl-item")
//       .removeClass("current")
//       .eq(current)
//       .addClass("current");
//     var onscreen = thumbs.find(".owl-item.active").length - 1;
//     var start = thumbs
//     .find(".owl-item.active")
//     .first()
//     .index();
//     var end = thumbs
//     .find(".owl-item.active")
//     .last()
//     .index();

//     if (current > end) {
//       thumbs.data("owl.carousel").to(current, 100, true);
//     }
//     if (current < start) {
//       thumbs.data("owl.carousel").to(current - onscreen, 100, true);
//     }
//   }

//   function syncPosition2(el) {
//     if (syncedSecondary) {
//       var number = el.item.index;
//       bigimage.data("owl.carousel").to(number, 100, true);
//     }
//   }

//   thumbs.on("click", ".owl-item", function(e) {
//     e.preventDefault();
//     var number = $(this).index();
//     bigimage.data("owl.carousel").to(number, 300, true);
//   });
// });
//      </script>
     
</body>

</html>