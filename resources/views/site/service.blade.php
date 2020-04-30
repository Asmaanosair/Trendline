@extends('layouts.site_lay')

@section('content')
 <style>
        /*Fun begins*/
.tab_container {
	width: 90%;
	margin: 0 auto;
	padding-top: 70px;
	position: relative;
}

input, section {
  clear: both;
  padding-top: 10px;
  display: none;
}
label:hover{
      background-color: #ffffff;
}
/*a:hover { */
/*  background-color: yellow;*/
/*}*/
label {
        border: #e4e4ec 1px solid;
    border-radius: 10px;
        margin-left:70px;
  font-weight: 700;
  font-size: 14px;
  display: block;
  float: left;
  padding: 0.5em;
  color: #757575;
  cursor: pointer;
  text-decoration: none;
  text-align: center;
  background: #f0f0f0;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4,
#tab5:checked ~ #content5,
#tab6:checked ~ #content6
{
  display: block;
  padding: 20px;
  background: #fff;
  color: #999;
  border-bottom: 2px solid #f0f0f0;
}

.tab_container .tab-content p,
.tab_container .tab-content h3 {
  -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}
.tab_container .tab-content h3  {
  text-align: center;
}

.tab_container [id^="tab"]:checked + label {
      background: #1abc9c85;
  /*box-shadow: inset 0 3px #1abc9c85;*/
}

.tab_container [id^="tab"]:checked + label .fa {
  color: #0CE;
}

label .fa {
  font-size: 1.3em;
  margin: 0 0.4em 0 0;
}

/*Media query*/
@media only screen and (max-width: 930px) {
  label span {
    font-size: 14px;
  }
  label .fa {
    font-size: 14px;
  }
}

@media only screen and (max-width: 768px) {
  label span {
    display: none;
  }

  label .fa {
    font-size: 16px;
  }

  .tab_container {
    width: 98%;
  }
}

/*Content Animation*/
@keyframes fadeInScale {
  0% {
  	transform: scale(0.9);
  	opacity: 0;
  }
  
  100% {
  	transform: scale(1);
  	opacity: 1;
  }
}
    </style>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
             <a href="{{url('/'.Config::get('app.locale'))}}"> 
            @php(
           $home=explode(',',$test->home)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$home[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$home[1]}}
             
            @else
      
            
            
            {{$home[0]}}
            @endif</a>
        </li>
        <li class="breadcrumb-item active">
             @php(
           $service=explode(',',$test->service)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$service[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$service[1]}}
             
            @else
      
            
            
            {{$service[0]}}
            @endif
            </li>
    </ol>
    <!-- //breadcrumb -->
    <!-- / -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"><br><h2> @php(
           $ourservice=explode(',',$test->ourservice)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$ourservice[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$ourservice[1]}}
             
            @else
      
            
            
            {{$ourservice[0]}}
            @endif</h2><br><p>
                
                     @if(Config::get('app.locale')=="en")
       {!!$o_serve->description!!}.
           
            @elseif(Config::get('app.locale')=="ch")
      {!!$o_serve->description_ar!!}.
            @else
       {!!$o_serve->description!!}.
            @endif
                
                
                
                
               </p></div>
        </div>
    </div>
  <div class="tab_container">
     
      @foreach($f_serve as $k=>$val)
      @php(
      $i=$k+1
      )
			<input id="tab{{$i}}" type="radio" name="tabs" checked>
			<label for="tab{{$i}}"><span>
			      @if(Config::get('app.locale')=="en")
 
			    {{$val->name}}
           
            @elseif(Config::get('app.locale')=="ch")
  
			    {{$val->name_ar}}
            @else
  
			    {{$val->name}}
            @endif
			   </span></label>
@endforeach
		
			@foreach($f_serve as $key=>$val1)
			 @php(
      $j=$key+1
      )
			<section id="content{{$j}}" class="tab-content @if($key==0) text-center @else  @endif">
			    
			    
			       @if(Config::get('app.locale')=="en")
 
			  	{!!$val1->description!!}
           
            @elseif(Config::get('app.locale')=="ch")
  
			  	{!!$val1->description_ar!!}
            @else
  
				{!!$val1->description!!}
            @endif
		
		      	
			</section>
			@endforeach

		



			
		
		</div>
		
		
		

@endsection

