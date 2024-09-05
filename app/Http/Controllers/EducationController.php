<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index(){
        $educations = auth()->user()->education;
        return view('education.index',compact('educations'));
    }
    
    public function show(){
        //
    }

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

        auth()->user()->education()->create($request->all());

        return redirect()->route('education.index')->with('success','Education Inserted Successfully!!!');
    }

    public function edit(Education $education){
        return view('education.edit',compact('education'));
    }

    public function update(Request $request,Education $education){
        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',
        ]);

        $education->update($request->all());

        return redirect()->route('education.index')->with('success','Education Updated Successfully!!!');
    }

    public function destroy(Education $education){
        $education->delete();
        return redirect()->route('education.index')->with('success','Education Deleted Successfully!!!');
    }
}
