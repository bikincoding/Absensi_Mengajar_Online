<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('admin.applications.index', compact('applications'));
    }

    public function create()
    {
        return view('admin.applications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'application_name' => 'required',
            'status' => 'required|boolean',
        ]);

        Application::create($request->all());

        return redirect()->route('applications.index')->with('success', 'Application created successfully.');
    }

    public function edit($id)
    {
        $application = Application::find($id);
        return view('admin.applications.edit', compact('application'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'application_name' => 'required',
            'status' => 'required|boolean',
        ]);

        $application = Application::find($id);
        $application->update($request->all());

        return redirect()->route('applications.index')->with('success', 'Application updated successfully.');
    }

    public function destroy($id)
    {
        $application = Application::find($id);
        $application->delete();

        return redirect()->route('applications.index')->with('success', 'Application deleted successfully.');
    }
}