<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    public function index()
    {
        $academicYears = AcademicYear::all();
        return view('admin.academic_years.index', compact('academicYears'));
    }

    public function create()
    {
        return view('admin.academic_years.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'academic_year_name' => 'required',
            'status' => 'required|boolean',
        ]);

        AcademicYear::create($request->all());

        return redirect()->route('academic_years.index')->with('success', 'Academic Year created successfully.');
    }

    public function edit($id)
    {
        $academicYear = AcademicYear::find($id);
        return view('admin.academic_years.edit', compact('academicYear'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'academic_year_name' => 'required',
            'status' => 'required|boolean',
        ]);

        $academicYear = AcademicYear::find($id);
        $academicYear->update($request->all());

        return redirect()->route('academic_years.index')->with('success', 'Academic Year updated successfully.');
    }

    public function destroy($id)
    {
        $academicYear = AcademicYear::find($id);
        $academicYear->delete();

        return redirect()->route('academic_years.index')->with('success', 'Academic Year deleted successfully.');
    }
}