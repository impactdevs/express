<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Create the Admin
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Create the corresponding User (polymorphic relationship)
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'userable_id' => $admin->id,
            'userable_type' => Admin::class, // Polymorphic type
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        return view('admin.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id . '|unique:users,email,' . $admin->user->id,
            'password' => 'nullable|string|min:6',
        ]);

        // Update the Admin
        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $admin->password,
        ]);

        // Update the corresponding User if needed
        $user = $admin->user;
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            // Password remains unchanged if not provided
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        // Delete the corresponding User
        $admin->user()->delete(); // Delete the User associated with the Admin

        // Delete the Admin
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully.');
    }
}
