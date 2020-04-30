@extends('layouts.admin_lay')

@section('content')

    <form role="form" action="{{url('/kt_admin/up_anniversary')}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="box-body">
            
            <div class="form-group">
                <label for="exampleInputPassword1"> Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputPassword1" placeholder="Title" value="{{$product->title}}">
                @if ($errors->has('des'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                @endif
            </div>



            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea type="text" class="form-control"  id="editor3"  rows="6" name="des" id="exampleInputPassword1" placeholder="Description">{{$product->des}}</textarea>
                @if ($errors->has('des'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                @endif
            </div>








            <button type="submit" class="form-control btn-success"> Save</button>

        </div>


    </form>

@endsection