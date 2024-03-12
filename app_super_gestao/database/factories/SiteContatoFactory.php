<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContato;
use Faker\Generator as Faker;

$factory->define(SiteContato::class, function (Faker $faker) {
    // O professor recomendou em caso do laravel 8 utilizar da seguinte forma:
    /*
        return [
        'nome' => $this->faker->name,
        'telefone' => $this->faker->tollFreePhoneNumber,
        'email'=> $this->faker->unique()->email,
        'motivo_contato' => $this->faker->numberBetween(1,3),
        'mensagem' => $this->faker->text(200)
    ];
    */
    return [
        'nome' => $faker->name,
        'telefone' => $faker->tollFreePhoneNumber,
        'email'=> $faker->unique()->email,
        'motivo_contato' => $faker->numberBetween(1,3),
        'mensagem' => $faker->text(200)
    ];
});
