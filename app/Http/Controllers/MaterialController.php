<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function store(Request $request){
        $material = new Material();
        $material->material_name = $request->material_name;
        $material->material_type = $request->material_type;
        $material->save();
        return redirect()->route('material');
    }
    public function index(){
        $materials = Material::all();
        return view('material.material', compact('materials'));
    }
}
