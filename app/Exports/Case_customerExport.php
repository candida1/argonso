<?php

namespace App\Exports;

use App\Models\Case_customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Case_customerExport implements FromCollection, WithMapping, WithHeadings
{
    protected $customerId;
    protected $status;
    protected $typeCase;

    // Recibimos filtros opcionales
    public function __construct($customerId = null, $status = null, $typeCase = null)
    {
        $this->customerId = $customerId;
        $this->status = $status;
        $this->typeCase = $typeCase;
    }

    public function collection()
    {
        $query = Case_customer::with(['customer','lawyer']);

        if ($this->customerId) {
            $query->where('customer_id', $this->customerId);
        }

        if ($this->status) {
            $query->where('status_case', $this->status);
        }

        if ($this->typeCase) {
            $query->where('type_case', $this->typeCase);
        }

        return $query->get();
    }

    public function map($case): array
    {
        return [
            $case->file_number,
            $case->type_case,
            $case->opening_date,
            $case->status_case,
            $case->description,
            $case->priority,
            $case->customer?->name ?? '',
            $case->lawyer?->name ?? '',
        ];
    }

    public function headings(): array
    {
        return [
            'Número de expediente',
            'Tipo de caso',
            'Fecha de apertura',
            'Estado del caso',
            'Descripción',
            'Prioridad',
            'Cliente',
            'Abogado'
        ];
    }
}
