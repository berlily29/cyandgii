<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollegeBranch;
use App\Models\ECLC_Inputs;

class Manage_MOA extends Controller
{
    public function ManageMOA_Index($id) {
        $collegeBranches = CollegeBranch::all();
        $eclc_inputs = ECLC_Inputs::find($id);
        return view('ECLC_Manage_MOA')->with(['collegeBranches' => $collegeBranches, 'eclc_inputs' => $eclc_inputs]);
    }
    public function ManageEP_Index() {
        $collegeBranches = CollegeBranch::all();
        $eclc_inputs = ECLC_Inputs::find($id);
        return view('Manage_MOA_EP')->with(['collegeBranches' => $collegeBranches, 'eclc_inputs' => $eclc_inputs]);
    }

    public function Manage_Update(Request $request, $id) {

        // Find the existing record by id
    $input = ECLC_Inputs::find($id);


    if (!$input) {
        // If no record is found, redirect back with an error
        return redirect()->back()->with('error', 'Record not found!');
    }

    // Validate the incoming request
    $validatedData = $request->validate([
        'in_charge' => 'required|string|max:255',
        'college_id' => 'required|string|max:255',
        'noe' => 'required|string|max:255',
        'dop' => 'required|string|max:255',
        'MOA' => 'nullable|file|mimes:pdf',
        'Type_PI' => 'required|string|max:255',
        'noc' => 'required|string|max:255',
        'des_out' => 'required|string|max:255',
        'tar_ben' => 'required|string|max:255',
        'wwp' => 'required|string|in:With Project,Without Project',
    ]);

    // Handle file upload (if a new file is uploaded)
    if ($request->hasFile('MOA')) {
        // Delete the old file if it exists
        if ($input->MOA && file_exists(storage_path('app/public/' . $input->MOA))) {
            unlink(storage_path('app/public/' . $input->MOA)); // Delete the old file
        }

        // Handle the new file upload
        $file = $request->file('MOA');
        $originalName = $file->getClientOriginalName();
        $filePath = $file->storeAs('moa_files', $originalName, 'public');

        // Update the file path in the validated data
        $validatedData['MOA'] = $filePath;
    }

    // Update the record in the database with the new data
    $input->update($validatedData);

    // Redirect or return a response
    return redirect()->back()->with('success', 'Data Updated successfully!');

    }
}
