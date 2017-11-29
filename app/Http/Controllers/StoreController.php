<?php

namespace App\Http\Controllers;

use Auth;
use Money;

use App\Models\Store;
use App\Models\Product;

use Illuminate\Http\Request;

class StoreController extends Controller
{
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


            $string = '';
            foreach ($product->effects as $key => $product_effect) {
                $string .= $product_effect->allInformation() . '<br>';
            }

            $user->stats->save();

            return response()->json([
                'success' => true,
                'message' => 'Produto comprado',
                'stamina' => $user->stats->stamina,
                'toast' => [
                    'heading' => $product->name . ' comprado!',
                    'bgcolor' => '#2ecc71', 
                    'message' => $string,
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

    public function show($slug)
    {
        $store = Store::where('slug', $slug)->with('products')->first();
        
        return view('cantina.index')
            ->with('store', $store);
    }
}
