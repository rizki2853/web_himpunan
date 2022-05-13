<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredivisiRequest;
use App\Http\Requests\UpdatedivisiRequest;
use App\Models\divisi;

class DivisiController extends Controller
{
    public function index()
    {
        return view('divisi', [
            'divisis' => Divisi::where('divisi_name', '!=', 'inti')->get()
        ]);
    }
}
