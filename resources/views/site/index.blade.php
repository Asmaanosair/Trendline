@extends('layouts.site_lay')
@section('slider')
<style>
.category-list-card {
    background-color: #fff;
    border-radius: 3px;
    border: 4px solid #eee;
    display: block;
    margin: 5px 15px;
    padding: 8px 0;
    position: relative;
    height: 219px;
    width: 100%;
    -webkit-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
}

.hover{
    position:absolute;
    width:100%;
    height:100%;
    left:0;
    top:0;
    right:0;
    background-color:#80000085;
    opacity:0;
    
    -webkit-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
}

.hover:hover{
    display:block;
    opacity:1;
}

.category-name {
    display: inline-block;
    margin-left: 10px;
    font-size: 18px;
     margin-top: 0px; 
    /* width: 49%; */
    position: absolute;
    left: 50px;
    top: 43px;
    width:auto;
}

</style>

   <section class="content">
    <div id="slider-animation" class="carousel slide" data-ride="carousel"     style="    width: 100%;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
 
           
    <!--<li data-target="#slider-animation" data-slide-to="0"  class="active"></li>-->
    <!--<li data-target="#slider-animation" data-slide-to="1"></li>-->
    <!--<li data-target="#slider-animation" data-slide-to="2"></li>-->

  </ul>

  <div class="carousel-inner" style="height:60vh">
      @foreach($slider as $key=>$row)
    <div class="carousel-item @if($key==0) active @else @endif">
      <img src="{{asset('img/'.$row->img)}}" alt="{{$row->id}}" style="height:100%;width:100%"  >
        <div class="text-box">
            <h2   class="wow fadeInUp" data-wow-duration="4s" style="font-size: 50px;color: #e10000;font-weight: 800;">
        
            @if(Config::get('app.locale')=="en")
           {{$row->title}}
           
            @elseif(Config::get('app.locale')=="ch")
            {{$row->title_ar}}
            @else
          {{$row->title}}
            @endif
                
                </h2>
            <p  class="wow fadeInUp" data-wow-duration="2s"  style="font-size:30px;color: #ffffff;font-weight: 300;" >
                  @if(Config::get('app.locale')=="en")
    {!!$row->description!!} 
           
            @elseif(Config::get('app.locale')=="ch")
           {!!$row->description_ar!!} 
            @else
            {!!$row->description!!} 
            @endif
                
                
              </p>
    
        </div>
    </div>
       @endforeach
       
    
    
    <!--<div class="carousel-item active">-->
    <!--  <img src="http://en.ddpai.com/webcommon/images/mix3/animation/bac-2.png" >-->
    <!--<div class="text-box">-->
    <!--        <h2 class="wow slideInUp" data-wow-duration="4s" >This is samuel text</h2>-->
    <!--        <p class="wow fadeInDown" data-wow-duration="4s">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. </p>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="carousel-item">-->
    <!--  <img src="https://playthunee.com/assets/images/4player-bg.jpg" >-->
    <!--<div class="text-box">-->
    <!--        <h2 class="wow fadeInUp" data-wow-duration="4s">This is Airborne text</h2>-->
    <!--        <p class="wow fadeInUp" data-wow-duration="2s">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. </p>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="carousel-item">-->
    <!--  <img src="https://playthunee.com/assets/images/4player-bg.jpg" >-->
    <!--<div class="text-box">-->
    <!--        <h2 class="wow fadeInUp" data-wow-duration="4s">This is Airborne text</h2>-->
    <!--        <p class="wow fadeInUp" data-wow-duration="2s">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. </p>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="carousel-item">-->
    <!--  <img src="https://playthunee.com/assets/images/4player-bg.jpg" >-->
    <!--<div class="text-box">-->
    <!--        <h2 class="wow fadeInUp" data-wow-duration="4s">This is Airborne text</h2>-->
    <!--        <p class="wow fadeInUp" data-wow-duration="2s">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. </p>-->
    <!--    </div>-->
    <!--</div>-->
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slider-animation" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<br><br>
    
</section>
 
    
      <!--<a class="btn btn-info btn-offer my-5" href={{url('/Offer')}}>-->
      <!--      Offers-->
      <!--  </a>-->
           @endsection
@section('content')


















    <!-- ab -->
