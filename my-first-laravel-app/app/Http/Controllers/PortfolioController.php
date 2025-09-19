<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Bagaan Sammy',

            'title' => 'website',

            'email' => 'sammybagaan00@gmail.com',

            'phone' => '+639708304430',

            'location' => 'blk13,lot38,area3,phase2,HASA-HASA,Malaboncity',

            'bio' => 'Passionate web developer with 5+ years of experience meron nakong sariling building',

            'profile_image' => 'https://lh3.googleusercontent.com/a/ACg8ocLgfwX8zhrZ3ujqSBtwLgOGXQOJhIEMOW2hT0YcWNcOsVeC8LByEA=s288-c-no',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [], // Project data
            'school project' => 'portfolio',
            'teacher' => 'Romark Cacho',
            'subject' => 'WEBSYS',
            'start time' => '7:30AM',
            'end time' => '10:30AM',

            'experience' => [], // Experience data
            'title' => 'Frontend Developer',
            'company' => 'Creative Web Designs',
            'location' => 'Remote',
            'start_date' => '2017-04-15',
            'end_date' =>'2019-05-30',
            'description' => 'Built responsive websites and user interfaces for clients across various industries. Collaborated closely with UX/UI designers to ensure optimal user experiences.',
            'technologies' => 'HTML, CSS, JavaScript, Sass, Bootstrap',

            'education' => [], // Education data
            'degree' => 'Collage',
            'school' => 'Global Reciprocal',
            'location' => 'Caloocan city',
            'start date' => '2024-04',
            'end_date' => '2025-16',
            'age' => '22',      
            
            'social_links' => [] // Social media links 


        ];

        return view('portfolio.index', compact('portfolio'));

    }

}