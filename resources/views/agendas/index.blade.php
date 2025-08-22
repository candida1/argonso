@extends('layouts.panel')
@section('title', 'Agendas')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Agendas</h3>
                        <a href="{{ route('agendas.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus">Nueva Agenda</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre del evento</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Dia</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Lugar</th>
                                <th scope="col">Estado del evento</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agendas as $agenda)
                                <tr>
                                    <td>{{ $agenda->event_name }}</td>
                                    <td>{{ $agenda->description }}</td>
                                    <td>{{ $agenda->date }}</td>
                                    <td>{{ $agenda->time }}</td>
                                    <td>{{ $agenda->place }}</td>
                                    <td>{{ $agenda->event_status }}</td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('agendas.show', $agenda->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('agendas.edit', $agenda->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('agendas.destroy', $agenda->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta agenda? ¡Esta acción no se puede deshacer.!')">
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
                        {{ $agendas->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection
