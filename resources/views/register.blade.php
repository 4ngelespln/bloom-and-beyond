<!DOCTYPE html>
<html>
<head>
    <title>Bloom & Beyond | Register</title>

    <style>
        body {
            margin: 0;
            background: #f8f1e5;
            font-family: Georgia, serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .register-container {
            background: white;
            width: 380px;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px #ddd;
        }

        h1 {
            color: #82977b;
            font-style: italic;
        }

        input {
            width: 100%;
            padding: 13px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 13px;
            background: #d96bb8;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        a {
            color: #d96bb8;
            text-decoration: none;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

<div class="register-container">

    <h1>🌷 Bloom & Beyond</h1>

    <h2>Create Account</h2>

    <p>Join our flower shop today!</p>

    @if($errors->any())
        <div class="error">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ url('/register') }}" method="POST">
        @csrf

        <input type="text"
               name="name"
               placeholder="Full Name"
               value="{{ old('name') }}"
               required>

        <input type="email"
               name="email"
               placeholder="Email Address"
               value="{{ old('email') }}"
               required>

        <input type="password"
               name="password"
               placeholder="Password (minimum 8 characters)"
               required>

        <input type="password"
               name="password_confirmation"
               placeholder="Confirm Password"
               required>

        <button type="submit">REGISTER</button>
    </form>

    <p>Already have an account?
        <a href="{{ url('/login') }}">Login Here</a>
    </p>

</div>

</body>
</html>