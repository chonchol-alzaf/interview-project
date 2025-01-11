<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Order Details</title>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>Order Details</h1>
        <h2>Order ID: {{ $order->id }}</h2>

        <h3>Sales</h3>
        <table>
            <thead>
                <tr>
                    <th>Sale ID</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->sales as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->product->name }}</td>
                        <td>{{ number_format($sale->price, 2) }}</td>
                        <td>{{ $sale->quantity }}</td>
                        <td>{{ number_format($sale->price * $sale->quantity, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p><strong>Total Sales Amount:</strong> {{ number_format($order->sales->sum(fn($sale) => $sale->price * $sale->quantity), 2) }}</p>

    </body>
</html>
