<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function store(int $id, Request $request){
        $validated = $request->validate([
            'review' => 'required',
        ]);
        Review::create([
           'content'=>$request->review,
            'city_id'=>$id,
            'user_id'=>auth()->id()
        ]);
        return redirect()->to("/city/$id");
    }
}
