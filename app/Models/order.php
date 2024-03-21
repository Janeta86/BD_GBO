<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class order extends Model
{
    use HasFactory;
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
}

