<?php

namespace App;

class Discussion extends Model
{
    protected $fillable=["title","content","user_id","channel_id","slug"] ;
    public function user(){
        return $this->belongsTo(User::class) ;
    }
}
