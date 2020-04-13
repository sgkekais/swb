<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DateType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'date_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description'
    ];
}
