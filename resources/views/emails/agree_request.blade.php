@component('mail::message')
# Saludos estimado {{ $name }} {{ $lastName }}

Hemos aceptado la solicitud de tu tienda **{{$store}}**.
Puede acceder a nuestra aplicaion como:

Usuario: {{$email}}
Contraseña:{{$password}}

Observaciones:
{{$observacion}}


Gracias,<br>
{{ config('app.name') }}
@endcomponent