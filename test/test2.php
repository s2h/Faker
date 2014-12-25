<?php

require __DIR__ .'/../src/autoload.php';

$faker = new Faker\Generator();
$faker->addProvider(new Faker\Provider\ru_RU\Person($faker));
$faker->addProvider(new Faker\Provider\ru_RU\Address($faker));
$faker->addProvider(new Faker\Provider\ru_RU\PhoneNumber($faker));
$faker->addProvider(new Faker\Provider\ru_RU\Company($faker));
$faker->addProvider(new Faker\Provider\Lorem($faker));
$faker->addProvider(new Faker\Provider\Internet($faker));


echo $faker->phoneNumber;