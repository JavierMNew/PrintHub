@extends('components.sideBar')

@section('title', 'Inicio - PrintHub')

@section('content')
    <div class="p-6">
        @auth
            <h1 class="text-4xl font-extrabold text-gray-800 mb-6 border-b pb-2">Bienvenid@, {{ auth()->user()->name }}</h1>
            <form action="/logout" method="post">
                @csrf
                <button>Cerrar sesión</button>
            </form>
        @else
            <h1>no estas logueado</h1>
            <h1>ve a login</h1>
            <a href="/login">login</a>
        @endauth
    </div>
@endsection
