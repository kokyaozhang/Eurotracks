<?php

namespace App\Imports;

use App\Models\FieldEquip;
use Maatwebsite\Excel\Concerns\ToModel;

class FieldequipImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new FieldEquip([
            "Identification_No" => $row['Identification_No'],
            "Equipment_Name" => $row['Equipment_Name'],
        ]);
    }
}
