<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable=[
        'user_id',
        'name',
        'description',
        'event_date'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
