<?php

use App\Entities\User;
use App\Entities\Article;

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'isAdmin' => false,
    ];
});

$factory->define(Article::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => implode(' ', $faker->words(3)),
        'content' => $faker->paragraph(3),
        'locale' => Article::LOCALE_ID,
        'tags' => 'fun,awesome'        
    ];
});
