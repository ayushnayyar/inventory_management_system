<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Mrn;
use App\Models\Vendor;
use Illuminate\Http\Request;

class MrnController extends Controller
{
    public function index()
    {
        $mrns = Mrn::all();
        $vendors = Vendor::all();
        $materials = Material::all();
        return view('mrns.mrn', compact('mrns','vendors','materials'));
    }

    public function store(Request $request){
        $mrn = new Mrn();
        $mrn->mrn_no = $request->mrn_no;
        $mrn->item_name = $request->item_name;
        $mrn->vendor_name = $request->vendor_name;
        $mrn->description = $request->description;
        $mrn->invoice_no = $request->invoice_no;
        $mrn->quantity = $request->quantity;
        $mrn->save();
        return redirect()->route('mrn');
    }

    public function addMrnYarn(){
        $vendors = Vendor::all();
        $materials = Material::all();
        return view('mrns.mrnYarn', compact('vendors','materials'));
    }
}
