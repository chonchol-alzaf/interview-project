<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Resources\OrderResource;
use App\Http\Resources\OrderDetailsResource;

class OrderController extends Controller
{

    public function index(Request $request)
    {
        $request->validate([
            "per_page" => "nullable|min:1|max:100",
            "page" => "nullable|min:1",
            "customer_id" => "nullable|exists:customers,id"
        ]);

        $orders = Order::completed()
        ->get();

        return OrderResource::collection($orders);
    }
}
