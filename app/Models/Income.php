<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $table = 'yields';
    protected $primaryKey = 'id';
    protected $fillable = ['old_money', 'new_money', 'description'];
    
    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }

    public function sameMoney()
    {
        return $this->old_money == $this->new_money ? true : false;
    }

    public function moreMoney()
    {
        return $this->old_money < $this->new_money ? true : false;
    }

    public function lessMoney()
    {
        return $this->old_money > $this->new_money ? true : false;
    }
}
