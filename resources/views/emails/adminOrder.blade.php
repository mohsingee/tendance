<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tendance.com</title>
</head>
<body>
    <h1>New order has been received</h1>
    <br>
    <p><b>Name: </b><small>{{ $order->name }}</small></p>

    <p><b>Email: </b><small>{{ $order->email }}</small></p>
    
    <p><b>Phone: </b><small>{{ $order->phone_number }}</small></p>

    <p><b>Service: </b><small>{{ $order->service }}</small></p>

    <p><b>Object Name: </b><small>{{ $order->object_name }}</small></p>

    <p><b>Visting Date: </b><small>{{ $order->visit_date }}</small></p>

    <p><b>Message: </b><small>{{ $order->message }}</small></p>
    <br>
    <table style="width:80%;text-align:center;">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        @foreach ($order->order_item as $key=>$item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->product->title }}</td>
            <td>${{ $item->product->price }}</td>
            <td>
                <img src="{{ asset('assets/shop/'.$item->product->image) }}" width="70" alt="">
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>