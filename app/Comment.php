<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function news()
    {
        return $this->belongsTo('App\News', 'news_id');
    }
}
