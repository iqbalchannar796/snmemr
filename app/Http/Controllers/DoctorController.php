<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorFormRequest;
use App\Http\Requests\DoctorEditFormRequest;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests;
use Session;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('doctors.index')->with('doctors',Doctor::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorFormRequest $request)
    {
        $user                 =new User();
        $user->name           =$request->firstname.' '.$request->lastname;
        $user->email          =$request->email;
        $user->password       =bcrypt($request->password);
        $user->save();

        $doctor               = new Doctor();
        $doctor->user_id      =$user->id;
        $doctor->firstname    =$request->firstname;
        $doctor->lastname     =$request->lastname;
        $doctor->userrole     =$request->userrole;
        $doctor->city         =$request->city;
        $doctor->age          =$request->age;
        $doctor->phoneno      =$request->phoneno;
        $doctor->address      =$request->address;
        $doctor->qualification=$request->qualification;
        $doctor->gender=$request->gender;
        $doctor->usertype=1;
        if ($request->hasFile('profilepicture')) {
            $image = $request->file('profilepicture');
            $filename = date('Y-m-d-H-i-s') . "-" . $image->getClientOriginalName();
            Image::make($image->getRealPath())->resize(320, 240)->save(public_path('img/doctors/' . $filename));
            $doctor->profilepicture = 'img/doctors/' . $filename;
        }
        $doctor->save();
        Session::flash('success', 'Doctor has been successfully saved.');
        return redirect()->route('doctors.show',$doctor->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor =Doctor::find($id);
        return view('doctors.show')->with('doctor',$doctor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor=Doctor::find($id);
        return view('doctors.edit')->with('doctor',$doctor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorEditFormRequest $request, $id)
    {
        $doctor               =Doctor::find($id);
        $doctor->firstname    =$request->firstname;
        $doctor->lastname     =$request->lastname;
        $doctor->userrole     =$request->userrole;
        $doctor->city         =$request->city;
        $doctor->age          =$request->age;
        $doctor->phoneno      =$request->phoneno;
        $doctor->address      =$request->address;
        $doctor->qualification=$request->qualification;
        $doctor->gender       =$request->gender;
        if ($request->hasFile('profilepicture')) {
            $image = $request->file('profilepicture');
            $filename = date('Y-m-d-H-i-s') . "-" . $image->getClientOriginalName();
            Image::make($image->getRealPath())->resize(320, 240)->save(public_path('img/doctors/' . $filename));

            if (!empty($doctor->profilepicture)){
                File::delete(public_path($doctor->profilepicture));
            }

            $doctor->profilepicture = 'img/doctors/' . $filename;
        }
        $doctor->save();
        Session::flash('success', 'Doctor has been successfully updated.');
        return redirect()->route('doctors.show',$doctor->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        if (!empty($doctor->profilepicture)){
            File::delete(public_path($doctor->profilepicture));
        }
        $doctor->delete();
        Session::flash('success','Doctor has been successfully deleted.');
        return redirect()->route('doctors.index');
    }
}
