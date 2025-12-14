<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HARD STOCK - Quality Tools at Affordable Prices</title>
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
                <a href="#" class="login-btn">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <video autoplay muted loop id="video-background">
            <source src="{{ asset('image/hardware.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-content">
            <h1 class="hero-title">Buy Top Quality Tools At Affordable Prices!</h1>
            <p class="hero-subtitle">Professional hardware tools for every need</p>
            <a href="/home" class="shop-now-btn">Shop Now</a>
        </div>
    </section>
</body>
</html>