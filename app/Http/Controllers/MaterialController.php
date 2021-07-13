<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{
    public function store(Request $request){
        $material = new Material();
        $material->material_name = $request->material_name;
        $material->save();
        return redirect()->route('material');
    }
    public function index(){
        $materials = DB::table('materials')->paginate(5);
        return view('material.material', compact('materials'));
    }
    public function edit($material_id){
        $material = Material::find($material_id);
        return view('material.updateMaterial', compact('material'));
    }

    public function update(Request $request, $material_id){
        $material = Material::find($material_id);
        $material->material_name = $request->material_name;
        $material->save();
        return redirect()->route('material');
    }
    public function delete($material_id){
        $material = Material::find($material_id);
        $material->delete();
        return redirect()->route('material');
    }
}
