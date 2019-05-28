@component('mail::message')
# Saludos estimado {{ $name }} {{ $lastName }}.

Hemos rechazado la solicitud de tu tienda **{{$store}}**.
Puedes ver en las observaciones las causas e intentarlo nuevamente:



Observaciones:
{{$observacion}}


Gracias, Suerte la proxima<br>
{{ config('app.name') }}
@endcomponent