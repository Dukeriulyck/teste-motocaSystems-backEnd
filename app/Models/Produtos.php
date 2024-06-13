<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produtos extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'categoria_id'
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categorias::class);
    }
}
