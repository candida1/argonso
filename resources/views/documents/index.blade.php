@extends('layouts.panel')
@section('title', 'Documentos')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Documentos</h3>
                        <a href="{{ route('documents.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nuevo Documento</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre del archivo</th>
                                <th scope="col">Tipo de documento</th>
                                <th scope="col">Fecha de realización</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">observaciones</th>
                                <th scope="col">Ruta de archivo</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documents as $document)
                                <tr>
                                    <td>{{ $document->file_name }}</td>
                                    <td>{{ $document->type_document }}</td>
                                    <td>{{ $document->date_compleiton }}</td>
                                    <td>{{ $document->description }}</td>
                                    <td>{{ $document->observation }}</td>
                                    <td>{{ $document->file_path }}</td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('documents.show', $document->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('documents.destroy', $document->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar este Documento? Esta acción no se puede deshacer.')">
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
                        {{ $documents->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection
