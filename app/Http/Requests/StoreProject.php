<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProject extends FormRequest
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
            'name' => 'required|max:120',
            'type' => 'required',
            'services' => 'required',
            'comments' => 'nullable',
            'IAgree' => 'accepted'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please Enter a Project Name!',
            'name.min' => 'The Project Name should be at least :min characters!',
            'type.required' => 'Please select a Project Type',
            'services.required' => 'Please Select At Least 1 service',
            'IAgree.accepted' => 'You must accept the terms and conditions'
        ];
    }
}
