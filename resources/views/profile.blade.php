@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Perfil de {{ Auth::user()->name }}</h1>
        <p>Correo: {{ Auth::user()->email }}</p>
    </div>
@endsection
