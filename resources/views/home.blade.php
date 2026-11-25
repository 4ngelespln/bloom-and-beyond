
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bloom & Beyond | Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f1efeb;
            font-family: Georgia, serif;
            color: #344735;
        }

        .container {
            max-width: 1100px;
            margin: 55px auto;
            padding: 0;
            background: #fffdf8;
        }

        /* HEADER */

        header {
            background: #f3f1ec;
            padding: 15px 30px 10px;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            width: 180px;
            height: 90px;
            object-fit: contain;
            object-position: left center;
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .icons a {
            text-decoration: none;
            color: #222;
            font-size: 23px;
        }

        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 65px;
            padding: 8px 0 5px;
        }

        nav a {
            text-decoration: none;
            color: #292929;
            font-size: 15px;
        }

        nav a:hover {
            color: #829579;
        }

        /* HERO SECTION */

        .hero {
            background: #faf2df;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px;
            min-height: 330px;
            gap: 20px;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            color: #829579;
            font-size: 48px;
            line-height: 1.05;
            margin-bottom: 22px;
        }

        .shop-btn {
            display: inline-block;
            background: #7d9476;
            color: white;
            text-decoration: none;
            padding: 12px 35px;
            font-size: 15px;
            letter-spacing: 1px;
        }

        .shop-btn:hover {
            background: #60775b;
        }

        .hero-image {
            flex: 1.3;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image img {
            width: 100%;
            height: 270px;
            object-fit: contain;
        }

        /* BEST SELLERS */

        .best-title {
            text-align: center;
            color: #829579;
            font-size: 27px;
            margin: 20px 0 12px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            padding: 0 30px 25px;
        }

        .product {
            text-align: center;
        }

        .product img {
            width: 100%;
            height: 175px;
            object-fit: cover;
            display: block;
            margin-bottom: 12px;
        }

        .product-name {
            display: block;
            background: #7d9476;
            color: white;
            padding: 8px;
            font-size: 13px;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .product-name:hover {
            background: #536d50;
        }

        /* FOOTER */

        footer {
            background: #faf2df;
            text-align: center;
            padding: 18px;
            color: #829579;
            font-size: 13px;
        }

        /* MOBILE DESIGN */

        @media (max-width: 700px) {

            .container {
                margin: 10px;
            }

            header {
                padding: 15px;
            }

            .header-top {
                flex-direction: column;
                gap: 10px;
            }

            .logo img {
                width: 180px;
                height: 75px;
                object-position: center;
            }

            nav {
                gap: 18px;
                flex-wrap: wrap;
            }

            nav a {
                font-size: 13px;
            }

            .hero {
                flex-direction: column;
                text-align: center;
                padding: 25px 15px;
            }

            .hero-text h1 {
                font-size: 38px;
            }

            .hero-image img {
                height: 190px;
            }

            .products {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
                padding: 0 15px 20px;
            }

            .product img {
                height: 140px;
            }
        }

    </style>
</head>

<body>

<div class="container">

    <!-- HEADER -->

    <header>

        <div class="header-top">

            <!-- FLOWER LOGO -->

            <div class="logo">
               <img src="{{ asset('images/flower logo.png') }}" alt="Flower Logo">

            </div>

            <!-- HEADER ICONS -->

            <div class="icons">
                <a href="/shop" title="Search">⌕</a>
                <a href="/login" title="Account">♙</a>
                <a href="/shop" title="Cart">🛒</a>
            </div>

        </div>

        <!-- NAVIGATION -->

        <nav>
            <a href="/">Home</a>
            <a href="/shop">Shop</a>
            <a href="/about-us">About Us</a>
            <a href="/contact">Contact</a>
        </nav>

    </header>


    <!-- HERO SECTION -->

    <section class="hero">

        <div class="hero-text">

            <h1>
                Fresh Blooms,<br>
                For Life's<br>
                Moments
            </h1>

            <a href="/shop" class="shop-btn">
                SHOP COLLECTION
            </a>

        </div>

        <!-- HERO BOUQUET IMAGE -->

        <div class="hero-image">

           <img src="{{ asset('images/hero bouquet.png') }}" alt="Hero Bouquet">

        </div>

    </section>


    <!-- BEST SELLERS -->

    <h2 class="best-title">
        Best Sellers
    </h2>

    <section class="products">

        <!-- ROSE -->

        <div class="product">

           <img src="{{ asset('images/rose.jpg') }}" alt="Rose">
            <a href="/shop" class="product-name">
                ROSE
            </a>

        </div>

        <!-- TULIPS -->

        <div class="product">

            <img src="{{ asset('images/pink tulips.jpg') }}" alt="Tulips">
            <a href="/shop" class="product-name">
                TULIPS
            </a>

        </div>

        <!-- SUNFLOWER -->

        <div class="product">

          <img src="{{ asset('sunflower.jpg.webp') }}"
     alt="Sunflower Bloom">

            <a href="/shop" class="product-name">
                SUNFLOWER
            </a>

        </div>

        <!-- CARNATION -->

        <div class="product">

           <img src="{{ asset('images/carnation.jpg') }}" alt="Carnation">

            <a href="/shop" class="product-name">
                CARNATION
            </a>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>
        © 2026 Bloom & Beyond. All Rights Reserved.
    </footer>

</div>

</body>
</html>
