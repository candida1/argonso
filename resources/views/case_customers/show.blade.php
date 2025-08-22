@extends('layouts.panel')
@section('title', 'Casocliente/Mostrar')

@section('content')
    <div class="col-xl-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-newspaper">Ver Caso</i>
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('case_customers.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del caso</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="file_number" class="form-control-label">
                                    <i class="fas fa-user">Número del expediente</i>
                                </label>
                                <p>{{ $case_customers->file_number }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="type_case" class="form-control-label">
                                    <i class="fas fa-user">Tipo de caso</i>
                                </label>
                                <p>{{ $case_customers->type_case }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="opening_date" class="form-control-label">
                                    <i class="fas fa-user">Fecha de apertura</i>
                                </label>
                                <p>{{ $case_customers->opening_date }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="status_case" class="form-control-label">
                                    <i class="fas fa-user">Estado del caso</i>
                                </label>
                                <p>{{ $case_customers->status_case }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description" class="form-control-label">
                                    <i class="fas fa-user">Descripción del caso</i>
                                </label>
                                <p>{{ $case_customers->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="priority" class="form-control-label">
                                    <i class="fas fa-user">Prioridad</i>
                                </label>
                                <p>{{ $case_customers->priority }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name" class="form-control-label">
                                    <i class="fas fa-user">Nombre del cliente</i>
                                </label>
                                <p>{{ $case_customers->customers->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name" class="form-control-label">
                                    <i class="fas fa-user">Nombre del abogado</i>
                                </label>
                                <p>{{ $case_customers->lawyers->name }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

