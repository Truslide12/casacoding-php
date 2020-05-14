<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Updates extends Model
{
    //
    protected $fillable = [ 'projectName', 'currentSatus', 'upcomingUpdates', 'lastUpdate', 'expUpdate' ];

    // public function addresses()
    // {
    //     return $this->hasMany('App\Address');
    // }

    static function getFields()
    {
        return [ 'projectName', 'currentSatus', 'upcomingUpdates', 'lastUpdate', 'expUpdate'  ];
    }
}
