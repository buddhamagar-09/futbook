window.incrementqty = function (cartId) {
    const input = document.getElementById('qty-' + cartId);

    if (!input) return;

    let quantity = parseInt(input.value) || 1;
    let max = parseInt(input.getAttribute('max'));

    if (isNaN(max)) {
        input.value = quantity + 1;
        return;
    }

    if (quantity < max) {
        input.value = quantity + 1;
    }
};

window.decreaseqty = function (cartId) {
    const input = document.getElementById('qty-' + cartId);

    if (!input) return;

    let quantity = parseInt(input.value) || 1;

    if (quantity > 1) {
        input.value = quantity - 1;
    }
};