<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deals extends Model
{

	protected $fillable = [
        'heading', 'detail', 'vendor','image','link'
    ];

     protected $table = 'deals';
}
