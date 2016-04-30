@extends('main')
   @section('title','| Create Doctor Schedule')
     
    @section('stylesheet')

      {!!Html::style('plugins/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.css')!!}
      {!!Html::style('plugins/bootstrap/css/plugins/datapicker/datepicker3.css')!!}
    @endsection
   
      @section('content')
          <div class="row wrapper border-bottom white-bg page-heading">
              <div class="col-lg-10">
                  <h2>Doctors Schedule</h2>
                  <ol class="breadcrumb">
                      <li>
                          <a href="index.html">Home</a>
                      </li>
                      <li>
                          <a>Add Doctor Schedule</a>
                      </li>
                  </ol>
              </div>
              <div class="col-lg-2">

              </div>
          </div>




          <div class="wrapper wrapper-content">
              <div class="row animated fadeInRight">
               <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <h5>Doctor Schedule <small>Registration</small></h5>
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
                      {!! Form::open(array('route' => 'doctorschedules.store', 'role'=>'form', 'id'=>'my-form')) !!}
                       <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                               {{Form::label('doctor_id','Doctor Name :')}} <span class="symbol required"></span>
                               {{Form::select('doctor_id', $doctors,null,['class'=>'form-control'])}}
                               <span class="alertrequired">{!!$errors->first('doctor_id')!!}</span>
                           </div>

                           <div id="data_5">
                               <div class="col-md-6">
                                   {{Form::label('startingtime','Starting Time :',['style'=>'margin-left:-13px'])}} <span class="symbol required"></span>
                               </div>
                               <div class="col-md-6">
                                   {{Form::label('endingtime','Ending Time :')}} <span class="symbol required"></span>
                               </div>
                               <div class="form-group">
                                   <div class="input-group">
                                       <div class='input-group date' id="datetimepicker0">
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-time">
                                        </span>
                                     </span>
                                       {{Form::text('startingtime', null, ['id'=>'startingtime','class'=>'form-control','placeholder'=>'Starting Time'])}}
                                       </div>
                                       <span class="input-group-addon">to</span>
                                       <div class='input-group date' id="datetimepicker1">
                                       {{Form::text('endingtime', null, ['id'=>'endingtime','class'=>'form-control','placeholder'=>'Ending Time'])}}
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-time">
                                         </span>
                                       </span>
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <span class="alertrequired">{!!$errors->first('startingtime')!!}</span>
                                   </div>
                                   <div class="col-md-6">
                                       <span class="alertrequired">{!!$errors->first('endingtime')!!}</span>
                                   </div>
                               </div>
                           </div>


                       </div>
                       <div class="col-md-6">

                           <div id="data_5">
                               <div class="col-md-6">
                                   {{Form::label('startingdate','Starting Date :',['style'=>'margin-left:-15px'])}} <span class="symbol required"></span>
                               </div>
                               <div class="col-md-6">
                                   {{Form::label('endingdate','Ending Date :')}} <span class="symbol required"></span>
                               </div>
                               <div class="form-group">
                               <div id="datepicker" class="input-daterange input-group" style="width: 100%">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
                                                              </span>
                                                        </span>
                                   {{Form::text('startingdate', null, ['class'=>'form-control','placeholder'=>'Starting Date'])}}
                                       <span class="input-group-addon">to</span>
                                   {{Form::text('endingdate', null, ['class'=>'form-control','placeholder'=>'Ending Date'])}}
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
                                                              </span>
                                                        </span>

                                   </div>
                                   </div>
                               <div class="col-md-6">
                                   <span class="alertrequired">{!!$errors->first('startingdate')!!}</span>
                               </div>
                               <div class="col-md-6">
                                   <span class="alertrequired">{!!$errors->first('endingdate')!!}</span>
                               </div>
                           </div>


                           <div class="form-group">
                               {{Form::label('days','Days :')}} <span class="symbol required"></span>
                               {{Form::text('days', null, ['class'=>'form-control','placeholder'=>'Days'])}}
                               <span class="alertrequired">{!!$errors->first('days')!!}</span>
                           </div>
                          <div class="form-group">
                              {{Form::label('doctorfee','Doctor Fee :')}} <span class="symbol required"></span>
                                  {{Form::text('doctorfee', null, ['class'=>'form-control','placeholder'=>'0.00'])}}
                                  <span class="alertrequired">{!!$errors->first('doctorfee')!!}</span>
                          </div>
                       </div>
                       </div>
                      <div class="hr-line-dashed"></div>
                          <div class="form-group">
                              <div class="col-sm-12 col-sm-offset-9">
                                  {!! Html::linkRoute('doctorschedules.index','Cancel', [], ['class'=>'btn btn-white'])!!}
                                  {{Form::reset('&ensp;Reset&ensp;',['class'=>'btn btn-white'])}}
                                  {{Form::submit('&ensp;Save&ensp;', ['class'=>'btn btn-primary'])}}
                              </div>
                          </div>
                         <br/>
                      <br/>
                      {!! Form::close() !!}
                  </div>
              </div>
          </div>
      </div>

      @endsection

      @section('javascript')
              <!-- Laravel Javascript Validation -->
           {!! Html::script('vendor/jsvalidation/js/jsvalidation.js') !!}
          {!! JsValidator::formRequest('App\Http\Requests\DoctorScheduleFormRequest','#my-form') !!}
          {!! Html::script('plugins/bootstrap/js/plugins/datapicker/bootstrap-datepicker.js') !!}

          {!! Html::script('plugins/moment-develop/moment.js') !!}
          {!! Html::script('plugins/bootstrap-datetimepicker-master/src/js/bootstrap-datetimepicker.js') !!}

     @endsection