<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mole_team extends Model
{
    use HasFactory;
    
    protected $guarded=[
        'id',
    ];

    public function players()
    {
        return $this->hasMany(Mole_player::class, 'mole_team_id');
    }
}
