<?php

namespace App\Models;

use App\Models\Caminhao;
use App\Models\Transportadora;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Motorista extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'motorista';

    protected $guarded = ['id'];

    public function transportadora(): BelongsTo
    {
        return $this->belongsTo(Transportadora::class);
    }

    public function caminhoes(): HasMany
    {
        return $this->hasMany(Caminhao::class);
    }
}
