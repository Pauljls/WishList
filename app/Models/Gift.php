<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    //
    protected $fillable = [ 
        'user_id',
        'name',
        'description',
        'link',
        'priority',
        'photo'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
