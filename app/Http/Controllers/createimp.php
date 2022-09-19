<?php

namespace App\Http\Controllers;

use App\Imports\FieldequipsImport;
use App\Models\Fieldequip;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class createimp extends Controller
{
    public $createimp;
    public function index(){
        $this->createimp = Fieldequip::all();
        return view('creteimp2');
    }
    public function import(Request $req){
        Excel::import(new FieldequipsImport(),$req->file('student2_file'));
        return back();
    }
}
