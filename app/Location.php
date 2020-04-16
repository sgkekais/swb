<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'locations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'name_short',
        'note',
        'is_stadium',
        'url'
    ];

    /***********************************************
     * RELATIONSHIPS
     */

    public function dates ()
    {
        return $this->hasMany('App\Date');
    }
}
