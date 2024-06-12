<?php

namespace App\Models;

use App\Models\User;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = ['biographie', 'motivations','cv','user_id'];

    public function user()
        {
            return $this->belongsTo(User::class);
        }

    public function formations()
        {
            return $this->belongsToMany(Formation::class,'candidature_formations');
        }

}
