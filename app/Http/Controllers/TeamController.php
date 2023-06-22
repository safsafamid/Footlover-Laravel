<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\League;
use App\Models\Stadium;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::get();
        return view('front.team.index', [
            'teams' => $teams,
        ]);
    }

    public function adminIndex(){
        $teams = Team::get();
        return view('back.team.index', [
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

    public function adminCreate(){
        $stadiums = Stadium::get();
        $leagues = League::get();
        $countrys = Country::get();
        return view('back.team.create', compact('stadiums', 'leagues', 'countrys'));
    }

    public function adminStore()
    {
        // dd(Request());
        try {

            DB::transaction(function () {

                Team::create([
                    'name' => Request('name'),
                    'short_code' => Request('shortCode'),
                    'display_name' => Request('displayName'),
                    'manager' => Request('manager'),
                    'founded' => Request('founded'),
                    'slug' => strtolower(Request('name')) . '_' . strtolower(Request('shortCode')),
                    'logo_path' => Request('logo'),
                    'stadium_id' => Request('stadium_id'),
                    'league_id' => Request('league_id'),
                    'country_id' => Request('country_id'),
                ]);
            });

            DB::transactionLevel();
            DB::commit();

            session()->flash('success', "Création avec succès");
            return redirect()->view('dashboard');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'une erreur s\'est produite, veuillez contacter l\'administrateur');
        }

    }

    public function adminEdit(Request $request)
    {
        try {
            $leagues = League::get();
            $countrys = Country::get();
            $stadiums = Stadium::get();

            $team = Team::where(['slug' => Request('slug')])->first();
            if (!empty($team)) {

                return view('back.team.edit', ['team' => $team,'leagues' => $leagues,'countrys' => $countrys,'stadiums'=>$stadiums]);
            } else {
                return redirect()->back()->with('error', 'Le produit que vous recherchez est manquant, Veuillez contacter l\'administrateur');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Le produit que vous recherchez est manquant, Veuillez contacter l\'administrateur');
        }
    }

    public function adminUpdate(){
        try {
            
            DB::transaction(function () {
                $team = Team::where(['slug' => Request('slug')])->first();

                $team->update([
                    'name' => Request('name'),
                    'short_code' => Request('shortCode'),
                    'display_name' => Request('displayName'),
                    'manager' => Request('manager'),
                    'founded' => Request('founded'),
                    'slug' => strtolower(Request('name')) . '_' . strtolower(Request('shortCode')),
                    'logo_path' => Request('logo'),
                    'stadium_id' => Request('stadium_id'),
                    'league_id' => Request('league_id'),
                    'country_id' => Request('country_id'),
                ]);
            });

            DB::transactionLevel();
            DB::commit();

            session()->flash('success', "Mise a jour avec succès");
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'une erreur s\'est produite, veuillez contacter l\'administrateur');
        }
    }

}
