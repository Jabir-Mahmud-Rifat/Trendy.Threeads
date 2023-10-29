$(document).ready(function () {
    var cart = [];

    $(".add-to-cart").on("click", function () {
        var productId = $(this).data("product-id");
        var productName = $(this).data("product-name");
        var productPrice = $(this).data("product-price");

        cart.push({
            id: productId,
            name: productName,
            price: productPrice
        });

        updateCart();
    });

    function updateCart() {
        var cartItems = $("#cart-items");
        cartItems.empty();
        var total = 0;

        cart.forEach(function (item) {
            total += item.price;
            cartItems.append(`<li>${item.name} - $${item.price.toFixed(2)}</li>`);
        });

        $("#total-price").text("Total: $" + total.toFixed(2));
    }
});s