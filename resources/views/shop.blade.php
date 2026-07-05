<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rugged Backpack Store</title>
    <meta name="description" content="Explore our collection of durable, premium backpacks and outdoor gear.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">Rugged<span>Gear</span></a>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#shop">Shop Bags</a>
                <a href="#about">Our Story</a>
            </div>
            <div class="nav-actions">
                <button class="cart-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    <span class="cart-count">0</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="hero">
        <div class="hero-content">
            <span class="badge">Expedition Series</span>
            <h1 class="hero-title">Gear Up For <br><span class="text-gradient">The Unknown</span></h1>
            <p class="hero-subtitle">Embrace rugged adventure and exploration. Discover top-tier outdoor equipment crafted to withstand the elements.</p>
            <div class="hero-buttons">
                <a href="#shop" class="btn btn-primary">Shop Now</a>
                <a href="#shop" class="btn btn-secondary">Our Story</a>
            </div>
        </div>
    </header>

    <!-- Shop Section -->
    <main id="shop" class="shop-section">
        <div class="section-header">
            <h2>Expedition Essentials</h2>
            <p>Browse through our handpicked selection of rugged outdoor gear.</p>
        </div>
        
        <div class="products-grid" id="products-grid">
            @foreach($products as $product)
            <div class="product-card">
                <div class="product-img-wrap">
                    <img src="{{ $product->image_url }}" alt="{{ $product->title }}" class="product-img" loading="lazy">
                </div>
                <div class="product-info">
                    <span class="product-category">{{ $product->category }}</span>
                    <h3 class="product-title">{{ $product->title }}</h3>
                    <div class="product-price">${{ $product->price }}</div>
                    <button class="add-to-cart-btn" data-id="{{ $product->id }}">Add to Cart</button>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="#" class="logo">Rugged<span>Gear</span></a>
                <p>Equipping explorers with the finest backpacks and adventure gear since 2026.</p>
            </div>
            <div class="footer-links">
                <h4>Quick Links</h4>
                <a href="#">Shop All</a>
                <a href="#">Tents</a>
                <a href="#">Backpacks</a>
                <a href="#">Accessories</a>
            </div>
            <div class="footer-links">
                <h4>Help</h4>
                <a href="#">Shipping & Returns</a>
                <a href="#">Store Policy</a>
                <a href="#">Contact</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Rugged Gear. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
