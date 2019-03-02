<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
	protected $guared = ['id'];
    protected $date = [
        'create_at',
        'update_at',
    ];
    public function tournaments()
    {
        return $this->belongsTo('App\Tournament', 'tournament_id');
    }
    public function ranks()
    {
    	return $this -> hasOne('App\Rank','round_id');
    }
}
