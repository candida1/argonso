@extends('layouts.panel')
@section('title', 'Factura/Mostrar')

@section('content')
    <div class="col-xl-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-newspaper">Ver Facturas</i>
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('billings.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información de las facturas</h6>
                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="issue_date" class="form-control-label">
                                    <i class="fas fa-user">Fecha de emisión</i>
                                </label>
                                <p>{{ $billings->issue_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="expiration_date" class="form-control-label">
                                    <i class="fas fa-user">Fecha de vencimiento</i>
                                </label>
                                <p>{{ $billings->expiration_date }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="total_amount" class="form-control-label">
                                    <i class="fas fa-user">Monto Total</i>
                                </label>
                                <p>{{ $billings->total_amount }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="payment_status" class="form-control-label">
                                    <i class="fas fa-user">Estado de pago</i>
                                </label>
                                <p>{{ $billings->payment_status }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="payment_method" class="form-control-label">
                                    <i class="fas fa-user">Metodo de pago</i>
                                </label>
                                <p>{{ $billings->payment_method }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="invoice_number" class="form-control-label">
                                    <i class="fas fa-user">Número de factura</i>
                                </label>
                                <p>{{ $billings->invoice_number }}</p>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="case_customer" class="form-control-label">
                                    <i class="fas fa-user">Caso cliente</i>
                                </label>
                                <p>{{ $billings->case_customer->file_number }}</p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>

@endsection

