<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Money;

use App\Models\Income;

class Account extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'money'];
    protected $juros_bancarios = 0.01;
    
    public function calcJuros($value='')
    {
        $old_money = $this->money;

        $this->money += $this->money * 0.01;
        $new_money = $this->money;
        
        //Calcula o juros
        \Log::debug('old_money:' . $old_money);

        $yield = new Income([
            'old_money' => $old_money, 
            'new_money' => $new_money, 
            'description' => 'rendimento'
        ]);

        $this->incomes()->save($yield);
        $this->save();
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function incomes()
    {
        return $this->hasMany('App\Models\Income');
    }

    public function getConvertedMoney()
    {
        return $this->money >= 1000 ? Money::convert($this->money) : round($this->money);
    }
}
