class Pedido {


    listarPedido(factura) {
        console.log(factura);

        fetch(baseurl + 'Crecepcion/buscarProcesosFactura', {
                method: 'POST',
                body: factura
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(myJson) {
                const ul = document.createElement('ul');

                let li = '';
                myJson.forEach(pedido => {
                    li += `<tr><td>${pedido.idpedido}</td><td>${pedido.nomtipoprod}</td><td>${pedido.factura}</td><td>${pedido.facultad}</td><td>${pedido.cantidad}</td><td>${pedido.talla}</td><td>${pedido.descripcion}</td><td>${pedido.nomtipoprod}</td><td>${pedido.fecha_ingreso}</td><td>${pedido.fentrega}</td><td>${pedido.c}</td><td><button class="btn btn-success" data-toggle="modal" data-target="#recibirPed" onclick="recped(${pedido.idpedido})">Recepcion</button></td></tr>`;


                });


                document.getElementById('lista').innerHTML = li;


            });





    }
}