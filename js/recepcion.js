///programado con ES6


const formulario = document.querySelector('#formBuscar');
const ui = new Interfaz();
const pedidos = new Pedido();

formulario.addEventListener('submit', function(e) {
    e.preventDefault();


    const factura = document.getElementById('facture').value;

    if (factura === '') {
        ui.mostrarMensaje("El numero de factura enviado no es permitido", "error");



    } else {

        const form = new FormData(formulario);
        pedidos.listarPedido(form);

    }

});
/*const boton = document.querySelector('.btn-success');
boton.addEventListener('click', function() {

    alert();
});*/


function recped(idpedido) {
    //alert(idpedido);
    $("#pdcod").val(idpedido);

    $.ajax({
        url: baseurl + 'Cpedidomultiple/resumenproceso',
        type: 'POST',
        data: { idpedido: idpedido },
        success: function(data) {
            obj = JSON.parse(data);
            table = '<table class="table"><tr><th>Nombre Trabajador</th><th>Factura</th><th>Cantidad Realizada</th><th>Accion</th><tr>';
            $.each(obj, function(i, items) {
                table += '<tr><td>' + items.nombres + '</td><td>' + items.factura + '</td><td>' + items.cantidad + '</td><td><input onclick="procesorec(' + items.idproceso + ',' + items.cantidad + ',' + items.idpedido + ');" type="button" class="btn" value="Recibir" ></td>';
            });
            table += '</table>';

            $("#resumentable").html(table);

        }
    })
}
$('#tblrecepcion').DataTable();

function procesorec(idproceso, cantidad, idpedido) {

    //alert(idproceso);
    $.ajax({
        url: baseurl + 'Cpedidomultiple/recibirPedidos',
        type: 'POST',
        data: { idproceso: idproceso, cantidad: cantidad, idpedido: idpedido },
        success: function(data) {

            alert(data);
            // $('#tblrecepcion').DataTable().ajax.reload();


        }

    })
};