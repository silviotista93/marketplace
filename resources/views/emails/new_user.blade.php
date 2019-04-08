@component('mail::message')
Hola  <strong>{{ $user->name }} {{ $user->last_name }}</strong>
<br>


Utiliza estas credenciales para acceder a <strong>{{config('app.name')}}</strong>.

@component('mail::table')

    | Usuario  | Contraseña  |
    |:---------|:------------|
    |{{$user->email}} | {{$password}}|


@endcomponent
@component('mail::button', ['url' => route('login')])
    Login
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent