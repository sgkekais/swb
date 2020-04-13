<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teams';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'name_short',
        'name_code',
        'logo_url',
        'owner',
        'ah'
    ];

    /***********************************************
     * RELATIONSHIPS
     */

    public function matchesHome ()
    {
        return $this->hasMany(Match::class, 'team_id_home');
    }

    public function matchesAway ()
    {
        return $this->hasMany(Match::class, 'team_id_away');
    }

    public function matches ()
    {
        return $this->matchesHome()->merge($this->matchesAway());
    }
}
