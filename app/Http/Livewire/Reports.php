<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Report;


class Reports extends Component
{
    public $reports, $Location, $Equipment_Name,$category,$Serial_No
    ,$Software_Version
    ,$Manufacturer_Name
    ,$Supplier_Name
    ,$classification,
        $date_received,
        $Service_date,
        $Operation_Section,
        $Manual_Location,
        $Authorized_User,
        $equip_limit,
        $Technical_Info,
        $Grouping,
        $Frequency,
        $Executor,
        $Registrant,
        $Registrant_date,
        $Authorizer,
        $Authorized_date,
        $Declaration,
        $Declaration_date,
        $Comment,
        $Comment_Approver,
        $Comment_Approval_date,
        $Notified_By,$created_at,$updated_at,$Supplier_Contact,$Supplier_Email,$Status;

    public $isOpen = 0;
    public $allowPrint= 0;
    public $Identification_No;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $bb=session()->get('idno');
        $this->reports = Report::get()->where('Identification_No', $bb);
        return view('livewire.report');
    }
    public function print()
    {
        return redirect()->route('fieldequips');
    }
}
