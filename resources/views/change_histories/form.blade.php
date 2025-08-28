
<div class="pl-lg-4">


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date">Dia</label>
                <input type="date" id="date" name="date" class="form-control form-control-alternative"
                placeholder="Ingresar la fecha de cambio"
                value="{{ old('date', $change_histories->date)}}">
             </select>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="time">Hora</label>
                <input type="time" id="time" name="time" class="form-control form-control-alternative"
                placeholder="Ingresar la hora de cambio"
                value="{{ old('time', $change_histories->time)}}">
             </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="assigned_attorner">Abogado asignado</label>
                <input type="text" id="assigned_attorner" name="assigned_attorner" class="form-control form-control-alternative"
                placeholder="Ingresar el abogado asignado"
                value="{{ old('assigned_attorner', $change_histories->assigned_attorner)}}">
            </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="action_taken">Acción tomada</label>
                <input type="text" id="action_taken" name="action_taken" class="form-control form-control-alternative"
                placeholder="Ingresar descripción de la acción tomada"
                value="{{ old('action_taken', $change_histories->action_taken)}}">
            </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="reason_change">Razón de cambio</label>
                <input type="text" id="reason_change" name="reason_change" class="form-control form-control-alternative"
                placeholder="Ingresar descripción de la razón de cambio"
                value="{{ old('reason_change', $change_histories->reason_change)}}">
            </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="case_customer_id">Caso cliente</label>
                <select name="case_customer_id" id="case_customer_id" class="form-control">
                    @foreach($case_customers as $case_customer)
                        <option value="{{ $case_customer->id }}" {{ old('case_customer_id', $change_histories->case_customer_id ?? '') == $case_customer->id ? 'selected' : '' }}>{{ $case_customer->file_number }}</option>
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
            <i class="fas fa-save"></i> Guardar Historial de cambios
        </button>
    </div>
</div>
