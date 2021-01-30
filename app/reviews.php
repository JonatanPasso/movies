<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    public $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'reviews';

    protected $fillable = [
        'nota',
        'movie_id'
    ];

    public function descriptMovies()
    {
        return $this->hasMany(movies::class, 'id', 'movie_id');
    }
}
