// Encuentra todos los elementos input de tipo número
const numberInputs = document.querySelectorAll('input[type="number"]');

// Itera sobre cada input de número y agrega los botones
numberInputs.forEach(input => {
    const buttonLess = document.createElement("button");
    const buttonPlus = document.createElement("button");
    buttonLess.type = "button";
    buttonPlus.type = "button";
    buttonLess.innerText = "-";
    buttonPlus.innerText = "+";

    function down() { this.parentNode.querySelector('[type=number]').stepDown(); }
    buttonLess.onclick = down;

    function up() { this.parentNode.querySelector('[type=number]').stepUp(); }
    buttonPlus.onclick = up;

    input.insertAdjacentElement("afterend", buttonPlus);
    input.insertAdjacentElement("beforebegin", buttonLess);
});