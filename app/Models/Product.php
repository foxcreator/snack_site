<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const MEAT_SNACK = 1;
    const FISH_SNACK = 2;
    const CAVIAR_STICK = 3;

    const CATEGORIES = [
        self::MEAT_SNACK => 'Мʼясні снекі',
        self::FISH_SNACK => 'Рибні снекі',
        self::CAVIAR_STICK => 'Ікряники',
    ];

    protected $fillable = [];
}
