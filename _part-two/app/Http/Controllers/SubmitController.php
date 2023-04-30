<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class SubmitController extends Controller{

public function submit(){
    $a = $_GET['num1'];
    $b = $_GET['num2'];

    $carList = [
        [
            'Name' => 'name',
            'Model' => 'name',
            'Data' => 'name',   
            'Color' => 'name',
        ],
        [
            'Name' => '$a',
            'Model' => '$b',
            'Data' => 'data',
            'Color' => 'color',
        ],
    ];
    Car::create([
        'Name' => $a,
        'Model' => $b,
        'Data' => 'name',
        'Color' => 'name',
    ]);
    }
}