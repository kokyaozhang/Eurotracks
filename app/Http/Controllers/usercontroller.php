<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class usercontroller extends Controller
{
    //
    function index(){
        return DB::select("select*from equips");
    }
}
