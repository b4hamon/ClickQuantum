document.addEventListener("DOMContentLoaded", function () {
    function validarFormulario(formId) {
        let form = document.getElementById(formId);
        if (!form) return;

        let campos = form.querySelectorAll("input, select");
        let valido = true;

        campos.forEach(campo => {
            let mensajeError = campo.nextElementSibling;
            if (mensajeError && mensajeError.classList.contains("error-message")) {
                mensajeError.remove();
            }

            if (!campo.value.trim()) {
                valido = false;
                mostrarError(campo, "Este campo es obligatorio.");
            }

            if (campo.id === "course_duration" && (campo.value <= 0 || isNaN(campo.value))) {
                valido = false;
                mostrarError(campo, "La duración debe ser mayor a 0 horas.");
            }
        });

        return valido;
    }

    function mostrarError(campo, mensaje) {
        let error = document.createElement("div");
        error.classList.add("error-message");
        error.style.color = "red";
        error.textContent = mensaje;
        campo.insertAdjacentElement("afterend", error);
    }

    let formCreate = document.getElementById("form-create-course");
    if (formCreate) {
        formCreate.addEventListener("submit", function (event) {
            if (!validarFormulario("form-create-course")) {
                event.preventDefault();
            }
        });
    }

    let formEdit = document.getElementById("form-edit-course");
    if (formEdit) {
        formEdit.addEventListener("submit", function (event) {
            if (!validarFormulario("form-edit-course")) {
                event.preventDefault();
            }
        });
    }
});