<!--    <section class="content">-->
<!--        <div class="container">-->
<!--            <div class="row inner-sec py-3">-->
<!--                <div class="col-md-6 intro text-left">-->
<!--                    <h1 class="headline main mb-3">{{$videos->name}}</h1>-->
<!--                    <h3 class="main mb-3">{{$videos->des}}</h3>-->
<!--                    <div id="abtn" class="cont-btn">-->
<!--                        <a  class="btn text-uppercase" href="{{url('/About')}}">-->
<!--                            About Us</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
                    
<!--                                               <video width="560" height="315" controls>-->
<!--  <source src="{{asset('img/'.$videos->video)}}" type="video/mp4">-->
<!--  <source src="{{asset('img/'.$videos->video)}}" type="video/ogg">-->
  
<!--</video>-->
                    
                    <!--
<!--                    @foreach($counter->chunk(3) as$counters)-->
<!--                <div class="row ">-->
            
<!--                     @foreach($counters as$key=>$row)-->
                    <!--
<!--                    <div class="col-sm-4">-->
                    
                        
<!--                        <div class="col-sm-4 counter col_fourth">-->
      
<!--      <h2 class=" h2-counter text-center"><span class="timer count-title count-number" data-to="12" data-speed="1500" >{{$row->number}}</span><span style="color:red">+</span></h2>-->
<!--       <p class="count-text ">{{$row->des}}</p>-->
   <!-- </div> 
<!--                    </div>-->
                     <!-- 
<!--                    </div>-->
                    
                    
<!--                    @endforeach-->
                

<!--            </div> -->
<!--            @endforeach-->
<!--                    -->
                    
                    
                    <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/fi_4YiPHGzc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;"></iframe></div>-->
<!--            </div>-->
<!--        </div></div>-->
<!--        </section>-->
        
        
        
   <!--       <section class="">-->
   <!--   <div style="    -->
   <!-- background: #ff000063; -->
   <!--" class="inner-sec py-3 " class="xxx">-->
   <!--       <div class="container">-->
              <!--
   <!--             <div class="row">-->
                    
   <!--                 <div class="col-lg-4 about-in text-left mb-md-5">-->
   <!--                     <div class="counter col_fourth">-->
      
   <!--   <h2 class=" h2-counter text-center"><span class="timer count-title count-number" data-to="12" data-speed="1500" >1100</span><span style="color:red">+</span></h2>-->
   <!--    <p class="count-text ">dgdggdgdg</p>-->
   <!-- </div>-->
   <!--                 </div> -->
                    
                   
        

   <!--             </div>-->
   <!--             -->
   <!--              @foreach($counter->chunk(3) as$counters)-->
   <!--             <div class="row ">-->
            
   <!--                  @foreach($counters as$key=>$row)-->
                    
   <!--                 <div class="col-sm-4">-->
                    
                        
   <!--                     <div class="counter col_fourth">-->
      
   <!--   <h2 class=" h2-counter text-center"><span class="timer count-title count-number" data-to="12" data-speed="1500" >{{$row->number}}</span><span style="color:red">+</span></h2>-->
   <!--    <p class="count-text ">{{$row->des}}</p>-->
   <!-- </div> -->
   <!--                 </div>-->
                    
   <!--                 </div>-->
                    
                    
   <!--                 @endforeach-->
                
   <!--             </div>-->
   <!--             @endforeach-->
   <!--         </div>-->
   <!--         </div>-->
   <!--        </section>-->
           
<!--<section class="content">-->
<!--        <div class="content container" style="    background-color: #f1f1f1;-->
<!--    padding-left: 45px;-->
<!--    padding-right: 100px;-->
<!--    width: 100%;">-->
           
   
<!--	<div class="row">-->
<!--            <div class="inner-sec py-3">-->
<!--                <div class="row mt-lg-5 mt-md-4 mt-4">-->
<!--                    <h1 class="headline main mb-md-5 mb-3">MAIN SERVICES</h1>-->
<!--                    <p  class="headline main mb-md-5 mb-3" style="padding: 15px;">{!!$o_serve->description_ar!!}</p>-->
<!--                    @foreach($serve as $row)-->
<!--                    <div class="col-lg-4 about-in text-left">-->
<!--                        <div class="card">-->
<!--                            <div class="card-body">-->
<!--                                <i class=" fas {{$row->icon}} mb-2"></i>-->
<!--                                <h5 class="card-title">{{$row->name}}</h5>-->
<!--                                <p class="card-text">{{$row->description}}.</p>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                    @endforeach-->








<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
        
<!--        </div>-->
<!--    </section>-->
    <!-- //ab -->

    <!-- banner-bottom -->
    <section class="banner-bottom py-md-5">
