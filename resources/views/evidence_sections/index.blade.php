@extends('layouts.panel')
@section('title', 'Apartado de evidencias')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Evidencias</h3>
                        <a href="{{ route('evidence_sections.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nueva Evidencia</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Tipo de evidencia</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Fecha de registro</th>
                                <th scope="col">Estado de evidencia</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($evidence_sections as $evidence_section)
                                <tr>
                                    <td>{{ $evidence_section->type_evidence }}</td>
                                    <td>{{ $evidence_section->description }}</td>
                                    <td>{{ $evidence_section->registration_date }}</td>
                                    <td>{{ $evidence_section->state_evidence }}</td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('evidence_sections.show', $evidence_section->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('evidence_sections.edit', $evidence_section->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('evidence_sections.destroy', $evidence_section->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta evidencia? Esta acción no se puede deshacer.')">
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
                        {{ $evidence_sections->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection


