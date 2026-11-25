<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Bloom & Beyond</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Georgia, serif;
            background: #f5f3ef;
            color: #302c2a;
        }

        header {
            background: #fff8e9;
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #71866b;
            font-size: 27px;
            font-style: italic;
        }

        .logo img {
            width: 55px;
            height: 55px;
            object-fit: contain;
        }

        nav {
            display: flex;
            gap: 25px;
        }

        nav a {
            text-decoration: none;
            color: #302c2a;
            font-size: 15px;
        }

        nav a:hover,
        nav a.active {
            color: #df65b1;
            border-bottom: 2px solid #df65b1;
            padding-bottom: 5px;
        }

        .nav-icons {
            display: flex;
            gap: 18px;
            font-size: 21px;
        }

        /* HERO */

        .about-hero {
            background: #cce8cb;
            min-height: 240px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 35px 8%;
            overflow: hidden;
        }

        .about-hero h1 {
            font-size: 45px;
            margin-bottom: 12px;
            font-weight: normal;
            letter-spacing: 2px;
        }

        .about-hero p {
            font-size: 22px;
            letter-spacing: 1px;
        }

        .about-hero img {
            width: 38%;
            height: 220px;
            object-fit: contain;
        }

        /* ABOUT CONTENT */

        .about-content {
            display: flex;
            align-items: center;
            gap: 35px;
            padding: 35px 8%;
        }

        .shop-photo {
            width: 48%;
            height: 320px;
            object-fit: cover;
            border-radius: 15px;
        }

        .about-text {
            flex: 1;
        }

        .about-text h2 {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .about-text p {
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        /* FEATURES */

        .features {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            text-align: center;
        }

        .feature {
            padding: 10px 5px;
        }

        .feature span {
            font-size: 25px;
            display: block;
            margin-bottom: 8px;
        }

        .feature p {
            font-size: 11px;
            line-height: 1.4;
        }

        /* QUOTE */

        .quote {
            background: #f4dfe5;
            margin: 0 8% 30px;
            padding: 25px;
            text-align: center;
            border-radius: 12px;
            font-size: 22px;
            font-style: italic;
        }

        footer {
            background: #fff0f7;
            text-align: center;
            padding: 20px;
            color: #79566a;
        }

        @media (max-width: 768px) {
            header {
                justify-content: center;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .about-hero {
                min-height: 190px;
                padding: 25px 5%;
            }

            .about-hero h1 {
                font-size: 30px;
            }

            .about-hero p {
                font-size: 14px;
            }

            .about-hero img {
                width: 42%;
                height: 150px;
            }

            .about-content {
                flex-direction: column;
                padding: 25px 5%;
            }

            .shop-photo {
                width: 100%;
                height: 250px;
            }

            .about-text h2 {
                font-size: 25px;
            }

            .features {
                grid-template-columns: repeat(4, 1fr);
            }

            .quote {
                margin: 0 5% 25px;
                font-size: 17px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">
        <img src="{{ asset('images/flower logo.png') }}" alt="Bloom & Beyond Logo">
        <span>Bloom & Beyond</span>
    </div>

    <nav>
        <a href="/">Home</a>
        <a href="/shop">Shop</a>
        <a href="/about-us" class="active">About Us</a>
        <a href="/contact">Contact</a>
    </nav>

    <div class="nav-icons">
        <span>⌕</span>
        <a href="/login" style="text-decoration:none;color:inherit;">♙</a>
        <span>🛒</span>
    </div>
</header>

<section class="about-hero">
    <div>
        <h1>About Us</h1>
        <p>We bring nature's beauty closer to you.</p>
    </div>

    <img src="{{ asset('images/sunflower2.jpg') }}"
     alt="Beautiful Sunflower"
     style="width: 420px; height: 180px; object-fit: cover; border-radius: 10px;">
</section>

<section class="about-content">

    <img class="shop-photo"
         src="{{ asset('images/flower signage.jpg') }}"
         alt="Bloom and Beyond Flower Shop">

    <div class="about-text">
        <h2>Bloom & Beyond</h2>

        <p>
            Bloom & Beyond is a local flower shop committed to
            providing fresh, high-quality flowers for all occasions.
            We believe that flowers have the power to make moments
            more special, and we're here to help you share that
            beauty with the people you love.
        </p>

        <div class="features">

            <div class="feature">
                <span>🌷</span>
                <p>Fresh Flowers<br>Daily</p>
            </div>

            <div class="feature">
                <span>🏪</span>
                <p>Trusted Local<br>Shop</p>
            </div>

            <div class="feature">
                <span>🎁</span>
                <p>Thoughtful Gift<br>Options</p>
            </div>

            <div class="feature">
                <span>🌸</span>
                <p>Customer<br>Satisfaction</p>
            </div>

        </div>
    </div>

</section>

<div class="quote">
    Because every flower tells a story.
</div>

<footer>
    © 2026 Bloom & Beyond. All Rights Reserved.
</footer>

</body>
</html>