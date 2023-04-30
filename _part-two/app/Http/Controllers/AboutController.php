<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('About');
    }
}
