@extends('layouts.site_lay')

@section('content')

    <!--// banner-text -->
    <!-- /breadcrumb -->
   
    <!-- //breadcrumb -->
    <!-- banner-bottom -->
    <br>
    <div class="container">
        <div class="row">
            @foreach($prod as $row)
            <div class="col-md-4">
                <figure class="card card-product" style="">
                    <div class="img-wrap"><img style="height:200px;width:100%" src="{{asset('/img/'.$row->image)}}"></div>
                    <figcaption class="info-wrap" style="height:250px">
                        <h4 class="title">
                                   
                             @if(Config::get('app.locale')=="en")
            {{$row->name}}
           
            @elseif(Config::get('app.locale')=="ch")
           {{$row->name_ar}}
            @else
           {{$row->name}}
            @endif
                            
                           </h4>
                        <p class="desc">      @if(Config::get('app.locale')=="en")
    {{$row->des}}
           
            @elseif(Config::get('app.locale')=="ch")
           {{$row->des_ar}}
            @else
           {{$row->des}}
            @endif</p>
                        <div class="rating-wrap">
                            <div class="label-rating">  @php(
           $itemnumber=explode(',',$test->itemnumber)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$itemnumber[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$itemnumber[1]}}
            @else
            {{$itemnumber[0]}}
            @endif {{$row->amount}}
            
            </div>
                        </div> <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <a href="{{url('order/'.str_replace(' ', '_',$row->name).'('.$row->id.')/'.Config::get('app.locale'))}}" class="btn btn-sm btn-primary float-right"> @php(
           $ordernow=explode(',',$test->ordernow)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$ordernow[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$ordernow[1]}}
            @else
            {{$ordernow[0]}}
            @endif </a>
                        <!--<div class="price-wrap h5">-->
                        <!--    <span class="price-new">{{$row->new_price}}</span> <del class="price-old">{{$row->old_price}}</del>-->
                        <!--</div> -->
                    </div> <!-- bottom-wrap.// -->
                </figure>
            </div>
            @endforeach<!-- col // -->
         <!-- col // -->
        </div> <!-- row.// -->

   

    </div>

@endsection
