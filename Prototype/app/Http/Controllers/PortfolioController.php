<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DeveloperService; 

class PortfolioController extends Controller
{
    
    public function home(DeveloperService $developerService)
    {
        
        $developerData = $developerService->getProfileData();

     
        return view('home', ['developer' => $developerData]);
    }

    public function projects()
    {
        return view('projects');
    }
    public function contact(DeveloperService $developerService)
    {
        $developerData = $developerService->getProfileData();
        return view('contact', ['email' => $developerData['email']]);
    }
}