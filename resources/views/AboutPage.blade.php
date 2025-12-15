<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('image/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('image/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('image/logo.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/logo.png') }}">
     <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about-page.css') }}" rel="stylesheet">
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
                <ul class="nav-links">
                    <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li><a href="#" class="nav-link">Products</a></li>
                    <li><a href="{{ url('/about') }}" class="nav-link active">About</a></li>
                    <li><a href="#" class="nav-link">Contact</a></li>
                </ul>
                <div class="search-bar">
                    <input type="text" placeholder="Search products..." class="search-input">
                    <button type="button" class="search-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="white">
                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                        </svg>
                    </button>
                </div>
                <div class="nav-icons">
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
        </div>
    </nav>

    
<section class="about-hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Products</div>
                </div>
                <div class="stat">
                    <div class="stat-number">5,000+</div>
                    <div class="stat-label">Customers</div>
                </div>
                <div class="stat">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- About Us Section -->
    <section class="about-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Story</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>Founded in 2020, HARD STOCK began as a small hardware store. Our passion for quality tools and commitment to customer service has helped us grow into one of the region's most trusted hardware suppliers.</p>
                    <p>We understand that professionals and DIY enthusiasts need reliable tools they can count on. That's why we carefully curate our inventory to include only the best products from leading brands, ensuring that every item we sell meets our high standards for quality and durability.</p>
                    <p>From construction professionals to home improvement enthusiasts, our mission is to provide the right tools for every project, backed by expert advice and exceptional service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-us-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Why Choose HARD STOCK</h2>
                <p class="section-subtitle">Excellence in Every Aspect of Our Service</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="#dc2626">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h3>Premium Quality</h3>
                    <p>We only stock products from reputable brands known for their durability and performance. Every tool in our inventory is tested and approved by our expert team.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="#dc2626">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                        </svg>
                    </div>
                    <h3>Competitive Pricing</h3>
                    <p>We work directly with manufacturers and distributors to offer competitive prices without compromising on quality. Plus, we regularly run promotions and special offers.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="#dc2626">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                        </svg>
                    </div>
                    <h3>Fast Delivery</h3>
                    <p>We offer quick and reliable delivery services throughout Cebu and surrounding areas. Most orders are delivered within 24-48 hours, ensuring you get your tools when you need them.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Values</h2>
                <p class="section-subtitle">The Principles That Guide Everything We Do</p>
            </div>
            <div class="values-grid">
                <div class="value-item">
                    <h3>Integrity</h3>
                    <p>We believe in honest business practices and transparent pricing. No hidden fees, no surprises – just straightforward service you can trust.</p>
                </div>
                <div class="value-item">
                    <h3>Quality</h3>
                    <p>We never compromise on quality. Every product we sell meets our rigorous standards for performance, durability, and safety.</p>
                </div>
                <div class="value-item">
                    <h3>Customer Service</h3>
                    <p>Your satisfaction is our top priority. We go above and beyond to ensure every customer has a positive experience with HARD STOCK.</p>
                </div>
                <div class="value-item">
                    <h3>Innovation</h3>
                    <p>We stay current with the latest tools and technologies, bringing you cutting-edge solutions that make your work easier and more efficient.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <div class="footer-logo">
                    <img src="{{ asset('image/logo.png') }}" alt="HARD STOCK Logo">
                    <div class="brand">HARD STOCK</div>
                </div>
                <p class="footer-description">
                    Your trusted partner for professional hardware tools and equipment. Quality products, competitive prices, and exceptional service.
                </p>
                <div class="social-links">
                    <a href="#" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="white">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="white">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="white">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">New Arrival</a></li>
                    <li><a href="#">Categories</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Customer Service</h3>
                <ul class="footer-links">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Shipping Info</a></li>
                    <li><a href="#">Returns & Exchanges</a></li>
                    <li><a href="#">Order Tracking</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contact Info</h3>
                <div class="contact-info">
                    <div class="contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        <span>Unit 3, Purok Sampaguita,<br> 
                            Sabang, Danao City, Cebu 6004</span>
                    </div>
                    <div class="contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <span>(032) 345-6789</span>
                    </div>
                    <div class="contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        <span>support@hardstock.com</span>
                    </div>
                </div>
                <div class="newsletter">
                    <h4>Newsletter Signup</h4>
                    <div class="newsletter-form">
                        <input type="email" placeholder="Enter your email">
                        <button type="submit">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <div class="copyright">
                    <p>&copy; 2025 HARD STOCK. All rights reserved.</p>
                </div>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                    <a href="#">Sitemap</a>
                </div>
                <div class="payment-methods">
                    <span>We Accept:</span>
                    <div class="payment-icons">
                        <img src="{{ asset('image/gcash.png') }}" alt="GCash" class="payment-img">
                        <img src="{{ asset('image/maya.png') }}" alt="Maya" class="payment-img">
                        <img src="{{ asset('image/visa.png') }}" alt="Visa" class="payment-img">
                        <img src="{{ asset('image/bpi.png') }}" alt="BPI" class="payment-img">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>