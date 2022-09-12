<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\equip;
class Equipcontroller extends Controller
{
    //
    function postData(Request $req)
    {

        //$req->validate([
        //    'Identification_No'=> 'required|max:10'

          //  ]);
        return equip::all();
    }
}
