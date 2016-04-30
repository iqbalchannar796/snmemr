@extends('main')
   @section('title', '| All Doctors')

@section('stylesheet')
        <!-- Data Tables -->
@endsection
    @section('content')
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Doctors</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a>Add Doctor</a>
                    </li>
                    <li class="active">
                        <strong>Mange Doctors</strong>
                    </li>
                </ol>
            </div>
            <div class="col-md-2" style="text-align: center">
                {!! Html::linkRoute('doctors.create','Add New', [], ['class'=>'btn btn-success btn-facebook btn-outline','style'=>'margin-top:41px'])!!}
            </div>
        </div>

    @include('partials._messages')

        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Manage Doctor List  </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>User Role</th>
                            <th>City</th>
                            <th>Age</th>
                            <th>Phone #</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Image</th>
                            <th>Created</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $num=1 ?>
                        @foreach($doctors as $doctor)
                            <tr>
                                <th>{{$num++}}</th>
                                <td>{{$doctor->firstname.' '.$doctor->lastname}}</td>
                                <td>{{$doctor->userrole}}</td>
                                <td>{{$doctor->city}}</td>
                                <td>{{$doctor->age}}</td>
                                <td>{{$doctor->phoneno}}</td>
                                <td>{{$doctor->address}}</td>
                                <td>{{$doctor->gender}}</td>
                                <td>{{Html::image($doctor->profilepicture,$doctor->firstname.' '.$doctor->lastname,['height='=>'30','width'=>'30'])}}</td>
                                <td >{{date('M j, Y', strtotime($doctor->created_at))}}</td>
                                <th style="text-align:center" width="14%">
                                    {!! Form::open(['route'=>['doctors.destroy',$doctor->id],'method'=>'DELETE']) !!}
                                    {{--{!! Form::submit('<i class="fa fa-trash-o"></i>',['class'=>'btn btn-warning btn-circle']) !!}--}}
                                    <button type="submit" class="btn btn-warning btn-circle"><i class="fa fa-trash-o"></i></button>
                                    {!! Form::close() !!}
                                         <a href="{{route('doctors.show',$doctor->id)}}" class="btn btn-success btn-circle"><i class="fa fa-info-circle"></i></a>      <a href="{{route('doctors.edit',$doctor->id)}}" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{--{!! $doctors->links() !!}--}}
                    </div>
                </div>
            </div>
       </div>
    </div>



    @endsection


    @section('javascript')



            <!-- Laravel Javascript Validation -->


        {{--{!! Html::script('vendor/jsvalidation/js/jsvalidation.js') !!}--}}
        {{--{!! JsValidator::formRequest('App\Http\Requests\ProductRequest', '#my-form') !!}--}}
        @endsection

            <!-- Mainly scripts -->

