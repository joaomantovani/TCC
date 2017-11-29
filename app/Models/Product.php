<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'slug', 'price', 'type', 'image', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];

    public function stores()
    {
        return $this->belongsToMany('App\Models\Store');
    }
    public function effects()
    {
        return $this->hasMany('App\Models\Effect');
    }

    public function getImageAttribute($value)
    {
        return !empty($value) ? $value : 'http://placehold.it/250x250';
    }
}
