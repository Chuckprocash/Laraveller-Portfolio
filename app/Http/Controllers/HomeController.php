<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {
        $skills = Skill::all();
        $projects = Project::all();
        $projects->load('skill');
        return Inertia::render('Home', compact('skills' , 'projects'));
    }
}
