<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="issue_date">Fecha de Emisión</label>
                <input type="date" id="isuue_date" name="issue_date" class="form-control form-control-alternative"
                placeholder="Ingresar la fecha de emisión"
                value="{{ old('issue_date', $billings->issue_date)}}">
            </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="expiration_date">Fecha de expiración</label>
                <input type="date" id="expiration_date" name="expiration_date" class="form-control form-control-alternative"
                placeholder="Ingresar la fecha de expiración"
                value="{{ old('expiration_date', $billings->expiration_date)}}">
            </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="total_amount">Cantidad Total</label>
                <input type="num" id="total_amount" name="total_amount" class="form-control form-control-alternative"
                placeholder="Ingresar la cantidad total"
                value="{{ old('total_amount', $billings->total_amount)}}">
            </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="payment_status">Estado de pago</label>
                <select name="payment_status" id="payment_status" class="form-control">
                    <option value="" disabled>Seleccionar el estado de pago </option>
                    <option value="Pendiente" {{ old('payment_status', $billings->payment_status ?? '') == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                    <option value="Pagado" {{ old('payment_status', $billings->payment_status ?? '') == 'Pagado' ? 'selected' : '' }}>Pagado</option>
                    <option value="En proceso" {{ old('payment_status', $billings->payment_status ?? '') == 'En proceso' ? 'selected' : '' }}>En proceso</option>
                </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="payment_method">Metodo de pago</label>
                <select name="payment_method" id="payment_method" class="form-control">
                    <option value="" disabled>Seleccionar el metodo de pago </option>
                    <option value="Efectivo" {{ old('payment_method', $billings->payment_method ?? '') == 'Efectivo' ? 'selected' : '' }}>Efectivo</option>
                    <option value="Tarjeta" {{ old('payment_method', $billings->payment_method ?? '') == 'Tarjeta' ? 'selected' : '' }}>Tarjeta</option>
                </select>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="invoice_number">Número de factura</label>
                <input type="num" id="invoice_number" name="invoice_number" class="form-control form-control-alternative"
                placeholder="Ingresar el número de factura"
                value="{{ old('invoice_number', $billings->invoice_number)}}">
            </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="case_customer_id">Cliente</label>
                <select name="case_customer_id" id="case_customer_id" class="form-control">
                    @foreach($case_customers as $case_customer)
                        <option value="{{ $case_customer->id }}" {{ old('case_customer_id', $equipment->case_customer_id ?? '') == $case_customer->id ? 'selected' : '' }}>{{ $case_customer->name }}</option>
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
            <i class="fas fa-save"></i>Guardar Factura
        </button>
    </div>
</div>
