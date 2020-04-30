
@extends('layouts.admin_lay')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green"> Contact  Table</h3>

                    <div class="box-tools">

                    </div>
                </div>
            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>
                        <th></th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($con as $row)
                        <form method="post" action="{{url('/kt_admin/up_contact/'.$row->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <tr>

                                <td>


                                    <input type="text" name="fb" required="required" class="form-control" value="<?php echo $row->fb; ?>">
                                    @if ($errors->has('fb'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fb') }}</strong>
                                         </span>
                                    @endif


                                    <input type="text" name="tw" required="required" class="form-control" value="<?php echo $row->tw; ?>">
                                    @if ($errors->has('tw'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tw') }}</strong>
                                        </span>
                                    @endif
                                    <input type="text" name="in" required="required" class="form-control" value="<?php echo $row->in; ?>">
                                    @if ($errors->has('in'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('in') }}</strong>
                                         </span>
                                    @endif

                                    <input type="text" name="yt" required="required" class="form-control" value="<?php echo $row->yt; ?>">
                                    @if ($errors->has('yt'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yt') }}</strong>
                                        </span>
                                    @endif
                                    <input type="text" name="insta" required="required" class="form-control" value="<?php echo $row->insta; ?>">
                                    @if ($errors->has('insta'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('insta') }}</strong>
                                         </span>
                                    @endif


                                    <input type="text" name="loc" required="required" class="form-control" value="<?php echo $row->location; ?>">
                                    @if ($errors->has('loc'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('loc') }}</strong>
                                        </span>
                                    @endif
                                    <input type="text" name="web" required="required" class="form-control" value="<?php echo $row->web; ?>">
                                    @if ($errors->has('web'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('web') }}</strong>
                                         </span>
                                    @endif
                                    
                                      
                                    @if($row->logo!=null)
                                        <img width="70px" src="{{asset('img/'.$row->logo)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                                    <input type="file" class="form-control" name="image" style="margin-top: 5px;">
                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                              

                                    <button type="submit" class="btn btn-success form-control btn-md">Save Changes </button>

                                </td>


                            </tr>
                        </form>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-red"> Email Table</h3>

                </div>
            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Action</th>


                    </tr>
                    </thead>
                    <tbody>

                    @foreach($email as $mail)

                        <form method="post" action="{{url('/kt_admin/up_email/'.$mail->id)}}" enctype="multipart/form-data">
                            <tr>

                                <td>
                                    {{csrf_field()}}

                                    <input type="text" name="mail" required="required" class="form-control" value="<?php echo $mail->email; ?>">

                                    @if ($errors->has('mail'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mail') }}</strong>
                                         </span>
                                    @endif

                                </td>
                                <td>
                                    <button type="submit" class=" btn btn-success"><i class=" fa fa-edit"></i> </button>
                                    <a href="del_email/{{ $mail->id}}" class=" btn btn-danger"><i class=" fa fa-trash"></i> </a>
                                </td>

                            </tr>
                        </form>
                    @endforeach
                    <a class=" btn btn-warning"  data-toggle="modal" data-target="#modal-warning_email" >Add Mail</a>

                    <div class="modal modal-warning fade" id="modal-warning_email">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-black">Add New Email</h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form" action="{{url('/kt_admin/add_email')}}" method="post" enctype="multipart/form-data" >
                                        {{csrf_field()}}
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1"> Email</label>
                                                <input type="text" class="form-control"  name="mail" id="exampleInputPassword1"  placeholder="Email">
                                                @if ($errors->has('mail'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('mail') }}</strong>
                                         </span>
                                                @endif
                                            </div>



                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline pull-left text-black" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-outline text-black">Save changes</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>


                    </tbody>
                </table>

            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-yellow"> Phone Table</h3>

                </div>
            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Phone</th>
                        <th>Action</th>


                    </tr>
                    </thead>
                    <tbody>


                    @foreach($phone as $ph)

                        <form method="post" action="{{url('/kt_admin/up_phone/'.$ph->id)}}" enctype="multipart/form-data">
                            <tr>
                                    <td>
                                    {{csrf_field()}}

                                    <input type="text" name="name" required="required" class="form-control" value="<?php echo $ph->title; ?>">

                                    @if ($errors->has('ph'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ph') }}</strong>
                                         </span>
                                    @endif

                                </td>

                                <td>
                                    {{csrf_field()}}

                                    <input type="text" name="ph" required="required" class="form-control" value="<?php echo $ph->phone; ?>">

                                    @if ($errors->has('ph'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ph') }}</strong>
                                         </span>
                                    @endif

                                </td>
                                <td>
                                    <button type="submit" class=" btn btn-success"><i class=" fa fa-edit"></i> </button>
                                    <a href="{{url('/kt_admin/del_phone/'. $ph->id)}}" class=" btn btn-danger"><i class=" fa fa-trash"></i> </a>
                                </td>


                            </tr>
                        </form>
                    @endforeach
                    <a href=""class=" btn btn-warning" data-toggle="modal" data-target="#modal-warning_phone">Add Phone</a>
                    <div class="modal modal-warning fade" id="modal-warning_phone">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-black">Add New Phone</h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form" action="{{url('/kt_admin/add_phone')}}" method="post" enctype="multipart/form-data" >
                                        {{csrf_field()}}
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1"> Title</label>
                                                <input type="text" class="form-control"  name="name" id="exampleInputPassword1"  placeholder="Phone">
                                                @if ($errors->has('ph'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('ph') }}</strong>
                                         </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1"> Phone</label>
                                                <input type="text" class="form-control"  name="ph" id="exampleInputPassword1"  placeholder="Phone">
                                                @if ($errors->has('ph'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('ph') }}</strong>
                                         </span>
                                                @endif
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline pull-left text-black" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-outline text-black">Save changes</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                    </tbody>
                </table>

            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-yellow"> Branches Table</h3>

                </div>
            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>
                        <th>Office</th>
                        <th>Branch</th>
                        <th>العنوان</th>
                        
                         <th>phone</th>
                        <th>email</th>
                         <th>What's app</th>
                      <th>Action</th>


                    </tr>
                    </thead>
                    <tbody>


                    @foreach($branch as $br)

                       <form method="post" action="{{url('kt_admin/up_branch/'.$br->id)}}" enctype="multipart/form-data">
                            <tr>
                                
                                   <td>
                                    {{csrf_field()}}

                                    <input type="text" name="office" required="required" class="form-control" value="<?php echo $br->office; ?>">

                                    @if ($errors->has('office'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('office') }}</strong>
                                         </span>
                                    @endif



                                </td>

                                <td>
                                    {{csrf_field()}}

                                    <input type="text" name="branch" required="required" class="form-control" value="<?php echo $br->address; ?>">

                                    @if ($errors->has('branch'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('branch') }}</strong>
                                         </span>
                                    @endif



                                </td>
                                <td>
                                    {{csrf_field()}}

                                    <input type="text" name="branch_ar" required="required" class="form-control" value="<?php echo $br->address_ar; ?>">

                                    @if ($errors->has('branch_ar'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('branch_ar') }}</strong>
                                         </span>
                                    @endif



                                </td>
                                
                                <td>
                                    {{csrf_field()}}

                                    <input type="text" name="phone" required="required" class="form-control" value="<?php echo $br->phone; ?>">

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                         </span>
                                    @endif



                                </td>
                                
                                 <td>
                                    {{csrf_field()}}

                                    <input type="text" name="email" required="required" class="form-control" value="<?php echo $br->email; ?>">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                    @endif



                                </td>
                                
                                   
                                 <td>
                                    {{csrf_field()}}

                                    <input type="text" name="what" required="required" class="form-control" value="<?php echo $br->whats; ?>">

                                    @if ($errors->has('what'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('what') }}</strong>
                                         </span>
                                    @endif



                                </td>
                                
                                <td>
                                    <button type="submit" class=" btn btn-success"><i class=" fa fa-edit"></i> </button>
                                    <a href="{{url('kt_admin/del_branch/'. $br->id)}}" class=" btn btn-danger"><i class=" fa fa-trash"></i> </a>
                                </td>

                            </tr>
                        </form>
                    @endforeach
                    <a href=""class=" btn btn-warning" data-toggle="modal" data-target="#modal-warning_branch">Add Branch</a>
                    <div class="modal modal-warning fade" id="modal-warning_branch">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-black">Add New Branch</h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form" action="{{url('kt_admin/add_branch')}}" method="post" enctype="multipart/form-data" >
                                        {{csrf_field()}}
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1"> Branch</label>
                                                <input type="text" class="form-control"  name="branch" id="exampleInputPassword1"  placeholder="branch">
                                                @if ($errors->has('branch'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('branch') }}</strong>
                                         </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1"> العنوان</label>
                                                <input type="text" class="form-control"  name="branch_ar" id="exampleInputPassword1"  placeholder="Branch">
                                                @if ($errors->has('branch_ar'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('branch_ar') }}</strong>
                                         </span>
                                                @endif
                                            </div>
                                            
                                               <div class="form-group">
                                                <label for="exampleInputPassword1"> Office</label>
                                                <input type="text" class="form-control"  name="office" id="exampleInputPassword1"  placeholder="branch">
                                                @if ($errors->has('office'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('office') }}</strong>
                                         </span>
                                                @endif
                                            </div>
                                                 <div class="form-group">
                                                <label for="exampleInputPassword1"> Phone</label>
                                                <input type="text" class="form-control"  name="phone" id="exampleInputPassword1"  placeholder="branch">
                                                @if ($errors->has('phone'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                         </span>
                                                @endif
                                            </div>
                                              <div class="form-group">
                                                <label for="exampleInputPassword1"> What's App</label>
                                                <input type="text" class="form-control"  name="what" id="exampleInputPassword1"  placeholder="branch">
                                                @if ($errors->has('what'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('what') }}</strong>
                                         </span>
                                                @endif
                                            </div>
                                              <div class="form-group">
                                                <label for="exampleInputPassword1"> Email</label>
                                                <input type="text" class="form-control"  name="email" id="exampleInputPassword1"  placeholder="branch">
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                                @endif
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline pull-left text-black" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-outline text-black">Save changes</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                    </tbody>
                </table>

            </div>

        </div>
    </div>


@endsection
