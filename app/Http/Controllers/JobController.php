<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Adjusted the namespace assuming it's 'Models' instead of 'Http\Models'

class JobController extends Controller
{
    public function index()
    {
        return view('job.job');
    }

    public function details()
    {
        $users = User::all(); // Fetch all users
        return view('job.user', compact('users'));
    }
}
