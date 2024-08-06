<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    protected $fillable = [
        'name',
        'description',
        'thumbnail',
        'link',
        'category_id',
        'price',
        'packing'
    ];

    public function thumbnailUrl(): Attribute
    {
        return new Attribute(
            get: fn() => Storage::url($this->attributes['thumbnail'])
        );
    }
}
