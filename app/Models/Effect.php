<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Effect extends Model
{
    protected $table = 'effects';
    protected $primaryKey = 'id';
    protected $fillable = ['product_id', 'name', 'slug', 'type', 'stats', 'number'];
    protected $hidden = ['created_at', 'updated_at'];

    public function allInformation()
    {
        return $this->number . ' ' . $this->name;
    }

    public function isPositive() 
    {
        return $this->number > 0 ? true : false;
    }

    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function getNumberAttribute($value)
    {
        return $value < 0 ? $value : '+' . $value;
    }
}
