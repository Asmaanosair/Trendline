
@extends('layouts.site_lay')



@section('content')

<style>
    
    .pd-2{
    padding:2%;
}
.pd-r-2{
    padding-right:2%;
}
.pd-l-2{
    padding-left:2%;
}
.pd-t-2{
    padding-top:2%;
}
.pd-b-2{
    padding-bottom:2%;
}
body{
    font-family: 'PT Sans', sans-serif;
}
h1,h2,h3,h4,h5,.lead,div[data-toggle="collapse"]{
    font-family: 'Oswald', sans-serif;
}
ul li{
    list-style:one;
}
div[data-toggle="collapse"]{
   border-bottom:1px solid #BBDEFB;
   width:100%;
   cursor:pointer;
   padding:1%;
}
.collapse{
    background:#F5F5F5;
}
</style>





<div class="container">
	<div class="row bg-info card my-4 mb-3 pd-l-2">
		<h3>
		    <span class="fa fa-question-circle text-white"></span>
		    Frequently asked questions
		</h3>
	</div>
	
	<div class="row">
	    <p class="col-sm-6 col-md-12">
	 
	    </p>
  
	    <ul id="accordion" class="col-sm-6 col-md-12">
	        <!-- Question one -->
	        
	        
	      
	        
	        
	        <!-- Question two -->
	       
	        
	        <!-- Question three -->
	        @foreach($faq as $row)
	        <li>
	            <div class="collapsed" data-toggle="collapse" data-target="#collapse{{$row->id}}" aria-expanded="false" aria-controls="collapse{{$row->id}}">
	       {{$row->name}}
	                <span class="fa fa-chevron-down fa-1x text-info pull-right"></span>
	            </div>
                <div id="collapse{{$row->id}}" class="collapse" aria-labelledby="heading{{$row->id}}" data-parent="#accordion">
                  <div class="card-body">
                 {!!$row->description!!}
                  </div>
                </div>
	        </li>
	        @endforeach
	        
	        <!-- Question Four -->
	      
	        
	        <!-- Questiion Five -->
	       
	        
	        <!-- Question Six-->
	      
	        
	    </ul>
	</div>
</div>


<script>
    
    
    $(function(){
    //$(".chevron-down").
    $("div[data-toggle=collapse]").click(function(){
        $(this).children('span').toggleClass("fa-chevron-down fa-chevron-up");
    });
})
</script>

@endsection