@extends('layouts.app')

@section('title', 'Nuevo Servicio')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-7">

        <div class="card shadow">

            <div class="card-header bg-dark text-white">
                <h4>Registrar Servicio</h4>
            </div>


            <div class="card-body">


                <form method="POST" action="{{ route('servicios.store') }}">

                    @csrf


                    <div class="mb-3">

                        <label class="form-label">
                            Nombre del servicio
                        </label>

                        <input 
                            type="text"
                            name="nombre"
                            class="form-control"
                            value="{{ old('nombre') }}"
                        >


                        @error('nombre')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>



                    <div class="mb-3">

                        <label class="form-label">
                            Descripción
                        </label>

                        <textarea 
                            name="descripcion"
                            class="form-control"
                            rows="3"
                        >{{ old('descripcion') }}</textarea>


                        @error('descripcion')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>



                    <div class="mb-3">

                        <label class="form-label">
                            Precio
                        </label>

                        <input 
                            type="number"
                            step="0.01"
                            name="precio"
                            class="form-control"
                            value="{{ old('precio') }}"
                        >


                        @error('precio')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>



                    <div class="mb-3">

                        <label class="form-label">
                            Duración estimada (minutos)
                        </label>

                        <input 
                            type="number"
                            name="duracion_estimada"
                            class="form-control"
                            value="{{ old('duracion_estimada') }}"
                        >


                        @error('duracion_estimada')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>



                    <div class="mb-3">

                        <label class="form-label">
                            Estado
                        </label>


                        <select name="estado" class="form-select">

                            <option value="">
                                Seleccione
                            </option>

                            <option value="Pendiente">
                                Pendiente
                            </option>

                            <option value="En proceso">
                                En proceso
                            </option>

                            <option value="Finalizado">
                                Finalizado
                            </option>

                        </select>


                        @error('estado')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror


                    </div>



                    <button class="btn btn-success">
                        Guardar Servicio
                    </button>


                    <a href="{{ route('servicios.index') }}" class="btn btn-secondary">
                        Cancelar
                    </a>


                </form>


            </div>

        </div>

    </div>

</div>


@endsection