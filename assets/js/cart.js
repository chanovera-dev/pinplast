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

    function down() { 
        const inputElement = this.parentNode.querySelector('[type=number]');
        inputElement.stepDown(); 
        updateLocalStorage(inputElement);
    }
    buttonLess.onclick = down;

    function up() { 
        const inputElement = this.parentNode.querySelector('[type=number]');
        inputElement.stepUp(); 
        updateLocalStorage(inputElement);
    }
    buttonPlus.onclick = up;

    input.insertAdjacentElement("afterend", buttonPlus);
    input.insertAdjacentElement("beforebegin", buttonLess);

    // Recuperar el valor del localStorage y establecerlo en el campo de cantidad
    const savedValue = localStorage.getItem(input.name);
    if (savedValue !== null) {
        input.value = savedValue;
    }
});

// Función para actualizar el valor en localStorage
function updateLocalStorage(inputElement) {
    localStorage.setItem(inputElement.name, inputElement.value);
}



// Recuperar el valor del localStorage y establecerlo en el campo de cantidad al cargar la página
window.addEventListener('load', () => {
    const numberInputs = document.querySelectorAll('input[type="number"]');
    numberInputs.forEach(input => {
        const savedValue = localStorage.getItem(input.name);
        if (savedValue !== null) {
            input.value = savedValue;
        }
    });
});
