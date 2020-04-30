@extends('layouts.site_lay')

@section('content')

    <!--// banner-text -->
    <!-- /breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Products</li>
    </ol>
    <!-- //breadcrumb -->
    <!-- banner-bottom -->
    <br>
    <div class="container">
        <div class="row">
            @foreach($prod as $row)
            <div class="col-md-4">
                <figure class="card card-product">
                    <div class="img-wrap"><img src="{{asset('/img/'.$row->image)}}"></div>
                    <figcaption class="info-wrap">
                        <h4 class="title">{{$row->name}}</h4>
                        <p class="desc">{{$row->des}}</p>
                        <div class="rating-wrap">
                            <div class="label-rating"> Item_number {{$row->amount}} </div>
                        </div> <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
         <a href="{{url('order/'.str_replace(' ', '_',$row->name_en))}}" class="btn btn-sm btn-primary float-right">Order Now ererterter</a>
                        <div class="price-wrap h5">
                            <span class="price-new">${{$row->new_price}}</span> <del class="price-old">{{$row->old_price}}</del>
                        </div> <!-- price-wrap.// -->
                    </div> <!-- bottom-wrap.// -->
                </figure>
            </div>
            @endforeach<!-- col // -->
         <!-- col // -->
        </div> <!-- row.// -->

   

    </div>

@endsection
