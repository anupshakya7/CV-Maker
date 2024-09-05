<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function create()
    {
        return view('education.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',
        ]);

        $detail = new Education();
        $detail->school_name = $request->input('school_name');
        $detail->school_location = $request->input('school_location');
        $detail->degree = $request->input('degree');
        $detail->field_of_study = $request->input('field_of_study');
        $detail->graduation_start_date = $request->input('graduation_start_date');
        $detail->graduation_end_date = $request->input('graduation_end_date');
        $detail->user_id = auth()->user()->id;
        $detail->save();

        return redirect()->route('education.create');
    }
}
