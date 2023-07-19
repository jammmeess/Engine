<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\PurchasedGame;
use App\Models\Game;
use App\Models\User;
use DB;
use Session;

class PurchaseController extends Controller
{
    // ADD TO CART//
    public function placePurchase(Request $request)
    {
        $purchase = new Purchase();
        $purchase->user_id = Session::get('user_id');
        $purchase->save();

        $g = Game::query()
            ->select('game_id', 'name', 'price', 'image')
            ->where('stock', '>', '0')
            ->get();
        for ($i = 0; $i < count($g); $i++) {
            $purchased = $request->input('purchase_' . (string)$g[$i]->game_id);
            if ($purchased > 0) {
                $pg = new PurchasedGame();
                $pg->purchase_id = $purchase->purchase_id;
                $pg->game_id = $g[$i]->game_id;
                $pg->save();
            }
        }

        return view('userstore', compact('purchase'))->with('success', 'Profile picture successfully updated!');
    }

    public function showCart()
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

            return view('usercart', compact('games', 'u'));
        } else {
            abort(401);
        }
    }
}
