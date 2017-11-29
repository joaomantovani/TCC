<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function index()
    {
        //Pega os ultimos 10 rendimentos do usuario onde a descrição seja "rendimento"
        if (isset(Auth::user()->account))
            $incomes = Auth::user()->account->incomes()->orderBy('id', 'desc')->where('description', 'rendimento')->take(15)->get();
        else
            $incomes = null;

        return view('account.index')
            ->with('incomes', $incomes);
    }

    public function deposit(Request $request)
    {
        $amount = (int)$request->amount;

        Auth::user()->wallet->money -= $amount;
        Auth::user()->wallet->save();

        Auth::user()->account->money += $amount;
        Auth::user()->account->save();

        return response()->json([
            'success' => true,
            'wallet' => Auth::user()->wallet->money,
            'account' => Auth::user()->account->money,
            'message' => 'Dinheiro depositado',
            'toast' => [
                'heading' => 'Dinheiro depositado',
                'bgcolor' => '#2ecc71', 
                'message' => 'Você depositou '. $amount .' dinheiros',
            ],
        ]);
    }

    public function withdraw(Request $request)
    {
        \Log::debug('withdraw');

        $amount = (int)$request->amount;

        Auth::user()->wallet->money += $amount;
        Auth::user()->wallet->save();

        Auth::user()->account->money -= $amount;
        Auth::user()->account->save();

        return response()->json([
            'success' => true,
            'message' => 'Dinheiro sacado',
            'wallet' => Auth::user()->wallet->money,
            'account' => Auth::user()->account->money,
            'toast' => [
                'heading' => 'Dinheiro sacado',
                'bgcolor' => '#2ecc71', 
                'message' => 'Você sacou X dinheiros',
            ],
        ]);
    }
}
