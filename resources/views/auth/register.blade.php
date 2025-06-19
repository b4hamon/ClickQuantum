@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #000;">
    <div class="col-lg-6 col-md-8 col-sm-10 col-12">
        <div class="card p-4" style="background: #121212; border-radius: 15px; box-shadow: 0 0 20px rgba(0, 123, 255, 0.3); color: white;">
            <div class="card-header text-center" style="font-size: 1.5rem; font-weight: bold; border-bottom: 1px solid rgba(255, 255, 255, 0.1); color: white;">
                Registrarse
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label" style="color: #ddd;">Nombre</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus 
                            style="background: #1a1a1a; border: 2px solid #0d6efd; color: white; border-radius: 10px; padding: 10px;">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: #ddd;">Correo Electrónico</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" 
                            style="background: #1a1a1a; border: 2px solid #0d6efd; color: white; border-radius: 10px; padding: 10px;">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: #ddd;">Contraseña</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" 
                            style="background: #1a1a1a; border: 2px solid #0d6efd; color: white; border-radius: 10px; padding: 10px;">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password-confirm" class="form-label" style="color: #ddd;">Confirmar Contraseña</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" 
                            style="background: #1a1a1a; border: 2px solid #0d6efd; color: white; border-radius: 10px; padding: 10px;">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-lg w-100" 
                            style="background: linear-gradient(45deg, #0d6efd, #6610f2); border: none; border-radius: 10px; padding: 10px 20px; font-weight: bold; color: white; box-shadow: 0 0 10px rgba(0, 123, 255, 0.5); transition: 0.3s;">
                            Registrarse
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
