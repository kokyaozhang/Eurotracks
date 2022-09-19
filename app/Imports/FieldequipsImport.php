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
'date_received'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_received'])->format('Y-m-d'),
'Service_date'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Service_date'])->format('Y-m-d'),
'Operation_Section'=>$row['Operation_Section'],
'Manual_Location'=>$row['Manual_Location'],
'Authorized_User'=>$row['Authorized_User'],
'equip_limit'=>$row['equip_limit'],
'Technical_Info'=>$row['Technical_Info'],
'Grouping'=>$row['Grouping'],
'Frequency'=>$row['Frequency'],
'Executor'=>$row['Executor'],
'Registrant'=>$row['Registrant'],
'Registrant_date'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Registrant_date'])->format('Y-m-d'),
'Authorizer'=>$row['Authorizer'],
'Authorized_date'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Authorized_date'])->format('Y-m-d'),
'Declaration'=>$row['Declaration'],
'Declaration_date'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Declaration_date'])->format('Y-m-d'),
'Comment'=>$row['Comment'],
'Comment_Approver'=>$row['Comment_Approver'],
'Comment_Approval_date'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Comment_Approval_date'])->format('Y-m-d'),
'Notified_By'=>$row['Notified_By'],
            'Status'=>$row['Status']
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
