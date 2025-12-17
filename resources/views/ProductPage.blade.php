<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('image/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('image/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('image/logo.png') }}">
    <link rel="icon" type="icon/x-icon" href="{{ asset('image/logo.png') }}">
    <link href="{{ asset('css/product-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home-page.css') }}" rel="stylesheet">
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
                    <li><a href="#" class="nav-link">Home</a></li>
                    <li><a href="#" class="nav-link">Products</a></li>
                    <li><a href="#" class="nav-link">About</a></li>
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

    <!-- Main Content -->
    <div class="products-container">
        <!-- Sidebar Filters -->
        <aside class="filters-sidebar">
            <div class="filter-section">
                <h3>Categories</h3>
                <ul class="filter-list">
                    <li><label><input type="checkbox" name="category" value="power-tools"> Power Tools</label></li>
                    <li><label><input type="checkbox" name="category" value="hand-tools"> Hand Tools</label></li>
                    <li><label><input type="checkbox" name="category" value="measuring"> Measuring Tools</label></li>
                    <li><label><input type="checkbox" name="category" value="safety"> Safety Equipment</label></li>
                    <li><label><input type="checkbox" name="category" value="storage"> Storage Solutions</label></li>
                </ul>
            </div>

            <div class="filter-section">
                <h3>Trusted Brands</h3>
                <ul class="filter-list">
                    <li><label><input type="checkbox" name="brand" value="snapon"> Snap-on</label></li>
                    <li><label><input type="checkbox" name="brand" value="stanley"> Stanley</label></li>
                    <li><label><input type="checkbox" name="brand" value="bosch"> Bosch</label></li>
                    <li><label><input type="checkbox" name="brand" value="milwaukee"> Milwaukee</label></li>
                    <li><label><input type="checkbox" name="brand" value="craftsman"> Craftsman</label></li>
                </ul>
            </div>

            <button class="clear-filters">Clear All Filters</button>
        </aside>

        <!-- Products Grid -->
        <main class="products-main">
            
            <div class="products-grid" id="productsGrid">
                <!-- Products will be dynamically generated by JavaScript -->
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <button class="page-btn prev" disabled>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                    </svg>
                </button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">...</button>
                <button class="page-btn">8</button>
                <button class="page-btn next">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                    </svg>
                </button>
            </div>
        </main>
    </div>

    <!-- Product Modal -->
    <div id="productModal" class="product-modal">
        <div class="modal-overlay" onclick="closeModal()"></div>
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">&times;</button>
            <div class="modal-body">
                <div class="modal-image">
                    <img id="modalImage" src="" alt="Product">
                </div>
                <div class="modal-info">
                    <img id="modalBrand" src="" alt="Brand" class="modal-brand">
                    <h2 id="modalTitle" class="modal-title"></h2>
                    <div class="modal-rating">
                        <div id="modalStars" class="stars"></div>
                        <span id="modalRatingCount" class="rating-count"></span>
                    </div>
                    <div class="modal-price">
                        <span id="modalCurrentPrice" class="current-price"></span>
                        <span id="modalOriginalPrice" class="original-price"></span>
                    </div>
                    <div class="modal-description">
                        <p>High-quality professional tool designed for maximum performance and durability. Perfect for both professional contractors and DIY enthusiasts.</p>
                    </div>
                    <div class="modal-actions">
                        <button class="modal-add-to-cart">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                            </svg>
                            Add to Cart
                        </button>
                        <button class="modal-buy-now">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer from Home Page -->
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
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="white">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
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
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2z"/>
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

    <script>
        // Product data for all 9 pages (54 products total)
        const allProducts = [
            // Page 1 Mix: 1 Power Tool, 2 Hand Tools, 1 Outdoor Equipment, 1 Measuring Tool, 1 Storage Solution
            {
                id: 1,
                name: "Craftsman V20 MAX Power Tool Combo Kit",
                brand: "{{ asset('image/Craftsman.png') }}",
                image: "{{ asset('image/power1.png') }}",
                badge: "New",
                badgeType: "new",
                stars: "★★★★★",
                rating: "(245)",
                currentPrice: "₱14,842",
                originalPrice: ""
            },
            {
                id: 2,
                name: "Craftsman 159Pc Mechanics Tool Set",
                brand: "{{ asset('image/Craftsman.png') }}",
                image: "{{ asset('image/hand1.png') }}",
                badge: "Hot",
                badgeType: "hot",
                stars: "★★★★☆",
                rating: "(189)",
                currentPrice: "₱7,567",
                originalPrice: "₱8,999"
            },
            {
                id: 3,
                name: "Snap-on Ratchet Screwdriver",
                brand: "{{ asset('image/Snapon.png') }}",
                image: "{{ asset('image/hand2.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★★",
                rating: "(156)",
                currentPrice: "₱9,181",
                originalPrice: ""
            },
            {
                id: 4,
                name: "Stanley 20V FatMax Blower",
                brand: "{{ asset('image/Stanley.png') }}",
                image: "{{ asset('image/outdoor1.png') }}",
                badge: "Sale",
                badgeType: "sale",
                stars: "★★★★☆",
                rating: "(78)",
                currentPrice: "₱3,799",
                originalPrice: "₱4,999"
            },
            {
                id: 5,
                name: "Bosch Laser Distance Measurer",
                brand: "{{ asset('image/Bosch.png') }}",
                image: "{{ asset('image/measure1.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★★",
                rating: "(267)",
                currentPrice: "₱11,500",
                originalPrice: ""
            },
            {
                id: 6,
                name: "Craftsman 52″ Tool Cabinet",
                brand: "{{ asset('image/Craftsman.png') }}",
                image: "{{ asset('image/storage1.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★★",
                rating: "(234)",
                currentPrice: "₱59,765",
                originalPrice: ""
            },
            // Page 2 Mix: 2 Power Tools, 2 Hand Tools, 1 Measuring Tool, 1 Storage Solution
            {
                id: 7,
                name: "Craftsman V20 Cordless 1/2″ Impact Wrench",
                brand: "{{ asset('image/Craftsman.png') }}",
                image: "{{ asset('image/power2.png') }}",
                badge: "Hot",
                badgeType: "hot",
                stars: "★★★★★",
                rating: "(178)",
                currentPrice: "₱12,237",
                originalPrice: "₱14,999"
            },
            {
                id: 8,
                name: "Bosch Professional Impact Drill GSB 550",
                brand: "{{ asset('image/Bosch.png') }}",
                image: "{{ asset('image/power5.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(145)",
                currentPrice: "₱2,399",
                originalPrice: ""
            },
            {
                id: 9,
                name: "Craftsman 102Pc Tool Kit",
                brand: "{{ asset('image/Craftsman.png') }}",
                image: "{{ asset('image/hand3.png') }}",
                badge: "Sale",
                badgeType: "sale",
                stars: "★★★★☆",
                rating: "(89)",
                currentPrice: "₱9,504",
                originalPrice: "₱11,999"
            },
            {
                id: 10,
                name: "Snap-on Screwdriver Set 6Pc",
                brand: "{{ asset('image/Snapon.png') }}",
                image: "{{ asset('image/hand4.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★★",
                rating: "(203)",
                currentPrice: "₱13,234",
                originalPrice: ""
            },
            {
                id: 11,
                name: "Stanley Tape Measure 25 ft",
                brand: "{{ asset('image/Stanley.png') }}",
                image: "{{ asset('image/measure2.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(67)",
                currentPrice: "₱260",
                originalPrice: ""
            },
            {
                id: 12,
                name: "Stanley 7-Drawer Wheeled Tool Trolley",
                brand: "{{ asset('image/Stanley.png') }}",
                image: "{{ asset('image/storage2.png') }}",
                badge: "New",
                badgeType: "new",
                stars: "★★★★★",
                rating: "(156)",
                currentPrice: "₱66,060",
                originalPrice: ""
            },
            // Page 3 Mix: 2 Power Tools, 2 Hand Tools, 1 Outdoor Equipment, 1 Storage Solution
            {
                id: 13,
                name: "Stanley SBW920 20V Cordless Impact Wrench",
                brand: "{{ asset('image/Stanley.png') }}",
                image: "{{ asset('image/power3.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(92)",
                currentPrice: "₱7,300",
                originalPrice: ""
            },
            {
                id: 14,
                name: "Bosch 1100W Professional Circular Saw GKS 7000",
                brand: "{{ asset('image/Bosch.png') }}",
                image: "{{ asset('image/power6.png') }}",
                badge: "Hot",
                badgeType: "hot",
                stars: "★★★★★",
                rating: "(189)",
                currentPrice: "₱4,759",
                originalPrice: "₱5,999"
            },
            {
                id: 15,
                name: "Stanley SBI820M2K Cordless Impact Driver",
                brand: "{{ asset('image/Stanley.png') }}",
                image: "{{ asset('image/power4.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(78)",
                currentPrice: "₱9,680",
                originalPrice: ""
            },
            {
                id: 16,
                name: "Milwaukee M12 Rotary Tool",
                brand: "{{ asset('image/Milwaukee.png') }}",
                image: "{{ asset('image/hand5.png') }}",
                badge: "Sale",
                badgeType: "sale",
                stars: "★★★★★",
                rating: "(145)",
                currentPrice: "₱2,858",
                originalPrice: "₱3,999"
            },
            {
                id: 17,
                name: "Bosch GBL 18V-750 Cordless Leaf Blower",
                brand: "{{ asset('image/Bosch.png') }}",
                image: "{{ asset('image/outdoor2.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(67)",
                currentPrice: "₱9,242",
                originalPrice: ""
            },
            {
                id: 18,
                name: "Milwaukee PACKOUT 4-Drawer Toolbox + Rolling Box",
                brand: "{{ asset('image/Milwaukee.png') }}",
                image: "{{ asset('image/storage3.png') }}",
                badge: "New",
                badgeType: "new",
                stars: "★★★★★",
                rating: "(234)",
                currentPrice: "₱12,492",
                originalPrice: ""
            },
            // Page 4 Mix: 2 Power Tools, 2 Hand Tools, 1 Outdoor Equipment, 1 Storage Solution
            {
                id: 19,
                name: "Milwaukee 20mm SDS+ Rotary Hammer",
                brand: "{{ asset('image/Milwaukee.png') }}",
                image: "{{ asset('image/power7.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★★",
                rating: "(267)",
                currentPrice: "₱16,650",
                originalPrice: ""
            },
            {
                id: 20,
                name: "Milwaukee K545S SDS-Max Tool",
                brand: "{{ asset('image/Milwaukee.png') }}",
                image: "{{ asset('image/power8.png') }}",
                badge: "Hot",
                badgeType: "hot",
                stars: "★★★★★",
                rating: "(178)",
                currentPrice: "₱54,480",
                originalPrice: ""
            },
            {
                id: 21,
                name: "Milwaukee 12V Cordless Rotary Tool",
                brand: "{{ asset('image/Milwaukee.png') }}",
                image: "{{ asset('image/hand6.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(89)",
                currentPrice: "₱4,450",
                originalPrice: ""
            },
            {
                id: 22,
                name: "Bosch 108Pc Hand Tool Set",
                brand: "{{ asset('image/Bosch.png') }}",
                image: "{{ asset('image/hand7.png') }}",
                badge: "Sale",
                badgeType: "sale",
                stars: "★★★★★",
                rating: "(203)",
                currentPrice: "₱6,005",
                originalPrice: "₱7,999"
            },
            {
                id: 23,
                name: "GBL 18V-120 Cordless Blower",
                brand: "{{ asset('image/Bosch.png') }}",
                image: "{{ asset('image/outdoor3.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(145)",
                currentPrice: "₱10,269",
                originalPrice: ""
            },
            {
                id: 24,
                name: "Bosch L-BOXX 136 Storage Case",
                brand: "{{ asset('image/Bosch.png') }}",
                image: "{{ asset('image/storage4.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(67)",
                currentPrice: "₱1,930",
                originalPrice: ""
            },
            // Page 5 Mix: 1 Power Tool, 3 Hand Tools, 1 Outdoor Equipment, 1 Storage Solution
            {
                id: 25,
                name: "Stanley 1/2\" Socket Wrench",
                brand: "{{ asset('image/Stanley.png') }}",
                image: "{{ asset('image/hand8.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                currentPrice: "₱120",
                originalPrice: ""
            },
            {
                id: 27,
                name: "Craftsman Screwdriver Set",
                brand: "{{ asset('image/Craftsman.png') }}",
                image: "{{ asset('image/hand9.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★★",
                rating: "(156)",
                currentPrice: "₱4,108",
                originalPrice: ""
            },
            {
                id: 28,
                name: "Craftsman Mechanics Set with 2-Drawer Box",
                brand: "{{ asset('image/Craftsman.png') }}",
                image: "{{ asset('image/storage5.png') }}",
                badge: "New",
                badgeType: "new",
                stars: "★★★★☆",
                rating: "(89)",
                currentPrice: "₱430",
                originalPrice: ""
            },
            {
                id: 29,
                name: "Bosch GBL 550 Air Blower",
                brand: "{{ asset('image/Bosch.png') }}",
                image: "{{ asset('image/outdoor4.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(145)",
                currentPrice: "₱3,289",
                originalPrice: ""
            },
            {
                id: 30,
                name: "Stanley Metal Latch Rolling Tool Box",
                brand: "{{ asset('image/Stanley.png') }}",
                image: "{{ asset('image/storage6.png') }}",
                badge: "Hot",
                badgeType: "hot",
                stars: "★★★★★",
                rating: "(203)",
                currentPrice: "₱3,100",
                originalPrice: "₱3,999"
            },
            // Page 6 Mix: 1 Power Tool, 2 Hand Tools, 2 Outdoor Equipment, 1 Storage Solution
            {
                id: 31,
                name: "Milwaukee 0884-20 M18 18 Volt Cordless Compact Yard Leaf Blower",
                brand: "{{ asset('image/Milwaukee.png') }}",
                image: "{{ asset('image/outdoor5.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★★",
                rating: "(267)",
                currentPrice: "₱7,500",
                originalPrice: ""
            },
            {
                id: 32,
                name: "Stanley PowerLock 8m Tape",
                brand: "{{ asset('image/Stanley.png') }}",
                image: "{{ asset('image/tool32.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(178)",
                currentPrice: "₱900",
                originalPrice: ""
            },
            {
                id: 33,
                name: "Stanley FatMax 10m Tape",
                brand: "{{ asset('image/Stanley.png') }}",
                image: "{{ asset('image/tool33.png') }}",
                badge: "Sale",
                badgeType: "sale",
                stars: "★★★★☆",
                rating: "(89)",
                currentPrice: "₱739",
                originalPrice: "₱999"
            },
            {
                id: 34,
                name: "Milwaukee 2825-20ST 18V Cordless Brushless String Grass Trimmer",
                brand: "{{ asset('image/Milwaukee.png') }}",
                image: "{{ asset('image/tool34.png') }}",
                badge: "Hot",
                badgeType: "hot",
                stars: "★★★★★",
                rating: "(145)",
                currentPrice: "₱21,853",
                originalPrice: ""
            },
            {
                id: 35,
                name: "Stanley PowerLock 5m Tape",
                brand: "{{ asset('image/Stanley.png') }}",
                image: "{{ asset('image/tool35.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(67)",
                currentPrice: "₱340",
                originalPrice: ""
            },
            {
                id: 36,
                name: "Snap-on 40″ Seven-Drawer Heritage Series Roll-Cab Tool Chest",
                brand: "{{ asset('image/Snapon.png') }}",
                image: "{{ asset('image/tool36.png') }}",
                badge: "New",
                rating: "(234)",
                currentPrice: "₱150,000",
                originalPrice: ""
            },
            // Page 7 Mix: 1 Power Tool, 1 Hand Tool, 2 Measuring Tools, 2 Storage Solutions
            {
                id: 37,
                name: "Stanley PowerLock 5m (Higher-end)",
                brand: "{{ asset('image/Stanley.png') }}",
                image: "{{ asset('image/tool37.png') }}",
                badge: "",
                badgeType: "",
                stars: "★★★★☆",
                rating: "(92)",
                currentPrice: "₱1,098",
                originalPrice: ""
            },
            {
                id: 38,
                name: "Snap-on 55″ Double-Bank Tool Chest (10-Drawer)",
                brand: "{{ asset('image/Snapon.png') }}",
                image: "{{ asset('image/tool38.png') }}",
                badge: "Hot",
                badgeType: "hot",
                stars: "★★★★★",
                rating: "(178)",
                currentPrice: "₱370,000",
                originalPrice: ""
            }
        ];

        // Pagination state
        let currentPage = 1;
        const productsPerPage = 6;
        const totalPages = 7;

        // Initialize products on page load
        document.addEventListener('DOMContentLoaded', function() {
            renderProducts(currentPage);
            renderPagination();
        });

        // Function to render products for current page
        function renderProducts(page) {
            const startIndex = (page - 1) * productsPerPage;
            const endIndex = startIndex + productsPerPage;
            const pageProducts = allProducts.slice(startIndex, endIndex);
            
            const productsGrid = document.getElementById('productsGrid');
            productsGrid.innerHTML = '';
            
            pageProducts.forEach(product => {
                const productCard = createProductCard(product);
                productsGrid.innerHTML += productCard;
            });
            
            // Re-attach event listeners for new elements
            attachEventListeners();
            
            // Update results count
            const resultsCount = document.querySelector('.results-count');
            if (resultsCount) {
                resultsCount.textContent = pageProducts.length;
            }
        }

        // Function to create product card HTML
        function createProductCard(product) {
            const badgeHtml = product.badge ? 
                `<div class="product-badge ${product.badgeType}">${product.badge}</div>` : '';
            
            const originalPriceHtml = product.originalPrice ? 
                `<span class="original-price">${product.originalPrice}</span>` : '';
            
            return `
                <div class="product-card">
                    <div class="product-image">
                        <img src="${product.image}" alt="${product.name}">
                        ${badgeHtml}
                        <button class="view-btn">View</button>
                    </div>
                    <div class="product-info">
                        <img src="${product.brand}" alt="${product.name}" class="product-brand">
                        <h4 class="product-name">${product.name}</h4>
                        <div class="product-rating">
                            <div class="stars">${product.stars}</div>
                            <span class="rating-count">${product.rating}</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">${product.currentPrice}</span>
                            ${originalPriceHtml}
                        </div>
                        <div class="product-actions">
                            <button class="add-to-cart-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                                </svg>
                            </button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                </div>
            `;
        }

        // Function to render pagination buttons
        function renderPagination() {
            const paginationContainer = document.querySelector('.pagination');
            paginationContainer.innerHTML = '';
            
            // Previous button
            paginationContainer.innerHTML += `
                <button class="page-btn prev" ${currentPage === 1 ? 'disabled' : ''}>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                    </svg>
                </button>
            `;
            
            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                if (i === 1 || i === totalPages || (i >= currentPage - 1 && i <= currentPage + 1)) {
                    paginationContainer.innerHTML += `
                        <button class="page-btn ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>
                    `;
                } else if (i === currentPage - 2 || i === currentPage + 2) {
                    paginationContainer.innerHTML += `
                        <button class="page-btn">...</button>
                    `;
                }
            }
            
            // Next button
            paginationContainer.innerHTML += `
                <button class="page-btn next" ${currentPage === totalPages ? 'disabled' : ''}>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                    </svg>
                </button>
            `;
            
            // Attach pagination event listeners
            attachPaginationListeners();
        }

        // Function to attach event listeners to dynamically created elements
        function attachEventListeners() {
            // View button functionality
            document.querySelectorAll('.view-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const productCard = this.closest('.product-card');
                    openModal(productCard);
                });
            });

            // Add to cart icon functionality
            document.querySelectorAll('.add-to-cart-icon').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const productCard = this.closest('.product-card');
                    const productName = productCard.querySelector('.product-name').textContent;
                    
                    // Visual feedback
                    this.style.background = '#dc2626';
                    this.style.color = 'white';
                    setTimeout(() => {
                        this.style.background = '';
                        this.style.color = '';
                    }, 1500);
                    
                    console.log(`Added to cart: ${productName}`);
                });
            });

            // Buy now functionality
            document.querySelectorAll('.buy-now').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const productCard = this.closest('.product-card');
                    const productName = productCard.querySelector('.product-name').textContent;
                    
                    // Visual feedback
                    this.textContent = 'Processing...';
                    this.style.background = '#10b981';
                    setTimeout(() => {
                        this.textContent = 'Buy Now';
                        this.style.background = '';
                    }, 1500);
                    
                    console.log(`Buy now: ${productName}`);
                });
            });
        }

        // Function to attach pagination event listeners
        function attachPaginationListeners() {
            document.querySelectorAll('.page-btn[data-page]').forEach(button => {
                button.addEventListener('click', function() {
                    const page = parseInt(this.getAttribute('data-page'));
                    if (page !== currentPage) {
                        currentPage = page;
                        renderProducts(currentPage);
                        renderPagination();
                    }
                });
            });

            // Previous button
            document.querySelector('.page-btn.prev').addEventListener('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    renderProducts(currentPage);
                    renderPagination();
                }
            });

            // Next button
            document.querySelector('.page-btn.next').addEventListener('click', function() {
                if (currentPage < totalPages) {
                    currentPage++;
                    renderProducts(currentPage);
                    renderPagination();
                }
            });
        }

        // Filter functionality
        document.querySelectorAll('.filter-list input').forEach(input => {
            input.addEventListener('change', function() {
                filterProducts();
            });
        });

        // Price range slider
        const priceSlider = document.querySelector('.price-slider');
        const priceInputs = document.querySelectorAll('.price-inputs input');
        
        if (priceSlider) {
            priceSlider.addEventListener('input', function() {
                const value = this.value;
                priceInputs[1].value = value;
                filterProducts();
            });

            priceInputs.forEach(input => {
                input.addEventListener('change', function() {
                    filterProducts();
                });
            });
        }

        // Clear filters
        document.querySelector('.clear-filters').addEventListener('click', function() {
            document.querySelectorAll('.filter-list input').forEach(input => {
                input.checked = false;
            });
            if (priceInputs.length > 0) {
                priceInputs.forEach(input => {
                    input.value = input.placeholder === 'Min' ? '0' : '10000';
                });
                if (priceSlider) priceSlider.value = 5000;
            }
            filterProducts();
        });

        // Modal functionality
        function openModal(productCard) {
            const modal = document.getElementById('productModal');
            
            // Get product data
            const productImage = productCard.querySelector('.product-image img').src;
            const productBrand = productCard.querySelector('.product-brand').src;
            const productName = productCard.querySelector('.product-name').textContent;
            const productStars = productCard.querySelector('.stars').textContent;
            const productRatingCount = productCard.querySelector('.rating-count').textContent;
            const currentPrice = productCard.querySelector('.current-price').textContent;
            const originalPrice = productCard.querySelector('.original-price')?.textContent || '';
            
            // Populate modal
            document.getElementById('modalImage').src = productImage;
            document.getElementById('modalBrand').src = productBrand;
            document.getElementById('modalTitle').textContent = productName;
            document.getElementById('modalStars').textContent = productStars;
            document.getElementById('modalRatingCount').textContent = productRatingCount;
            document.getElementById('modalCurrentPrice').textContent = currentPrice;
            document.getElementById('modalOriginalPrice').textContent = originalPrice;
            
            // Show modal
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('productModal');
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Modal add to cart functionality
        document.querySelector('.modal-add-to-cart').addEventListener('click', function() {
            const productName = document.getElementById('modalTitle').textContent;
            
            // Visual feedback
            this.style.background = '#dc2626';
            this.style.color = 'white';
            this.innerHTML = '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg> Added!';
            
            setTimeout(() => {
                this.style.background = '';
                this.style.color = '';
                this.innerHTML = '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg> Add to Cart';
            }, 1500);
            
            console.log(`Added to cart from modal: ${productName}`);
        });

        // Modal buy now functionality
        document.querySelector('.modal-buy-now').addEventListener('click', function() {
            const productName = document.getElementById('modalTitle').textContent;
            
            // Visual feedback
            this.textContent = 'Processing...';
            this.style.background = '#10b981';
            
            setTimeout(() => {
                this.textContent = 'Buy Now';
                this.style.background = '';
            }, 1500);
            
            console.log(`Buy now from modal: ${productName}`);
        });

        // Close modal on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Search functionality
        const searchInput = document.querySelector('.search-input');
        const searchBtn = document.querySelector('.search-btn');
        
        if (searchBtn && searchInput) {
            searchBtn.addEventListener('click', function() {
                filterProducts();
            });

            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    filterProducts();
                }
            });
        }

        // Sort functionality
        const sortSelect = document.querySelector('.sort-select');
        if (sortSelect) {
            sortSelect.addEventListener('change', function() {
                filterProducts();
            });
        }

        // Filter products function
        function filterProducts() {
            // In a real application, this would filter the products
            console.log('Filtering products...');
            const resultsCount = document.querySelector('.results-count');
            if (resultsCount) {
                const randomCount = Math.floor(Math.random() * 20) + 10;
                resultsCount.textContent = randomCount;
            }
        }
    </script>
</body>
</html>