
<div class="pl-lg-4">

       <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="event_name">Nombre del evento</label>
                <select name="event_name" id="event_name" class="form-control">
                    <option value="" disabled>Seleccionar el nombre de el evento</option>
                    <option value="Ceremonia de matrimonio civil" {{ old('event_name', $agendas->event_name ?? '') == 'Ceremonia de matrimonio civil' ? 'selected' : '' }}>Ceremonia de matrimonio civil</option>
                    <option value="Inscripción de nacimiento" {{ old('event_name', $agendas->event_name ?? '') == 'Inscripción de nacimiento' ? 'selected' : '' }}>Inscripción de nacimiento</option>
                    <option value="Registro de defunción" {{ old('event_name', $agendas->event_name ?? '') == 'Registro de defunción' ? 'selected' : '' }}>Registro de defunción</option>
                    <option value="Ratificación de documentos" {{ old('event_name', $agendas->event_name ?? '') == 'Ratificación de documentos' ? 'selected' : '' }}>Ratificación de documentos</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar la descripción del evento"
                value="{{ old('description', $agendas->description)}}">
            </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date">Fecha</label>
                <input type="date" id="date" name="date" class="form-control form-control-alternative"
                placeholder="Ingresar dia del evento"
                value="{{ old('date', $agendas->date)}}">
            </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="time">Hora</label>
                <input type="time" id="time" name="time" class="form-control form-control-alternative"
                placeholder="Ingresar la hora del evento"
                value="{{ old('time', $agendas->time)}}">
            </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="duration">Duración del evento</label>
                <select name="duration" id="duration" class="form-control">
                    <option value="" disabled>Seleccione la duración del evento</option>
                    <option value="1 Hora" {{ old('duration', $agendas->duration ?? '') == '1 Hora' ? 'selected' : '' }}>1 Hora</option>
                    <option value="2 horas" {{ old('duration', $agendas->duration ?? '') == '2 Horas' ? 'selected' : '' }}>2 Horas</option>
                    <option value="4 horas" {{ old('duration', $agendas->duration ?? '') == '4 Horas' ? 'selected' : '' }}>3 Horas </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="place">Lugar</label>
                <select name="place" id="place" class="form-control">
                    <option value="" disabled>Seleccione el Lugar</option>
                    <option value="Alcaldia" {{ old('place', $agendas->place ?? '') == 'Alcaldia' ? 'selected' : '' }}>Alcaldia</option>
                    <option value="Juzgado" {{ old('place', $agendas->place ?? '') == 'Juzgado' ? 'selected' : '' }}>Juzgado</option>
                    <option value="CSE" {{ old('place', $agendas->place ?? '') == 'CSE' ? 'selected' : '' }}>Central departamental municipal</option>
                    <option value="Transcito" {{ old('place', $agendas->place ?? '') == 'Transcito' ? 'selected' : '' }}>Transcito</option>
                </select>
            </div>
        </div>
   </div>

   <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="event_status">Estado del evento</label>
                <select name="event_status" id="event_status" class="form-control">
                    <option value="" disabled>Seleccione el estado del evento</option>
                    <option value="Programado" {{ old('event_status', $agendas->event_status ?? '') == 'Programado' ? 'selected' : '' }}>Programado</option>
                    <option value="Realizado" {{ old('event_status', $agendas->event_status ?? '') == 'Realizado' ? 'selected' : '' }}>Realizado</option>
                    <option value="Reprogramado" {{ old('event_status', $agendas->event_status ?? '') == 'Reprogramado' ? 'selected' : '' }}>Reprogramado </option>
                    <option value="Cancelado" {{ old('event_status', $agendas->event_status ?? '') == 'Cancelado' ? 'selected' : '' }}>Cancelado </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="customer_id">Cliente</label>
                <select name="customer_id" id="customer_id" class="form-control">
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}" {{ old('customer_id', $equipment->customer_id ?? '') == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>




</div>

<hr class="my-4"/>



<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Agenda
        </button>
    </div>
</div>
