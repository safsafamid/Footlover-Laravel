<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::get();
        return view('front.player.index', [
            'players' => $players,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function details(Request $request)
    {
        try {

            $player = Player::where(['slug'=>Request('slug')])->first();
            if (!empty($player)) {

                return view('front.player.details',['player'=>$player]);
            } else {
                return redirect()->back()->with('error','Le produit que vous recherchez est manquant, Veuillez contacter l\'administrateur');
            }
        
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Le produit que vous recherchez est manquant, Veuillez contacter l\'administrateur');
        }
        
    }

}
