<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fieldequip;

class Fieldequips extends Component
{
    public $fieldequips, $Location, $Equipment_Name,$category,$Serial_No
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
        $Notified_By;

    public $isOpen = 0;
    public $Identification_No;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->fieldequips = Fieldequip::all();
        return view('livewire.fieldequips');
    }
    public function toreport()
    {

        return redirect()->route('report');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){

        $this->Equipment_Name = '';
        $this->Location = '';
        $this->Identification_No = '';
        $this->category = '';
        $this->Serial_No = '';
        $this->Software_Version = '';
        $this->Manufacturer_Name = '';
        $this->Supplier_Name = '';
        $this->classification = '';
        $this->date_received = '';
        $this->Service_date = '';
        $this->Operation_Section = '';
        $this->Manual_Location = '';
        $this->Authorized_User = '';
        $this->equip_limit = '';
        $this->Technical_Info = '';
        $this->Grouping = '';
        $this->Frequency = '';
        $this->Executor = '';
        $this->Registrant = '';
        $this->Registrant_date = '';
        $this->Authorizer = '';
        $this->Authorized_date = '';
        $this->Declaration = '';
        $this->Declaration_date = '';
        $this->Comment = '';
        $this->Comment_Approver = '';
        $this->Comment_Approval_date = '';
        $this->Notified_By = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'Identification_No' => 'required',
            'Equipment_Name' => 'required',
        ]);

        Fieldequip::updateOrCreate(['Identification_No' => $this->Identification_No], [
            'Equipment_Name' => $this->Equipment_Name,
            'Location' => $this->Location,
            'category'=>$this->category,
            'Serial_No'=>$this->Serial_No,
'Software_Version'=>$this->Software_Version,
'Manufacturer_Name'=>$this->Manufacturer_Name,
'Supplier_Name'=>$this->Supplier_Name,
'classification'=>$this->classification,
'date_received'=>$this->date_received,
'Service_date'=>$this->Service_date,
'Operation_Section'=>$this->Operation_Section,
'Manual_Location'=>$this->Manual_Location,
'Authorized_User'=>$this->Authorized_User,
'equip_limit'=>$this->equip_limit,
'Technical_Info'=>$this->Technical_Info,
'Grouping'=>$this->Grouping,
'Frequency'=>$this->Frequency,
'Executor'=>$this->Executor,
'Registrant'=>$this->Registrant,
'Registrant_date'=>$this->Registrant_date,
'Authorizer'=>$this->Authorizer,
'Authorized_date'=>$this->Authorized_date,
'Declaration'=>$this->Declaration,
'Declaration_date'=>$this->Declaration_date,
'Comment'=>$this->Comment,
'Comment_Approver'=>$this->Comment_Approver,
'Comment_Approval_date'=>$this->Comment_Approval_date,
'Notified_By'=>$this->Notified_By,
        ]);

        session()->flash('message',
            $this->Identification_No ? 'Equipment Updated Successfully.' : 'Equipment Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($Identification_No)
    {

        $fieldequip = Fieldequip::findOrFail($Identification_No);
        $this->Identification_No = $Identification_No;
        $this->Equipment_Name = $fieldequip->Equipment_Name;
        $this->Location = $fieldequip->Location;
        $this->category = $fieldequip->category;
        $this->Serial_No = $fieldequip->Serial_No;
        $this->Software_Version = $fieldequip->Software_Version;
        $this->Manufacturer_Name = $fieldequip->Manufacturer_Name;
        $this->Supplier_Name = $fieldequip->Supplier_Name;
        $this->classification = $fieldequip->classification;
        $this->date_received = $fieldequip->date_received;
        $this->Service_date = $fieldequip->Service_date;
        $this->Operation_Section = $fieldequip->Operation_Section;
        $this->Manual_Location = $fieldequip->Manual_Location;
        $this->Authorized_User = $fieldequip->Authorized_User;
        $this->equip_limit = $fieldequip->equip_limit;
        $this->Technical_Info = $fieldequip->Technical_Info;
        $this->Grouping = $fieldequip->Grouping;
        $this->Frequency = $fieldequip->Frequency;
        $this->Executor = $fieldequip->Executor;
        $this->Registrant = $fieldequip->Registrant;
        $this->Registrant_date = $fieldequip->Registrant_date;
        $this->Authorizer = $fieldequip->Authorizer;
        $this->Authorized_date = $fieldequip->Authorized_date;
        $this->Declaration = $fieldequip->Declaration;
        $this->Declaration_date = $fieldequip->Declaration_date;
        $this->Comment = $fieldequip->Comment;
        $this->Comment_Approver = $fieldequip->Comment_Approver;
        $this->Comment_Approval_date = $fieldequip->Comment_Approval_date;
        $this->Notified_By = $fieldequip->Notified_By;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($Identification_No)
    {
        Fieldequip::find($Identification_No)->delete();
        session()->flash('message', 'Equipment Deleted Successfully.');
    }
}

