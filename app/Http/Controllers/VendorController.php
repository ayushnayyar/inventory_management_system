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
        $totalYarnReturned = 0;
        $totalInStock = 0;
        foreach($orders as $order){
            $totalYarnReturned = $totalYarnReturned + $order->dispatched;
            $totalInStock = $totalInStock + $order->current_stock;
        }
        return view('vendor.report', compact('orders','totalYarnReturned','totalInStock'));
    }
}
