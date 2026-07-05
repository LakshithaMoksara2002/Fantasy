<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantasy</title>
    <meta name="description" content="Explore our collection of durable, premium backpacks and outdoor gear.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">Fan<span>tasy</span></a>
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
                    <button class="buy-now-btn" data-id="{{ $product->id }}">Buy Now</button>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="#" class="logo">Fan<span>tasy</span></a>
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
            <p>&copy; 2026 Fantasy. All rights reserved.</p>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/1234567890" class="whatsapp-float" target="_blank" rel="noopener noreferrer">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
        </svg>
    </a>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
