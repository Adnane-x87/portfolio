<?php

namespace App\Http\Controllers;

use App\Services\userService;

class PortfolioController extends Controller
{
    public function index(userService $developerService)
    {
        $developer = $developerService->getProfile();
        return view('home', compact('developer'));
    }
}
