@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green"> Visitors Table</h3>

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
                        <th style="width: 20%">    Number </th>
                        <th style="width: 20%">  title </th>

                        <th style="width: 20%">  description </th>
                        <th style="width: 20%">  Backgoround Color </th>
                        <th style="width: 18%">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($service as $row)
                        <form method="post" action="{{url('/kt_admin/up_visit/'.$row->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <tr>


                                <td>
                                    <input type="text" name="number" required="required" class="form-control" value="<?php echo $row->number; ?>">
                                    @if ($errors->has('number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('number') }}</strong>
                                         </span>
                                    @endif
                                </td>
                                <td>
                                    <input type="text" name="title" required="required" class="form-control" value="<?php echo $row->title; ?>">
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
                                                   
        <div class="form-group">
            <label for="exampleInputPassword1"> Description</label>
            <textarea type="text" class="form-control"  id="editor3"  rows="6" name="des" id="exampleInputPassword1" placeholder="Description">{{$row->des}}</textarea>
            @if ($errors->has('des'))
                <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" dir="rtl"> تفاصيل   </label>
            <textarea type="text" class="form-control" rows="6"  id="editor4"name="des_ar" id="exampleInputPassword1" placeholder="تفاصيل">{{$row->des_ar}}</textarea>
            @if ($errors->has('des_ar'))
                <span class="help-block">
                                            <strong>{{ $errors->first('des_ar') }}</strong>
                                         </span>
            @endif
        </div>
                                                 





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
                                    
                           
                                         
                                            <input type="color" rows="6" class="form-control"   name="color" id="exampleInputPassword1" placeholder="Link" value="{{$row->img}}">
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
            
            
          
        </div>
    </div>

@endsection