<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Orders</title>
       
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Total Amount</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer->name }}</td>
                        <td>{{ $order->customer->email }}</td> 
                        <td>
                            {{
                                $order->sales->sum('price') 
                            }}
                        </td>
                        <td><a href="{{ route('orders.show', $order->id) }}">Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
