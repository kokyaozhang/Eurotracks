<?php

namespace App\Http\Livewire;

use App\Exports\FieldequipsExport;
use App\Imports\FieldequipImport;
use App\Imports\FieldequipsImport;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Laravel\Jetstream\Jetstream;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\Component;
use App\Models\Teamuser;
use App\Models\User;

use Laravel\Jetstream\HasTeams;



class Teamusers extends Component
{
    public $users, $Location, $Equipment_Name,$category,$Serial_No
    ,$Software_Version
    ,$Manufacturer_Name
    ,$Supplier_Name,$Supplier_Contact,$Supplier_Email
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
        $Notified_By,
        $Status,$type,$team;
public $tu_id, $team_id, $user_id,$role,$username,$email;
    public $currentPage;
    public $isOpen = 0;
    public $isexpOpen = 0;
    public $isimpOpen = 0;
    public $Identification_No;
    public $segment,$slander;



    /**
     * The attributes that are mass assignable.
     *
     *
     * @var array
     */
    public function render(Request $request)
    {
//get team id
        $data = Teamuser::join('teams', 'teams.id', '=', 'team_user.team_id')
            ->join('users', 'users.id', '=', 'team_user.user_id')
            ->get(['users.name as username','teams.name','users.email','team_user.role','team_user.id','team_user.user_id','team_user.team_id']);

        $slander[]=1;
        return view('livewire.editusers',compact('data'));
    }

    public function returnseg(Request $request)
    {

        return $request->segment(2);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function toexport()
    {
        return redirect()->route('export');
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
    public function createimp()
    {

        $this->openimpModal();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function createexp()
    {

        $this->openexpModal();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openexpModal()
    {
        $this->isexpOpen = true;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeexpModal()
    {
        $this->isexpOpen = false;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openimpModal()
    {
        $this->isimpOpen = true;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeimpModal()
    {
        $this->isimpOpen = false;
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
        $this->Supplier_Contact = '';
        $this->Supplier_Email = '';
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
        $this->Status = '';

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function fimport(Request $req){
        Excel::import(new FieldequipsImport(),$req->file('field_file'));
        return back()->withErrors(['msg' => 'The Message']);

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function export()
    {
        return Excel::download(new FieldequipsExport, 'users.xlsx');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store(Request $request)
    {
        /*$this->validate([
            'username' => 'required',
            'email' => 'required',
            'team' => 'required',
            'role' => 'required',
        ]);*/
        if($this->team_id='Fieldwork'){

             $oo= 1;
            }elseif($this->team_id='Labs') {
            $oo = 2;
        }
        Teamuser::where('id' , $this->tu_id)->update([
                'team_id' => $oo,
            'role' => $this->role,
        ]);
        Log::critical('Usertu updated: '.$this->tu_id);
        Log::critical('User updated: '.$this->user_id);
        User::where('id' , $this->user_id)->update([
            'name' => $this->username,
            'email' => $this->email,
        ]);

        $this->closeModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id,$user_id,$team_id)
    {

        $user = Teamuser::findOrFail($id);
        $real = User::findOrFail($user_id);
        $third = Team::findOrFail($team_id);
        $this->username = $real->name;
        $this->email = $real->email;
        $this->team = $third->name;
        $this->role = $user->role;
        $this->tu_id = $id;
        $this->user_id = $user_id;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($uid,$user_id)
    {
        Teamuser::find($uid)->delete();
        User::find($user_id)->delete();
        session()->flash('message', 'User Deleted Successfully.');

    }
    public function download(){
        $path=public_path('excel/excelformatprinted.xlsx');
        return response()->download($path);
    }
}
