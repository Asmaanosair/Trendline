@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green"> About Table</h3>

                    <!--<button type="button" class="btn btn-warning pull-right text-blue" data-toggle="modal" data-target="#modal-warning">-->
                    <!--    Add New About-->
                    <!--</button>-->

                    <!--<div class="modal modal-warning fade" id="modal-warning">-->
                    <!--    <div class="modal-dialog">-->
                    <!--        <div class="modal-content">-->
                    <!--            <div class="modal-header">-->
                    <!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                    <!--                    <span aria-hidden="true">&times;</span></button>-->
                    <!--                <h4 class="modal-title">Add New About </h4>-->
                    <!--            </div>-->
                    <!--            <form role="form" action="/kt_admin/add_about" method="post" enctype="multipart/form-data" >-->
                    <!--                <div class="modal-body">-->
                    <!--                    {{csrf_field()}}-->







                    <!--                    <div class="form-group">-->
                    <!--                        <label for="exampleInputPassword1"> Title</label>-->
                    <!--                        <input type="text" class="form-control"  name="title" id="exampleInputPassword1"  placeholder="Title">-->
                    <!--                        @if ($errors->has('title'))-->
                    <!--                            <span class="help-block">-->
                    <!--                        <strong>{{ $errors->first('title') }}</strong>-->
                    <!--                     </span>-->
                    <!--                        @endif-->
                    <!--                    </div>-->

                    <!--                    <div class="form-group">-->
                    <!--                        <label for="exampleInputPassword1" dir="rtl"> العنوان   </label>-->
                    <!--                        <input type="text" class="form-control" name="title_ar" id="exampleInputPassword1"  placeholder="العنوان">-->
                    <!--                        @if ($errors->has('title_ar'))-->
                    <!--                            <span class="help-block">-->
                    <!--                        <strong>{{ $errors->first('title_ar') }}</strong>-->
                    <!--                     </span>-->
                    <!--                        @endif-->
                    <!--                    </div>-->
                    <!--                    <div class="form-group">-->
                    <!--                        <label for="exampleInputPassword1"> Description</label>-->
                    <!--                        <textarea type="text" class="form-control"  name="des" id="exampleInputPassword1"  placeholder="Description"></textarea>-->
                    <!--                        @if ($errors->has('des'))-->
                    <!--                            <span class="help-block">-->
                    <!--                        <strong>{{ $errors->first('des') }}</strong>-->
                    <!--                     </span>-->
                    <!--                        @endif-->
                    <!--                    </div>-->

                    <!--                    <div class="form-group">-->
                    <!--                        <label for="exampleInputPassword1" dir="rtl"> الوصف   </label>-->
                    <!--                        <textarea type="text" class="form-control" name="des_ar" id="exampleInputPassword1"  placeholder="الوصف"></textarea>-->
                    <!--                        @if ($errors->has('des_ar'))-->
                    <!--                            <span class="help-block">-->
                    <!--                        <strong>{{ $errors->first('des_ar') }}</strong>-->
                    <!--                     </span>-->
                    <!--                        @endif-->
                    <!--                    </div>-->


                    <!--                    <div class="form-group">-->
                    <!--                        <label for="exampleInputPassword1" > Image </label>-->
                    <!--                        <input type="file" rows="6" class="form-control"   name="image" id="exampleInputPassword1" placeholder="Link">-->

                    <!--                    </div>-->





                    <!--                </div>-->
                    <!--                <div class="modal-footer">-->
                    <!--                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>-->
                    <!--                    <button type="submit" class="btn btn-outline">Save changes</button>-->
                    <!--                </div>-->
                    <!--            </form>-->

                    <!--        </div>-->
                            <!-- /.modal-content -->
                    <!--    </div>-->
                        <!-- /.modal-dialog -->
                    <!--</div>-->
                    <!-- /.modal -->
                    <div class="box-tools">

                    </div>
                </div>

            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>
                        <th style="width: 20%">    العنوان </th>
                        <th style="width: 20%">  title </th>

                        <th style="width: 20%">  description </th>
                        <th style="width: 20%">  Image </th>
                        <th style="width: 18%">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($service as $row)
                        <form method="post" action="{{url('/kt_admin/up_about/'.$row->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <tr>


                                <td>
                                    <input type="text" name="title_ar" required="required" class="form-control" value="<?php echo $row->name_ar; ?>">
                                    @if ($errors->has('title_ar'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title_ar') }}</strong>
                                         </span>
                                    @endif
                                </td>
                                <td>
                                    <input type="text" name="title" required="required" class="form-control" value="<?php echo $row->name; ?>">
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </td>






                                <td>
                                    <button type="button" class="btn btn-warning text-olive" data-toggle="modal" data-target="#modal-default{{$row->id}}">
                                        Details
                                    </button>
                                    <!--madal-->

                                    <div class="modal fade" id="modal-default{{$row->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title text-olive">Description of <spam class="text-yellow"> {{ $row->title}} </spam> </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="exampleInputPassword1" dir="rtl"> Description   </label>
                                                    <textarea type="text" name="des" required="required"  id="editor3"class="form-control"  rows="10" ><?php echo $row->des; ?></textarea>
                                                    @if ($errors->has('des'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                        </span>
                                                    @endif
                                                    <br>
                                                    <br>
                                                    <label for="exampleInputPassword1" dir="rtl"> الوصف   </label>
                                                    <textarea type="text" name="des_ar" required="required" class="form-control"   rows="10"  id="editor4"><?php echo $row->des_ar; ?></textarea>
                                                    @if ($errors->has('des_ar'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('des_ar') }}</strong>
                                        </span>
                                                    @endif





                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning text-olive pull-left" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warning text-olive">Save </button>

                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                </td>
                                
                                <td>
                                    <img src="{{asset('img/'.$row->image)}}" width="100px"height="100px">
                                         <label for="exampleInputPassword1" > Image </label>
                                         
                                            <input type="file" rows="6" class="form-control"   name="image" id="exampleInputPassword1" placeholder="Link">
                                </td>

                                <td>
                                    <button type="submit" class="btn btn-success btn-md">Save  </button>
                                </td>
                                <!--<td>-->
                                <!--    <a href="{{url('/kt_admin/del_about/'.$row->id)}}" class="btn btn-danger"> Delete</a>-->
                                <!--</td>-->


                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>

            </div>
            
            
            
<!--             <div class="containers">-->
<!--                <table class="table table-striped projects text-center">-->
<!--                    <thead>-->
<!--                    <tr>-->
                      
<!--                        <th style="width: 20%">  title </th>-->

<!--                        <th style="width: 20%">  description </th>-->
<!--                        <th style="width: 20%">  Video </th>-->
<!--                        <th style="width: 18%">Action</th>-->

<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    @foreach($service2 as $row)-->
<!--                        <form method="post" action="{{url('/kt_admin/up_about_video')}}" enctype="multipart/form-data">-->
<!--                            {{csrf_field()}}-->
<!--                            <tr>-->


                              
<!--                                <td>-->
<!--                                    <input type="text" name="title" required="required" class="form-control" value="<?php echo $row->name; ?>">-->
<!--                                    @if ($errors->has('title'))-->
<!--                                        <span class="help-block">-->
<!--                                            <strong>{{ $errors->first('title') }}</strong>-->
<!--                                        </span>-->
<!--                                    @endif-->
<!--                                </td>-->






<!--                                <td>-->
<!--                                    <button type="button" class="btn btn-warning text-olive" data-toggle="modal" data-target="#modal-default7">-->
<!--                                        Details-->
<!--                                    </button>-->
                                    <!--madal-->

<!--                                    <div class="modal fade" id="modal-default7">-->
<!--                                        <div class="modal-dialog">-->
<!--                                            <div class="modal-content">-->
<!--                                                <div class="modal-header">-->
<!--                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                                                        <span aria-hidden="true">&times;</span></button>-->
<!--                                                    <h4 class="modal-title text-olive">Description of <spam class="text-yellow"> {{ $row->title}} </spam> </h4>-->
<!--                                                </div>-->
<!--                                                <div class="modal-body">-->
<!--                                                    <label for="exampleInputPassword1" dir="rtl"> Description   </label>-->
<!--                                                    <textarea type="text" name="des" required="required" class="form-control"  rows="10" ><?php echo $row->des; ?></textarea>-->
<!--                                                    @if ($errors->has('des'))-->
<!--                                                        <span class="help-block">-->
<!--                                            <strong>{{ $errors->first('des') }}</strong>-->
<!--                                        </span>-->
<!--                                                    @endif-->
<!--                                                    <br>-->
<!--                                                    <br>-->
                                               





<!--                                                </div>-->
<!--                                                <div class="modal-footer">-->
<!--                                                    <button type="button" class="btn btn-warning text-olive pull-left" data-dismiss="modal">Close</button>-->
<!--                                                    <button type="submit" class="btn btn-warning text-olive">Save </button>-->

<!--                                                </div>-->
<!--                                            </div>-->
                                            <!-- /.modal-content -->
<!--                                        </div>-->
                                        <!-- /.modal-dialog -->
<!--                                    </div>-->
                                    <!-- /.modal -->
<!--                                </td>-->
                                
<!--                                <td>-->
<!--                                   <video width="320" height="240" controls>-->
<!--  <source src="{{asset('img/'.$row->video)}}" type="video/mp4">-->
<!--  <source src="{{asset('img/'.$row->video)}}" type="video/ogg">-->
  
<!--</video>-->
<!--                                         <label for="exampleInputPassword1" > video </label>-->
                                         
<!--                                            <input type="file" rows="6" class="form-control"   name="image" id="exampleInputPassword1" placeholder="Link">-->
<!--                                </td>-->

<!--                                <td>-->
<!--                                    <button type="submit" class="btn btn-success btn-md">Save  </button>-->
<!--                                </td>-->
                                <!--<td>-->
                                <!--    <a href="{{url('/kt_admin/del_about/'.$row->id)}}" class="btn btn-danger"> Delete</a>-->
                                <!--</td>-->


<!--                            </tr>-->
<!--                        </form>-->
<!--                    @endforeach-->
<!--                    </tbody>-->
<!--                </table>-->

<!--            </div>-->
        </div>
    </div>

@endsection