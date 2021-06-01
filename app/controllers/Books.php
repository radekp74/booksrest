<?php

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Luracast\Restler\RestException;
use Illuminate\Support\Facades\Config;
use Models\Book;

/**
 * Class Books
 * @package Controllers
 *
 */
class Books
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return LengthAwarePaginator
	 */
    public function index()
    {
    	return Book::paginate(Config::get('app.paginate'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id Id {@min 1}
     *
     * @return Book
	 *
	 * @throws 404
     */
     public function get($id)
     {
		 if(!$book = Book::find($id))
		 {
			 throw new RestException(404, 'book not found');
		 }
		 return $book;
     }

	/**
	 * Creating a new resource.
	 *
	 * @param Book $book
	 *
	 * @return Book
	 *
	 * @throws 400
	 */
    public function post(Book $book)
    {
		if(!$book->save())
		{
			throw new RestException(400, 'book not saved');
		}

		return $book;
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id Id {@min 1}
	 *
	 * @return array
	 *
	 * @throws 404
	 */
    public function delete($id)
    {
		if(!$book = Book::find($id)){
			throw new RestException(404, 'book not found');
		}
		$book->delete();
		return ['success'=>true];
    }
}
