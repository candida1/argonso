@extends('layouts.panel')
@section('title', 'Actividades')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Actividades</h3>
                        <a href="{{ route('activities.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus">Nueva Actividad</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Dia de la actividad</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Nombre de la actividad</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Documento adjunto</th>
                                <th scope="col">Tipo de actividad</th>
                                <th scope="col">Lugar de actividad</th>
                                <th scope="col">Estado de la actividad</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activities as $activity)
                                <tr>
                                    <td>{{ $career->date_activity }}</td>
                                    <td>{{ $career->time }}</td>
                                    <td>{{ $career->name_activity }}</td>
                                    <td>{{ $career->description }}</td>
                                    <td>{{ $career->attached_documents }}</td>
                                    <td>{{ $career->type_activity }}</td>
                                    <td>{{ $career->place }}</td>
                                    <td>{{ $career->state }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('activities.show', $activity->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('activities.destroy', $activity->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta actividad? ¡Esta acción no se puede deshacer.!')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash">Eliminar</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $activities->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection
