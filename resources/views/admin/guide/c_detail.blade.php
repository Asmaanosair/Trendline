@extends('layouts.admin_lay')

@section('content')
    <a href="{{url('/kt_admin/detail')}}" class="btn btn-warning pull-right"> Show All  </a>
    <form role="form" action="{{url('/kt_admin/add_detail')}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputPassword1"> الاسم  </label>
                <input type="text" class="form-control"  name="head" id="exampleInputPassword1"  placeholder="headline">
                @if ($errors->has('head'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('head') }}</strong>
                                         </span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" dir="rtl"> name   </label>
                <input type="text" class="form-control" name="head_ar" id="exampleInputPassword1"  placeholder="العنوان الرئيسي ">
                @if ($errors->has('head_ar'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('head_ar') }}</strong>
                                         </span>
                @endif
            </div>



        <div class="form-group">
            <label for="exampleInputPassword1"> Description</label>
            <textarea type="text" class="form-control"  id="editor3"  rows="6" name="des" id="exampleInputPassword1" placeholder="Description"></textarea>
            @if ($errors->has('des'))
                <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" dir="rtl"> تفاصيل   </label>
            <textarea type="text" class="form-control" rows="6"  id="editor4"name="des_ar" id="exampleInputPassword1" placeholder="تفاصيل"></textarea>
            @if ($errors->has('des_ar'))
                <span class="help-block">
                                            <strong>{{ $errors->first('des_ar') }}</strong>
                                         </span>
            @endif
        </div>



        <div class="form-group">
            <label for="exampleInputPassword1" dir="rtl">Sub Guide   </label>
            <select name="cat" class="form-control">
                @foreach($category as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
            </select>
            @if ($errors->has('how_ar'))
                <span class="help-block">
                                            <strong>{{ $errors->first('how_ar') }}</strong>
                                         </span>
            @endif
        </div>




        <button type="submit" class="form-control btn-success"> Save</button>

        </div>


    </form>

@endsection