<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStore extends FormRequest
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
            'name' => 'required|max:255|regex:/^[ A-Za-zñÑáéíóúÁÉÍÓÚ]+$/',
            'apellido' => 'required|regex:/^[ A-Za-zñÑáéíóúÁÉÍÓÚ]+$/',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\d+$/',
            'phone2' => 'nullable|regex:/^[0-9]{0,}$/',
            
            
            
            
        ];
    }

    public function messages()
    {
        return [

            


        ];
    }
}
