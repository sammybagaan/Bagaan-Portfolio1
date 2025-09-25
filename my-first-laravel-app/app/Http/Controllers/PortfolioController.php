<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'COLLEGE OF COMPUTER STUDIES',

            'title' => 'Full Stack Web Developer',

            'email' => 'Sammybagaan00@gmail.com',

            'phone' => '+639942792656',

            'location' => 'PH, Manila',

            'bio' => 'Passionate web developer with 5+ years of experience...',

            'profile_image' => 'https://lh3.googleusercontent.com/a/ACg8ocLgfwX8zhrZ3ujqSBtwLgOGXQOJhIEMOW2hT0YcWNcOsVeC8LByEA=s288-c-no',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [], // Project data

            'experience' => [], // Experience data

            'education' => [], // Education data

            'social_links' => [] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}