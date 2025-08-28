<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="customer_name">Nombre del Cliente</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del Cliente"
                value="{{ old('customer_name', $reportmodules->customer_name)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="assigned_attomey">Abogado asignado</label>
                <input type="text" id="assigned_attomey" name="assigned_attomey" class="form-control form-control-alternative"
                placeholder="Ingresar el Abogado asignado"
                value="{{ old('assigned_attomey', $reportmodules->assigned_attomey)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="status_case">Estado del caso</label>
                <input type="text" id="status_case" name="status_case" class="form-control form-control-alternative"
                placeholder="Ingresar el estado del caso"
                value="{{ old('status_case', $reportmodules->status_case)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date_writting">Fecha de redacción</label>
                <input type="date" id="date_writting" name="date_writting" class="form-control form-control-alternative"
                placeholder="Ingresar cédula de identidad"
                value="{{ old('date_writting', $reportmodules->date_writting)}}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type_report">Tipo de reporte</label>
                <select name="type_report" id="type_report" class="form-control">
                    <option value="" disabled>Seleccionar el tipo de evidencia</option>
                    <option value="Activo" {{ old('type_report', $reportmodules->type_report ?? '') == 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="Cerrado" {{ old('type_report', $reportmodules->type_report ?? '') == 'Cerrado' ? 'selected' : '' }}>Cerrado</option>
                    <option value="En proceso" {{ old('type_report', $reportmodules->type_report ?? '') == 'En proceso' ? 'selected' : '' }}>En proceso</option>
                </select>
            </div>
        </div>
    </div>


</div>

<hr class="my-4"/>


<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Reporte
        </button>
    </div>
</div>

