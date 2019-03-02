<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
	protected $guared = ['id'];
    protected $date = [
        'create_at',
        'update_at',
    ];
    public function rounds()
    {
        return $this->hasMany('App\Round', 'tournament_id');
    }

}
