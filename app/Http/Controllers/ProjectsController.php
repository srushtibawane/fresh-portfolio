<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = [

            [
                'title' => 'Smart Recruit',
                'image' => 'projects/smartrecruit.png',
                'technologies' => ['Laravel', 'Tailwind'],
                'description' => 'Recruitment management system',
                'live' => 'https://smartrecruitglobal.com/',
            ],

            [
                'title' => 'Construction  website',
                'image' => 'projects/construction.png',
                'tech' => ['Html', 'CSS' , 'Bootstrap'],
                'description' => 'Responsive construction company website'
            ]

        ];

        return view('welcome', compact('projects'));
    }
}