<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory;
    use SoftDeletes;
    const CREATED_AT = 'date';
    const UPDATED_AT = 'time';
    public function detai(): BelongsToMany
    {
        return $this->belongsToMany(detail::class, 'orders_details', 'id_orders', 'id_details')->
        withPivot('quantity');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function executor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_executor');
    }
    protected $fillable = ['id', 'name', 'id_user', 'family', 'Email', 'comment', 'car',];

}

