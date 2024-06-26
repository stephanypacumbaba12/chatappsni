<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;

class UserController extends Controller
{
    /**
     * Display a listing of resumes based on search criteria.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // Retrieve search term from request input
        $searchTerm = $request->input('search');

        // Perform search query
        $resumes = Resume::where('full_name', 'like', "%$searchTerm%")
                        ->orWhere('email', 'like', "%$searchTerm%")
                        ->get();

        // Return view with search results
        return response()->view('resume.show', ['resumes' => $resumes]);
    }
}

