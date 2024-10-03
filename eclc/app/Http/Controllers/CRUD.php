<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUD extends Controller
{
    public function Dashboard() {
        return view('ECLC_Dashboard');
    }
    public function LISTMOAEP() {
        return view('ECLC_LIST_MOA_EP');
    }
    public function LISTMOA() {
        return view('ECLC_LIST_MOA');
    }
    public function ManageMOA() {
        return view('ECLC_Manage_MOA');
    }
    public function UploadMOAEP() {
        return view('ECLC_Upload_MOA_EP');
    }
    public function UploadMOA() {
        return view('ECLC_Upload_MOA');
    }
    public function UploadNotarized() {
        return view('ECLC_Upload_Notarized_MOA');
    }
    public function ViewMOA() {
        return view('ECLC_View_MOA');
    }
}
