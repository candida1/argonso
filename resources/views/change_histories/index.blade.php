@extends('layouts.panel')
@section('title', 'Historial de cambios')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Historial de cambios</h3>
                        <a href="{{ route('change_histories.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus">Nuevo Historial de cambios</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Dia</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Abogado asignado</th>
                                <th scope="col">Acción tomada</th>
                                <th scope="col">Razón de cambio</th>
                                <th scope="col">Caso cliente</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($change_histories as $change_history)
                                <tr>
                                    <td>{{ $change_history->date }}</td>
                                    <td>{{ $change_history->time }}</td>
                                    <td>{{ $change_history->assigned_attorner }}</td>
                                    <td>{{ $change_history->action_taken}}</td>
                                    <td>{{ $change_history->reason_change }}</td>
                                    <td>{{ $change_history->case_customer->file_number }}</td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('change_histories.show', $change_history->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('change_histories.edit', $change_history->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('change_histories.destroy', $change_history->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este historial de cambios? ¡Esta acción no se puede deshacer.!')">
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
                        {{ $change_histories->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection
