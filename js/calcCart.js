function calcCart () {
    const cartcart = document.querySelector('.cartcart');
    const pr_in_cart = document.querySelectorAll('.product_in_cart');
    const totalPriceEl = document.querySelector('.total-price');

    let totalPrice = 0;
    let tp = 0;

    pr_in_cart.forEach(function (item) {
        const amountEl = item.querySelector('[data-counter]');
        const priceEl = item.querySelector('.pr_cart_price');
        

        const currentPrice = parseInt(amountEl.innerText) * parseInt(priceEl.innerText);
        tp += currentPrice;
        localStorage.setItem('key', tp);
        totalPrice += currentPrice;
    })
    // Цена на странице
    totalPriceEl.innerText = totalPrice;
};