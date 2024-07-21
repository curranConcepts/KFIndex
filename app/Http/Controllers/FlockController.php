<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class FlockController extends Controller
{
    /**
     * Controller  for all flock related tasks.
     */
    public function index()
    {
        return view('flock');
    }
}
