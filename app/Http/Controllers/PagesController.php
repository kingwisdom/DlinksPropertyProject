<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        return view('home');
    }

    public function about() 
    {
        return view('about');
    }
    public function products() 
    {
        return view('products');
    }
    public function service() 
    {
        return view('service');
    }
    public function contact() 
    {
        return view('contact');
    }
    public function team() 
    {
        return view('team');
    }
    public function testimonial() 
    {
        return view('testimonial');
    }
}
