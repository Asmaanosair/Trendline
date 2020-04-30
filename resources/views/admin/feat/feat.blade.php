@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green"> feature Table</h3>

                    <button type="button" class="btn btn-warning pull-right text-blue" data-toggle="modal" data-target="#modal-warning">
                        Add New feature
                    </button>

                    <div class="modal modal-warning fade" id="modal-warning">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Add New feature </h4>
                                </div>
                                <form role="form" action="{{url('/kt_admin/add_feat')}}" method="post" enctype="multipart/form-data" >
                                    <div class="modal-body">
                                        {{csrf_field()}}


                                       
                                      
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Description</label>
                                            <textarea type="text" class="form-control"  name="des" id="exampleInputPassword1"  placeholder="Title"></textarea>
                                            @if ($errors->has('des'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
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
              
                        <th style="width: 100%">  Title </th>
                   

                        <th style="width: 18%">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($test as $row)
                        <form method="post" action="{{url('/kt_admin/up_feat/'.$row->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <tr>

                                <td>
                                 <textarea type="text" name="des" required="required" class="form-control"  rows="10" ><?php echo $row->des; ?></textarea>
                                                    @if ($errors->has('des'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                        </span>
                                                    @endif
                                </td>
                              
                            


                          

                                <td>
                                    <button type="submit" class="btn btn-success btn-md">Save  </button>
                                </td>
                                <td>
                                    <a href="{{url('/kt_admin/del_feat/'.$row->id)}}" class="btn btn-danger"> Delete</a>
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