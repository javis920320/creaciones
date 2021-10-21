class Interfaz {


    mostrarMensaje(mensaje, tipo) {
        const div = document.createElement('span');
        console.log(mensaje);

        if (tipo === 'error') {
            div.classList.add('alert-danger');
            div.textContent = `${mensaje}`;

        } else {
            div.classList.add('alert-success');
            div.textContent = `${mensaje}`;

        }



        document.querySelector('#msn').appendChild(div);

    }


    listarPedidos(lista) {

        console.log(lista);

    }
}