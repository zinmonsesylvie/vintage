@component('mail::message')
# Bienvenue {{ $user->name }} !

Merci de vous être inscrit à notre application. Veuillez confirmer votre inscription en cliquant sur le bouton ci-dessous :

{{-- @component('mail::button', ['url' => route('login')])
Confirmer mon inscription
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent --}}
