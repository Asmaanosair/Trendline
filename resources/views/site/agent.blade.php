@extends('layouts.site_lay')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Agent</li>
    </ol>
    <!-- //breadcrumb -->
    <!-- banner-bottom -->
    <section class="banner-bottom pb-3 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    @foreach($agent as $row)
                    <h4>{{$row->name}}</h4>
                    <p class="my-4">{!!$row->description!!}.</p>
                    <br>
                    @endforeach


                </div>
            </div>
        </div>
    </section>


@endsection

