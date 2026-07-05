document.addEventListener('DOMContentLoaded', () => {
    const cartCountEl = document.querySelector('.cart-count');
    let cartCount = 0;

    // Buy Now functionality
    const buyBtns = document.querySelectorAll('.buy-now-btn');
    buyBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            cartCount++;
            cartCountEl.textContent = cartCount;
            
            // Visual feedback
            const originalText = this.textContent;
            this.textContent = "Purchased!";
            this.style.background = "var(--primary-color)";
            this.style.color = "white";
            
            setTimeout(() => {
                this.textContent = originalText;
                this.style.background = "";
                this.style.color = "";
            }, 1000);
        });
    });
});
