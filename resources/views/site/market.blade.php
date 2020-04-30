@extends('layouts.site_lay')

<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/6BD1CA57-36A9-794D-A29C-137C6D7E347B/main.js" charset="UTF-8"></script><script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">{{$market->name}}</li>
    </ol>
    <br>
    <div class="container">
        <div class="row">
             <div class="col-md-9">
            {!! $market->des !!}
            </div>
            <div class="col-md-3">
                <ul class="list-group">
                    @php(
                    $all2=App\sub_market::where('market_id',$market->market_id)->get()
                    )
                    
                    @foreach($all2 as $m)
                    <li class="list-group-item"><a href="{{url('/Market/'.$m->id)}}" target="_blank">{{$m->name}}</a></li>
                    @endforeach
                  
               
                </ul>
            </div>
        </div>
    </div>

    <br>
@endsection

