@extends('layouts.admin_lay')
@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4> Change your Password</h4>

                    </div>

                    



                    <!-- Page-header end -->
                    <!-- Page-body start -->
                    <div class="page-body">




                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5>Change your Password</h5>

                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                               

                                <form  method="post" action="{{url('/gs_admin/up_pass/'.Auth::user()->id)}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    
                                      <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Password</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="password" data-a-sign="Name">
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Password_confirmation</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="password_confirmation" data-a-sign="Name">
                                                    @if ($errors->has('password_confirmation'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                  
                                
                                
                                    <button type="submit" class="form-control autonumber btn btn-success" data-a-sign="Name">Save change</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>


            <div id="styleSelector"></div>
        </div>


    </div>
    </div>




@stop