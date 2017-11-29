<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $table = 'avatars';
    protected $primaryKey = 'id';
    protected $fillable = ['slug', 'path'];

    public function getAvatar()
    {
        return asset($this->path);
    }

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function stores()
    {
        return $this->hasMany('App\Models\Store');
    }
}
