<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Bloom & Beyond</title>

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

        .contact-hero {
            background: #f4c5e8;
            min-height: 190px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px 8%;
            overflow: hidden;
        }

        .contact-hero h1 {
            font-size: 43px;
            font-weight: normal;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .contact-hero p {
            font-size: 16px;
        }

        .contact-hero img {
            width: 43%;
            height: 190px;
            object-fit: cover;
        }

        /* CONTACT SECTION */

        .contact-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            padding: 35px 8%;
        }

        .contact-card,
        .message-card {
            background: #fffaf0;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 6px #d9d1c8;
        }

        .contact-card h2,
        .message-card h2 {
            font-size: 22px;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info p {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .contact-info span {
            font-size: 18px;
            min-width: 20px;
        }

        .socials {
            display: flex;
            gap: 15px;
            margin-top: 12px;
        }

        .socials a {
            text-decoration: none;
            color: white;
            background: #222;
            width: 33px;
            height: 33px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 15px;
        }

        /* FORM */

        .message-card form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .message-card input,
        .message-card textarea {
            width: 100%;
            padding: 13px;
            border: none;
            outline: none;
            background: #f3f1ed;
            border-radius: 5px;
            font-family: Georgia, serif;
            font-size: 14px;
        }

        .message-card textarea {
            height: 130px;
            resize: vertical;
        }

        .send-btn {
            background: #d86bb4;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 7px;
            font-family: Georgia, serif;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        .send-btn:hover {
            background: #bc4d98;
        }

        /* FOOTER */

        footer {
            background: #789274;
            padding: 25px 8%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer .logo {
            color: white;
            font-size: 30px;
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

            .contact-hero {
                min-height: 170px;
                padding: 25px 5%;
            }

            .contact-hero h1 {
                font-size: 30px;
            }

            .contact-hero p {
                font-size: 13px;
            }

            .contact-hero img {
                width: 43%;
                height: 140px;
            }

            .contact-section {
                grid-template-columns: 1fr;
                gap: 20px;
                padding: 25px 6%;
            }

            .contact-card,
            .message-card {
                padding: 22px;
            }

            footer .logo {
                font-size: 24px;
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
        <a href="/about-us">About Us</a>
        <a href="/contact" class="active">Contact</a>
    </nav>

    <div class="nav-icons">
        <span>⌕</span>
        <a href="/login" style="text-decoration:none;color:inherit;">♙</a>
        <span>🛒</span>
    </div>
</header>

<section class="contact-hero">

    <div>
        <h1>Contact</h1>
        <p>We'd love to hear from you!</p>
    </div>

  <img src="{{ asset('images/tulips2.jpg') }}"
     alt="Beautiful Tulips"
     style="width: 420px; height: 180px; object-fit: cover; border-radius: 10px;">
</section>

<section class="contact-section">

    <!-- CONTACT INFORMATION -->

    <div class="contact-card">

        <h2>Get in Touch</h2>

        <div class="contact-info">

            <p>
                <span>☎</span>
                +63 912 345 6789
            </p>

            <p>
                <span>✉</span>
                hello@bloomandbeyond.com
            </p>

            <p>
                <span>📍</span>
                123 Flower Lane, San Pedro,
                Laguna, Philippines
            </p>

            <p>
                <span>◷</span>
                Mon - Sun<br>
                8:00 AM - 7:00 PM
            </p>

        </div>

        <h2>Follow Us</h2>

        <div class="socials">
            <a href="#">f</a>
            <a href="#">◎</a>
            <a href="#">♪</a>
        </div>

    </div>

    <!-- MESSAGE FORM -->

    <div class="message-card">

        <h2>Send Us a Message</h2>

        <form onsubmit="sendMessage(event)">

            <input type="text"
                   placeholder="Full Name"
                   required>

            <input type="email"
                   placeholder="Email Address"
                   required>

            <textarea placeholder="Message"
                      required></textarea>

            <button type="submit" class="send-btn">
                ✉ &nbsp; Send Message
            </button>

        </form>

    </div>

</section>

<footer>
    <div class="logo">
        <img src="{{ asset('images/flower logo.png') }}"
             alt="Bloom & Beyond Logo">
        <span>Bloom & Beyond</span>
    </div>
</footer>

<script>
    function sendMessage(event) {
        event.preventDefault();

        alert("Thank you for contacting Bloom & Beyond! 🌷");

        event.target.reset();
    }
</script>

</body>
</html>