<?php

namespace App\Models;

use App\Models\User;
use App\Models\Candidature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'description', 'date_expiration', 'image', 'users_id'];


    public function candidatures()
        {
            return $this->belongsToMany(Candidature::class,'candidature_formations');
        }

    public function user()
        {
            return $this->belongsTo(User::class);
        }
}
