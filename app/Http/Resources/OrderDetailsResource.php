<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return[
            "id"=> $this->id,
            "customer"=> $this->customer,
            "sales"=> $this->sales->map(function($sale){
                return[
                    "id"=> $sale->id,
                    "product_name"=> $sale->product->name,
                    "price"=> $sale->price,
                    "quantity"=> $sale->quantity
                ];
            }),
        ];
    }
}
