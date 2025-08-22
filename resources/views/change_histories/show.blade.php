@extends('layouts.panel')
@section('title', 'Historial de cambios/Mostrar')

@section('content')
    <div class="col-xl-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-newspaper">Ver Hstorial de cambios</i>
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('changes_histories.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del historial de cambios</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="date" class="form-control-label">
                                    <i class="fas fa-user">Dia</i>
                                </label>
                                <p>{{ $change_histories->date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="time" class="form-control-label">
                                    <i class="fas fa-user">Hora</i>
                                </label>
                                <p>{{ $change_histories->time }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="assigned_attorner" class="form-control-label">
                                    <i class="fas fa-user">Abogado asignado</i>
                                </label>
                                <p>{{ $change_histories->assigned_attorner }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="action_taken" class="form-control-label">
                                    <i class="fas fa-user">Acción realizada</i>
                                </label>
                                <p>{{ $change_histories->action_taken }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="reason_change" class="form-control-label">
                                    <i class="fas fa-user">Razón de cambio</i>
                                </label>
                                <p>{{ $change_histories->reason_change }}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

@endsection
