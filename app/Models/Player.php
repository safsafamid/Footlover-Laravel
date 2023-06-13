<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded =['id'];

    public function team(){
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function position(){
        return $this->belongsTo(Position::class, 'position_id');
    }
}
