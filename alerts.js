let btningresar = document.getElementById('btningresar')
console.log(btningresar);

const ingresarUsuario = () => {
    Swal
    .fire({
        title: "Nombre de usuario",
        input: "text",
        showCancelButton: true,
        confirmButtonText: "Guardar",
        cancelButtonText: "Cancelar",
        inputValidator: (value) => {
                if (!value) {
                    return 'El nombre de usuario no puede estar vacío'
                }
        }
    })
    .then(resultado => {
        if (resultado.value) {
            let usuarioIngresado = resultado.value;
            Swal.fire({
                title: 'Usuario correcto',
                html: `Bienvenido ${resultado.value}` ,
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            })
            btningresar.innerHTML = `<p>Bienvenido ${resultado.value}</p>`
        }
    });

}




