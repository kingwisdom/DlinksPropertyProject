<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use App\Models\User;
use App\Models\Inspection;

class AdminController extends Controller
{
    function create(){
        return view('area.admin.create');
    }
    public function create_product(PropertyRequest $request){
        $user = Property::create($request->validated());
        return redirect('/create_product')->with('success', "Property successfully created.");
    }

    public function Users(){
        $user = User::all();
        return view('area.admin.users',compact('user', $user));
    }

    public function inspects(){
        $props = Inspection::all();
        return view('area.admin.inspection', compact('props', $props));
    }
    public function update_inspection(Request $request, $id){
        $props = Inspection::findOrFail($id);
        $props->inspection_date = $request->inspection_date;
        $props->inspect_url = $request->inspect_url;
        $props->inspector = $request->inspector;
        $props->isRequested = false;
        $props->update();
        return redirect('/inspects')->with('success','Data Updated Successfully');
    }
}
