@extends('layouts.site_lay')

@section('content')
    <!--// banner-text -->
    <!-- /breadcrumb -->
  
    <!-- //breadcrumb -->
    <!-- banner-bottom -->
    <section class="banner-bottom pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img style="width:100%" src="{{asset('img/'.$about->image)}}" />
                </div>
                <div class="col-lg-6 col-xs-12 about-right">
                    <h4>Who We Are</h4>

                    <h3>{{$about->name}}.</h3>
                    <p class="my-4">{!!$about->des!!}.</p>

                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!-- ab -->
    <section class="container banner-bottom py-3">

        <div class="container">
            <div class="row inner-sec py-3">
                <div class="row mt-lg-5 mt-md-4 mt-4">
                    <h1 class="headline main mb-md-5 mb-3">MAIN SERVICES</h1>
                    <p  class="headline main mb-md-5 mb-3" style="padding: 15px;">{!!$o_serve->description_ar!!}</p>
                    @foreach($serve as $row)
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <i class="{{$row->icon}} mb-2"></i>
                                <h5 class="card-title">{{$row->name}}</h5>
                                <p class="card-text">{{$row->description}}.</p>
                            </div>
                        </div>

                    </div>
                    @endforeach


                </div>

            </div>
        </div>
    </section>
    <!-- //ab -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="headline main mb-md-5 mb-3">OUR FEATURE</h1>
            </div>
            @foreach($feat as $row)
            <div class="col-md-6">

                <div class="boc_list_item  ">
                    <span class="li_icon large " style=""><i class="fas fa-check-circle"></i></span>
                    <div class="boc_list_item_text large">{{$row->des}}</div>
                </div>

              
               
                

            </div>
            @endforeach
            <!--<div class="col-md-6">-->
            <!--    <div class="boc_list_item  ">-->
            <!--        <span class="li_icon large " style=""><i class="fas fa-check-circle"></i></span>-->
            <!--        <div class="boc_list_item_text large">Independent advice given on all aspects of the buying process</div>-->
            <!--    </div>-->
            <!--    <div class="boc_list_item  ">-->
            <!--        <span class="li_icon large " style=""><i class="fas fa-check-circle"></i></span>-->
            <!--        <div class="boc_list_item_text large">Consolidation , Inspection , Loading , Shipping services</div>-->
            <!--    </div>-->
            <!--    <div class="boc_list_item  ">-->
            <!--        <span class="li_icon large " style=""><i class="fas fa-check-circle"></i></span>-->
            <!--        <div class="boc_list_item_text large">Certification certificates provided as required</div>-->
            <!--    </div>-->
            <!--    <div class="boc_list_item  ">-->
            <!--        <span class="li_icon large " style=""><i class="fas fa-check-circle"></i></span>-->
            <!--        <div class="boc_list_item_text large">Full service sourcing and production management team</div>-->
            <!--    </div>-->
            <!--    <div class="boc_list_item  ">-->
            <!--        <span class="li_icon large " style=""><i class="fas fa-check-circle"></i></span>-->
            <!--        <div class="boc_list_item_text large">TOP-5 Trading Company in Yiwu China,Offices in Yiwu & Guangzhou with ability to deal in all of China</div>-->
            <!--    </div>-->
            <!--    <div class="boc_list_item  ">-->
            <!--        <span class="li_icon large " style=""><i class="fas fa-check-circle"></i></span>-->
            <!--        <div class="boc_list_item_text large">Solid reputation earned by providing quality service</div>-->
            <!--    </div>-->
            <!--    <div class="boc_list_item  ">-->
            <!--        <span class="li_icon large " style=""><i class="fas fa-check-circle"></i></span>-->
            <!--        <div style="color: #167ac6;" class="boc_list_item_text large">100% Guarantee. We take responsibility for any problems on quality, quanlity packing and breakage, ect</div>-->
            <!--    </div>-->

            <!--</div>-->
        </div>
    </div>
    <!-- /bottom-last -->
   <section class="bottom-last py-5 text-center" style='width:100%; background-color:{{$visit->img}}' no-repeat cover center;">
        <div class="bottom-bg" style="width:100%; ackground-color:{{$visit->img}};">
            <h3>{!!$visit->des!!}</h3>
        </div>
    </section>



@endsection
