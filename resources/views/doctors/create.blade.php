@extends('main')
   @section('title','| Create Doctor')
     
    @section('stylesheet')
      {{--{!!Html::style('plugins/parsley/css/parsley.css')!!}--}}
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
                  </ol>
              </div>
              <div class="col-lg-2">

              </div>
          </div>




          <div class="wrapper wrapper-content">
              <div class="row animated fadeInRight">
               <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <h5>Doctor <small>Registration</small></h5>
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
                      {!! Form::open(array('route' => 'doctors.store', 'class'=>'form-horizontal', 'id'=>'my-form', 'files'=>true)) !!}
                          <div class="form-group">
                              {{Form::label('email','Enter Email :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::text('email', null, ['class'=>'form-control','placeholder'=>'Enter Email'])}}
                                  <span class="alertrequired">{!!$errors->first('email')!!}</span>
                              </div>
                          </div>
                          <div class="form-group">
                              {{Form::label('firstname','First Name :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::text('firstname', null, ['class'=>'form-control','placeholder'=>'First Name'])}}
                                  <span class="alertrequired">{!!$errors->first('firstname')!!}</span>
                              </div>
                          </div>
                          <div class="form-group">
                              {{Form::label('lastname','Last Name :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::text('lastname', null, ['class'=>'form-control','placeholder'=>'Last Name'])}}
                                  <span class="alertrequired">{!!$errors->first('lastname')!!}</span>
                              </div>
                          </div>
                          <div class="form-group">
                              {{Form::label('password','Password :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
                                  <span class="alertrequired">{!!$errors->first('password')!!}</span>
                              </div>
                          </div>
                          <div class="form-group">
                              {{Form::label('password_confirm','Password Confirm :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::password('password_confirm',['class'=>'form-control','placeholder'=>'Password Confirm'])}}
                                  <span class="alertrequired">{!!$errors->first('password_confirm')!!}</span>
                              </div>
                          </div>
                          <div class="form-group">
                              {{Form::label('userrole','User Role :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::select('userrole', [''=>'--- SELECT ---','Doctor'=>'Doctor', 'Receptionist'=>'Receptionist'],'',['class'=>'form-control'])}}
                                  <span class="alertrequired">{!!$errors->first('userrole')!!}</span>
                              </div>
                          </div>

                          <div class="form-group">
                              {{Form::label('city','City :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::text('city', null, ['class'=>'form-control','placeholder'=>'City'])}}
                                  <span class="alertrequired">{!!$errors->first('city')!!}</span>
                              </div>
                          </div>
                          <div class="form-group">
                              {{Form::label('age','Age :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::text('age', null, ['class'=>'form-control','placeholder'=>'Age'])}}
                                  <span class="alertrequired">{!!$errors->first('age')!!}</span>
                              </div>
                          </div>
                          <div class="form-group">
                              {{Form::label('phoneno','Phone # :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::text('phoneno', null, ['class'=>'form-control','placeholder'=>'Phone #'])}}
                                  <span class="alertrequired">{!!$errors->first('phoneno')!!}</span>
                              </div>
                          </div>
                          <div class="form-group">
                              {{Form::label('address','Address :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::textarea('address',null, array('class'=>'form-control','placeholder'=>'Address'))}}
                                  <span class="alertrequired">{!!$errors->first('address')!!}</span>
                              </div>
                          </div>
                          <div class="form-group">
                              {{Form::label('qualification','Qualification :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::textarea('qualification',null, array('class'=>'form-control','placeholder'=>'Qualification '))}}
                                  <span class="alertrequired">{!!$errors->first('qualification')!!}</span>
                              </div>
                          </div>
                          <div class="form-group">
                              {{Form::label('profilepicture','Profile Picture :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  {{Form::file('profilepicture',['class'=>'form-control'])}}
                                  <span class="alertrequired">{!!$errors->first('profilepicture')!!}</span>
                              </div>
                          </div>
                          <div class="form-group">
                              {{Form::label('gender','Gender :',['class'=>'col-sm-2 control-label'])}}
                              <div class="col-sm-10">
                                  <label class="checkbox-inline">
                                     {{Form::radio('gender','Male',true)}} Male
                                  </label>
                                  <label class="checkbox-inline">
                                      {{Form::radio('gender','Female')}} Female
                                  </label>
                                  <span class="alertrequired">{!!$errors->first('gender')!!}</span>
                                  </div>
                          </div>

                          <div class="hr-line-dashed"></div>
                          <div class="form-group">
                              <div class="col-sm-4 col-sm-offset-2">
                                  {!! Html::linkRoute('doctors.index','Cancel', [], ['class'=>'btn btn-white'])!!}
                                  {{Form::reset('&ensp;Reset&ensp;',['class'=>'btn btn-white'])}}
                                  {{Form::submit('&ensp;Save&ensp;', ['class'=>'btn btn-primary'])}}
                              </div>
                          </div>
                      {!! Form::close() !!}
                  </div>
              </div>
          </div>
      </div>

      @endsection

      @section('javascript')
              <!-- Laravel Javascript Validation -->
           {!! Html::script('vendor/jsvalidation/js/jsvalidation.js') !!}
          {!! JsValidator::formRequest('App\Http\Requests\DoctorFormRequest','#my-form') !!}
     @endsection