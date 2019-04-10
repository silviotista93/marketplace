<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategory extends FormRequest
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
            'category'=> 'required|unique:categories,category,'.$this->id_category.'|max:100|regex:/^[ A-Za-zñÑáéíóúÁÉÍÓÚ]+$/',
            'imagen'=> 'mimes:jpeg,bmp,png'
        ];
    }


    public function messages()
    {
        return [

            'category.required'=> 'Ingrese el nombre de la categoria',
            'category.unique'=> 'Esta categoria ya esta registrada',
            'category.max'=> 'Solo se admiten 100 caracteres',
            'category.regex'=> 'Solo se admiten caracteres alfabeticos [A-Z]',
            'imagen.required'=> 'Ingrese una imagen para la categoria',
            'imagen.mimes'=> 'Solo se admiten imagenes',


        ];
    }
}
