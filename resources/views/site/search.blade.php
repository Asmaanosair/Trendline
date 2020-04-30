@extends('layouts.site_lay')



@section('content')

<style>
    
    .fa-arrow-right{
        color:red;
        padding-right:5px;
    }
</style>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Search</li>
    </ol>
    <div class="container">
        @if(isset($search))
            @foreach($search as $row)
<div class="my-5">
<h4 class="py-4">{{$row->name}}</h4>
<a href="{{url('/Guide/'.$row->id)}}"><i class="fas fa-arrow-right"></i>Readmore</a>
</div>
@endforeach
        @else
    
@endif

    @if(isset($search2))
    
        @foreach($search2 as $row2)
<div class="my-5">
<h4 class="py-4">{{$row2->name}}</h4>
<a href="{{url('/Market/'.$row2->id)}}"><i class="fas fa-arrow-right"></i>Readmore</a>
</div>
@endforeach
        @else
    
@endif


</div>

@endsection
