<?php

namespace App\Models;

use App\Http\Traits\RarityTrait;
use App\Http\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\ErrorHandler\Collecting;

class Character extends Model
{
    use HasFactory;

    use RarityTrait;

    use SearchTrait;

    protected $casts = [
        'tags' => 'json',
    ];

    public function elements()
    {
        return $this->hasOne(Element::class, 'element_id', 'elements.id');
    }

    public function element()
    {
        return $this->belongsTo(Element::class);
    }

    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }

}
