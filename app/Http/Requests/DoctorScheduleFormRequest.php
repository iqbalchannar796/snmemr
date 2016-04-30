<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DoctorScheduleFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'doctor_id'       =>'required',
            'startingtime'    =>'required',
            'endingtime'      =>'required',
            'startingdate'    =>'required',
            'endingdate'      =>'required',
            'days'            =>'required|String',
            'doctorfee'         =>'required|numeric'
        ];
    }
}
