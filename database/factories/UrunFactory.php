<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Urun;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Urun::class, function (Faker $faker) {


    return [
    	'UrunAdi' => $faker ->sentence(3),
        'Aciklama' =>$faker->paragraph(5),
        'Fiyat' => mt_rand(100,1000)/10,
        'Stok' => mt_rand(10,100)
        //
    ];
});
