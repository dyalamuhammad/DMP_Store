<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>

    <ul>
        @foreach ($cart as $product)
            <li>{{ $product['name'] }} - {{ $product['price'] }}</li>
        @endforeach
    </ul>

    <form action="{{ route('completePurchase') }}" method="post">
        @csrf
        <button type="submit">Complete Purchase</button>
    </form>
</body>
</html>
