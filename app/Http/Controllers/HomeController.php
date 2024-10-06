<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request){
        try {
            //code... I
            $categories = Industry::orderBy('created_at', 'desc')->limit(10)->get();

            return view('index', compact('categories'));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
