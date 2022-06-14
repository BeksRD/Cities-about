<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('homepage',['cities'=>City::query()->with('Gallery')->get()]);
    }
}
