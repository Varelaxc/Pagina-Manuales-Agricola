registroForm = document.getElementById("registro-form");
registroForm.addEventListener("submit", function (event) {
    event.preventDefault();

    if (event.target.nombre.value === '') {
        document.getElementById("registro-invalido").style.display = "block";
        return;
    }
    if (event.target.apellido.value === '') {
        document.getElementById("registro-invalido").style.display = "block";
        return;
    }
    if (event.target.email.value === '') {
        document.getElementById("registro-invalido").style.display = "block";
        return;
    }
    if (event.target.cuenta.value === '') {
        document.getElementById("registro-invalido").style.display = "block";
        return;
    }
    if (event.target.carrera.value === '' || event.target.carrera.value === '...') {
        document.getElementById("registro-invalido").style.display = "block";
        return;
    }

    document.getElementById("registro-invalido").style.display = "none";

    const formData = {
        nombre: event.target.nombre.value,
        apellido: event.target.apellido.value,
        email: event.target.email.value,
        cuenta: event.target.cuenta.value,
        carrera: event.target.carrera.value,
    }

    fetch('insert.php', {
        method: "POST",
        body: JSON.stringify(formData),
        headers: {
            "Content-type": "application/json; charset=UTF-8"
        }
    }).then(response => response.json())
        .then((data) => {
            if (data.status === "okidoki") {
                document.getElementById("qr-code").style.display = "block";
                document.getElementById("boton-registro").disabled = true;
            } else {
                document.getElementById("registro-erroneo").style.display = "block";

            }

        });


}); 