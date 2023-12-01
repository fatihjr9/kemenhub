<?php

namespace App\Http\Controllers;

use App\Models\dataPengujian;
use Illuminate\Http\Request;

class DataPengujianController extends Controller
{
    public function index()
    {
        $ujiData = dataPengujian::all();
        return view('dashboard', compact('data'));
    }
    public function create()
    {
        return view('add-data');
    }
    public function store(Request $request)
    {
        
    }
}
