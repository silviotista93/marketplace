@component('mail::message')
# Saludos estimado {{ $name }} {{$lastName}}

Hemos recibido tu solicitud para tu tienda **{{$store}}**
espera nuestra pronta respuesta.



Gracias,<br>
{{ config('app.name') }}
@endcomponent