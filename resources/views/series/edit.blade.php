<x-layout title="Editar Serie: {{$serie->nome}}">
    <x-series.form :action="route('series.update', $series->id)" :nome="$serie->nome"/>
</x-layout>