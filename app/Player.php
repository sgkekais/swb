<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    protected $fillable = [
        'joined_club',
        'left_club',
        'active',
        'type',
        'note',
        'user_id'
    ];

    /***********************************************
     * RELATIONSHIPS
     */

    public function user ()
    {
        return $this->belongsTo('App\User');
    }
}
