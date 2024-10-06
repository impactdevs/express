<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $industries = Industry::orderBy("created_at","desc")->get();
        return view('admin.industry.index', compact('industries'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.industry.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate(Industry::createRules);

    Industry::create($validated);

    return redirect()->route('industries.index')->with('success', 'Industry created successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $industry = Industry::findOrFail($id);
    return view('admin.industry.show', compact('industry'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $industry = Industry::findOrFail($id);
    return view('admin.industry.edit', compact('industry'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $industry = Industry::findOrFail($id);

    $validated = $request->validate(Industry::updateRules);

    $industry->update($validated);

    return redirect()->route('industries.index')->with('success', 'Industry updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $industry = Industry::findOrFail($id);

    $industry->delete();

    return redirect()->route('industries.index')->with('success', 'Industry deleted successfully');
}

}
