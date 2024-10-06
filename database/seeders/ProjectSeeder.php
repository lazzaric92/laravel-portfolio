<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Auth;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $user = User::all()->where('user_id', Auth::id())->pluck('id');

        $test = new Project();
        $test->user_id = $user[0];
        $test->title = $faker->slug(2);
        $test->github = $faker->url();
        $test->date = $faker->dateTimeThisYear();
        $test->description = $faker->realText(500);
        $test->is_visible = true;
        $test->save();
    }
}
