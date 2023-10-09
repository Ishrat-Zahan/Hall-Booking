<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        return Inertia::render('About');
        
    }
    public function contact(){
        return Inertia::render('Contact');

    }
  
}
