document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        const formCreate = document.getElementById("form-create-category");
        const formEdit = document.getElementById("form-edit-category");

        if (formCreate) {
            validarFormulario(formCreate);
        }

        if (formEdit) {
            validarFormulario(formEdit);
        }
    }, 100);
});

function validarFormulario(form) {
    form.addEventListener("submit", function (event) {
        let isValid = true;

        const categoryName = form.querySelector("#category_name");
        if (!categoryName.value.trim()) {
            mostrarError(categoryName, "El nombre de la categoría es obligatorio");
            isValid = false;
        } else {
            limpiarError(categoryName);
        }

        if (!isValid) {
            event.preventDefault(); 
    }});
}

function mostrarError(input, mensaje) {
    limpiarError(input);
    const errorDiv = document.createElement("div");
    errorDiv.className = "error-message";
    errorDiv.textContent = mensaje;
    input.classList.add("is-invalid");
    input.parentNode.appendChild(errorDiv);
}

function limpiarError(input) {
    input.classList.remove("is-invalid");
    const errorDiv = input.parentNode.querySelector(".error-message");
    if (errorDiv) {
        errorDiv.remove();
    }
}

