<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DoctorEditFormRequest extends Request
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
            'firstname'       =>'required|max:50',
            'lastname'        =>'required|max:50',
            'userrole'        =>'required',
            'city'            =>'required',
            'age'             =>'required|integer|max:100',
            'phoneno'         =>'required|max:16',
            'address'         =>'required|max:512',
            'qualification'  =>'required|max:512',
            'gender'          =>'required',
            'profilepicture' =>'image|mimes:jpeg,jpg,bmp,png,gif'
        ];

    }

    public function messages()
    {
        return [
            'firstname.required'=> 'The first name field is required.',
            'lastname.required'=> 'The last name field is required.',
            'profilepicture.image'=> 'The profile picture supported formats jpeg,jpg,bmp,png,gif.'
        ];
    }
}
