<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperFormation
 */
class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