<!--        <div class="container">-->

<!--            <h3 style="color:#e10000;" class="tittle text-center mb-md-5 mb-4">HOW IT WORKS</h3>-->
<!--            <div class="row">-->
                <!-- <div class="col-lg-6 about-img">
<!--                 </div> -->
<!--                <div class="col-md-6 about-video">-->
<!--                    <iframe width="560" height="315" src="{{$link->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;"></iframe>-->
<!--                                                             <video width="560" height="315" controls>-->
<!--  <source src="{{$link->link}}" type="video/mp4">-->
<!--  <source src="{{$link->link}}" type="video/ogg">-->
  
<!--</video>-->
                    
                    
<!--                    </div>-->
<!--                <div class="col-lg-6 about-right">-->
<!--@foreach($how as $row)-->
<!--                    <h3>{{$row->name}}</h3>-->
<!--                    <p class="my-4">{{$row->description}}.</p>-->
<!--@endforeach-->

<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        
        
        <!--  <div class="container">-->
                
        <!--    <h3 style="color:#e10000;" class="tittle text-center mb-md-5 mb-4">HOW IT WORKS</h3>-->
        <!--    <div class="row">-->
               <!-- <div class="col-lg-6 about-img">
        <!--        </div> -->
        <!--        <div class="col-lg-3 about-left">-->
                     
        <!--            <h3 style="color: #e10000;">ADVANTAGES</h3>-->
        <!--            <p class="my-4">With over 10 years experience in the market we are well qualified to professionally handle your requirements.</p>-->
                    
        <!--            <h3 style="color: #e10000;">IN CHINA</h3>-->
        <!--            <p class="my-4">Guide you to visit markets and factories, Make records for all product details and help you to negotiate prices.</p>-->
        <!--        </div>-->
        <!--        <div class="col-md-6 about-video"><iframe width="560" height="315" src="https://www.youtube.com/embed/fi_4YiPHGzc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;"></iframe></div>-->
        <!--        <div class="col-lg-3 about-right">-->
                   

        <!--           <h3>PURCHASE COMPLETION</h3>-->
        <!--            <p class="my-4">Place and monitor orders, provide in-line inspection, be in daily communication.</p>-->

        <!--            <h3>NOT IN CHINA</h3>-->
        <!--            <p class="my-4">We can source and provide product quotations, We can repeat orders the same as before.</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
         <div class="container">
        <br>
        
        <h2 class="text-center" style="margin-bottom:50px">
         @php(
           $category=explode(',',$test2->category)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$category[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$category[1]}}
            @else
            {{$category[0]}}
            @endif
        </h2>
        
        <div class="row">
            @foreach($cat as $row)
            <a href="{{url('Product/'.$row->id .'/'.Config::get('app.locale'))}}">
                
            <div class="col-md-4">
                <div class="category-list-card">
                <div class="hover"></div>    
                   
                        <img src="{{asset('img/'.$row->image)}}" style="width:100%;height:200px">
                        
                         <div class="category-name">
                             
                        <a href="{{url('Product/'.$row->id .'/'.Config::get('app.locale'))}}">
                            
                            <h3>
                            
                             @if(Config::get('app.locale')=="en")
   {{$row->name}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$row->name_ar}}
            @else
            {{$row->name}}
            @endif
                            
                            
                         </h3> </a>
                        
                    </div>
                    
                   
                   
                </div>
            </div>
            @endforeach
            
            </a>

        </div>

    </div>
    </section>
    <!-- //banner-bottom -->


    <!-- /bottom-last -->
    <section class="bottom-last py-5 text-center" style='width:100%; background-color:{{$visit->img}};'>
        <div class="bottom-bg" style="width:100%; background-color:{{$visit->img}};">
            <h3>{!!$visit->des!!}</h3>
        </div>
    </section>
     <section class="banner-bottom py-lg-5 py-md-5 py-3">
         
          <!------------------------------
              -------  Recommended -----
           --------------------------------->
          <div class="container">
              <h1 class="text-center" style="margin-bottom:50px">      @php(
           $recom=explode(',',$test2->recom)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$recom[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$recom[1]}}
            @else
            {{$recom[0]}}
            @endif</h1>
        <div class="row">
            @foreach($prod as $row)
            <div class="col-md-4">
                <figure class="card card-product" style="4px solid rgba(0, 0, 0, 0.125)">
                    <div class="img-wrap"><img src="{{asset('/img/'.$row->image)}}"></div>
                    <figcaption class="info-wrap">
                        <h4 class="title">     @if(Config::get('app.locale')=="en")
   {{$row->name}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$row->name_ar}}
            @else
            {{$row->name}}
            @endif</h4>
                        <!--<p class="desc">{{$row->des}}</p>-->
                        <!--<div class="rating-wrap">-->
                        <!--    <div class="label-rating"> Item_number {{$row->amount}} </div>-->
                        <!--</div> <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <a href="{{url('order/'.str_replace(' ', '_',$row->name).'('.$row->id.')/'.Config::get('app.locale'))}}" class="btn btn-sm btn-primary float-right">
                          @php(
           $ordernow=explode(',',$test2->ordernow)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$ordernow[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$ordernow[1]}}
            @else
            {{$ordernow[0]}}
            @endif
           </a>
                        <div class="price-wrap h5">
                            <span class="price-new">{{$row->new_price}}</span> <del class="price-old">{{$row->old_price}}</del>
                        </div> <!-- price-wrap.// -->
                    </div> <!-- bottom-wrap.// -->
                </figure>
            </div>
            @endforeach<!-- col // -->
         <!-- col // -->
        </div> <!-- row.// -->

   

    </div>
    
     <!------------------------------
        --------End recommended -----
       ------------------------------->
