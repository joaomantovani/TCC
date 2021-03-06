<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Deposita uma quantia X de dinheiro no banco
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Saca uma quantia X de dinheiro do banco
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
