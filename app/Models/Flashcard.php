<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flashcard extends Model
{
    use HasFactory;

    protected $guarded = false;

    /**
     * @return BelongsTo<User, Flashcard>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
