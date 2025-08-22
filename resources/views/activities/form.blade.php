
<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date_activity">Dia de la actividad</label>
                <input type="date" id="date_activity" name="date_activity" class="form-control form-control-alternative"
                placeholder="Ingresar el dia de la actividad"
                value="{{ old('date_activity', $activities->date_activity)}}">
            </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="time">Hora</label>
                <input type="time" id="time" name="time" class="form-control form-control-alternative"
                placeholder="Ingresar la hora de la actividad"
                value="{{ old('time', $activities->time)}}">
            </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name">Nombre de la actividad</label>
                <select name="name" id="name" class="form-control">
                    <option value="" disabled>Seleccionar el nombre de la actividad</option>
                    <option value="Registro Civil" {{ old('name', $activities->name ?? '') == 'Registro civil' ? 'selected' : '' }}>Registro civil</option>
                    <option value="Tramitación de denuncias y demandas" {{ old('name', $activities->name ?? '') == 'Tramitación de denuncias y demandas' ? 'selected' : '' }}>Tramitación de denuncias y demandas</option>
                    <option value="Fiscalización Electoral" {{ old('name', $activities->name ?? '') == 'Fiscalización Electoral' ? 'selected' : '' }}>Fiscalización Electoral</option>
                    <option value="Otorgamiento de licencias de conducir y matriculas de vehiculos" {{ old('name', $activities->name ?? '') == 'Otorgamiento de licencias de conducir y matriculas de vehiculos' ? 'selected' : '' }}>Otorgamiento de licencias de conducir y matriculas de vehiculos</option>
                </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar la hora de la actividad"
                value="{{ old('description', $activities->description)}}">
            </select>
            </div>
        </div>
    </div>

   <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="attached_documents">Documento adjunto</label>
                <select name="attached_documents" id="attached_documents" class="form-control">
                    <option value="" disabled>Seleccione el documento adjunto</option>
                    <option value="Acta de nacimiento" {{ old('attached_documents', $activities->attached_documents ?? '') == 'Acta de nacimiento' ? 'selected' : '' }}>Acta de nacimiento</option>
                    <option value="Demanda" {{ old('attached_documents', $activities->attached_documents ?? '') == 'Demanda' ? 'selected' : '' }}>Demanda</option>
                    <option value="Acta de audiencia" {{ old('attached_documents', $activities->attached_documents ?? '') == 'Acta de audiencia' ? 'selected' : '' }}>Acta de audiencia</option>
                    <option value="Solicitud de licencia" {{ old('attached_documents', $activities->attached_documents ?? '') == 'Solicitud de licencia' ? 'selected' : '' }}>Solicitud de licecia</option>
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
                    <option value="Alcaldia" {{ old('place', $activities->place ?? '') == 'Alcaldia' ? 'selected' : '' }}>Alcaldia</option>
                    <option value="Juzgado" {{ old('place', $activities->place ?? '') == 'Juzgado' ? 'selected' : '' }}>Juzgado</option>
                    <option value="CSE" {{ old('place', $activities->place ?? '') == 'CSE' ? 'selected' : '' }}>Central departamental municipal</option>
                    <option value="Transcito" {{ old('place', $activities->place ?? '') == 'Transcito' ? 'selected' : '' }}>Transcito</option>
                </select>
            </div>
        </div>
   </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="state">Estado</label>
                <select name="state" id="state" class="form-control">
                    <option value="" disabled>Seleccione el estado de la actividad</option>
                    <option value="Pendiente" {{ old('state', $activities->state ?? '') == 'Pendiente  ' ? 'selected' : '' }}>Pendiente</option>
                    <option value="Realizada" {{ old('state', $activities->state ?? '') == 'Realizada' ? 'selected' : '' }}>Realizada</option>
                </select>
            </div>
        </div>
   </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="lawyer_id">Abogado</label>
                <select name="lawyer_id" id="lawyer_id" class="form-control">
                    @foreach($lawyers as $lawyer)
                        <option value="{{ $lawyer->id }}" {{ old('lawyer_id', $equipment->lawyer_id ?? '') == $lawyer->id ? 'selected' : '' }}>{{ $lawyer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="reports_module_id">Modulo de reportes</label>
                <select name="reports_module_id" id="reports_module_id" class="form-control">
                    @foreach($reports_modules as $reports_module)
                        <option value="{{ $reports_module->id }}" {{ old('reports_module_id', $equipment->reports_module_id ?? '') == $reports_module->id ? 'selected' : '' }}>{{ $reports_module->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>



</div>

<hr class="my-4"/>

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i>Guardar Actividad
        </button>
    </div>
</div
