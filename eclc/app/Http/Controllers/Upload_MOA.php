<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ECLC_Inputs;
use App\Models\CollegeBranch;



class Upload_MOA extends Controller
{

    public function UploadMOAEP_Index() {
        $collegeBranches = CollegeBranch::all();
        return view('ECLC_Upload_MOA_EP')->with(['collegeBranches' => $collegeBranches]);
    }
    
    public function UploadMOA_Index() {
        $collegeBranches = CollegeBranch::all();
        return view('ECLC_Upload_MOA')->with(['collegeBranches' => $collegeBranches]);
    }
    public function UploadNotarized_Index() {
        return view('ECLC_Upload_Notarized_MOA');
    }
    
    public function UploadMOAEP(Request $request)
    {


        $validatedData = $request->validate([
            'in_charge' => 'required|string|max:255',
            'college_id' => 'required|string|max:255',
            'noe' => 'required|string|max:255',
            'dop' => 'required|string|max:255',
            'MOA' => 'nullable|file|mimes:pdf', 
            'Type_PI' => 'required|string|max:255',
            'date_not' => date('Y-m-d H:i:s', time()),
            'expiry_date' => date('Y-m-d H:i:s', time()),
            'noc' => 'required|string|max:255',
            'des_out' => 'required|string|max:255',
            'tar_ben' => 'required|string|max:255',
            'wwp' => 'required|string|in:With Project,Without Project',

        ]);

        $validatedData['user_id'] = 25512312;
        $validatedData['pr_id'] = 2551231222;
        $validatedData['Status'] = 'Pending';
        $validatedData['date_not'] = date('Y-m-d H:i:s', time());
        $validatedData['expiry_date'] = date('Y-m-d H:i:s', time());
        $validatedData['E_NE'] = 'not expired';


         // Handle file upload
    if ($request->hasFile('MOA')) {
        // Store the file in the public directory or storage/app/public
        $file = $request->file('MOA');
        $originalName = $file->getClientOriginalName();        
        $filePath = $request->file('MOA')->storeAs('moa_files', $originalName, 'public');

        $fileUrl = asset('storage/' . $filePath);

        $validatedData['MOA'] = $filePath;
        
    }

       

        ECLC_Inputs::create($validatedData);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Data stored successfully!');
    }
}
