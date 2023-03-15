<!DOCTYPE html>
<html>
<head>
    <title>Tendance.com</title>
</head>
<body>
    <h1>Thank you for your order!</h1>
    <p>Your Order Number is #{{ $order->id }}</p>
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