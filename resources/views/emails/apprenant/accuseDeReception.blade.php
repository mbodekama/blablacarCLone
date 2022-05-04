@component('mail::message')
# Hello {{ $name }} !

Votre  exercice à bien été soumis. L'équipe de la MAAT ACADEMY vous fera un retour une fois la correction disponible!

@component('mail::button', ['url' => 'maatacademy225.com'])
Visiter le site
@endcomponent

A bientôt,<br>
{{ config('app.name') }}
@endcomponent
