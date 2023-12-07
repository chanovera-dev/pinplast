// Encuentra todos los elementos input de tipo número dentro del carrito de WooCommerce
const numberInputs = document.querySelectorAll('.woocommerce-cart-form input[type="number"]');

// Itera sobre cada input de número y agrega los botones
numberInputs.forEach(input => {
    const buttonLess = document.createElement("button");
    const buttonPlus = document.createElement("button");
    buttonLess.type = "button";
    buttonPlus.type = "button";
    buttonLess.innerText = "-";
    buttonPlus.innerText = "+";

    function updateQuantity() {
        const quantityInput = this.parentNode.querySelector('[type=number]');
        const currentQuantity = parseInt(quantityInput.value, 10);

        if (this === buttonLess) {
            quantityInput.stepDown();
        } else if (this === buttonPlus) {
            quantityInput.stepUp();
        }

        // Actualiza la cantidad utilizando las funciones de WooCommerce
        $(quantityInput).trigger('change');
    }

    buttonLess.onclick = updateQuantity;
    buttonPlus.onclick = updateQuantity;

    // Inserta los botones después del input de cantidad
    input.insertAdjacentElement("afterend", buttonPlus);
    // Inserta el botón de decremento antes del input de cantidad
    input.insertAdjacentElement("beforebegin", buttonLess);
});
