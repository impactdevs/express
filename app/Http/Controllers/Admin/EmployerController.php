<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the employers.
     */
    public function index()
    {
        // Get all users who are employers
        $employers = User::where('userable_type', 'App\Models\Employer')->get();

        return view('admin.employers.index', compact('employers'));
    }

    /**
     * Display the specified employer.
     */
    public function show(string $id)
    {
        // Find the employer by the user ID
        $employer = User::with('employer')->findOrFail($id);

        return view('admin.employers.show', compact('employer'));
    }
}
