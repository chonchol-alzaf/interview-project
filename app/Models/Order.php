<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
