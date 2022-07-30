<?php

namespace App\Models;

use App\Http\Traits\RarityTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    use RarityTrait;
}
