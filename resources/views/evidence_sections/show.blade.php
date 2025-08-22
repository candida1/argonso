@extends('layouts.panel')
@section('title', 'Apartado de evidencias/Mostrar')

@section('content')
    <div class="col-xl-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-newspaper">Ver Evidencia</i>
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('evidence_sections.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del la evidencia</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="type_evidence" class="form-control-label">
                                    <i class="fas fa-user"></i> Tipo de evidencia
                                </label>
                                <p>{{ $evidence_sections->type_evidence }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description" class="form-control-label">
                                    <i class="fas fa-user">Descripción</i>
                                </label>
                                <p>{{ $evidence_sections->description }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="registration" class="form-control-label">
                                    <i class="fas fa-user">Fecha de registro</i>
                                </label>
                                <p>{{ $evidence_sections->registration }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="state_evidence" class="form-control-label">
                                    <i class="fas fa-user">Estado de le evidencia</i>
                                </label>
                                <p>{{ $evidence_sections->state_evidence }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

