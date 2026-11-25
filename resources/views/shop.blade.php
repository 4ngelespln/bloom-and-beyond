
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our Flowers | Fresh Blooms</title>

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

        /* NAVIGATION */

        header {
            background: #fff8e9;
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .logo {
            font-size: 28px;
            color: #61775b;
            font-style: italic;
            font-weight: bold;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 30px;
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
            align-items: center;
            font-size: 21px;
        }

        .cart-count {
            background: #ed5bb1;
            color: white;
            font-size: 11px;
            border-radius: 50%;
            padding: 3px 7px;
        }

        /* HERO BANNER */

        .hero {
            background: #f5c1e5;
            min-height: 230px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 35px 9%;
            overflow: hidden;
        }

        .hero-text h1 {
            font-size: 42px;
            margin-bottom: 12px;
            color: #251b22;
        }

        .hero-text p {
            font-size: 16px;
            line-height: 1.6;
        }

        .hero img {
            width: 40%;
            height: 190px;
            object-fit: cover;
            border-radius: 5px;
        }

        /* CATEGORY FILTER */

        .categories {
            display: flex;
            justify-content: center;
            gap: 35px;
            flex-wrap: wrap;
            padding: 30px 15px 20px;
        }

        .category-btn {
            background: transparent;
            border: none;
            color: #333;
            font-family: Georgia, serif;
            font-size: 15px;
            cursor: pointer;
            padding: 9px 18px;
            border-radius: 25px;
        }

        .category-btn.active {
            background: #e85db3;
            color: white;
        }

        /* PRODUCTS */

        .products {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 20px;
            padding: 10px 5% 50px;
        }

        .product-card {
            background: white;
            border-radius: 13px;
            overflow: hidden;
            text-align: center;
            padding: 10px;
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px #e6c8d9;
        }

        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product-info {
            padding: 12px 5px;
        }

        .product-info h3 {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .product-info p {
            font-size: 13px;
            margin-bottom: 10px;
        }

        .price {
            color: #bd508c;
            font-weight: bold;
            font-size: 14px;
        }

        .add-cart {
            background: #e85db3;
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 18px;
            margin-top: 8px;
        }

        .add-cart:hover {
            background: #bf3d91;
        }

        .no-products {
            grid-column: 1 / -1;
            text-align: center;
            padding: 30px;
        }

        /* FOOTER */

        footer {
            background: #fff0f7;
            text-align: center;
            padding: 25px;
            color: #79566a;
        }

        /* RESPONSIVE */

        @media (max-width: 900px) {
            .products {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 600px) {
            header {
                justify-content: center;
            }

            nav {
                gap: 13px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .logo {
                font-size: 24px;
            }

            .hero {
                min-height: 190px;
                padding: 25px 5%;
            }

            .hero-text h1 {
                font-size: 27px;
            }

            .hero-text p {
                font-size: 12px;
            }

            .hero img {
                width: 42%;
                height: 140px;
            }

            .categories {
                gap: 5px;
            }

            .category-btn {
                font-size: 13px;
                padding: 8px 12px;
            }

            .products {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
                padding: 10px 12px 35px;
            }

            .product-card img {
                height: 140px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION BAR -->

    <header>

        <div class="logo">
            🌷 Fresh Blooms
        </div>

        <nav>
            <a href="/">Home</a>
            <a href="/shop" class="active">Shop</a>
            <a href="/about-us">About Us</a>
            <a href="/contact">Contact</a>
        </nav>

        <div class="nav-icons">
            <span>⌕</span>
            <a href="/login" style="text-decoration:none">♙</a>
            <span>🛒 <span class="cart-count" id="cartCount">0</span></span>
        </div>

    </header>

    <!-- HERO BANNER -->

    <section class="hero">

        <div class="hero-text">
            <h1>Our Flowers</h1>

            <p>
                Choose from our wide selection of
                <br>
                hand beautiful flowers.
            </p>
        </div>

        <img src="{{ asset('images/tulips3.png') }}"
     alt="Beautiful Tulips"
     style="width: 420px; height: 180px; object-fit: cover; border-radius: 10px;">

    </section>

    <!-- CATEGORIES -->

    <section class="categories">

        <button class="category-btn active" onclick="filterProducts('all', this)">
            All
        </button>

        <button class="category-btn" onclick="filterProducts('roses', this)">
            Roses
        </button>

        <button class="category-btn" onclick="filterProducts('tulips', this)">
            Tulips
        </button>

        <button class="category-btn" onclick="filterProducts('sunflowers', this)">
            Sunflowers
        </button>

        <button class="category-btn" onclick="filterProducts('mixed', this)">
            Mixed
        </button>

        <button class="category-btn" onclick="filterProducts('others', this)">
            Others
        </button>

    </section>

    <!-- PRODUCT LIST -->

    <section class="products" id="productList">

        <div class="product-card" data-category="roses">
            <img src="{{ asset('images/pink rose.webp') }}"
     alt=" Pink Rose">
            <div class="product-info">
                <h3>Pink Rose</h3>
                <p class="price">₱1,200</p>
                <button class="add-cart" onclick="addToCart()">+</button>
            </div>
        </div>

        <div class="product-card" data-category="roses">
            <img src="{{ asset('images/classic red roses.webp') }}"
     alt="Red Roses">
            <div class="product-info">
                <h3>Classic Red Roses</h3>
                <p class="price">₱1,200</p>
                <button class="add-cart" onclick="addToCart()">+</button>
            </div>
        </div>

        <div class="product-card" data-category="tulips">
    <img src="{{ asset('images/pink tulips.jpg') }}"
         alt="Pink Tulips">

    <div class="product-info">
        <h3>Pink Tulips</h3>
        <p class="price">₱1,800</p>
        <button class="add-cart" onclick="addToCart()">+</button>
    </div>
</div>

        <div class="product-card" data-category="sunflowers">
            <img src="{{ asset('sunflower.jpg.webp') }}"
     alt="Sunflower Bloom">
            <div class="product-info">
                <h3>Sunflower Bloom</h3>
                <p class="price">₱1,300</p>
                <button class="add-cart" onclick="addToCart()">+</button>
            </div>
        </div>

        <div class="product-card" data-category="mixed">
            <img src="{{ asset('images/burgundy elegance.webp') }}"
     alt="Burgundy Elegance">
            <div class="product-info">
                <h3>Burgundy Elegance</h3>
                <p class="price">₱1,600</p>
                <button class="add-cart" onclick="addToCart()">+</button>
            </div>
        </div>

        <div class="product-card" data-category="roses">
           <img src="{{ asset('images/red roses.webp') }}"
     alt="Red Lily Roses">
     
            <div class="product-info">
                <h3>Mixed Red Lily</h3>
                <p class="price">₱1,400</p>
                <button class="add-cart" onclick="addToCart()">+</button>
            </div>
        </div>

        <div class="product-card" data-category="roses">
    <img src="{{ asset('images/vintage peach.webp') }}"
         alt="Vintage Peach">

    <div class="product-info">
        <h3>Vintage Peach</h3>
        <p class="price">₱1,500</p>
        <button class="add-cart" onclick="addToCart()">+</button>
    </div>
</div>

        <div class="product-card" data-category="tulips">
            <img src="{{ asset('images/soft pink wrap.webp') }}"
     alt="Soft Pink Wrap">
            <div class="product-info">
                <h3>Soft Pink Wrap</h3>
                <p class="price">₱990</p>
                <button class="add-cart" onclick="addToCart()">+</button>
            </div>
        </div>

        <div class="product-card" data-category="mixed">
            <img src="{{ asset('images/spring garden.webp') }}"
     alt="Spring Garden">
            <div class="product-info">
                <h3>Spring Garden</h3>
                <p class="price">₱1,500</p>
                <button class="add-cart" onclick="addToCart()">+</button>
            </div>
        </div>

        <div class="product-card" data-category="others">
            <img src="{{ asset('images/petite pink roses.jpg') }}"
     alt="Petite Pink Roses">
            <div class="product-info">
                <h3>Petite Pink Roses</h3>
                <p class="price">₱1,100</p>
                <button class="add-cart" onclick="addToCart()">+</button>
            </div>
        </div>

    </section>

    <!-- FOOTER -->

    <footer>
        <p>© 2026 Fresh Blooms Flower Shop. All Rights Reserved.</p>
    </footer>

    <!-- JAVASCRIPT -->

    <script>

        let cart = 0;

        function addToCart() {
            cart++;

            document.getElementById("cartCount").innerText = cart;

            alert("Flower added to your cart! 🌷");
        }

        function filterProducts(category, button) {

            let products = document.querySelectorAll(".product-card");

            document.querySelectorAll(".category-btn").forEach(btn => {
                btn.classList.remove("active");
            });

            button.classList.add("active");

            products.forEach(product => {

                if (
                    category === "all" ||
                    product.dataset.category === category
                ) {
                    product.style.display = "block";
                } else {
                    product.style.display = "none";
                }

            });
        }

    </script>

</body>
</html>
