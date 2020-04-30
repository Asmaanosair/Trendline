@extends('layouts.site_lay')

@section('content')

    <!-- //breadcrumb -->
    <!-- /Contact-->
    <!--<section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">-->
    <!--    <div class="container">-->
    <!--        <div class="inner-sec-w3layouts py-lg-5 py-3">-->
    <!--            <h3 class="tittle text-center mb-md-5 mb-4">Contact Us</h3>-->
    <!--            <div class="address row">-->
    <!--                <div class="col-lg-4 address-grid">-->
    <!--                    <div class="row address-info">-->
    <!--                        <div class="col-md-3 address-left text-center">-->
    <!--                            <i class="far fa-map"></i>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-9 address-right text-left">-->
    <!--                            <h6>YIWU HEAD OFFICE Address:</h6>-->
    <!--                            <p> A 3rd Floor of No. 5, Building 81,Yinhai District 2, Yiwu, China.</p>-->
    <!--                            <br>-->
    <!--                            <h6>GUANGZHOU OFFICE Address:</h6>-->
    <!--                            <p> 2405# Luhu Shengjing, No.36 Lujing West Road Yuexiu District Guangzhou,China，510180</p>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                </div>-->
    <!--                <div class="col-lg-4 address-grid">-->
    <!--                    <div class="row address-info">-->
    <!--                        <div class="col-md-3 address-left text-center">-->
    <!--                            <i class="far fa-envelope"></i>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-9 address-right text-left">-->
    <!--                            <h6>Email</h6>-->
    <!--                            <p>Email :-->
    <!--                                <a href="mailto:info@trendline-group.com"> info@trendline-group.com</a>-->

    <!--                            </p>-->
    <!--                        </div>-->

    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-4 address-grid">-->
    <!--                    <div class="row address-info">-->
    <!--                        <div class="col-md-3 address-left text-center">-->
    <!--                            <i class="fas fa-mobile-alt"></i>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-9 address-right text-left">-->
    <!--                            <h6>Phone:</h6>-->
    <!--                            <p>(Mr. muhmd): +86-965874(oversea)</p>-->
    <!--                            <br>-->
    <!--                            <h6>WhatsApp:</h6>-->
    <!--                            <p>+1234567891011212</p>-->
    <!--                            <br>-->
    <!--                            <h6>Telephone:</h6>-->
    <!--                            <p>+86-579-665542555</p>-->
    <!--                        </div>-->

    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="contact_grid_right">-->
    <!--                <form action="#" method="post">-->
    <!--                    <div class="row contact_left_grid">-->
    <!--                        <div class="col-md-6 con-left">-->
    <!--                            <div class="form-group">-->
    <!--                                <label class="my-2">Name</label>-->
    <!--                                <input class="form-control" type="text" name="Name" placeholder="" required="">-->
    <!--                            </div>-->
    <!--                            <div class="form-group">-->
    <!--                                <label>Email</label>-->
    <!--                                <input class="form-control" type="email" name="Email" placeholder="" required="">-->
    <!--                            </div>-->
    <!--                            <div class="form-group">-->
    <!--                                <label class="my-2">Subject</label>-->
    <!--                                <input class="form-control" type="text" name="Subject" placeholder="" required="">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-6 con-right-w3ls">-->
    <!--                            <div class="form-group">-->
    <!--                                <label>Message</label>-->
    <!--                                <textarea id="textarea" placeholder="" required=""></textarea>-->
    <!--                            </div>-->
    <!--                            <input class="form-control" type="submit" value="Submit">-->

    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </form>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- //Contact -->
   <div class="contact-map">

        <iframe src="{{$con->location}}" class="map" style="border:0" allowfullscreen=""></iframe>
  </div>
  
  <!-- //bottom-last -->
<section style="background:#ececec;" class="content">
            <div class="container">
                <br><br>
<div class="row">
    @foreach($branch as $row)
<div class="col-sm-4">
<h3>{{$row->office}}</h3>
<hr>
<address>
<strong>address:</strong> {{$row->address}}<br>
<strong>Email:</strong> {{$row->email}}<br>
<strong>Phone:</strong> {{$row->phone}}<br>
<strong>What's App:</strong> {{$row->whats}}<br>

</address>

<!--<address>-->
<!--<strong>Germany Address:</strong>  (Haftungsbeschraenkt/Limited-Liability), Morsering 2, Munich 80937 Germany , <br>-->
<!--<strong>Phone:</strong> +49 151 2757 2810-->
<!--</address>-->
</div>
@endforeach
<!--  <div class="col-sm-4">-->
<!--<h3>GUANGZHOU OFFICE</h3>-->
<!--<hr>-->
<!--<address>-->
<!--<strong>address:</strong> eNest LLC 4809, E Thistle Landing, Dr. Suit 100 AZ 85044 USA ,<br>-->
<!--<strong>Phone:</strong> +1-888-414-6658 -->
<!--</address>-->

<!--<address>-->
<!--<strong>Germany Address:</strong>  (Haftungsbeschraenkt/Limited-Liability), Morsering 2, Munich 80937 Germany , <br>-->
<!--<strong>Phone:</strong> +49 151 2757 2810-->
<!--</address>-->
<!--</div>  -->
<div class="col-sm-4 contact-form">
    <h3>contact</h3>
<hr>
<form id="contact" method="post" class="form" action="{{url('/send')}}" role="form">
    
      {{csrf_field()}}
<div class="row">
<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="name" name="name"


  @php(
           $name55=explode(',',$test->name)
           )
        
            @if(Config::get('app.locale')=="en")
            placeholder="{{$name55[0]}}"
           
            @elseif(Config::get('app.locale')=="ch")
            placeholder="{{$name55[1]}}"
             
            @else
      
            
            
             placeholder="{{$name55[0]}}"
            @endif

 type="text" required  />
</div>
<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="email" name="mail"   @php(
           $email=explode(',',$test->email)
           )
        
            @if(Config::get('app.locale')=="en")
            placeholder="{{$email[0]}}"
           
            @elseif(Config::get('app.locale')=="ch")
            placeholder="{{$email[1]}}"
             
            @else
      
            
            
             placeholder="{{$email[0]}}"
            @endif type="email" required />
</div>
<div class="col-xs-12 col-md-12 form-group">
<input class="form-control" id="phone" name="phone" 
 @php(
           $phone44=explode(',',$test->phone)
           )
        
            @if(Config::get('app.locale')=="en")
            placeholder="{{$phone44[0]}}"
           
            @elseif(Config::get('app.locale')=="ch")
            placeholder="{{$phone44[1]}}"
             
            @else
      
            
             placeholder="{{$phone44[0]}}"
            @endif

required />
</div>
<textarea class="form-control" id="message" name="msg" 

 @php(
           $message=explode(',',$test->message)
           )
        
            @if(Config::get('app.locale')=="en")
            placeholder="{{$message[0]}}"
           
            @elseif(Config::get('app.locale')=="ch")
            placeholder="{{$message[1]}}"
             
            @else
      
            
             placeholder="{{$message[0]}}"
            @endif
 rows="5"></textarea>
</div>

<br />
<div class="row">
<div class="col-xs-12 col-md-12 form-group">
<button class="btn btn-primary pull-right" type="submit"> 
@php(
           $submit=explode(',',$test->submit)
           )
        
            @if(Config::get('app.locale')=="en")
          {{$submit[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
       {{$submit[1]}}
             
            @else
      
            
  {{$submit[0]}}
            @endif
            </button>
</form>
</div>
</div>
        </section>


@endsection
