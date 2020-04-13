<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id',
        'user_id',
        'color',
        'note'
    ];

    /***********************************************
     * RELATIONSHIPS
     */

    public function player ()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function match ()
    {
        return $this->hasOne(Match::class, 'match_id');
    }
}
