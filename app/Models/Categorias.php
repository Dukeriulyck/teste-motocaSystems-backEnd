<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorias extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    protected $fillable = [
        'nome'
    ];

    public function produtos(): HasMany
    {
        return $this->hasMany(Produtos::class);
    }
}
