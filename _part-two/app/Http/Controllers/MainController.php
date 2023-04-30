<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('Main');
    }
}
