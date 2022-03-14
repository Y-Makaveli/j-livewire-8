@extends('layouts.web')

@section('content')
    <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Ultimos cursos</h1>
        <p class="text-xl text-gray-600">Registrate a los ultimos cursos disponibles</p>
        <h2 class="text-xl text-gray-600">que esperas para crecer</h2>
        <h3 class="text-lg text-gray-600">Formate como profesional</h3>
    </div>
    <livewire:course-list>
@endsection