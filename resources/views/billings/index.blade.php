@extends('layouts.panel')
@section('title', 'Facturas')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Facturas</h3>
                        <a href="{{ route('billings.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus">Nueva Factura</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Fecha de emisión</th>
                                <th scope="col">Fecha de vencimiento</th>
                                <th scope="col">Monto total</th>
                                <th scope="col">Estado de pago</th>
                                <th scope="col">Metodo de pago</th>
                                <th scope="col">Número de factura</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($billings as $billing)
                                <tr>
                                    <td>{{ $billing->issue_date }}</td>
                                    <td>{{ $billing->expiration_date }}</td>
                                    <td>{{ $billing->total_amount }}</td>
                                    <td>{{ $billing->payment_status }}</td>
                                    <td>{{ $billing->payment_method }}</td>
                                    <td>{{ $billing->invoice_number }}</td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('billings.show', $billing->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                            <i class="fas fa-eye">Mostrar</i>
                                        </a>
                                        <a href="{{ route('billings.edit', $billing->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit">Editar</i>
                                        </a>
                                        <form action="{{ route('billings.destroy', $billing->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Está seguro que desea eliminar esta factura? ¡Esta acción no se puede deshacer.!')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash">Eliminar</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $billings->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection

