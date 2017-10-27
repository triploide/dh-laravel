<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'rating', 'awards','length','release_date', 'genre_id'];

    //protected $guarded = ['id', 'created_at', 'updated_at'];

    public function genre()
    {
    	//return $this->belongsTo(Genre::class, 'foreing_key', 'primary_key');
    	//return $this->belongsTo(Genre::class, 'genre_id', 'id');
    	return $this->belongsTo(Genre::class);
    }

    public function actors()
    {
    	return $this->belongsToMany(Actor::class);
    	//return $this->belongsToMany(Actor::class, 'actor_movie' ,'foreing_key', 'primary_key');
    }
}
