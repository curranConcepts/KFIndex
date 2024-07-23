<?php

namespace App\Http\Controllers;

use App\Models\Chicken;
use Illuminate\View\View;

class FlockController extends Controller
{
    /**
     * Controller  for all flock related tasks.
     */
    public function index($slug)
    {
        $chicken = Chicken::all();

        return view('flock', compact('chicken'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'breed' => 'required|string|max:255',
            'age' => 'required|integer',
            'bio' => 'nullable|string',
            'slug' => 'required|string|max:255|unique:flock,slug',
        ]);

        Chicken::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Chicken added successfully.');
    }
}
