@extends('layouts.admin_lay')
@section('content')







<!-- Translation-->

   <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green">Translation</h3>

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
                       <th>Title</th>
                                            <th>ENG</th>
                                            <th>China</th>

                    </tr>
                    </thead>
                    <tbody>
                       <form  method="post" action="{{url('/kt_admin/trans')}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <tr>
                                                    <td>
                                                        Home

                                                    </td>
                                                    @php(
                                                    $h=explode(',',$home->home)
                                                    )

                                                    @foreach($h as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="home[]" data-a-sign="Name">
                                                        @if ($errors->has('home'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('home') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                
                                                 <tr>
                                                    <td>
                                                        Help

                                                    </td>
                                                    @php(
                                                    $h1=explode(',',$home->help)
                                                    )

                                                    @foreach($h1 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="help[]" data-a-sign="Name">
                                                        @if ($errors->has('help'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('help') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                      <tr>
                                                    <td>
                                                        category

                                                    </td>
                                                    @php(
                                                    $h2=explode(',',$home->category)
                                                    )

                                                    @foreach($h2 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="category[]" data-a-sign="Name">
                                                        @if ($errors->has('category'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                      <tr>
                                                    <td>
                                                        product

                                                    </td>
                                                    @php(
                                                    $h3=explode(',',$home->product)
                                                    )

                                                    @foreach($h3 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="product[]" data-a-sign="Name">
                                                        @if ($errors->has('product'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('product') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                    <tr>
                                                    <td>
                                                        about

                                                    </td>
                                                    @php(
                                                    $h4=explode(',',$home->about)
                                                    )

                                                    @foreach($h4 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="about[]" data-a-sign="Name">
                                                        @if ($errors->has('about'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('about') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                
                                                        <tr>
                                                    <td>
                                                        testimonial

                                                    </td>
                                                    @php(
                                                    $h5=explode(',',$home->testimonial)
                                                    )

                                                    @foreach($h5 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="testimonial[]" data-a-sign="Name">
                                                        @if ($errors->has('testimonial'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('testimonial') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                                                                        <tr>
                                                    <td>
                                                        contact

                                                    </td>
                                                    @php(
                                                    $h6=explode(',',$home->contact)
                                                    )

                                                    @foreach($h6 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="contact[]" data-a-sign="Name">
                                                        @if ($errors->has('contact'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('contact') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                
                                                     <tr>
                                                    <td>
                                                        itemnumber

                                                    </td>
                                                    @php(
                                                    $h7=explode(',',$home->itemnumber)
                                                    )

                                                    @foreach($h7 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="itemnumber[]" data-a-sign="Name">
                                                        @if ($errors->has('itemnumber'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('itemnumber') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                
                                                 <tr>
                                                    <td>
                                                        submit

                                                    </td>
                                                    @php(
                                                    $h9=explode(',',$home->submit)
                                                    )

                                                    @foreach($h9 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="submit[]" data-a-sign="Name">
                                                        @if ($errors->has('submit'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('submit') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                
                                                     <tr>
                                                    <td>
                                                        order

                                                    </td>
                                                    @php(
                                                    $h8=explode(',',$home->order)
                                                    )

                                                    @foreach($h8 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="order[]" data-a-sign="Name">
                                                        @if ($errors->has('order'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('order') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                        name

                                                    </td>
                                                    @php(
                                                    $h11=explode(',',$home->name)
                                                    )

                                                    @foreach($h11 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="name[]" data-a-sign="Name">
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                  <tr>
                                                    <td>
                                                        phone

                                                    </td>
                                                    @php(
                                                    $h12=explode(',',$home->phone)
                                                    )

                                                    @foreach($h12 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="phone[]" data-a-sign="Name">
                                                        @if ($errors->has('phone'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                 
                                                  <tr>
                                                    <td>
                                                        email

                                                    </td>
                                                    @php(
                                                    $h13=explode(',',$home->email)
                                                    )

                                                    @foreach($h13 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="email[]" data-a-sign="Name">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                   
                                                  <tr>
                                                    <td>
                                                        message

                                                    </td>
                                                    @php(
                                                    $h14=explode(',',$home->message)
                                                    )

                                                    @foreach($h14 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="message[]" data-a-sign="Name">
                                                        @if ($errors->has('message'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                
                                                
                                                <tr>
                                                    <td>
                                                        details

                                                    </td>
                                                    @php(
                                                    $h15=explode(',',$home->ordernow)
                                                    )

                                                    @foreach($h15 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="ordernow[]" data-a-sign="Name">
                                                        @if ($errors->has('ordernow'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('ordernow') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr> 
                                                
                                                 <tr>
                                                    <td>
                                                        service

                                                    </td>
                                                    @php(
                                                    $h16=explode(',',$home->service)
                                                    )

                                                    @foreach($h16 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="service[]" data-a-sign="Name">
                                                        @if ($errors->has('service'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('service') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr> 
                                                
                                                
                                                    <tr>
                                                    <td>
                                                        ourservice

                                                    </td>
                                                    @php(
                                                    $h17=explode(',',$home->ourservice)
                                                    )

                                                    @foreach($h17 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="ourservice[]" data-a-sign="Name">
                                                        @if ($errors->has('ourservice'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('ourservice') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr> 
                                                
                                                
                                                
                                                
                                                
                                                   <tr>
                                                    <td>
                                                        Pay

                                                    </td>
                                                    @php(
                                                    $h50=explode(',',$home->pay)
                                                    )

                                                    @foreach($h50 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="pay[]" data-a-sign="Name">
                                                        @if ($errors->has('pay'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('pay') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr> 
                                                
                                                 <tr>
                                                    <td>
                                                        recommend

                                                    </td>
                                                    @php(
                                                    $h51=explode(',',$home->recom)
                                                    )

                                                    @foreach($h51 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="recom[]" data-a-sign="Name">
                                                        @if ($errors->has('recom'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('recom') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr> 
                                                
                                                
                                                    <tr>
                                                    <td>
                                                        price

                                                    </td>
                                                    @php(
                                                    $h66=explode(',',$home->price)
                                                    )

                                                    @foreach($h66 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="price[]" data-a-sign="Name">
                                                        @if ($errors->has('price'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr> 
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                 <tr>
                                                    <td>
                                                        Description

                                                    </td>
                                                    @php(
                                                    $h18=explode(',',$home->description)
                                                    )

                                                    @foreach($h18 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="description[]" data-a-sign="Name">
                                                        @if ($errors->has('description'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr> 
                                                  <tr>
                                                    <td>
                                                        <button type="submit" class="btn btn-success form-control"> Save</button>

                                                    </td>


                                                </tr>
                        </form>
             
                    </tbody>
                </table>

            </div>
  
        </div>
    </div>


@stop