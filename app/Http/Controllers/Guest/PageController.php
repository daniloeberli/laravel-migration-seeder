<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $trains = Train::all();

        $trains = Train::all()->where('orario_partenza', '>=', now());#soluzione con now() (più efficace)
        return view('home',compact('trains'));
    }
}
