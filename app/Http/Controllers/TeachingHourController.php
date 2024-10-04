<?php

namespace App\Http\Controllers;

use App\Models\TeachingHour;
use Illuminate\Http\Request;

class TeachingHourController extends Controller
{
    public function index()
    {
        $teachingHours = TeachingHour::all();
        return view('admin.teaching_hours.index', compact('teachingHours'));
    }

    public function create()
    {
        return view('admin.teaching_hours.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'teaching_hour_name' => 'required',
            'status' => 'required|boolean',
        ]);

        TeachingHour::create($request->all());

        return redirect()->route('teaching_hours.index')->with('success', 'Teaching Hour created successfully.');
    }

    public function edit($id)
    {
        $teachingHour = TeachingHour::find($id);
        return view('admin.teaching_hours.edit', compact('teachingHour'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'teaching_hour_name' => 'required',
            'status' => 'required|boolean',
        ]);

        $teachingHour = TeachingHour::find($id);
        $teachingHour->update($request->all());

        return redirect()->route('teaching_hours.index')->with('success', 'Teaching Hour updated successfully.');
    }

    public function destroy($id)
    {
        $teachingHour = TeachingHour::find($id);
        $teachingHour->delete();

        return redirect()->route('teaching_hours.index')->with('success', 'Teaching Hour deleted successfully.');
    }
}