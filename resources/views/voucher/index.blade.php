<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher List</title>
</head>
<body>
    <h1>Voucher List</h1>

    <a href="{{ url('/generate-voucher') }}">Generate Voucher</a>

    <ul>
        @foreach ($vouchers as $voucher)
            <li>
                <strong>Code:</strong> {{ $voucher->code }} |
                <strong>Amount:</strong> {{ $voucher->amount }} |
                <strong>Expires At:</strong> {{ $voucher->expires_at }}
            </li>
        @endforeach
    </ul>
</body>
</html>
