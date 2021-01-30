<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    public $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'movies';

    protected $fillable = [
        'name',
        'year',
        'sinopse',
        'duration',
        'password',
        'directors',
        'writers',
        'stars',
        'rating',
        'image'
    ];

    protected $hidden = [];

}
