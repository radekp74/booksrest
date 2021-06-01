<?php

/* @var $factory Factory */

use Illuminate\Database\Eloquent\Factory;
use Models\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {

    return [
        'title' 		=> $faker->title,
		'author'		=> $faker->name,
		'isbn'	        => 123123123,
        'price'		    => 22.99,
        'description'	=> 'description description description ',
        'url'		    => 'http://www.someurl.com/page',
        'publication_date'		=> 2021,
        'status'		=> 1,
        'author'		=> 'Barbarrossaa',
    ];
});
