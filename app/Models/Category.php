<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperCategory
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon'
    ];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function formations(): HasMany
    {
        return $this->hasMany(Formation::class);
    }
}
