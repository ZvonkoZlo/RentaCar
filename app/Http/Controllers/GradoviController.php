<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Gradovi;


class GradoviController extends Controller
{

public function index(){

    $gradovi = Gradovi::all();
 
    return view('cart.index', compact('gradovi'));
}
}
