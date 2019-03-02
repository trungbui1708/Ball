<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $guared = ['id'];
    protected $date = [
        'create_at',
        'update_at',
    ];
    public function clubs()
    {
        return $this->hasMany('App\Club', 'rank_id');
    }
    public function rounds()
    {
        return $this->belongsTo('App\Round','round_id')
    }
}
