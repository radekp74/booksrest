<?php

namespace Models;

use Eloquent;

/**
 * Class Book
 *
 * @property-read  int    $id
 * @property       string $title
 * @property       string $description {@type longText}
 * @property       string $author
 * @property       string $isbn
 * @property       string $url
 * @property       string $price {@type decimal}
 * @property       string $tatus {@type boolean}
 * @property       string $publication_date {@type year}
 * @property-read  string $created_at {@type datetime}
 * @property-read  string $updated_at {@type datetime}
 * 
 */

class Book extends Eloquent
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'books';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'author',
        'price',
        'publication_date',
        'isbn',
        'status',
        'url',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
