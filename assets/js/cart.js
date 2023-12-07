jQuery(document).ready(function($) {
    // Encuentra todos los elementos input de tipo número dentro del carrito de WooCommerce
    const numberInputs = $('.woocommerce-cart-form input[type="number"]');

    // Itera sobre cada input de número y agrega los botones
    numberInputs.each(function() {
        const buttonLess = document.createElement("button");
        const buttonPlus = document.createElement("button");
        buttonLess.type = "button";
        buttonPlus.type = "button";
        buttonLess.innerText = "-";
        buttonPlus.innerText = "+";

        function updateQuantity() {
            const quantityInput = $(this).parent().find('[type=number]');
            const currentQuantity = parseInt(quantityInput.val(), 10);

            if (this === buttonLess) {
                quantityInput[0].stepDown();
            } else if (this === buttonPlus) {
                quantityInput[0].stepUp();
            }

            // Actualiza la cantidad utilizando las funciones de WooCommerce
            quantityInput.trigger('change');
        }

        buttonLess.onclick = updateQuantity;
        buttonPlus.onclick = updateQuantity;

        // Inserta los botones solo si no se han insertado previamente
        if (!$(this).data('buttons-added')) {
            // Inserta los botones después del input de cantidad
            $(this).after(buttonPlus);
            // Inserta el botón de decremento antes del input de cantidad
            $(this).before(buttonLess);

            // Marca el elemento como que los botones ya se han agregado
            $(this).data('buttons-added', true);
        }
    });
});
