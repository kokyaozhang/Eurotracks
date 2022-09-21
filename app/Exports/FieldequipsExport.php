<?php

namespace App\Exports;

use App\Models\Fieldequip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FieldequipsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {


        $previous = url()->previous();
        Log::info($previous);
        $lastChar = substr($previous, -1);
        switch ($lastChar){
            case 1:
                $matchThese = ['type' => '1'];
                return Fieldequip::where($matchThese)->get();


            case 2:
                $matchThese = ['type' => '2'];
                return Fieldequip::where($matchThese)->get();

            case 3:
                $matchThese = ['type' => '3'];
                return Fieldequip::where($matchThese)->get();
            case 4:
                $matchThese = ['type' => '4'];
                return Fieldequip::where($matchThese)->get();
            case 5:
                $matchThese = ['type' => '5'];
                return Fieldequip::where($matchThese)->get();
            case 6:
                $matchThese = ['type' => '6'];
                return Fieldequip::where($matchThese)->get();
            default:

                return Fieldequip::all();
        }

    }
    public function headings(): array
    {
        return array_keys($this->collection()->first()->toArray());
    }
}
