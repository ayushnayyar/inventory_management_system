<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    public function store(Request $request){
        $vendor = new Vendor();
        $vendor->party_name = $request->party_name;
        $vendor->gst_no = $request->gst_no;
        $vendor->address = $request->address;
        $vendor->save();
        return redirect()->route('vendor');
    }
    public function index(){
        $vendors = DB::table('vendors')->paginate(5);
        return view('vendor.vendor', compact('vendors'));
    }
    public function edit($vendor_id){
        $vendor = Vendor::find($vendor_id);
        return view('vendor.updateVendor', compact('vendor'));
    }
    public function update(Request $request,$vendor_id){
        $vendor = Vendor::find($vendor_id);
        $vendor->party_name = $request->party_name;
        $vendor->gst_no = $request->gst_no;
        $vendor->address = $request->address;
        $vendor->save();
        return redirect()->route('vendor');
    }

    public function delete($vendor_id){
        $vendor = Vendor::find($vendor_id);
        $vendor->delete();
        return redirect()->route('vendor');
    }

}
