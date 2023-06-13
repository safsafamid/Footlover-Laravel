<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::get();
        return view('front.team.index', [
            'teams' => $teams,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function details(Request $request)
    {
        try {

            $team = Team::where(['slug'=>Request('slug')])->first();
            if (!empty($team)) {

                return view('front.team.details',['team'=>$team]);
            } else {
                return redirect()->back()->with('error','Le produit que vous recherchez est manquant, Veuillez contacter l\'administrateur');
            }
        
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Le produit que vous recherchez est manquant, Veuillez contacter l\'administrateur');
        }
        
    }
}
