<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//todo 9
class Book extends Model
{
    //todo 11
    protected $fillable=['book_name','isbn_no','book_price'];

    //todo 12 php artisan make:controller BookController --resource
}
