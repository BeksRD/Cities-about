<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Gallery;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        User::factory(10)->create();
//        City::factory(10)->create();
//        Gallery::factory(15)->create();
//        Review::factory(20)->create();
        $user = User::find(1);
        $user->role = 'admin';
        return $user->save();
    }
}
