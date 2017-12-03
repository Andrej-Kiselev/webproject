<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Publication extends Model
{
    public $fillable = [
        'user_id',
        'publishing_houses_id',
        'name_of_publication',
        'annotation',
        'number_of_publication',
        'year',
        'number_of_pages',
        'created_at',
        'updated_at'
    ];


    public function users()
    {
        return $this->belongsToMany('App\User', 'user_publications')->withTimestamps();
    }

    public static function getTablePublicationUsers()
    {
        $TablePublicationUsers = DB::select(
            'select publications.id, publications.name_of_publication, users.surname, users.name, users.patronymic, user_publications.user_id'
            .' from publications '
            .'join user_publications on user_publications.publication_id = publications.id '
            .'join users on users.id = user_publications.user_id');
        return $TablePublicationUsers;
    }
}
