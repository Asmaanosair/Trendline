@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green"> Products Table</h3>

                    <button type="button" class="btn btn-warning pull-right text-blue" data-toggle="modal" data-target="#modal-warning">
                        Add New Product
                    </button>

                    <div class="modal modal-warning fade" id="modal-warning">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Add New Product </h4>
                                </div>
                                <form role="form" action="{{url('/kt_admin/add_product')}}" method="post" enctype="multipart/form-data" >
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
                                            <label for="exampleInputPassword1"> Old_Price </label>
                                            <input type="text" class="form-control"  name="old" id="exampleInputPassword1"  placeholder="Old_Price">
                                            @if ($errors->has('old'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('old') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" dir="rtl"> New_Price   </label>
                                            <input type="text" class="form-control" name="new" id="exampleInputPassword1"  placeholder="New_Price">
                                            @if ($errors->has('new'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('new') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" dir="rtl"> Item_Number   </label>
                                            <input type="text" class="form-control" name="amount" id="exampleInputPassword1"  placeholder="Amount">
                                            @if ($errors->has('amount'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                         </span>
                                            @endif
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Simple Description</label>
                                            <textarea type="text" class="form-control"  name="des" id="exampleInputPassword1"  placeholder="Title"></textarea>
                                            @if ($errors->has('des'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" dir="rtl"> وصف مبسط    </label>
                                            <textarea type="text" class="form-control" name="des_ar" id="exampleInputPassword1"  placeholder="العنوان"></textarea>
                                            @if ($errors->has('des_ar'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des_ar') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" dir="rtl"> Category   </label>
                                            <select class="form-control" name="select">
                                                @foreach($cat as $row)
                                                <option value="{{$row->id}}">{{$row->name}}</option>
                                                    @endforeach
                                            </select>
                                            @if ($errors->has('des_ar'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des_ar') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                        
                                          <div class="form-group">
                                            <label for="exampleInputPassword1" dir="rtl">  Recommended   </label>
                                            <select class="form-control" name="recommend">
                                               
                                                <option value="1">Recommended</option>
                                                    <option value="0"> Not Recommended</option>
                                                  
                                            </select>
                                            @if ($errors->has('des_ar'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des_ar') }}</strong>
                                         </span>
                                            @endif
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputPassword1" > Image </label>
                                            <input type="file" rows="6" class="form-control"   name="image" id="exampleInputPassword1" placeholder="Link">

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
                        <th >   الاسم  </th>
                        <th >  Name </th>

                      
                        <th >  Category </th>

                        <th >  Image </th>

                        <th >Details</th>
                        <th >Action</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($test as $row)
                        <form method="post" action="{{url('/kt_admin/up_product/'.$row->id)}}" enctype="multipart/form-data">
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
                                    <select class="form-control" name="select">
                                        @php(
                                        $sel=\App\category::find($row->category_id)->name
                                        )
                                        <option value="{{$row->category_id}}">{{$sel}}</option>
                                        @foreach($cat as $row1)
                                            <option value="{{$row1->id}}">{{$row1->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('select'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('select') }}</strong>
                                         </span>
                                        @endif
                                </td>




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
                                                    <h4 class="modal-title text-olive">Description of <spam class="text-yellow"> {{ $row->name}} </spam> </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="exampleInputPassword1" dir="rtl"> Description   </label>
                                                    <textarea type="text" name="des" required="required" class="form-control"  rows="10" ><?php echo $row->des; ?></textarea>
                                                    @if ($errors->has('des'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                        </span>
                                                    @endif
                                                    <br>
                                                    <br>
                                                    <label for="exampleInputPassword1" dir="rtl"> الوصف   </label>
                                                    <textarea type="text" name="des_ar" required="required" class="form-control"   rows="10"><?php echo $row->des_ar; ?></textarea>
                                                    @if ($errors->has('des_ar'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('des_ar') }}</strong>
                                        </span>
                                                    @endif


<div class="form-group">
                                            <label for="exampleInputPassword1" dir="rtl">  Recommended   </label>
                                            <select class="form-control" name="recommend">
                                               @if($row->recommended==1)
                                                <option value="1" selected>Recommended</option>
                                                
                                                 <option value="0"> Not Recommended</option>@else
                                                   <option value="0" selected> Not Recommended</option>
                                                   <option value="1" >Recommended</option>
                                                @endif
                                                  
                                                  
                                            </select>
                                            @if ($errors->has('recommend'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('recommend') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                        
                                          <div class="form-group">
                                            <label for="exampleInputPassword1"> Old_Price </label>
                                            <input type="text" class="form-control"  name="old" id="exampleInputPassword1" value="<?php echo $row->new_price; ?>" placeholder="Old_Price">
                                            @if ($errors->has('old'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('old') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" dir="rtl"> New_Price   </label>
                                             <input type="text" name="new" required="required" class="form-control" value="<?php echo $row->new_price; ?>">
                                            @if ($errors->has('new'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('new') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" dir="rtl"> Item_Number   </label>
                                            <input type="text" name="amount" required="required" class="form-control" value="<?php echo $row->amount; ?>">
                                            @if ($errors->has('amount'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('amount') }}</strong>
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
                                    <button type="submit" class="btn btn-success btn-md">Save  </button>
                                </td>
                                
                                 <td>
                                    <a href="{{url('/kt_admin/product/'.$row->id)}}" class="btn btn-warning"> Add image</a>
                                </td>
                                
                                 <td>
                                  <a href="{{url('kt_admin/e_detail/'.$row->id)}}"  class="btn btn-primary">
                                        Details
                                    </a>
                                </td>
                                
                                
                                <td>
                                    <a href="{{url('/kt_admin/del_product/'.$row->id)}}" class="btn btn-danger"> Delete</a>
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