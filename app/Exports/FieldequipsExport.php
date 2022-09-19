<?php

namespace App\Exports;

use App\Models\Fieldequip;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FieldequipsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fieldequip::all();
    }
    public function headings(): array
    {
        return array_keys($this->collection()->first()->toArray());
    }
}
