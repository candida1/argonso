@extends('layouts.panel')
@section('title', 'Agenda/Mostrar')

@section('content')
    <div class="col-xl-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-newspaper">Ver Agenda</i>
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('agendas.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información de la agenda</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="event_name" class="form-control-label">
                                    <i class="fas fa-user">Nombre del evento</i>
                                </label>
                                <p>{{ $agendas->event_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description" class="form-control-label">
                                    <i class="fas fa-user">Descripción</i>
                                </label>
                                <p>{{ $agendas->description }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="date" class="form-control-label">
                                    <i class="fas fa-user">Dia</i>
                                </label>
                                <p>{{ $agendas->date }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="time" class="form-control-label">
                                    <i class="fas fa-user">Hora</i>
                                </label>
                                <p>{{ $agendas->time }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="duration" class="form-control-label">
                                    <i class="fas fa-user">Duracion del evento</i>
                                </label>
                                <p>{{ $agendas->duration }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="place" class="form-control-label">
                                    <i class="fas fa-user">Lugar</i>
                                </label>
                                <p>{{ $agendas->place }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="event_status" class="form-control-label">
                                    <i class="fas fa-user">Estado del evento</i>
                                </label>
                                <p>{{ $agendas->event_status }}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

@endsection
