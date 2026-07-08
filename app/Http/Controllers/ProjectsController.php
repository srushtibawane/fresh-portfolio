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
                'technologies' => ['Html', 'CSS' , 'Bootstrap'],
                'description' => 'Responsive construction company website'
            ],

            [
                'title' => 'Employee Management System',
                'image' => 'projects/ems.png',
                'technologies' => ['Html', 'CSS' , 'Tailwind CSS','Javascript', 'Laravel', 'MySQL'],
                'description' => 'Developing an employee management system with authentication, CRUD operations, and responsive design.',
                'github' => 'https://github.com/srushtibawane/employee-management-system.git'
            ]



        ];

        return view('welcome', compact('projects'));
    }
}