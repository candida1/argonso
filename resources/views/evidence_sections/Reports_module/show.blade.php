@extends('layouts.panel')
@section('title', 'Modulo de reportes/Mostrar')

@section('content')
    <div class="col-xl-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-newspaper">Ver Reporte</i>
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('reports_module.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Reporte</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="customer_name" class="form-control-label">
                                    <i class="fas fa-user"></i> Nombre del cliente
                                </label>
                                <p>{{ $reports_modules->customer_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="assigned_attomey" class="form-control-label">
                                    <i class="fas fa-user">Abogado asignado</i>
                                </label>
                                <p>{{ $reports_modules->assigned_attomey }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="status_case" class="form-control-label">
                                    <i class="fas fa-user">Estado del caso</i>
                                </label>
                                <p>{{ $reports_modules->status_case }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="date_writting" class="form-control-label">
                                    <i class="fas fa-user">Fecha de redacción</i>
                                </label>
                                <p>{{ $reports_modules->date_writting }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="type_report" class="form-control-label">
                                    <i class="fas fa-user">Tipo de reporte</i>
                                </label>
                                <p>{{ $reports_modules->type_report }}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

@endsection
