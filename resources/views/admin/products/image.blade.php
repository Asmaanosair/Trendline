@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green"> Image Table</h3>

                    <button type="button" class="btn btn-warning pull-right text-blue" data-toggle="modal" data-target="#modal-warning">
                        Add New Image
                    </button>

                    <div class="modal modal-warning fade" id="modal-warning">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Add New image </h4>
                                </div>
                                <form role="form" action="{{url('/kt_admin/image/'.$id)}}" method="post" enctype="multipart/form-data" >
                                    <div class="modal-body">
                                        {{csrf_field()}}

                                       
                                        



                                        <div class="form-group">
                                            <label for="exampleInputPassword1" > Image </label>
                                            <input type="file" rows="6" class="form-control"   name="image[]" id="exampleInputPassword1" placeholder="Link" multiple >

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
                       
                       

                        <th >  Image </th>

                       
                       
                        <th >Action</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($test as $row)
                        <form method="post" action="{{url('/kt_admin/up_image/'.$row->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <tr>
                            
                                
                             

                              

                               




                                <td>
                                    @if($row->image!=null)
                                        <img width="70px" src="{{asset('img/'.$row->image)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                                    <input type="file" class="form-control" name="image" style="margin-top: 5px;">
                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </td>


                               

                                <td>
                                    <button type="submit" class="btn btn-success btn-md">Save  </button>
                                </td>
                                <td>
                                    <a href="{{url('/kt_admin/del_image/'.$row->id)}}" class="btn btn-danger"> Delete</a>
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