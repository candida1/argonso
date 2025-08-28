
<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="file_number">Número de Expediente</label>
                <input type="num" id="file_number" name="file_number" class="form-control form-control-alternative"
                placeholder="Ingresar el número del expediente"
                value="{{ old('file_number', $case_customers->file_number)}}">
            </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type_case">Tipo de caso</label>
                <select name="type_case" id="type_case" class="form-control">
                    <option value="" disabled>Seleccionar el tipo de caso</option>
                    <option value="Civil" {{ old('type_case', $case_customers->type_case ?? '') == 'Civil' ? 'selected' : '' }}>Civil</option>
                    <option value="Penal" {{ old('type_case', $case_customers->type_case ?? '') == 'Penal' ? 'selected' : '' }}>Penal</option>
                    <option value="Electoral" {{ old('type_case', $case_customers->type_case ?? '') == 'Electoral' ? 'selected' : '' }}>Electoral</option>
                    <option value=" Administrativo" {{ old('type_case', $case_customers->type_case ?? '') == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="opening_date">Fecha de apertura</label>
                <input type="date" id="opening_date" name="opening_date" class="form-control form-control-alternative"
                placeholder="Ingresar la fecha de apertura"
                value="{{ old('opening_date', $case_customers->opening_date)}}">
            </select>
            </div>
        </div>
    </div>

   <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="status_case">Estado del caso</label>
                <select name="status_case" id="status_case" class="form-control">
                    <option value="" disabled>Seleccione el estado del caso </option>
                    <option value="Activo" {{ old('status_case', $case_customers->status_case ?? '') == 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="En proceso" {{ old('status_case', $case_customers->status_case ?? '') == 'En proceso' ? 'selected' : '' }}>En proceso</option>
                    <option value="Cerrado" {{ old('status_case', $case_customers->status_case ?? '') == 'Cerrado' ? 'selected' : '' }}>Cerrado</option>
                    <option value="Apelación" {{ old('status_case', $case_customers->status_case ?? '') == 'Apelación' ? 'selected' : '' }}>Apelación</option>
                </select>
            </div>
        </div>
   </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar la descripción del caso"
                value="{{ old('description', $case_customers->description)}}">
            </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="priority">Prioridad</label>
                <select name="priority" id="priority" class="form-control">
                    <option value="" disabled>Seleccione el Lugar</option>
                    <option value="Alta" {{ old('priority', $case_customers->priority ?? '') == 'Alta' ? 'selected' : '' }}>Alta</option>
                    <option value="Media" {{ old('priority', $case_customers->priority ?? '') == 'Media' ? 'selected' : '' }}>Media</option>
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



</div>

<hr class="my-4"/>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Caso
        </button>
    </div>
</div

