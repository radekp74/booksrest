<?php

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Seeder;
use Models\Book;

class BookTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 * @throws BindingResolutionException
	 */
    public function run()
    {
    	Book::truncate();

		factory(Book::class, 20)->create();
    }
}
