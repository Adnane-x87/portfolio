<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService; 
use App\Services\ProjectService;  

class PortfolioController extends Controller
{
    public function home(DeveloperService $developerService)
    {
        $profile = $developerService->getProfile();
        return view('home', compact('profile'));
    }

    public function projects(ProjectService $projectService)
    {
        $projects = $projectService->getAll();
        return view('projects.index', compact('projects'));
    }

    public function projectDetail(ProjectService $projectService, $id)
    {
        $project = $projectService->getById((int) $id);
        if (!$project) abort(404);

        return view('projects.show', compact('project'));
    }

    public function about(DeveloperService $developerService)
    {
        $profile = $developerService->getProfile();
        return view('about', compact('profile'));
    }
}
