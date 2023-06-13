<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded =['id'];

    public function players(){
        return $this->hasMany(Player::class);
    }

    public function league(){
        return $this->belongsTo(League::class, 'league_id');
    }

    public function stadium(){
        return $this->belongsTo(Stadium::class, 'stadium_id');
    }

    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }
}
