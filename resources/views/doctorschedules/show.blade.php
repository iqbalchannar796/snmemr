@extends('main')
   @section('title','| Show Doctor Schedule')

@section('content')
          <div class="row wrapper border-bottom white-bg page-heading">
              <div class="col-lg-10">
                  <h2>Doctor Schedule</h2>
                  <ol class="breadcrumb">
                      <li>
                          <a href="index.html">Home</a>
                      </li>
                      <li>
                          <a>Doctor Schedule</a>
                      </li>
                  </ol>
              </div>
              <div class="col-lg-2">

              </div>
          </div>

   @include('partials._messages')

          <div class="wrapper wrapper-content">
              <div class="row animated fadeInRight">
                  <div class="col-md-4">
                      <div class="ibox float-e-margins">
                          <div class="ibox-title">
                              <h5>Profile Detail</h5>
                          </div>
                          <div>
                              <div class="ibox-content no-padding border-left-right" style="text-align: center">
                                  {{Form::image($doctorschedule->doctor->profilepicture, $doctorschedule->doctor->firstname.' '.$doctorschedule->doctor->lastname)}}
                              </div>
                              <div class="ibox-content profile-content">
                                  <h4>
                                      <strong>Name :</strong>
                                  </h4>
                                  <p>
                                      {{$doctorschedule->doctor->firstname.' '.$doctorschedule->doctor->lastname}}
                                  </p>
                                  <h4>
                                      <strong>Address :</strong>
                                  </h4>
                                  <p>
                                      {{$doctorschedule->doctor->address}}
                                  </p>
                                  <h4>
                                      <strong>Qualification :</strong>
                                  </h4>
                                  <p>
                                      {{$doctorschedule->doctor->qualification}}
                                  </p>
                                  <div class="row m-t-lg">
                                      <div class="col-md-4">
                                          <span class="bar" style="display: none;">5,3,9,6,5,9,7,3,5,2</span><svg class="peity" height="16" width="32"><rect fill="#1ab394" x="0" y="7.111111111111111" width="2.3" height="8.88888888888889"/><rect fill="#d7d7d7" x="3.3" y="10.666666666666668" width="2.3" height="5.333333333333333"/><rect fill="#1ab394" x="6.6" y="0" width="2.3" height="16"/><rect fill="#d7d7d7" x="9.899999999999999" y="5.333333333333334" width="2.3" height="10.666666666666666"/><rect fill="#1ab394" x="13.2" y="7.111111111111111" width="2.3" height="8.88888888888889"/><rect fill="#d7d7d7" x="16.5" y="0" width="2.3" height="16"/><rect fill="#1ab394" x="19.799999999999997" y="3.555555555555557" width="2.3" height="12.444444444444443"/><rect fill="#d7d7d7" x="23.099999999999998" y="10.666666666666668" width="2.3" height="5.333333333333333"/><rect fill="#1ab394" x="26.4" y="7.111111111111111" width="2.3" height="8.88888888888889"/><rect fill="#d7d7d7" x="29.7" y="12.444444444444445" width="2.3" height="3.5555555555555554"/></svg>
                                          <h5><strong>169</strong> Posts</h5>
                                      </div>
                                      <div class="col-md-4">
                                          <span class="line" style="display: none;">5,3,9,6,5,9,7,3,5,2</span><svg class="peity" height="16" width="32"><polygon fill="#1ab394" points="0 15 0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666 32 15"/><polyline fill="transparent" points="0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666" stroke="#169c81" stroke-width="1" stroke-linecap="square"/></svg>
                                          <h5><strong>28</strong> Following</h5>
                                      </div>
                                      <div class="col-md-4">
                                          <span class="bar" style="display: none;">5,3,2,-1,-3,-2,2,3,5,2</span><svg class="peity" height="16" width="32"><rect fill="#1ab394" x="0" y="0" width="2.3" height="10"/><rect fill="#d7d7d7" x="3.3" y="4" width="2.3" height="6"/><rect fill="#1ab394" x="6.6" y="6" width="2.3" height="4"/><rect fill="#d7d7d7" x="9.899999999999999" y="10" width="2.3" height="2"/><rect fill="#1ab394" x="13.2" y="10" width="2.3" height="6"/><rect fill="#d7d7d7" x="16.5" y="10" width="2.3" height="4"/><rect fill="#1ab394" x="19.799999999999997" y="6" width="2.3" height="4"/><rect fill="#d7d7d7" x="23.099999999999998" y="4" width="2.3" height="6"/><rect fill="#1ab394" x="26.4" y="0" width="2.3" height="10"/><rect fill="#d7d7d7" x="29.7" y="6" width="2.3" height="4"/></svg>
                                          <h5><strong>240</strong> Followers</h5>
                                      </div>
                                  </div>
                                  <div class="user-button">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <button class="btn btn-primary btn-sm btn-block" type="button"><i class="fa fa-envelope"></i> Send Message</button>
                                          </div>
                                          <div class="col-md-6">
                                              <button class="btn btn-default btn-sm btn-block" type="button"><i class="fa fa-coffee"></i> Buy a coffee</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <div class="ibox float-e-margins">
                          <div class="ibox-title">
                              <h5>Doctor Schedule Detail</h5>
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
                              <div>
                                  <div class="feed-activity-list">

                                      <div class="feed-element">
                                        <a  class="pull-left">
                                              <h4><strong> Staring Time : </strong></h4>
                                        </a>
                                          <div class="media-body ">
                                              <strong>{{DateTimeFormat::convertTimeForView($doctorschedule->startingtime)}}</strong>
                                          </div>
                                      </div>


                                      <div class="feed-element">
                                          <a  class="pull-left">
                                              <h4><strong> Ending Time : </strong></h4>
                                          </a>
                                          <div class="media-body ">
                                              <strong>{{DateTimeFormat::convertTimeForView($doctorschedule->endingtime)}}</strong>
                                          </div>
                                      </div>

                                      <div class="feed-element">
                                          <a  class="pull-left">
                                              <h4><strong> Starting Date : </strong></h4>
                                          </a>
                                          <div class="media-body ">
                                              <strong>{{DateTimeFormat::convertDateForView($doctorschedule->startingdate)}}</strong>
                                          </div>
                                      </div>

                                      <div class="feed-element">
                                          <a  class="pull-left">
                                              <h4><strong> Ending Date : </strong></h4>
                                          </a>
                                          <div class="media-body ">
                                              <strong>{{DateTimeFormat::convertDateForView($doctorschedule->endingdate)}}</strong>
                                          </div>
                                      </div>

                                      <div class="feed-element">
                                          <a  class="pull-left">
                                              <h4><strong> Days : </strong></h4>
                                          </a>
                                          <div class="media-body ">
                                              <strong>{{$doctorschedule->days}}</strong>
                                          </div>
                                      </div>

                                      <div class="feed-element">
                                          <a  class="pull-left">
                                              <h4><strong> Doctor Fee : </strong></h4>
                                          </a>
                                          <div class="media-body ">
                                              <strong>{{$doctorschedule->doctorfee}}</strong>
                                          </div>
                                      </div>

                                      <div class="feed-element">
                                          <a  class="pull-left">
                                              <h4><strong> Created At : </strong></h4>
                                          </a>
                                          <div class="media-body ">
                                              <strong>{{date('M j, Y', strtotime($doctorschedule->created_at))}}</strong>
                                          </div>
                                      </div>

                                      <div class="feed-element">
                                          <a  class="pull-left">
                                              <h4><strong> Updated At : </strong></h4>
                                          </a>
                                          <div class="media-body ">
                                              <strong>{{date('M j, Y', strtotime($doctorschedule->updated_at))}}</strong>
                                          </div>

                                      </div>
                                      {!! Html::linkRoute('doctorschedules.index','<< See All Doctors Schedule', [], ['class'=>'btn btn-primary btn-block'])!!}


                              </div>

                          </div>
                      </div>

                  </div>
              </div>
          </div>
    </div>
          <style>
              .sidebard-panel .feed-element, .media-body, .sidebard-panel p {
                  font-size: 18px;
              }
          </style>
@endsection

