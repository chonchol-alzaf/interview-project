<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

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
        // ->when($request->customer_id, function ($query) use ($request) {
        //     $query->whereHas('customer', function ($query) use ($request) {
        //         $query->where('id', $request->customer_id);
        //     });
        // })
        ->get();

        return OrderResource::collection($orders);

        return view('orders.index',compact('orders'));
    }

    public function show($order_id)
    {
        $order = Order::where("id",$order_id)->first();
        return view('orders.show',compact('order'));
    }


}
