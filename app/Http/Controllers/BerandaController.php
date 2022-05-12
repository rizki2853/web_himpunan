<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        return view('Home', [
            'leaders' => User::where('jabatan', 'ketua himpunan')->get()
        ]);
    }
}
