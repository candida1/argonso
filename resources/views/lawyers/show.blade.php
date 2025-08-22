@extends('layouts.panel')
@section('title', 'Abogado/Mostrar')

@section('content')
    <div class="col-xl-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-newspaper">Ver Abogado</i>
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('lawyers.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Abogado</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name" class="form-control-label">
                                    <i class="fas fa-user"></i> Nombre Completo
                                </label>
                                <p>{{ $lawyers->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="lastname" class="form-control-label">
                                    <i class="fas fa-user">Apellido</i>
                                </label>
                                <p>{{ $lawyers->lastname }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="gender" class="form-control-label">
                                    <i class="fas fa-user">Género</i>
                                </label>
                                <p>{{ $lawyers->gender }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="identity_card" class="form-control-label">
                                    <i class="fas fa-user">Cédula de identidad</i>
                                </label>
                                <p>{{ $lawyers->identity_card }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="telephone" class="form-control-label">
                                    <i class="fas fa-user">Número telefónico </i>
                                </label>
                                <p>{{ $lawyers->telephone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="address" class="form-control-label">
                                    <i class="fas fa-user">Dirección</i>
                                </label>
                                <p>{{ $lawyers->address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="email" class="form-control-label">
                                    <i class="fas fa-user">Correo electrónico</i>
                                </label>
                                <p>{{ $lawyers->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="registration_date" class="form-control-label">
                                    <i class="fas fa-user">Fecha de registro</i>
                                </label>
                                <p>{{ $lawyers->registration_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="responsible" class="form-control-label">
                                    <i class="fas fa-user">Responsable</i>
                                </label>
                                <p>{{ $lawyers->responsible }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

