<?php
namespace App\Http\Traits;

use App\Models\Rarity;
trait RarityTrait 
{
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

    public function rarity()
    {
        return $this->hasOne(Rarity::class);
    }
}