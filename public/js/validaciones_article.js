window.onload = function () {
    const formCreate = document.getElementById("form-create-article");
    const formEdit = document.getElementById("form-edit-article");

    console.log("Formulario de creación:", formCreate);
    console.log("Formulario de edición:", formEdit);

    if (formCreate) {
        validarFormulario(formCreate);
    }

    if (formEdit) {
        validarFormulario(formEdit);
    }
};

function validarFormulario(form) {
    form.addEventListener("submit", function (event) {
        let isValid = true;

        const title = form.querySelector("#title");
        if (!title.value.trim()) {
            mostrarError(title, "El título es obligatorio");
            isValid = false;
        } else {
            limpiarError(title);
        }

        const content = form.querySelector("#content");
        if (!content.value.trim()) {
            mostrarError(content, "El contenido no puede estar vacío");
            isValid = false;
        } else {
            limpiarError(content);
        }

        const publishedAt = form.querySelector("#published_at");
        if (!publishedAt.value) {
            mostrarError(publishedAt, "La fecha es obligatoria");
            isValid = false;
        } else if (!validarFechaNoFutura(publishedAt.value)) {
            mostrarError(publishedAt, "La fecha no puede ser futura");
            isValid = false;
        } else {
            limpiarError(publishedAt);
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
}

function validarFechaNoFutura(fecha) {
    if (!fecha) return true;
    const fechaIngresada = new Date(fecha);
    const fechaActual = new Date();

    fechaIngresada.setHours(0, 0, 0, 0);
    fechaActual.setHours(0, 0, 0, 0);

    return fechaIngresada <= fechaActual;
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
    const errorDiv = input.parentNode.querySelector(".text-danger");
    if (errorDiv) {
        errorDiv.remove();
    }
}
