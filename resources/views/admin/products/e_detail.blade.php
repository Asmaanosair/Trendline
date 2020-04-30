@extends('layouts.admin_lay')

@section('content')
    <a href="{{url('/kt_admin/product')}}" class="btn btn-warning pull-right"> Show All  </a>
    <form role="form" action="{{url('/kt_admin/up_detail/'.$product->id)}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="box-body">
           
            

        <div class="form-group">
            <label for="exampleInputPassword1"> Description</label>
            <textarea type="text" class="form-control"  id="editor3"  rows="6" name="des" id="exampleInputPassword1" placeholder="Description">{{$product->prog}}</textarea>
            @if ($errors->has('des'))
                <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" dir="rtl"> تفاصيل   </label>
            <textarea type="text" class="form-control" rows="6"  id="editor4"name="des_ar" id="exampleInputPassword1">{{$product->prog_ar}}</textarea></textarea>
            @if ($errors->has('des_ar'))
                <span class="help-block">
                                            <strong>{{ $errors->first('des_ar') }}</strong>
                                         </span>
            @endif
        </div>



        




        <button type="submit" class="form-control btn-success"> Save</button>

        </div>


    </form>

@endsection