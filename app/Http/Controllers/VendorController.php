<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function store(Request $request){
        $vendor = new Vendor();
        $vendor->party_name = $request->party_name;
        $vendor->gst_no = $request->gst_no;
        $vendor->address = $request->address;
        $vendor->save();
        return view('vendor.vendor');
    }
}
