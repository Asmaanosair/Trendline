@extends('layouts.site_lay')

@section('content')
    <!--// banner-text -->
    <!-- /breadcrumb -->
    
    <!-- //breadcrumb -->
    <!-- banner-bottom -->
    <div class="container">
        <br>
        <h2>  @php(
           $category=explode(',',$test->category)
           )
        
            @if(Config::get('app.locale')=="en")
            {{$category[0]}}
           
            @elseif(Config::get('app.locale')=="ch")
             {{$category[1]}}
            @else
            {{$category[0]}}
            @endif</h2>
        <div class="row">
            @foreach($cat as $row)
            <div class="col-md-6">
                <div class="category-list-card">
                    <div class="category-image">
                        <img src="{{asset('img/'.$row->image)}}">
                    </div>
                    <div class="category-name">
                        <a href="{{url('Product/'.$row->id.'/'.Config::get('app.locale'))}}"><h3>
                            
                             @if(Config::get('app.locale')=="en")
            {{$row->name}}
           
            @elseif(Config::get('app.locale')=="ch")
           {{$row->name_ar}}
            @else
           {{$row->name}}
            @endif
                            
                           </h3> </a>
                        <p>
                             @if(Config::get('app.locale')=="en")
    {{$row->des}}
           
            @elseif(Config::get('app.locale')=="ch")
           {{$row->des_ar}}
            @else
           {{$row->des}}
            @endif
                            
                           </p>
                    </div>
                    <div class="right-arrow-div">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>


@endsection

