<?php

namespace App\Imports;

use PhpOffice\PhpSpreadsheet\Shared;
use App\Models\Fieldequip;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class FieldequipsImport implements ToCollection,  WithHeadingRow,WithValidation
{
    /**
    * @param Collection $collection
    *
    *
    */

    public function collection(Collection $rows)
    {



        foreach($rows as $row){
            $reg_date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Registrant_date']);
            $dt_rc = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Registrant_date']);
            $sc_dt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Registrant_date']);
            $ac_dt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Registrant_date']);
            $dc_dt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Registrant_date']);
            $ca_dt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Registrant_date']);
            $data=[
            "Identification_No" => $row['Identification_No'],
            "Equipment_Name" => $row['Equipment_Name'],
            'Location' => $row['Location'],
            'category'=>$row['category'],
            'Serial_No'=>$row['Serial_No'],
'Software_Version'=>$row['Software_Version'],
'Manufacturer_Name'=>$row['Manufacturer_Name'],
'Supplier_Name'=>$row['Supplier_Name'],
            'Supplier_Contact'=>$row['Supplier_Contact'],
            'Supplier_Email'=>$row['Supplier_Email'],
'classification'=>$row['classification'],
'date_received'=> date_timestamp_get($dt_rc) ? $dt_rc->format('Y-m-d') : null,
'Service_date'=> date_timestamp_get($sc_dt) ? $reg_date->format('Y-m-d') : null,
'Operation_Section'=>$row['Operation_Section'],
'Manual_Location'=>$row['Manual_Location'],
'Authorized_User'=>$row['Authorized_User'],
'equip_limit'=>$row['equip_limit'],
'Technical_Info'=>$row['Technical_Info'],
'Grouping'=>$row['Grouping'],
'Frequency'=>$row['Frequency'],
'Executor'=>$row['Executor'],
'Registrant'=>$row['Registrant'],
                'Registrant_date'=> date_timestamp_get($reg_date) ? $reg_date->format('Y-m-d') : null,
'Authorizer'=>$row['Authorizer'],
'Authorized_date'=> date_timestamp_get($ac_dt) ? $ac_dt->format('Y-m-d') : null,
'Declaration'=>$row['Declaration'],
'Declaration_date'=> date_timestamp_get($dc_dt) ? $dc_dt->format('Y-m-d') : null,
'Comment'=>$row['Comment'],
'Comment_Approver'=>$row['Comment_Approver'],
'Comment_Approval_date'=> date_timestamp_get($ca_dt) ? $ca_dt->format('Y-m-d') : null,
'Notified_By'=>$row['Notified_By'],
            'Status'=>$row['Status'],
                'type'=>$row['type']
            ];

            Fieldequip::create($data);

        }
    }
    public function rules(): array
    {
        return[
            'Identification_No'=>'required',
            'Equipment_Name'=>'required',

        ];

    }

}
