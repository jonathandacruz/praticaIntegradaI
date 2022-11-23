(function ($) {
    "use strict";

    $(document).ready(function($){
        var output = ""
        var cartSession = []

        cartSession = JSON.parse(sessionStorage.getItem('shopping-cart'));

        for(var i in cartSession) {
            var products = JSON.parse(cartSession[i])

            console.log(products.productQuantity)
 
            output += `<tr class="table-body-row">
            <td class="product-remove"><a href="#"><i class="fa fa-check"></i></a></td>
            <td class="product-image"><img src="${products.productImage}" alt=""></td>
            <td class="product-name">${products.productName}</td>
            <td class="product-price">${products.productPrice}</td>
            <td class="product-quantity"><input type="number" value=${products.productQuantity} placeholder="0"></td>
            <td class="product-total"> R$ ${products.productPrice.replace(/\D/g, '')/100 * products.productQuantity}</td>
        </tr> `
        
        
        }

        $('.cart-table tbody').html(output);


        $(".cart-clear-shop").on("click", function() {
            emptyCart()
            location.reload(true);
        });

        function emptyCart() {
            if (sessionStorage.getItem('shopping-cart')) {
                sessionStorage.removeItem('shopping-cart');
            }
        }
    })

}(jQuery));