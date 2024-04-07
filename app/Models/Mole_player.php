<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mole_player extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function ml_team()
    {
        return $this->belongsTo(Mole_team::class, 'mole_team_id', 'id');
    }
}
