<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiants';
    protected $fillable = [
        'matricule'
    ];
    protected $primaryKey = 'id_etudiant';

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
