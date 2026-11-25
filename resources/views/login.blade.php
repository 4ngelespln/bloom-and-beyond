<!DOCTYPE html>
<html>
<head>
    <title>Bloom & Beyond | Login</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Georgia, serif;
            background: #f8f1e5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background: white;
            width: 380px;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1 {
            color: #82977b;
            font-style: italic;
            font-size: 30px;
        }

        h2 {
            color: #444;
        }

        p {
            color: #777;
        }

        input {
            width: 100%;
            padding: 13px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 13px;
            margin-top: 15px;
            background: #d96bb8;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #bf559e;
        }

        a {
            color: #d96bb8;
            text-decoration: none;
        }

        .error {
            color: red;
            font-size: 13px;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>

<div class="login-container">

    <h1>🌷 Bloom & Beyond</h1>

    <h2>Welcome Back!</h2>

    <p>Login to your account</p>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <p class="error">{{ $errors->first() }}</p>
    @endif

    <form action="{{ url('/login') }}" method="POST">
        @csrf

        <input type="email"
               name="email"
               placeholder="Email Address"
               value="{{ old('email') }}"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit">LOGIN</button>
    </form>

    <p>Don't have an account?
        <a href="{{ url('/register') }}">Register Here</a>
    </p>

</div>

</body>
</html>