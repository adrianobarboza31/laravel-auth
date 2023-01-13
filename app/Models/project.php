<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class project extends Model
{
    use HasFactory;
    protected $fillable = ['nome_progetto','cover_image','user_id','category_id'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function technologies():BelongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }
}
