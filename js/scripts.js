registroForm = document.getElementById("registro-form");
registroForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const formData = {
        nombre: event.target.nombre.value,
        apellido: event.target.apellido.value,
        email: event.target.email.value,
        cuenta: event.target.cuenta.value,
        carrera: event.target.carrera.value
    }

    fetch('insert.php', {
        method: "POST",
        body: JSON.stringify(formData),
        headers: {
            "Content-type": "application/json; charset=UTF-8"
        }
    }).then(response => response.json())
        .then((data) => {
            if(data.status === "okidoki") {
                document.getElementById("qr-code").style.display = "block";
            }
        });


}); 