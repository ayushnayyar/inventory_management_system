<?php

namespace App\Http\Controllers;

use App\Models\Mrn;
use Illuminate\Http\Request;

class MrnController extends Controller
{
    public function index()
    {
        $mrns = Mrn::all();
        return view('mrns.mrn', compact('mrns'));
    }
}
