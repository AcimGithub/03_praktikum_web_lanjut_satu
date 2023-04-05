<?php

namespace App\Http\Controllers;

use App\Models\Ages;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $age = Ages::all();
        return view('home', ['ages' => $age]);
    }
}
