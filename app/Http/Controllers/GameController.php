<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\PurchasedGame;
use App\Models\Game;
use App\Models\User;
use DB;
use Session;


class GameController extends Controller
{
    // PLACING THE PURCHASE//
    public function placePurchase(Request $request)
    {
        $purchase = new Purchase;
        $purchase->user_id = Session::get('user_id');
        $purchase->save();

        $g = Game::query()
            ->select('game_id', 'game_name', 'price', 'image')
            ->where('game_id', '>', '0')
            ->get();

        for ($i = 0; $i < count($g); $i++) {
            $purchased = $request->input('purchase_' . str($g[$i]->game_id));
            if ($purchased > 0) {
                $pg = new PurchasedGame();
                $pg->purchase_id = $purchase->purchase_id;
                $pg->game_id = $g[$i]->game_id;
                $pg->quantity = $purchased;
                $pg->save();
            }
        }
        return view('usercart', compact('purchase', ''));
    }

    // SHOWING THE CART//
    // public function showUserCart()
    // {
    //     if (Session::has('user_id')) {
    //         $cartGames = Session::get('cart', []);
    //         $total = 0;


    //         $g = Game::query()
    //             ->select('game_id', 'game_name', 'price', 'image_1')
    //             ->where('game_id', '>', '0')
    //             ->get();


    //         $u = User::query()
    //             ->select('*')
    //             ->where(
    //                 "user_id",
    //                 "=",
    //                 Session::get("user_id")
    //             )
    //             ->first();

    //         foreach ($cartGames as $cartItem) {
    //             $total += $cartItem['game']->price * $cartItem['quantity'];
    //         }
    //         return view('usercart', compact('cartGames', 'total', 'g', 'u'));
    //     } else {
    //         abort(401);
    //     }
    // }


    // FOR PURCHASING//
    public function makePurchase(Request $request)
    {
        if (Session::has('user_id')) {
            $g = Game::query()
                ->select('game_id', 'game_name', 'price', 'image_1')
                ->where('game_id', '>', '0')
                ->get();

            $u = User::query()
                ->select('*')
                ->where("user_id", "=", Session::get("user_id"))
                ->get()
                ->first();

            $cartGames = array();
            $total = 0;

            for ($i = 0; $i < count($g); $i++) {
                if (intval($request->input('purchase_' . str($g[$i]->game_id)))) {
                    $total += $g[$i]->price->input('purchase_' . str($g[$i]->game_id));
                }
                array_push($cartGames, $request->input('purchase_' . str($g[$i]->game_id)));
            }
            // return redirect('/userstore')->with(compact('cartGames', 'total', 'g', 'u'))->with('success', 'Game Added to Cart');
            return view('usercart', compact('g', 'u', 'cartGames', 'total'))->with('Success!', 'Game has been added!');
        }
    }


    // STORE//

    public function showStore()
    {
        $games = Game::query()
            ->select(DB::raw('*'))
            ->where('game_id', '>', '0')
            ->get();

        return view('store', compact('games'));
    }

    public function showUserStore()
    {
        if (Session::has('user_id')) {
            $u = User::query()
                ->select('*')
                ->where("user_id", "=", Session::get("user_id"))
                ->get()
                ->first();

            $games = Game::query()
                ->select(DB::raw('*'))
                ->where('game_id', '>', '0')
                ->get();

            return view('userstore', compact('games', 'u'));
        } else {
            abort(401);
        }
    }
}
