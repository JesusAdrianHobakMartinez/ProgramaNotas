<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cornellnote extends Model
{
    use HasFactory;

    //un tema pertenece a una nota 
    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);

    }

    //un usuario le pertenece una nota
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }
}
