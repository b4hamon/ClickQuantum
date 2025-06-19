document.addEventListener("DOMContentLoaded", function () {
    const createForm = document.getElementById("create-activity-form");
    const editForm = document.getElementById("edit-activity-form");

    function limpiarErrores(form) {
        form.querySelectorAll(".error-message").forEach(el => el.remove());
    }

    function mostrarError(input, mensaje) {
        let errorDiv = document.createElement("div");
        errorDiv.className = "error-message text-danger mt-1";
        errorDiv.innerText = mensaje;
        input.parentNode.appendChild(errorDiv);
    }

    function esFechaFutura(fecha) {
        const hoy = new Date();
        const fechaIngresada = new Date(fecha);
        return fechaIngresada > hoy;
    }

    function validarFormulario(form) {
        form.addEventListener("submit", function (event) {
            limpiarErrores(form);
            let valid = true;

            const activityDescription = form.querySelector("#activity_description");
            const activityDateLimit = form.querySelector("#activity_date_limit");
            const idCourse = form.querySelector("#id_course");

            if (!activityDescription.value.trim()) {
                mostrarError(activityDescription, "La descripción no puede estar vacía.");
                valid = false;
            }

            if (!activityDateLimit.value) {
                mostrarError(activityDateLimit, "Debes seleccionar una fecha límite.");
                valid = false;
            } else if (!esFechaFutura(activityDateLimit.value)) {
                mostrarError(activityDateLimit, "La fecha límite debe ser en el futuro.");
                valid = false;
            }

            if (!idCourse.value) {
                mostrarError(idCourse, "Debes seleccionar un curso.");
                valid = false;
            }

            if (!valid) {
                event.preventDefault(); 
            }
        });
    }

    if (createForm) {
        validarFormulario(createForm);
    }

    if (editForm) {
        validarFormulario(editForm);
    }
});
