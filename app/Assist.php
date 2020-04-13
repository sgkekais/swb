<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assist extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'goal_id',
        'user_id',
    ];
}
