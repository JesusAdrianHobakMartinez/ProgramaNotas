<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Topic extends Model
{
    use HasFactory;

    //un tema pertenece a una asignatura 
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);

    }

    //una asignatura tiene muchos temas
    public function cornellnotes(): HasMany //nombre de la tabla en plural
    {
        return $this->hasMany(Cornellnote::class); //nombre en singular
    }
    
}
