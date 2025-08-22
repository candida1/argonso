@extends('layouts.panel')
@section('title', 'Casocliente')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Caso del cliente</h3>
                        <a href="{{ route('case_customers.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus">Nuevo Caso</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Número de expediente</th>
                                <th scope="col">Tipo de caso</th>
                                <th scope="col">Fecha de apertura</th>
                                <th scope="col">Estado de caso</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Prioridad</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($case_customers as $case_customer)
                                <tr>
                                    <td>{{ $case_customer->file_number }}</td>
                                    <td>{{ $case_customer->type_case}}</td>
                                    <td>{{ $case_customer->opening_date }}</td>
                                    <td>{{ $case_customer->status_case }}</td>
                                    <td>{{ $case_customer->description }}</td>
                                    <td>{{ $case_customer->priority }}</td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('case_customers.show', $case_customer->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('case_customers.edit', $case_customer->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('case_customers.destroy', $case_customer->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este caso? ¡Esta acción no se puede deshacer.!')">
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
                        {{ $case_customers->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection
