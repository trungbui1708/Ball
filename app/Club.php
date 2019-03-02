<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    
    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];
    protected $table = "clubs";
    public function rank()
    {
        return $this->belongsTo('App\Rank', 'rank_id');
    }

    public function matchTeam()
    {
    	return $this->belongsTo('App\MatchTeam', 'match_team_id');
    }
    public function role()
    {
        return $this->belongstoMany('App\Role', 'user_roles', 'user_id', 'role_id')->withPivot('id');
    }
}
