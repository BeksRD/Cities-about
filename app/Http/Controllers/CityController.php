<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function create(){}
    public function store(){}
    public function delete(){}
    public function show(int $id){
        return view('city',[
            'city'=>City::query()->where('id',$id)->with(['Gallery', 'Reviews','User'])->first()
        ]);
//        $city = City::query()->where('id',$id)->with(['Gallery', 'Reviews','User'])->first();
//        dd($city->reviews);
    }
    public function update(){}
}
