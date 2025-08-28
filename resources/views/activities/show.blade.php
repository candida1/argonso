@extends('layouts.panel')
@section('title', 'Actividad/Mostrar')

@section('content')
    <div class="col-xl-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-newspaper">Ver Actividad</i>
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('activities.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información de la actividad</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="date_activity" class="form-control-label">
                                    <i class="fas fa-user">Nombre de la actividad</i>
                                </label>
                                <p>{{ $activities->date_activity }}</p>
                            </div>
                        </div>
                    </div>

                       <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="time" class="form-control-label">
                                    <i class="fas fa-user">hora</i>
                                </label>
                                <p>{{ $activities->time }}</p>
                            </div>
                        </div>
                    </div>


                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name_activity" class="form-control-label">
                                    <i class="fas fa-user">Nombre de la actividad</i>
                                </label>
                                <p>{{ $activities->name_activity }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description" class="form-control-label">
                                    <i class="fas fa-user">Descripción</i>
                                </label>
                                <p>{{ $activities->description }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="attached_documents" class="form-control-label">
                                    <i class="fas fa-user">Documentos adjuntos</i>
                                </label>
                                <p>{{ $activities->attached_documents }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="type_activity" class="form-control-label">
                                    <i class="fas fa-user">Tipo de actividad</i>
                                </label>
                                <p>{{ $activities->type_activity }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="place" class="form-control-label">
                                    <i class="fas fa-user">Lugar</i>
                                </label>
                                <p>{{ $activities->place }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="state" class="form-control-label">
                                    <i class="fas fa-user">Estado</i>
                                </label>
                                <p>{{ $activities->state }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name" class="form-control-label">
                                    <i class="fas fa-user">Nombre del abogado</i>
                                </label>
                                <p>{{ $activities->lawyer->name }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name" class="form-control-label">
                                    <i class="fas fa-user">Modulo de reportes</i>
                                </label>
                                <p>{{ $activities->reportmodule->customer_name }}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

@endsection

