<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function cleaning(){
        return view('frontend.property-single');
    }
    public function deepCleaning(){
        return view('frontend.blog-single');
    }
    public function documentationService(){
        return view('frontend.agents-grid');
    }
    public function rentService(){
        return view('frontend.agent-single');
    }
}
