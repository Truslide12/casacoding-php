<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $fillable = [ 'name', 'type', 'url', 'github', 'img', 'video', 'description', 'keywords', 'order' ];

    // public function addresses()
    // {
    //     return $this->hasMany('App\Address');
    // }

    static function getFields()
    {
        return [ 'name', 'type', 'url', 'github', 'img', 'video', 'description', 'keywords', 'order' ];
    }
}