<hr>


<svg style="width: 30%;margin-left: 37%;" id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path style="fill: #e10000;
    bottom: -10px;
    position: absolute;
    overflow: hidden;
    stroke: #e10000;" d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    
    <div class="container" style="padding:100px 0;">
	<div class="row">
		<div class="col-md-12 col-center m-auto" style="text-align: center;">
		   
			<h2 >  @php(
           $testimonial=explode(',',$test2->testimonial)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$testimonial[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$testimonial[1]}}
            @else
            {{$testimonial[0]}}
            @endif</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
				     @foreach($test as $key=>$val)
					<div class="item carousel-item @if($key==0)active @else @endif">
						<div class="img-box"><img src="{{asset('img/'.$val->img)}}" alt=""></div>
							<p class="testimonial">
							    
							  <!--  @if(Config::get('app.locale')=="en")-->
         <!--{{$val->description}}-->
           
         <!--   @elseif(Config::get('app.locale')=="ch")-->
         <!--{{$val->description_ar}}-->
         <!--   @else-->
         <!--  {{$val->description}}-->
         <!--   @endif-->
         
         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
							    
							    
							    .</p>
							    
						<p class="overview"><b>{{$val->name}}</b>, {{$val->job}}</p>
					</div>
					@endforeach
				
				
				</div>
				<!-- Carousel controls -->
				<!--<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">-->
				<!--	<i class="fa fa-angle-left"></i>-->
				<!--</a>-->
				<!--<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">-->
				<!--	<i class="fa fa-angle-right"></i>-->
				<!--</a>-->
			</div>
		</div>
	</div>
</div>

</section>














    <!--<div class="card col-md-8 mt-5 mb-5">-->
    <!--    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">-->
    <!--        <div class="w-100 carousel-inner" role="listbox">-->
    <!--            <h3 class="tittle text-center mb-3">Testimonials</h3>-->
    <!--            @foreach($test as $key=>$val)-->
    <!--            <div class="carousel-item @if($key==0)active @else @endif">-->
    <!--                <div class="carousel-caption">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-sm-3">-->
    <!--                            <img src="{{asset('img/'.$val->img)}}" alt="" class="rounded-circle img-fluid"/>-->
    <!--                        </div>-->
    <!--                        <div class="col-sm-9">-->
    <!--                            <h3>{{$val->name}}</h3>-->
    <!--                            <small>{{$val->description}}.</small>-->
    <!--                            <small class="smallest mute">- {{$val->job}}</small>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            @endforeach-->
              
             
    <!--        </div>-->
    <!--        <div class="float-right navi">-->
    <!--            <a class="" href="#carouselExampleControls" role="button" data-slide="prev">-->
    <!--                <span class="carousel-control-prev-icon ico" aria-hidden="true"></span>-->
    <!--                <span class="sr-only">Previous</span>-->
    <!--            </a>-->
    <!--            <a class="" href="#carouselExampleControls" role="button" data-slide="next">-->
    <!--                <span class="carousel-control-next-icon ico" aria-hidden="true"></span>-->
    <!--                <span class="sr-only">Next</span>-->
    <!--            </a>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
 

    @endsection

    
