<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tournaments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'position'
    ];
}
