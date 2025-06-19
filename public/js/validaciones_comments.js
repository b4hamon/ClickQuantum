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

            if ((campo.tagName === "INPUT" || campo.tagName === "SELECT") && campo.id !== "user_id") {
                if (!campo.value.trim()) {
                    valido = false;
                    let error = document.createElement("div");
                    error.classList.add("error-message");
                    error.textContent = "Este campo es obligatorio.";
                    campo.insertAdjacentElement("afterend", error);
                }
            }
        });

        return valido;
    }

    let formCreate = document.getElementById("form-create-comment");
    if (formCreate) {
        formCreate.addEventListener("submit", function (event) {
            if (!validarFormulario("form-create-comment")) {
                event.preventDefault();
            }
        });
    }

    let formEdit = document.getElementById("form-edit-comment");
    if (formEdit) {
        formEdit.addEventListener("submit", function (event) {
            if (!validarFormulario("form-edit-comment")) {
                event.preventDefault();
            }
        });
    }
});
