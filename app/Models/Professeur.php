<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    protected $table = 'professeurs';
    protected $fillable = [
        'cnie'
    ];
    protected $primaryKey = 'id_professeur';

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
