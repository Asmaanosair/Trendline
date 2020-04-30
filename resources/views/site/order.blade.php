@extends('layouts.site_lay')

@section('content')




<style>
    .btn-primary{
        background-color:red;
    }
    
 .outer { margin:0 auto; max-width:1000px;}
#big .item {
    /*background: #ec6e46;*/
    padding: 120px 0px; margin:2px; color: #FFF; border-radius: 3px; text-align: center; }
#thumbs .item { background: #C9C9C9; height:70px; line-height:70px; padding: 0px; margin:2px; color: #FFF; border-radius: 3px; text-align: center; cursor: pointer; }
#thumbs .item h1 { font-size: 18px; }
#thumbs .current .item { background:#FF5722; }
.owl-theme .owl-nav [class*='owl-'] { -webkit-transition: all .3s ease; transition: all .3s ease; }
/*.owl-theme .owl-nav [class*='owl-'].disabled:hover { background-color: #D6D6D6; }*/
#big.owl-theme { position: relative; }
#big.owl-theme .owl-next, #big.owl-theme .owl-prev { width: 22px; line-height:40px; height: 40px; margin-top: -20px; position: absolute; text-align:center; top: 50%; }
#big.owl-theme .owl-prev { left: 10px; }
#big.owl-theme .owl-next { right: 10px; }
/*#thumbs.owl-theme .owl-next, #thumbs.owl-theme .owl-prev { background:#333; }*/
.owl-theme .owl-nav [class*=owl-]:hover {
    background: transparent;
    color: #000;
    text-decoration: none;
}

</style>


    
    
    
<section style="margin-top:200px">
    <div class="container">
<div class="row">
    

        <div class="col-md-12 col-sm-12">
<div class="outer">
<div id="big" class="owl-carousel owl-theme">
  
 <div class="item" style="background-image: url('{{asset("img/".$section->image)}}'); background-repeat: no-repeat;background-position: center;  ">
  </div>
  @php(
  $images=App\product_image::where('product_id',$section->id)->get()
  )
  @if(count($images)==0)
  
  <!--<div class="item">-->
  <!--  <h1>2</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>3</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>4</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>5</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>6</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>7</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>8</h1>-->
  <!--</div>-->
  <!--    <div class="item">-->
  <!--  <h1>9</h1>-->
  <!--</div>-->
  <!--  <div class="item">-->
  <!--  <h1>10</h1>-->
  <!--</div>-->
  @else
  @foreach($images as $val)
   <div class="item" style="background-image: url('{{asset("img/".$val->image)}}'); background-repeat: no-repeat;background-position: center;">
<h1>2</h1>
  </div>
  @endforeach
  @endif
</div>
<div id="thumbs" class="owl-carousel owl-theme">
 <div class="item" style="background-image: url('{{asset("img/".$section->image)}}'); background-repeat: no-repeat;background-position: center;">

  </div>
   @if(count($images)==0)
  
  <!--<div class="item">-->
  <!--  <h1>2</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>3</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>4</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>5</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>6</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>7</h1>-->
  <!--</div>-->
  <!--<div class="item">-->
  <!--  <h1>8</h1>-->
  <!--</div>-->
  <!--    <div class="item">-->
  <!--  <h1>9</h1>-->
  <!--</div>-->
  <!--  <div class="item">-->
  <!--  <h1>10</h1>-->
  <!--</div>-->
  @else
  @foreach($images as $val)
  <div class="item" style="background-image: url('{{asset("img/".$val->image)}}'); background-repeat: no-repeat;background-position: center;">
  </div>
  @endforeach
  @endif
</div>
</div>
    </div>
    
    
            <div class="col-md-12 col-sm-12">
            <div>
                <h4>     @if(Config::get('app.locale')=="en")
   {{$section->name}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$section->name_ar}}
            @else
            {{$section->name}}
            @endif</h4>
                <p style="padding-left:20px">  @if(Config::get('app.locale')=="en")
   {!!$section->porg!!}
           
            @elseif(Config::get('app.locale')=="ch")
           {!!$section->porg_ar!!}
            @else
           {!!$section->porg!!}
            @endif</p>
                
                <span style="display:block"> @php(
           $price=explode(',',$transl->price)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$price[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$price[1]}}
             
            @else
      
            
            
            {{$price[0]}}
            @endif:   {{$section->new_price}}</span>
            </div>
        </div>
        
                    
</div>
</div>
</section>    
    
    
    
<section class="py-5 my-5 container">
    
    <form id="contact" method="post" class="form" action="{{url('/send_order')}}" role="form">
    
      {{csrf_field()}}
<div class="row">
<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="name" name="name"  placeholder="name" type="text" required   
        
           />
</div>

<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="email" name="mail"  type="email" required   
           @php(
           $email=explode(',',$test->email)
           )
        
            @if(Config::get('app.locale')=="en")
            placeholder="{{$email[0]}}"
           
            @elseif(Config::get('app.locale')=="ch")
            placeholder="{{$email[1]}}"
             
            @else
      
            
            
             placeholder="{{$email[0]}}"
            @endif />
</div>

<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="phone" name="phone"  @php(
           $phone44=explode(',',$test->phone)
           )
        
            @if(Config::get('app.locale')=="en")
            placeholder="{{$phone44[0]}}"
           
            @elseif(Config::get('app.locale')=="ch")
            placeholder="{{$phone44[1]}}"
             
            @else
      
            
             placeholder="{{$phone44[0]}}"
            @endif required  />
</div>


<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="product" name="product" value="{{$name}}" placeholder="product" type="text" required  />
</div>
<textarea class="form-control" id="message" name="msg" @php(
           $message=explode(',',$test->message)
           )
        
            @if(Config::get('app.locale')=="en")
            placeholder="{{$message[0]}}"
           
            @elseif(Config::get('app.locale')=="ch")
            placeholder="{{$message[1]}}"
             
            @else
      
            
             placeholder="{{$message[0]}}"
            @endif rows="5"></textarea>
<br />
<div class="row py-3">
<div class="col-xs-12 col-md-12 form-group text-center">
<button class="btn btn-primary pull-center "  type="submit">@php(
           $pay=explode(',',$test->pay)
           )
        
            @if(Config::get('app.locale')=="en")
          {{$pay[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
       {{$pay[1]}}
             
            @else
      
            
  {{$pay[0]}}
            @endif</button>
</form>
</div>
</div>
    
    
</section>

<script>
$(document).ready(function() {
  var bigimage = $("#big");
  var thumbs = $("#thumbs");
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage
    .owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: true,
    autoplay: true,
    dots: false,
    loop: true,
    responsiveRefreshRate: 200,
    navText: [
      '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
      '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
    ]
  })
    .on("changed.owl.carousel", syncPosition);

  thumbs
    .on("initialized.owl.carousel", function() {
    thumbs
      .find(".owl-item")
      .eq(0)
      .addClass("current");
  })
    .owlCarousel({
    items: 4,
    dots: true,
    nav: true,
    navText: [
      '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
      '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
    ],
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: 4,
    responsiveRefreshRate: 100
  })
    .on("changed.owl.carousel", syncPosition2);

  function syncPosition(el) {
    //if loop is set to false, then you have to uncomment the next line
    //var current = el.item.index;

    //to disable loop, comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    //to this
    thumbs
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = thumbs.find(".owl-item.active").length - 1;
    var start = thumbs
    .find(".owl-item.active")
    .first()
    .index();
    var end = thumbs
    .find(".owl-item.active")
    .last()
    .index();

    if (current > end) {
      thumbs.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage.data("owl.carousel").to(number, 300, true);
  });
});

</script>



@endsection