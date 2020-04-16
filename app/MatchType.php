<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'match_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        ''
    ];

    /***********************************************
     * RELATIONSHIPS
     */

    public function matches ()
    {
        return $this->hasMany('App\Match');
    }
}
