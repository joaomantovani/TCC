<?php

namespace App\Http\Controllers;

use Auth;
use Money;

use App\Models\Store;
use App\Models\Product;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        $user = Auth::user();
        
        //Se o jogador tiver dinheiro
        if ( $user->wallet->money > $product->price ) {

            //Diminui o dinheiro
            $user->wallet->money -= $product->price;
            $user->wallet->save();

            foreach ($product->effects as $key => $effect) {
                switch ($effect->type) {
                    case 'tensao':
                        $user->stats->pression += $effect->number;
                        break;

                    case 'stamina':
                        $user->stats->stamina += $effect->number;
                        break;
                }
            }
            $user->stats->save();

            return response()->json([
                'success' => true,
                'message' => 'Produto comprado',
                'stamina' => $user->stats->stamina,
                'toast' => [
                    'heading' => $product->name . ' comprado!',
                    'bgcolor' => '#2ecc71', 
                    'message' => 'Você comprou e recebeu +50 de stamina',
                ],
                'money' => $user->wallet->getMoney(),
                'tensao' => $user->stats->pression,
            ]);
        }

        //SE naõ tiver dinheiro
        else
            return response()->json([
                'success' => false,
                'message' => 'Produto não comprado',
                'stamina' => $user->stats->stamina,
                'reward' => $request->input('action.reward'),
                'toast' => [
                    'heading' => 'Dinheiro insuficiente',
                    'bgcolor' => '#2ecc71', 
                    'message' => 'Você não tem o dinheiro necessário para comprar o ' . $product->name,
                ],
                'money' => $user->wallet->money,
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $store = Store::where('slug', $slug)->with('products')->first();
        
        return view('cantina.index')
            ->with('store', $store);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
}
