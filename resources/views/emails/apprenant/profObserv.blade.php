@component('mail::message')
# Hello {{ $name }} !

{{ $observ }}

@component('mail::button', ['url' => 'maatacademy225.com'])
Visiter le site
@endcomponent

A bientôt,<br>
{{ config('app.name') }}
@endcomponent
