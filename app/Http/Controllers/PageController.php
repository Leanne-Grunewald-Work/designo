<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DesignProject;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }
    
    public function web() {
        $projects = DesignProject::latest()->where('type', 'web')->get();
        return view('design.web', compact('projects'));
    }
    
    public function app() {
        $projects = DesignProject::where('type', 'app')->get();
        return view('design.app', compact('projects'));
    }
    
    public function graphic() {
        $projects = DesignProject::where('type', 'graphic')->get();
        return view('design.graphic', compact('projects'));
    }

    public function company()
    {
        return view('pages.company');
    }

    public function locations()
    {
        return view('pages.locations');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    
}
