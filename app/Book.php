<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 * @package App
 *
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $isbn
 */

class Book extends Model
{
    protected $fillable = [
    	'title',
		'author',
		'isbn'
	];
}
