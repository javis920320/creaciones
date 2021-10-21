function registro(nombre, identificacion, telefono, direccion, cantidad, valorU, descripcion, vtotal) {
    this.nombre = nombre;
    this.identificacion = identificacion;
    this.telefono = telefono;
    this.direccion = direccion;
    this.cantidad = cantidad;
    this.vlunidad = valorU;
    this.descripcion = descripcion;
    this.vtotal = vtotal;
}


//variables
var tableResumen = document.querySelector('#resumen');
//actions Listeners
inciarListener();

function inciarListener() {
    tableResumen.addEventListener('click', eliminarRes);

}

//funcriones

ls = Array();

function agregar(evt) {
    evt.preventDefault();
    if ($('#identificacion').val() === 0 || $('#nombre').val() === '' || $('#direccion').val() === '' || $('#telefono').val() === 0 || $('#cantidad').val() === 0 || $('#vlcantidad').val() === 0 || $('#descripcion').val() === '') {
        $('#alerta').html('<div class="alert alert-danger mialert" role="alert">Recuerda que todos los campos  son requeridos</div>');
        setTimeout(function() {
            $('.mialert').remove();
        }, 2000);

    } else {



        ls.push(new registro($('#nombre').val(), $('#identificacion').val(), $('#telefono').val(), $('#direccion').val(), $('#cantidad').val(), $('#vlcantidad').val(), $('#descripcion').val(), $('#vltotal').val()));
        html = '';
        i = 0;
        ls.forEach(element => {

            html += '<tr class="table-primary"><td class="idborrar">' + i + '</td><td>' + element.cantidad + '</td> <td>' + element.descripcion + '</td> <td>' + element.vlunidad + '</td><td>' + element.vtotal + '</td><td><a href="#" class="borrar-resumen">X</a></td></tr>';
            i = i + 1;
        });

        $('#resumen').html(html);

    }

    /* if ($('#identificacion').val() == 0) {
        $('#alerta').html('<div class="alert alert-danger" role="alert">El numero de Identificacion es requerido</div>');

    } else if ($('#nombre').val() == '') {
        $('#alerta').html('<div class="alert alert-danger" role="alert">El nombre es requerido</div>');


    } else if ($('#direccion').val() == '') {
        $('#alerta').html('<div class="alert alert-danger" role="alert">Campo requerido</div>');

    } else if ($('#telefono').val() == 0) {
        $('#alerta').html('<div class="alert alert-danger" role="alert">Campo requerido</div>');

    } {
        ls.push(new registro($('#nombre').val(), $('#identificacion').val(), $('#telefono').val(), $('#direccion').val(), $('#cantidad').val(), $('#vlcantidad').val(), $('#descripcion').val(), $('#vltotal').val()));
        html = '';
        i = 0;
        ls.forEach(element => {

            html += '<tr class="table-primary"><td class="idborrar">' + i + '</td><td>' + element.cantidad + '</td> <td>' + element.descripcion + '</td> <td>' + element.vlunidad + '</td><td>' + element.vtotal + '</td><td><a href="#" class="borrar-resumen">X</a></td></tr>';
            i = i + 1;
        });

        $('#resumen').html(html);

    }


*/




}

function calculartotal() {

    var resultado;
    var cantidad = $("#cantidad").val();
    var vunidad = $("#vlcantidad").val();
    resultado = parseInt(cantidad) * parseInt(vunidad);

    $('#vltotal').val(resultado);

}




function grabarregistro(evt) {
    evt.preventDefault();



    if (ls.length == 0) {
        alert('Debes agregar  algo a la lista');





    } else {
        var jsonString = JSON.stringify(ls);
        $.ajax({

            'url': baseurl + 'Cfactura/grabar',
            'type': 'POST',
            'data': { data: jsonString },
            success: function(data) {

                window.open(baseurl + "/Cpdfreport/factura?factura=" + data + "");


            }

        });


    }



}

/*listaFacturas();

function listaFacturas() {

    $.get(baseurl + "Cadmin/listaFac", function(data) {

        var obj = JSON.parse(data);
        html = '';

        $.each(obj, function(i, index) {
            html += '<tr>' + index.factura + '</tr>';


        });
        console.log(html);

        $('#mitabla').append(html);
    });
}*/



function llamarPDF(factura) {

    window.open(baseurl + "Cpdfreport/factura?factura=" + factura + "");
}








function eliminarRes(e) {

    e.preventDefault();
    let pedido;
    let borrarpedido;
    let pedidos;

    //console.log(e.target.classList.contains('borrar-resumen')
    if (e.target.classList.contains('borrar-resumen')) {

        e.target.parentElement.parentElement.remove();
        pedido = e.target.parentElement.parentElement;

        borrarpedido = pedido.querySelector('.idborrar').textContent;


        ls.splice(borrarpedido, 1);





    }


}