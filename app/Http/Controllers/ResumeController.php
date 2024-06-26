<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Resume;
use App\Models\User;

class ResumeController extends Controller
{
    public function index(): View
    {
        $employers = User::where('user_type', 'employer')->get();
         return view('resume.show', [
        'resumes' => Resume::all(),
        'users' => $employers
    ]);
    }

    public function create(): View
    {
        return view('resume.add');
    }

    public function edit(string $id): View
    {
        return view('resume.edit', [
            'resume' => Resume::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'university' => 'required|string',
            'degree' => 'required|string',
            'edu_start_date' => 'required|string',
            'edu_end_date' => 'required|string',
            'company' => 'required|string',
            'position' => 'required|string',
            'work_start_date' => 'required|string',
            'work_end_date' => 'required|string',
            'responsibilities' => 'required|string',
        ]);

        $resume = new Resume($request->all());
        $resume->email = $request->input('email'); 

        $resume->save();
        return redirect('/resumes')->with('status', "Resume Data Has Been inserted");
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'university' => 'required|string',
            'degree' => 'required|string',
            'edu_start_date' => 'required|string',
            'edu_end_date' => 'required|string',
            'company' => 'required|string',
            'position' => 'required|string',
            'work_start_date' => 'required|string',
            'work_end_date' => 'required|string',
            'responsibilities' => 'required|string',
        ]);

        $resume = Resume::find($id);
        $resume->update($request->all());

        return redirect("/resumes")
            ->with('status', 'Resume ' . $request['email'] . ' was updated successfully.');
    }

    public function destroy($id)
    {
        $resume = Resume::find($id);
        $resume->delete();
        return redirect("/resumes")
            ->with('success', 'Resume ' . $id . ' info deleted successfully');
    }
}
