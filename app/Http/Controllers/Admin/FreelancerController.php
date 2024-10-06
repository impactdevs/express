<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the freelancers.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get all users who are freelancers
        $freelancers = User::where('userable_type', 'App\Models\Freelancer')->get();

        // Return the index view with the freelancers data
        return view('admin.freelancers.index', compact('freelancers'));
    }

    /**
     * Display the specified freelancer.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function show(string $id)
    {
        // Find the freelancer by the user ID with their associated details
        $freelancer = User::with('freelancer')->findOrFail($id);

        // Return the show view with the freelancer data
        return view('admin.freelancers.show', compact('freelancer'));
    }
}
