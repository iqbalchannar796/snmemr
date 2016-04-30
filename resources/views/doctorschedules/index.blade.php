@extends('main')
   @section('title', '| All Doctors Schedule')

@section('stylesheet')
        <!-- Data Tables -->
@endsection
    @section('content')
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-md-10">
                <h2>Doctor Schedule</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a>Add Doctor Schedule</a>
                    </li>
                    <li class="active">
                        <strong>Mange Doctors Schedule</strong>
                    </li>
                </ol>
            </div>
            <div class="col-md-2" style="text-align: center">
                {!! Html::linkRoute('doctorschedules.create','Add New', [], ['class'=>'btn btn-success btn-facebook btn-outline','style'=>'margin-top:41px'])!!}
            </div>
        </div>

    @include('partials._messages')

        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Manage Doctors Schedule List  </h5>
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
                            <th>Dr Name</th>
                            <th>Starting Time</th>
                            <th>Ending Time</th>
                            <th>Starting Date</th>
                            <th>Ending Date</th>
                            <th>Days</th>
                            <th>Doctor Fee</th>
                            <th>Picture</th>
                            <th>Created</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $num=1 ?>
                        @foreach($dcotorschedules as $doctorschedule)
                            <tr>
                                <th>{{$num++}}</th>
                                <td>{{$doctorschedule->doctor->firstname.' '.$doctorschedule->doctor->lastname}}</td>
                                <td>{{DateTimeFormat::convertTimeForView($doctorschedule->startingtime)}}</td>
                                <td>{{DateTimeFormat::convertTimeForView($doctorschedule->endingtime)}}</td>
                                <td>{{DateTimeFormat::convertDateForView($doctorschedule->startingdate)}}</td>
                                <td>{{DateTimeFormat::convertDateForView($doctorschedule->endingdate)}}</td>
                                <td>{{$doctorschedule->days}}</td>
                                <td>{{$doctorschedule->doctorfee}}</td>
                                <td>{{Html::image($doctorschedule->doctor->profilepicture,$doctorschedule->doctor->firstname.' '.$doctorschedule->doctor->lastname,['height='=>'30','width'=>'30'])}}</td>
                                <td >{{date('M j, Y', strtotime($doctorschedule->created_at))}}</td>
                                <th style="text-align:center" width="14%">
                                    {!! Form::open(['route'=>['doctorschedules.destroy',$doctorschedule->id],'method'=>'DELETE']) !!}
                                    {{--{!! Form::submit('<i class="fa fa-trash-o"></i>',['class'=>'btn btn-warning btn-circle']) !!}--}}
                                    <button type="submit" class="btn btn-warning btn-circle"><i class="fa fa-trash-o"></i></button>
                                    {!! Form::close() !!}
                                         <a href="{{route('doctorschedules.show',$doctorschedule->id)}}" class="btn btn-success btn-circle"><i class="fa fa-info-circle"></i></a>      <a href="{{route('doctorschedules.edit',$doctorschedule->id)}}" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> </th>
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

