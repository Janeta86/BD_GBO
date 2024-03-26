<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    public function order(): HasMany
    {
        return $this->hasMany(Order::class, 'id_user');
    }

    public function order1(): HasMany
    {
        return $this->hasMany(Order::class, 'id_executer');
    }
    protected $fillable = ['name', 'family', 'phone', 'email', 'comment', 'car',];

}

