<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class detail extends Model
{
    use HasFactory;
    public function orderm(): BelongsToMany
    {
        return $this->belongsToMany(order::class, 'orders_details', 'id_details', 'id_orders')->
        withPivot('quantity');
    }
}
