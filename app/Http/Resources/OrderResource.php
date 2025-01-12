<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return[
            "id"=> $this->id,
            "customer_name"=> $this->customer->name,
            "customer_email"=> $this->customer->email,
            "total_amount"=> $this->sales()->sum(DB::raw('price * quantity'))
        ];
    }
}
