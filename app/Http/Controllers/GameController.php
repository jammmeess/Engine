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
    public function placePurchase(Request $request)
    {
        if (Session::has('user_id')) {
            $purchase = new Purchase;
            $purchase->user_id = Session::get('user_id');
            $purchase->save();

            $u = User::query()
                ->select('*')
                ->where("user_id", "=", Session::get("user_id"))
                ->get()
                ->first();

            $g = Game::query()
                ->select('game_id', 'game_name', 'price', 'image_1')
                ->get();

            for ($i = 0; $i < count($g); $i++) {
                $purchased = $request->input('purchase_' . str($g[$i]->game_id));
                if ($purchased > 0) {
                    $pg = new PurchasedGame();
                    $pg->purchase_id = $purchase->purchase_id;
                    $pg->game_id = $g[$i]->game_id;
                    $pg->save();
                }
            }
        }

        return view('purchase_complete', compact('purchase', 'u'));
    }

    public function makePurchase(Request $request)
    {
        if (Session::has('user_id')) {
            $u = User::query()
                ->select('*')
                ->where("user_id", "=", Session::get("user_id"))
                ->get()
                ->first();

            $g = Game::query()
                ->select('game_id', 'game_name', 'price', 'image_1')
                ->get();
            $sg = array();
            $total = 0;
            for ($i = 0; $i < count($g); $i++) {
                if (intval($request->input('purchase_' . str($g[$i]->game_id))) > 0) {
                    $total += $g[$i]->price * $request->input('purchase_' . str($g[$i]->game_id));
                }
                array_push($sg, $request->input('purchase_' . str($g[$i]->game_id)));
            }
        }
        return view('usercart', compact('g', 'sg', 'total', 'request', 'u'))->with('Success!', 'Game has been added!');
    }


    // STORE//

    public function showStore()
    {
        $game_list = Game::query()
            ->select(DB::raw('*'))
            ->get();


        return view('store', compact('game_list'));
    }

    public function showUserStore()
    {
        if (Session::has('user_id')) {
            $u = User::query()
                ->select('*')
                ->where("user_id", "=", Session::get("user_id"))
                ->get()
                ->first();

            $game_list = Game::query()
                ->select(DB::raw('*'))
                ->paginate(6);


            return view('userstore', compact('game_list', 'u'));
        } else {
            abort(401);
        }
    }
}
