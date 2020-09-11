<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\User;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $content = $faker->paragraph($nbSentences = 10, $variableNbSentences = true);
    $user_role_id = DB::table('roles')->where('name','employer')->first()->id;
    $userIdRandom = User::where('role_id', $user_role_id)->inRandomOrder()->first()->id;
    $priority = [1,2,3];
    $days = [1,10,30];

    return [
        'title' => $title,
        'content' =>$content,
        'user_id' => $userIdRandom,
        'prices' => $priority[array_rand($priority)] * $days[array_rand($days)],
        'priority' => $priority[array_rand($priority)],
        'days' => $days[array_rand($days)],
    ];
});
