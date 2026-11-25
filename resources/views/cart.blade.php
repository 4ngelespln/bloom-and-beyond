
<!DOCTYPE html>
<html>
<head>
    <title>Bloom & Beyond | My Cart</title>
</head>
<body>

<h1>🌷 My Shopping Cart</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if(count($cart) > 0)

    @foreach($cart as $item)
        <div style="padding: 15px; border-bottom: 1px solid #ddd;">

            <h3>{{ $item['name'] }}</h3>

            <p>Price: ₱{{ number_format($item['price'], 2) }}</p>

            <form action="{{ url('/cart/update/'.$item['id']) }}" method="POST">
                @csrf

                <input type="number"
                       name="quantity"
                       value="{{ $item['quantity'] }}"
                       min="1">

                <button type="submit">Update</button>
            </form>

            <p>
                Subtotal:
                ₱{{ number_format($item['price'] * $item['quantity'], 2) }}
            </p>

            <form action="{{ url('/cart/remove/'.$item['id']) }}" method="POST">
                @csrf
                <button type="submit">Remove</button>
            </form>

        </div>
    @endforeach

    <h2>Total: ₱{{ number_format($total, 2) }}</h2>

@else

    <p>Your cart is empty.</p>

@endif

<a href="{{ url('/shop') }}">Continue Shopping</a>

</body>
</html>
