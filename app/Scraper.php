<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scraper extends Model
{
    protected $fillable = [
        'title', 'category', 'address', 'phone','email',
    ];
}
