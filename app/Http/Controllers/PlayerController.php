<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\League;
use App\Models\Player;
use App\Models\Position;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function adminIndex()
    {
        $players = Player::get();
        return view('back.player.index', [
            'players' => $players,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function details(Request $request)
    {
        try {

            $teams = Team::get();
            $leagues = League::get();
            $countrys = Country::get();
            $positions = Position::get();
            $player = Player::where(['slug' => Request('slug')])->first();
            if (!empty($player)) {

                return view('front.player.details', ['player' => $player,'teams' => $teams,'leagues' => $leagues,'countrys' => $countrys,'positions' => $positions]);
            } else {
                return redirect()->back()->with('error', 'Le produit que vous recherchez est manquant, Veuillez contacter l\'administrateur');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Le produit que vous recherchez est manquant, Veuillez contacter l\'administrateur');
        }
    }

    public function adminDetails(Request $request)
    {
        try {
            $teams = Team::get();
            $leagues = League::get();
            $countrys = Country::get();
            $positions = Position::get();
            $player = Player::where(['slug' => Request('slug')])->first();
            if (!empty($player)) {

                return view('back.player.details', ['player' => $player,'teams' => $teams,'leagues' => $leagues,'countrys' => $countrys,'positions' => $positions]);
            } else {
                return redirect()->back()->with('error', 'Le produit que vous recherchez est manquant, Veuillez contacter l\'administrateur');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Le produit que vous recherchez est manquant, Veuillez contacter l\'administrateur');
        }
    }

    public function adminCreate()
    {
        $teams = Team::get();
        $leagues = League::get();
        $countrys = Country::get();
        $positions = Position::get();
        return view('back.player.create', compact('teams', 'leagues', 'countrys', 'positions'));
    }

    public function adminStore()
    {
        try {

            DB::transaction(function () {

                Player::create([
                    'firstname' => Request('firstName'),
                    'lastname' => Request('lastName'),
                    'fullname' => Request('fullName'),
                    'common_name' => Request('fullName'),
                    'display_name' => Request('displayName'),
                    'slug' => strtolower(Request('firstName')) . '_' . strtolower(Request('lastName')),
                    'shirt_number' => Request('shirtNumber'),
                    'nationality' => Request('nationality'),
                    'birthdate' => Request('birthdate'),
                    'birthcountry' => Request('birthcountry'),
                    'birthplace' => Request('birthplace'),
                    'team_id' => Request('team_id'),
                    'league_id' => Request('league_id'),
                    'country_id' => Request('country_id'),
                    'position_id' => Request('position_id'),
                    'height' => Request('height'),
                    'weight' => Request('weight'),
                    'image_path' => Request('image'),
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

    public function adminEdit(Request $request)
    {
        try {
            $teams = Team::get();
            $leagues = League::get();
            $countrys = Country::get();
            $positions = Position::get();

            $player = Player::where(['slug' => Request('slug')])->first();
            if (!empty($player)) {

                return view('back.player.edit', ['player' => $player,'teams' => $teams,'leagues' => $leagues,'countrys' => $countrys,'positions' => $positions]);
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
                $player = Player::where(['slug' => Request('slug')])->first();

                $player->update([
                    'firstname' => Request('firstName'),
                    'lastname' => Request('lastName'),
                    'fullname' => Request('fullName'),
                    'common_name' => Request('fullName'),
                    'display_name' => Request('displayName'),
                    'slug' => strtolower(Request('firstName')) . '_' . strtolower(Request('lastName')),
                    'shirt_number' => Request('shirtNumber'),
                    'nationality' => Request('nationality'),
                    'birthdate' => Request('birthdate'),
                    'birthcountry' => Request('birthcountry'),
                    'birthplace' => Request('birthplace'),
                    'team_id' => Request('team_id'),
                    'league_id' => Request('league_id'),
                    'country_id' => Request('country_id'),
                    'position_id' => Request('position_id'),
                    'height' => Request('height'),
                    'weight' => Request('weight'),
                    'image_path' => Request('image'),
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
