<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Doctorschedule;
use App\Http\Libraries\DateTimeFormat;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorScheduleFormRequest;
use App\Http\Requests;
use Session;
class DoctorScheduleController extends Controller
{
    public function __construct()
    {
        parent :: __construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('doctorschedules.index')->with('dcotorschedules',Doctorschedule::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors=array(''=>'--- SELECT ---');
        foreach(Doctor::where('userrole', '=','Doctor')->get() as $doctor){
            $doctors[$doctor->id]= $doctor->firstname.' '.$doctor->lastname;
        }
        return view('doctorschedules.create')->with('doctors',$doctors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorScheduleFormRequest $request)
    {
        $doctorschedule               = new Doctorschedule();
        $doctorschedule->doctor_id    =$request->doctor_id;
        $doctorschedule->startingtime =$request->startingtime;
        $doctorschedule->endingtime   =$request->endingtime;
        $doctorschedule->startingdate =DateTimeFormat::convertDateForDB($request->startingdate);
        $doctorschedule->endingdate   =DateTimeFormat::convertDateForDB($request->endingdate);
        $doctorschedule->days         =$request->days;
        $doctorschedule->doctorfee    =$request->doctorfee;
        $doctorschedule->save();
        Session::flash('success', 'Doctor Schedule has been successfully saved.');
        return redirect()->route('doctorschedules.show',$doctorschedule->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctorschedule =Doctorschedule::find($id);
        return view('doctorschedules.show')->with('doctorschedule', $doctorschedule);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors=array(''=>'--- SELECT ---');
        foreach(Doctor::where('userrole', '=','Doctor')->get() as $doctor){
            $doctors[$doctor->id]= $doctor->firstname.' '.$doctor->lastname;
        }
        $doctorschedule=Doctorschedule::find($id);
        return view('doctorschedules.edit')->with('doctorschedule',$doctorschedule)->with('doctors',$doctors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorScheduleFormRequest $request, $id)
    {
        $doctorschedule       =Doctorschedule::find($id);
        $doctorschedule->doctor_id    =$request->doctor_id;
        $doctorschedule->startingtime =$request->startingtime;
        $doctorschedule->endingtime   =$request->endingtime;
        $doctorschedule->startingdate =DateTimeFormat::convertDateForDB($request->startingdate);
        $doctorschedule->endingdate   =DateTimeFormat::convertDateForDB($request->endingdate);
        $doctorschedule->days         =$request->days;
        $doctorschedule->doctorfee    =$request->doctorfee;
        $doctorschedule->save();
        Session::flash('success', 'Doctor Schedule has been successfully updated.');
        return redirect()->route('doctorschedules.show',$doctorschedule->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctorschedule = Doctorschedule::find($id);
        $doctorschedule->delete();
        Session::flash('success','Doctor Schedule has been successfully deleted.');
        return redirect()->route('doctorschedules.index');
    }
}
