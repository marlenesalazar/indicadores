<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroF18_1 extends FormRequest
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
            'titulo'=>'required|max:200',
            'autor'=>'required|max:100',
            'cantidad'=>'required',
            'año'=>'required|max:5',
            'carrera'=>'required|max:50',
            'gestion'=>'required|max:8',
        ];
    }
}
