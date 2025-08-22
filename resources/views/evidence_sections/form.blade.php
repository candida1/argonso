<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type_evidence">Tipo de evidencia</label>
                <select name="type_evidence" id="type_evidence" class="form-control">
                    <option value="" disabled>Seleccionar el tipo de evidencia</option>
                    <option value="Documentales" {{ old('type_evidence', $evidence_sections->type_evidence ?? '') == 'Documentales' ? 'selected' : '' }}>Documentales</option>
                    <option value="Digitales" {{ old('type_evidence', $evidence_sections->type_evidence ?? '') == 'Digitales' ? 'selected' : '' }}>Digitales</option>
                    <option value="Fisicas" {{ old('type_evidence', $evidence_sections->type_evidence ?? '') == 'Fisicas' ? 'selected' : '' }}>Fisicas</option>
                    <option value=" Testimoniales" {{ old('type_evidence', $evidence_sections->type_evidence ?? '') == 'Testimoniales' ? 'selected' : '' }}>Testimoniales</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar la descripción del documento"
                value="{{ old('description', $evidence_sections->description)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="registration">Fecha de registro</label>
                <input type="date" id="registration" name="registration" class="form-control form-control-alternative"
                placeholder="Ingresar la fecha de registro del documento"
                value="{{ old('registration', $evidence_sections->registration)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="state_evidence">Estado de evidencia</label>
                <select name="state_evidence" id="state_evidence" class="form-control">
                    <option value="" disabled>Seleccionar el estado de evidencia</option>
                    <option value="En custodia" {{ old('state_evidence', $evidence_sections->state_evidence ?? '') == 'En custodia' ? 'selected' : '' }}>En custodia</option>
                    <option value="Entregado al tribunal" {{ old('state_evidence', $evidence_sections->state_evidence ?? '') == 'Entregado al tribunal' ? 'selected' : '' }}>Entregado al tribunal</option>
                    <option value="Archivada" {{ old('state_evidence', $evidence_sections->state_evidence ?? '') == 'Archivada' ? 'selected' : '' }}>Archivada</option>
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
            <i class="fas fa-save"></i>Guardar Evidencia
        </button>
    </div>
</div>

