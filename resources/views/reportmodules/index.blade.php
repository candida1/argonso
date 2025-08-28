@extends('layouts.panel')
@section('title', 'Modulo de reporte')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Reportes</h3>
                        <a href="{{ route('reportmodules.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nuevo Reporte</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre de cliente</th>
                                <th scope="col">Abogado asignado</th>
                                <th scope="col">Estado de caso</th>
                                <th scope="col">Fecha de redacción</th>
                                <th scope="col">Tipo de reporte</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reportmodules as $reportmodule)
                                <tr>
                                    <td>{{ $reportmodule->customer_name }}</td>
                                    <td>{{ $reportmodule->assigned_attomey }}</td>
                                    <td>{{ $reportmodule->status_case }}</td>
                                    <td>{{ $reportmodule->date_writting }}</td>
                                    <td>{{ $reportmodule->type_report }}</td>



                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('reportmodules.show', $reportmodule->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('reportmodules.edit', $reportmodule->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('reportmodules.destroy', $reportmodule->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este modulo de reportes? Esta acción no se puede deshacer.')">
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
                        {{ $reportmodules->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection
