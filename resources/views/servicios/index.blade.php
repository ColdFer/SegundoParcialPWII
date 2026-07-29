@extends('layouts.app')

@section('title', 'Servicios')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">

    <h2>Servicios registrados</h2>

    <a href="{{ route('servicios.create') }}" class="btn btn-primary">
        Nuevo Servicio
    </a>

</div>



<div class="card">

    <div class="card-body">

        <table class="table table-bordered table-striped">

            <thead class="table-dark">

                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Duración</th>
                    <th>Estado</th>
                    <th>Usuario</th>
                </tr>

            </thead>


            <tbody>

            @forelse($servicios as $servicio)

                <tr>

                    <td>{{ $servicio->id }}</td>

                    <td>{{ $servicio->nombre }}</td>

                    <td>{{ $servicio->descripcion }}</td>

                    <td>{{ $servicio->precio }}</td>

                    <td>{{ $servicio->duracion_estimada }} min</td>

                    <td>{{ $servicio->estado }}</td>

                    <td>
                        {{ $servicio->user->name }}
                    </td>

                </tr>


            @empty

                <tr>
                    <td colspan="7" class="text-center">
                        No existen servicios registrados
                    </td>
                </tr>

            @endforelse


            </tbody>

        </table>

    </div>

</div>


@endsection