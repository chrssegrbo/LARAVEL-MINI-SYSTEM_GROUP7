<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/landing-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact-page.css') }}">
</head>
<body>
    <!-- Navbar -->
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
                    <li><a href="#" class="nav-link active">Contact</a></li>
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

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We're here to help you with all your hardware needs. Get in touch with our team for expert advice and support.</p>
        </div>
    </section>

    <!-- Contact Container -->
    <div class="contact-main">
        <div class="contact-grid">
            <!-- Left Column -->
            <div class="contact-left">
                <!-- Get in Touch Section -->
                <div class="contact-info-section">
                    <h2>Get in Touch</h2>
                    
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="#dc2626">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                        </div>
                        <div class="contact-info-content">
                            <h3>Phone Number</h3>
                            <p>Main: <a href="tel:(032)345-6789">(032) 345-6789</a><br>
                            Mobile: <a href="tel:+639175678901">+63 917 567 8901</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="#dc2626">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </div>
                        <div class="contact-info-content">
                            <h3>Email Address</h3>
                            <p>Support: <a href="mailto:support@hardstock.com">support@hardstock.com</a></p>
                        </div>
                    </div>

                                        
                    </div>
                </div>

                <!-- Map -->
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31384.342408647244!2d123.99624017511097!3d10.497292234450745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9ba5f590688e9%3A0x3c04155145a9da8d!2sSabang%2C%20Danao%2C%20Cebu!5e0!3m2!1sen!2sph!4v1765848133554!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        width="100%" 
                        height="300" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <!-- Right Column -->
            <div class="contact-right">
                <!-- Contact Form Section -->
                <div class="contact-form-section">
                    <h2>Send Us a Message</h2>
                    <p>Have a question or need assistance? Fill out the form below and we'll get back to you as soon as possible.</p>
                    
                    <form class="contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first-name">First Name *</label>
                                <input type="text" id="first-name" name="first-name" required>
                            </div>
                            <div class="form-group">
                                <label for="last-name">Last Name *</label>
                                <input type="text" id="last-name" name="last-name" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+63 (XXX) XXX-XXXX">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="product">Product Information</option>
                                <option value="order">Order Status</option>
                                <option value="return">Return & Exchange</option>
                                <option value="technical">Technical Support</option>
                                <option value="complaint">Complaint</option>
                                <option value="partnership">Business Partnership</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required placeholder="Tell us more about your inquiry..."></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <h2>Frequently Asked Questions</h2>
            
            <div class="faq-item">
                <div class="faq-question">What are your business hours?</div>
                <div class="faq-answer">
                    <p>We're open Monday to Friday from 8:00 AM to 6:00 PM, and Saturday from 8:00 AM to 5:00 PM. We're closed on Sundays and holidays.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">Do you offer delivery services?</div>
                <div class="faq-answer">
                    <p>Yes, we offer delivery services within Cebu City and surrounding areas. Delivery fees may apply depending on your location and order size. Please contact us for more details.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">What payment methods do you accept?</div>
                <div class="faq-answer">
                    <p>We accept cash, credit/debit cards (Visa, Mastercard), GCash, Maya, and bank transfers. We also offer installment plans for qualified purchases.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">Do you have a return policy?</div>
                <div class="faq-answer">
                    <p>Yes, we offer a 7-day return policy for unused items in their original packaging. Please bring your receipt for any returns or exchanges.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">Can I order items that are out of stock?</div>
                <div class="faq-answer">
                    <p>Absolutely! We can special order items for you. Contact us with the product details, and we'll check availability and estimated delivery time.</p>
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
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Customer Service</h3>
            <ul class="footer-links">
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Shipping Info</a></li>
                <li><a href="#">Returns & Exchanges</a></li>
                <li><a href="#">Order Tracking</a></li>
                <li><a href="#">Privacy Policy</a></li>
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

    <script>
        // FAQ Accordion
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    // Close other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    item.classList.toggle('active');
                });
            });

            // Contact Form Validation
            const contactForm = document.querySelector('.contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Basic validation
                    const requiredFields = contactForm.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.style.borderColor = '#dc2626';
                        } else {
                            field.style.borderColor = '#e0e0e0';
                        }
                    });
                    
                    if (isValid) {
                        // Show success message (in real app, this would submit to server)
                        alert('Thank you for your message! We will get back to you soon.');
                        contactForm.reset();
                    } else {
                        alert('Please fill in all required fields.');
                    }
                });
            }
        });
    </script>
</body>
</html>