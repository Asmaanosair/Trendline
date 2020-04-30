@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green"> Slider Table</h3>

                  <a href="{{url('kt_admin/c_slider')}}" type="submit" class="btn btn-success btn-md pull-right">Add New  </a>

                 
                    <div class="box-tools">

                    </div>
                </div>

            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>

                       
                        <th style="width: 20%">  header </th>
                        <th style="width: 20%">  Details </th>
                        <th style="width: 18%">Image</th>
                        <th style="width: 18%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($slider as $row)
                    
                         
                            <tr>
                                <td>
                               <?php echo $row->title; ?>
                             
                                  

                                </td>
                             
                                <td>
                                 <?php echo $row->description; ?>

                            
                                </td>
                                <td>
                                    @if($row->img!=null)
                                        <img width="70px" src="{{asset('img/'.$row->img)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                               
                                </td>


                                <td>
                                    <a href="{{url('kt_admin/e_slider/'.$row->id)}}" type="submit" class="btn btn-success btn-md">Edit  </button>
                                </td>
                                <td>
                                    <a href="{{url('/kt_admin/del_slider/'.$row->id)}}" class="btn btn-danger"> Delete</a>
                                </td>


                            </tr>
                    
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>

@endsection