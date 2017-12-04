<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublishingHouse extends Model
{
    public $fillable = [
        'name',
    ];
    public $table = 'publishing_houses';


}
