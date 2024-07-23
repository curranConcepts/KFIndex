<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }

    public function flock(Request $request)
    {
        return view('pages.flock');
    }

    public function page($slug, Request $request)
    {
        switch ($slug) {
            case 'crops':
                return view('pages.crops');
                break;
            case 'ornamentals':
                return view('pages.ornamentals');
                break;
            case 'friends':
                return view('pages.friends');
                break;
            default:
                abort(404);
                break;
        }
    }
}
