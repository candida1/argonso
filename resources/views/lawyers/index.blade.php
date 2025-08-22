@extends('layouts.panel')
@section('title', 'Abogados')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Abogados</h3>
                        <a href="{{ route('lawyers.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nuevo Abogado</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Género</th>
                                <th scope="col">Cédula de identidad</th>
                                <th scope="col">Número telefónico</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Correo electrónico</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lawyers as $lawyer)
                                <tr>
                                    <td>{{ $lawyer->name }}</td>
                                    <td>{{ $lawyer->lastname }}</td>
                                    <td>{{ $lawyer->gender }}</td>
                                    <td>{{ $lawyer->identity_card }}</td>
                                    <td>{{ $lawyer->telephone }}</td>
                                    <td>{{ $lawyer->address }}</td>
                                    <td>{{ $lawyer->email }}</td>
                           


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('lawyers.show', $lawyer->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('lawyers.edit', $lawyer->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('lawyers.destroy', $lawyer->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este Abogado? Esta acción no se puede deshacer.')">
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
                        {{ $lawyers->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection


