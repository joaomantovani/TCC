<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    protected $primaryKey = 'id';
    protected $fillable = [];

    public function getLink()
    {
        return url('loja/' . $this->slug);
    }
    
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    public function avatar()
    {
        return $this->belongsTo('App\Models\Avatar');
    }
}
