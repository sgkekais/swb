<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'matches';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'matchweek',
        'matchweek_text',
        'team_id_home',
        'team_id_away',
        'goals_home',
        'goals_home_halftime',
        'goals_home_11m',
        'goals_home_rated',
        'goals_away',
        'goals_away_halftime',
        'goals_away_11m',
        'goals_away_rated',
        'match_details',
        'rescheduled_to_fixture_id',
        'rescheduled_by_team',
        'reschedule_reason',
        'published',
        'cancelled'
    ];
}
