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
        $vendors = Vendor::all();
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

    public function report(Request $request){
        $party_name = $request->party_name;
        $orders = DB::table('orders')->select('*')->where('party_name', $party_name)->get();
        $yarnReturned = DB::table('orders')->where('party_name',$party_name)->sum('return_stock');
        $currentStock = DB::table('orders')->where('party_name',$party_name)->sum('current_stock');
        $short = DB::table('orders')->where('party_name',$party_name)->sum('short_stock');
        $recieved = DB::table('orders')->where('party_name',$party_name)->sum('recieved_stock');
        $dispatched = DB::table('orders')->where('party_name',$party_name)->sum('dispatched');
        $beamFloor = DB::table('orders')->where('party_name',$party_name)->sum('beam_floor');
        $beamMachine = DB::table('orders')->where('party_name',$party_name)->sum('beam_machine');
        $fabricStock = DB::table('orders')->where('party_name',$party_name)->sum('fabric_stock');
        return view('report', compact('orders','yarnReturned','currentStock','short', 'recieved','dispatched','beamFloor', 'beamMachine','fabricStock'));
    }
}
