<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id',
        'user_id',
        'score',
        '11m'
    ];

    /***********************************************
     * RELATIONSHIPS
     */

    public function player ()
    {
        return $this->belongsTo('App\User');
    }

    public function match ()
    {
        return $this->belongsTo('App\Match');
    }

    public function assist ()
    {
        return $this->hasOne('App\Assist');
    }
}
