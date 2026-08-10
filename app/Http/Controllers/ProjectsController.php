<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = [

            [
                'title' => 'Smart Recruit (Professional Project)',
                'image' => 'projects/smartrecruit.png',
                'technologies' => ['Laravel', 'Tailwind'],
                'description' => 'Recruitment management system',
                'live' => 'https://smartrecruitglobal.com/',
            ],

            
            [
                'title' => 'Employee Management System (Personal Project)',
                'image' => 'projects/ems.png',
                'technologies' => ['Html', 'CSS' , 'Tailwind CSS','Javascript', 'Laravel', 'MySQL'],
                'description' => 'Developing an employee management system with authentication, CRUD operations, and responsive design.',
                'github' => 'https://github.com/srushtibawane/employee-management-system.git'
            ],

            [
                'title' => 'E-commerce Website (Personal Project)',
                'image' => 'projects/e-commerce.png',
                'technologies' => ['Html', 'CSS' , 'Bootstrap', 'Javascript', 'Laravel', 'MySQL'],
                'description' => 'Developing an e-commerce website with product catalog, shopping cart, and checkout functionality.',
                'github' => 'https://github.com/srushtibawane/ecommerce-website.git'
            ],

            [
                'title' => 'Construction  website (Personal Project)',
                'image' => 'projects/construction.png',
                'technologies' => ['Html', 'CSS' , 'Bootstrap'],
                'description' => 'Responsive construction company website'
            ],




        ];

        return view('welcome', compact('projects'));
    }
}