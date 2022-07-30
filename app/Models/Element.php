<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    public function getElementNameAttribute(string $value): string
    {
        return ucfirst($value);
    }

    public function getElementColorAttribute(string $value): string
    {
        return ucfirst($value);
    }

    public function getElementDescrAttribute(string $value): string
    {
        return ucfirst($value);
    }
}
