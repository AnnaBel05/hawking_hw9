<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rarity extends Model
{
    use HasFactory;

    public function getRarityAttribute(int $value): int
    {
        return $value;
    }

    public function setRarityAttribute(int $value)
    {
        $this->attributes['rarity'] = $value;
    }

    public function getRarityNameAttribute(string $value): string
    {
        return ucfirst($value);
    }

    public function setRarityNameAttribute(string $value)
    {
        $this->attributes['rarity_name'] = $value;
    }

    public function getRarityInfoAttribute(): string
    {
        return "$this->rarity $this->rarity_name";
    }
}
