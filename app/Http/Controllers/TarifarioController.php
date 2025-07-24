<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\TarifarioImport;
use Illuminate\Http\Request;

class TarifarioController extends Controller
{
    public function import(Request $request)
    {
        // dd($request->all());
        // Excel::import(new TarifarioImport, 'users.xlsx');

        // return redirect('/')->with('success', 'All good!');
    }
}
