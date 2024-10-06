<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\SubIndustry;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class SubIndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all sub-industries
        $subIndustries = SubIndustry::with('industry')->get();
        $industries = Industry::all();
        return view('admin.sub_industries.index', compact('subIndustries', 'industries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get industries for the dropdown
        $industries = Industry::all();
        return view('admin.sub_industries.create', compact('industries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(SubIndustry::createRules);

        try {
            // Create the sub-industry
            SubIndustry::create($request->all());
            return redirect()->route('sub-industries.index')->with('success', 'Sub-Industry created successfully.');
        } catch (QueryException $e) {
            return redirect()->route('sub-industries.index')->with('error', 'Failed to create Sub-Industry: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subIndustry = SubIndustry::with('industry')->findOrFail($id);
        return view('sub_industries.show', compact('subIndustry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subIndustry = SubIndustry::findOrFail($id);
        $industries = Industry::all();
        return view('sub_industries.edit', compact('subIndustry', 'industries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(SubIndustry::updateRules);

        try {
            $subIndustry = SubIndustry::findOrFail($id);
            $subIndustry->update($request->all());
            return redirect()->route('sub-industries.index')->with('success', 'Sub-Industry updated successfully.');
        } catch (QueryException $e) {
            return redirect()->route('sub-industries.index')->with('error', 'Failed to update Sub-Industry: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subIndustry = SubIndustry::findOrFail($id);
        $subIndustry->delete();

        return redirect()->route('sub-industries.index')->with('success', 'Sub-Industry deleted successfully.');
    }
}
