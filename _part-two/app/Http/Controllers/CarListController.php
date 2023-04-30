<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarListController extends Controller
{
    public function index()
    {
        return view('index', compact('car'));
    }

    public function bruh()
    {
        $car = Car::where('Color', 'blue')->get();
        foreach($car as $cars){
            dump($cars->id);
        }
    }


    
}
