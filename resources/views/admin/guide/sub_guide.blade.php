@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green"> China Guide Table</h3>

                    <button type="button" class="btn btn-warning pull-right text-blue" data-toggle="modal" data-target="#modal-warning">
                        Add New
                    </button>
                    <div class="modal modal-warning fade" id="modal-warning">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Add New  </h4>
                                </div>
                                <form role="form" action="/kt_admin/add_sub_guide" method="post" enctype="multipart/form-data" >
                                    <div class="modal-body">
                                        {{csrf_field()}}

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Name</label>
                                            <input type="text" class="form-control"  name="name" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" dir="rtl"> الاسم   </label>
                                            <input type="text" class="form-control" name="name_ar" id="exampleInputPassword1"  placeholder="الاسم">
                                            @if ($errors->has('name_ar'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_ar') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" dir="rtl"> China Guide   </label>
                                            <select class="form-control" name="guide">
                                                @foreach($guide as $row)
                                                <option value="{{$row->id}}">{{$row->name}}</option>
                                                    @endforeach
                                            </select>

                                            @if ($errors->has('guide'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('guide') }}</strong>
                                         </span>
                                            @endif
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline">Save changes</button>
                                    </div>
                                </form>

                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <div class="box-tools">

                    </div>
                </div>

            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>
                        <th style="width: 20%">   الاسم  </th>
                        <th style="width: 20%">  Name </th>
                        <th>Chine Guide </th>
                        <th style="width: 18%">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($test as $row)
                        <form method="post" action="{{url('/kt_admin/up_sub_guide/'.$row->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <tr>

                                <td>
                                    <input type="text" name="name_ar" required="required" class="form-control" value="<?php echo $row->name_ar; ?>">
                                    @if ($errors->has('name_ar'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name_ar') }}</strong>
                                         </span>
                                    @endif
                                </td>
                                <td>
                                    <input type="text" name="name" required="required" class="form-control" value="<?php echo $row->name; ?>">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <select class="form-control" name="guide">
                                        @php(
                                        $item=\App\guid::find($row->guide_id)
                                        )
                                        @if($item==null)
                                            @else

                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endif
                                        @foreach($guide as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </td>

                                <td>
                                    <button type="submit" class="btn btn-success btn-md">Save  </button>
                                </td>
                                <td>
                                    <a href="{{url('/kt_admin/del_sub_guide/'.$row->id)}}" class="btn btn-danger"> Delete</a>
                                </td>


                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection