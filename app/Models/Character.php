<?php

namespace App\Models;

use App\Http\Traits\RarityTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\ErrorHandler\Collecting;

class Character extends Model
{
    use HasFactory;

    use RarityTrait;

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
