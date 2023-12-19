<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Property;
use App\Models\Inspection;

class AreaController extends Controller
{
    //
    public function admin()
    {
        $props = Property::all();
        return view('area.admin_area', compact('props'));
    }
    public function my_area()
    {
        $props = Inspection::all();
        return view('area.myarea', compact('props'));
    }

    public function create_inspection(Request $request)
    {
        $task = new Inspection;
        $task->user_id = $request->user_id;
        $task->user_email = $request->user_email;
        $task->user_name = $request->user_name;
        $task->property_id = $request->property_id;
        $task->property_name = $request->property_name;
        $task->property_type = $request->property_type;
        $task->isInspected = false;
        $task->isRequested = true;
        $task->save();
        return redirect('/')->with('success', "Inspection Booked Successfully.");
    }

    public function paynow($id)
    {
        $data = Property::findOrFail($id);
        $data->user = Auth::user();
        // $data->user_name = Auth::user()->name;
        // $data->user_phone = Auth::user()->phone;

        return view('area.paynow', compact("data"));
    }
}
