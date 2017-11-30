<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public $fillable = [
        'user_id',
        'publishing_houses_id',
        'name',
        'annotation',
        'number_of_publication',
        'year',
        'number_of_pages',
        'created_at',
        'updated_at'
    ];
}
