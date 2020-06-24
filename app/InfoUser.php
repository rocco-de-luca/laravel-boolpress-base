<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'avatar',
    ];
    public $timestamps = false;

    // users (one to one)
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
