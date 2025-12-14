<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HARD STOCK - Hardware Products</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('image/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('image/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('image/logo.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/logo.png') }}">
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-left">
                <img src="{{ asset('image/logo.png') }}" alt="HARD STOCK Logo" class="nav-logo">
                <div class="brand">HARD STOCK</div>
            </div>
            <div class="nav-right">
                <a href="#" class="nav-link">Home</a>
                <a href="#" class="nav-link">Products</a>
                <a href="#" class="nav-link">About</a>
                <a href="#" class="nav-link">Contact</a>
                <a href="#" class="cart-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="white">
                        <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                </a>
                <a href="#" class="profile-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="white">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Welcome to HARD STOCK</h1>
            <p class="hero-subtitle">Browse our premium hardware collection</p>
        </div>
    </section>

    <!-- Product Carousel Section -->
    <section class="product-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('image/product1.jpg') }}" alt="Product 1">
                    </div>
                    <div class="product-info">
                        <h3>Professional Drill Set</h3>
                        <p class="product-price">$299.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('image/product2.jpg') }}" alt="Product 2">
                    </div>
                    <div class="product-info">
                        <h3>Heavy-Duty Saw</h3>
                        <p class="product-price">$189.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('image/product3.jpg') }}" alt="Product 3">
                    </div>
                    <div class="product-info">
                        <h3>Premium Tool Kit</h3>
                        <p class="product-price">$449.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('image/product4.jpg') }}" alt="Product 4">
                    </div>
                    <div class="product-info">
                        <h3>Industrial Wrench Set</h3>
                        <p class="product-price">$159.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('image/product5.jpg') }}" alt="Product 5">
                    </div>
                    <div class="product-info">
                        <h3>Power Screwdriver</h3>
                        <p class="product-price">$79.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <!-- Duplicate cards for seamless loop -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('image/product1.jpg') }}" alt="Product 1">
                    </div>
                    <div class="product-info">
                        <h3>Professional Drill Set</h3>
                        <p class="product-price">$299.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('image/product2.jpg') }}" alt="Product 2">
                    </div>
                    <div class="product-info">
                        <h3>Heavy-Duty Saw</h3>
                        <p class="product-price">$189.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>