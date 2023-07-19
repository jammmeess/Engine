<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use DB;
use Session;

use Illuminate\Http\Request;

class GameController extends Controller
{
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
