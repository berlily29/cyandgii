<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollegeBranch;
use App\Models\ECLC_Inputs;



class CRUD extends Controller
{
    public function Dashboard() {
        return view('ECLC_Dashboard');
    }
    public function LISTMOAEP() {
        return view('ECLC_LIST_MOA_EP');
    }
    public function LISTMOA() {
        $eclc_inputs = ECLC_Inputs::all();
        $eclc_inputs->each(function ($input) {
            $input->MOA = str_replace('moa_files/', '', $input->MOA);
            $input->MOA = str_replace('.pdf', '', $input->MOA);
        });
        return view('ECLC_LIST_MOA')->with(['eclc_inputs' => $eclc_inputs]);
    }
   
    public function ViewMOA() {
        return view('ECLC_View_MOA');
    }
    public function ViewMOAEP() {
        return view('ECLC_View_MOA_EP');
    }
    public function UserLI() {
        return view('EP_UserLoggedIn');
    }
}
