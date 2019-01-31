<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class IzvjestajController extends Controller
{
    function index()
    {
     $rezervacijas_data = $this->get_rezervacijas_data();
         return view('izvjestaji_pdf')->with('rezervacijas_data', $rezervacijas_data);
    }
    
     function get_rezervacijas_data()
    {
     $rezervacijas_data = DB::table('rezervacijas')
         ->limit(4)
         ->get();
     return $rezervacijas_data;
    }
}
