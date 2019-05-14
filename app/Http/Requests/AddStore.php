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
            'apellido' => 'required|max:255|regex:/^[ A-Za-zñÑáéíóúÁÉÍÓÚ]+$/',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\d+$/',
            'phone2' => 'nullable|regex:/^[0-9]{0,}$/',
            'nombreT'=> 'required|max:255|regex:/^[ A-Za-zñÑáéíóúÁÉÍÓÚ]+$/',
            'imagenRut'=> 'required|mimes:jpeg,bmp,png',
            'imagenE'=> 'required|mimes:jpeg,bmp,png',
            'imagenDni'=> 'required|mimes:jpeg,bmp,png',
            
            
            
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Debe ingresar su nombre',
            'name.max' => 'Solo se permite un maximo de 255 caracteres',
            'name.regex' => 'Solo se permiten carateres alfabeticos [A-Z]',
            'apellido.required' => 'Debe ingresar su apellido',
            'apellido.max' => 'Solo se permite un maximo de 255 caracteres',
            'apellido.regex' => 'Solo se permiten carateres alfabeticos [A-Z]',
            'email.required'=>'Debe ingresar su correo electronico',
            'email.email'=>'Debe ingresar un formato de correo valido(example@example.com)',
            'phone.required'=>'Debe ingresar su numero de celular',
            'phone.regex'=>'Formato de celular incorrecto',
            'phone2.regex'=>'Formato de telefono incorrecto',
            'nombreT.required'=>'Debe ingresar el nombre de su tienda',
            'nombreT.max' => 'Solo se permite un maximo de 255 caracteres',
            'nombreT.regex' => 'Solo se permiten carateres alfabeticos [A-Z]',
            'imagenRut.required'=>'Ingrese la imagen del rut de su tienda',
            'imagenRut.mimes'=>'solo se permiten imagenes',            
            'imagenE.required'=>'Ingrese la imagen del extracto bancario de su tienda',
            'imagenE.mimes'=>'solo se permiten imagenes',            
            'imagenDni.required'=>'Ingrese una imagen de su documento de identificacion',
            'imagenDni.mimes'=>'solo se permiten imagenes',            


        ];
    }
}
