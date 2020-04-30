@extends('layouts.site_lay')

@section('content')
    <!--// banner-text -->
    <!-- /breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Anniversary</li>
    </ol>
    <!-- //breadcrumb -->
    <!-- banner-bottom -->
    <section class="banner-bottom pb-3">
        <div class="container">
            <div class="row">
             
                
                  {!!$data->des!!}

               
            </div>
        </div>
    </section>


@endsection

