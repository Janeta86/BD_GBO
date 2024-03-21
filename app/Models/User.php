<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    public function order(): HasMany
    {
        return $this->hasMany(Order::class, 'id_user');
    }

    public function order1(): HasMany
    {
        return $this->hasMany(Order::class, 'id_executer');
    }
}

