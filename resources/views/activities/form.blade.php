
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
                <label for="name_activity">Nombre de la actividad</label>
                <select name="name_activity" id="name_activity" class="form-control">
                    <option value="" disabled>Seleccionar el nombre de la actividad</option>
                    <option value="Registro Civil" {{ old('name_activity', $activities->name_activity ?? '') == 'Registro civil' ? 'selected' : '' }}>Registro civil</option>
                    <option value="Tramitación de denuncias y demandas" {{ old('name_activity', $activities->name_activity ?? '') == 'Tramitación de denuncias y demandas' ? 'selected' : '' }}>Tramitación de denuncias y demandas</option>
                    <option value="Fiscalización Electoral" {{ old('name_activity', $activities->name_activity ?? '') == 'Fiscalización Electoral' ? 'selected' : '' }}>Fiscalización Electoral</option>
                    <option value="Otorgamiento de licencias de conducir y matriculas de vehiculos" {{ old('name_activity', $activities->name_activity ?? '') == 'Otorgamiento de licencias de conducir y matriculas de vehiculos' ? 'selected' : '' }}>Otorgamiento de licencias de conducir y matriculas de vehiculos</option>
                </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar la descripcion de la actividad"
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
                <label class="form-control-label" for="type_activity">Tipo de actividad</label>
                <input type="text" id="type_activity" name="type_activity" class="form-control form-control-alternative"
                placeholder="Ingresar el tipo de actividad"
                value="{{ old('type_activity', $activities->type_activity)}}">
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
                        <option value="{{ $lawyer->id }}" {{ old('lawyer_id', $activities->lawyer_id ?? '') == $lawyer->id ? 'selected' : '' }}>{{ $lawyer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="reportmodule_id">Modulo de reportes</label>
                <select name="reportmodule_id" id="reportmodule_id" class="form-control">
                    @foreach($reportmodules as $reportmodule)
                        <option value="{{ $reportmodule->id }}" {{ old('reportmodule_id', $activities->reportmodule_id ?? '') == $reportmodule->id ? 'selected' : '' }}>{{ $reportmodule->customer_name }}</option>
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
            <i class="fas fa-save"></i> Guardar Actividad
        </button>
    </div>
</div
