@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green">  Table</h3>

                    <a href="{{url('/kt_admin/c_detail')}}" class="btn btn-warning pull-right text-blue" >
                        Add New
                    </a>
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


                        <th style="width: 18%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($test as $row)

                        <tr>

                            <td>
                                <?php echo $row->name_ar; ?>

                            </td>
                            <td>
                                <?php echo $row->name; ?>
                            </td>





                            <td>
                                <a href="{{url('/kt_admin/e_detail/'.$row->id)}}" class="btn btn-success"> Edit</a>
                            </td>

                            <td>
                                <a href="{{url('/kt_admin/del_detail/'.$row->id)}}" class="btn btn-danger"> Delete</a>
                            </td>




                        </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection