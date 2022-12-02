(function ($) {
    "use strict";

    $(document).ready(function($){
        var output = ""
        var totOutput=""
        var totProdCart=0;
        var cartSession = []
 

        cartSession = JSON.parse(sessionStorage.getItem('shopping-cart'));

        output  = ` <tr>
                <td>Produto</td>
                <td>Total</td>
            </tr>`

        for(var i in cartSession) {
            var products = JSON.parse(cartSession[i])

             
            totProdCart += parseFloat(products.productPrice.replace(/\D/g, '')/100 * products.productQuantity)
            output += `
            
            <tr>
				<td>${products.productName}</td>
				<td>R$ ${products.productPrice.replace(/\D/g, '')/100 * products.productQuantity}</td>
			</tr>
             `
        
        
        }
 
        totOutput = `  
                            <tr>
                            <td>Subtotal</td>
                                <td><b>R$ ${totProdCart}</b></td>
                            </tr>
                            <tr>
                                <td>Entrega</td>
                                <td> <b>R$ 10.00 </b></td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td><b>R$ ${(parseFloat(totProdCart) + 10).toFixed(2)}</b></td>
                            </tr>
                   

        `

        $('.order-details-body').html(output );
        $('.checkout-details').html(totOutput );

        function emptyCart() {
            if (sessionStorage.getItem('shopping-cart')) {
                sessionStorage.removeItem('shopping-cart');
            }
        }

        $(".boxed-btn").on("click", function() {
            toastr.success('Compra finalizada com sucesso!', 'Compra finalizada com sucesso!', {timeOut: 5000});
            emptyCart()
             
        });


    })

}(jQuery));
