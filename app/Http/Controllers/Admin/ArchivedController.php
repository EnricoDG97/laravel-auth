<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ArchivedController extends Controller
{
    public function index () {
        $projects = Project::onlyTrashed()->get();

        return view('admin.archived', compact('projects'));
    }
}
