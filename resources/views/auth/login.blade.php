@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-5">

        <div class="card shadow">

            <div class="card-header text-center bg-dark text-white">
                <h4>Inicio de Sesión</h4>
            </div>


            <div class="card-body">


                @if(session('error'))

                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>

                @endif


                <form method="POST" action="/login">

                    @csrf


                    <div class="mb-3">

                        <label class="form-label">
                            Correo electrónico
                        </label>

                        <input 
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email') }}"
                        >


                        @error('email')

                            <div class="text-danger">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <div class="mb-3">

                        <label class="form-label">
                            Contraseña
                        </label>

                        <input 
                            type="password"
                            name="password"
                            class="form-control"
                        >


                        @error('password')

                            <div class="text-danger">
                                {{ $message }}
                            </div>

                        @enderror


                    </div>



                    <button class="btn btn-primary w-100">
                        Ingresar
                    </button>


                </form>


            </div>

        </div>

    </div>

</div>


@endsection