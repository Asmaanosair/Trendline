@extends('layouts.admin_lay')

@section('content')
    <a href="{{url('/kt_admin/f_service')}}" class="btn btn-warning pull-right"> Show All  </a>
    <form role="form" action="{{url('/kt_admin/add_f_service')}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="box-body">
          
            <div class="form-group">
                <label for="exampleInputPassword1" dir="rtl"> name   </label>
                <input type="text" class="form-control" name="head" id="exampleInputPassword1"  placeholder="Title ">
                @if ($errors->has('head'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('head') }}</strong>
                                         </span>
                @endif
            </div>



        <div class="form-group">
            <label for="exampleInputPassword1"> Description</label>
            <textarea type="text" class="form-control"  id="editor3"  rows="50" name="des" id="exampleInputPassword1" placeholder="Description"></textarea>
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