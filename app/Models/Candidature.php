<?php

namespace App\Models;

use App\Models\User;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'formation_id',
        'biographie',
        'motivations',
        'cv_path',
        'status'];

        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        public function formation()
        {
            return $this->belongsTo(Formation::class);
        }
}