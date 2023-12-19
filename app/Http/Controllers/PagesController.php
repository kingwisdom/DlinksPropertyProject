<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PagesController extends Controller
{
    public function index()
    {
        $lands = Property::where('type', 'Land')->get();
        $cascass = Property::where('type', 'Cascass House')->get();
        $complete = Property::where('type', 'Complete House')->get();
        return view('home', compact('lands', 'cascass', 'complete'));
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
