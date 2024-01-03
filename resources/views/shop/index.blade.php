<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
</head>
<body>
    <h1>Products</h1>
    
    @foreach ($products as $product)
        <div>
            <strong>{{ $product->name }}</strong> - {{ $product->price }} 
            <form action="{{ route('addToCart', $product) }}" method="post">
                @csrf
                <button type="submit">Add to Cart</button>
            </form>
        </div>
    @endforeach

    <h2>Shopping Cart</h2>
    @if (count($cart) > 0)
    <ul>
        @foreach ($cart as $product)
            <li>{{ $product['name'] }} - {{ $product['price'] }}</li>
        @endforeach
    </ul>

    <form action="{{ route('applyVoucher', $voucher) }}" method="post">
        @csrf
        <label for="voucherCode">Voucher Code:</label>
        <input type="text" name="voucherCode" id="voucherCode" required>
        <button type="submit">Apply Voucher</button>
    </form>

    <form action="{{ route('completePurchase') }}" method="post">
        @csrf
        <button type="submit">Complete Purchase</button>
    </form>
    @else
        <p>Your shopping cart is empty.</p>
    @endif
</body>
</html>
