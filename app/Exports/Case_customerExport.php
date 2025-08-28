<?php

namespace App\Exports;

use App\Models\Case_customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class Case_customerExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        // Cargamos relaciones customer y lawyer
        return Case_customer::with(['customer', 'lawyer'])->get();
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
