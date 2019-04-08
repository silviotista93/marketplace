<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSubCategory extends FormRequest
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
            'subcategory'=> 'required|unique:categories,category|max:100|regex:/^[ A-Za-zñÑáéíóúÁÉÍÓÚ]+$/',
            'imagen'=> 'required|mimes:jpeg,bmp,png',
            'categoria'=> 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'subcategory.required'=>'Ingrese el nombre de la sub categoria',
            'subcategory.unique'=>'Esta sub categoria ya esta registrada',
            'subcategory.max'=>'se permite maximo 100 caracteres',
            'subcategory.regex'=>'Solo se permiten caracteres alfabeticos [A-Z]',
            'imagen.required'=>'Ingrese una imagen para la sub categoria',
            'imagen.mimes'=>'solo se permiten imagenes',
            'categoria.required'=>'Debe seleccionar una categoria',
            'categoria.numeric'=>'Debe seleccionar una categoria',
        ];
        
    }

}
