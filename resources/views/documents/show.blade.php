@extends('layouts.panel')
@section('title', 'Documento/Mostrar')

@section('content')
    <div class="col-xl-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-newspaper">Ver Documento</i>
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('documents.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Documento</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="file_name" class="form-control-label">
                                    <i class="fas fa-user"></i> Nombre del archivo
                                </label>
                                <p>{{ $documents->file_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="type_document" class="form-control-label">
                                    <i class="fas fa-user">Tipo de documento</i>
                                </label>
                                <p>{{ $documents->type_document }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="date_compleiton" class="form-control-label">
                                    <i class="fas fa-user">Fecha de realización</i>
                                </label>
                                <p>{{ $documents->date_compleiton }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description" class="form-control-label">
                                    <i class="fas fa-user">Descripción</i>
                                </label>
                                <p>{{ $documents->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="observation" class="form-control-label">
                                    <i class="fas fa-user">Observaciónes </i>
                                </label>
                                <p>{{ $documents->observation }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="file_path" class="form-control-label">
                                    <i class="fas fa-user">Ruta de archivo</i>
                                </label>
                                <p>{{ $documents->file_path }}</p>
                            </div>
                        </div>
                    </div>

                   

                </div>
            </div>

        </div>
    </div>

@endsection
