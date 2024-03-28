<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, AuthenticableTrait;

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

