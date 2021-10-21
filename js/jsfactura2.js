lista();

function lista() {

    $('#mitabla').DataTable({
        'paging': true,
        'info': true,
        'filter': true,
        'stateSave': true,

        'ajax': {

            "url": baseurl + "Cadmin/listaFac",


            'type': 'POST',
            dataSrc: ''
        },

        'columns': [

            { data: 'factura', 'sClass': 'dt-body-center' },
            { data: 'nombres' },
            { data: 'cantprod' },
            {
                "orderable": true,
                render: function(data, type, row) {





                    //return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
                    return '<a  href="#"  class="btn btn-primary  btn-sm" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="llamarPDF(\'' + row.factura + '\');"><i class=" fa fa-eye"></i>Detalles</a><a href="#"  class="btn btn-primary  btn-sm" title="Editar informacion" data-toggle="modal" onClick="Fact(\'' + row.factura + '\',\'' + row.idpersona + '\');" data-target="#editarfactura">Agregar</a>';
                }
            }


        ],

        "order": [
            [0, "asc"]
        ],

    });


}


function llamarPDF(factura) {

    window.open(baseurl + "Cpdfreport/factura?factura=" + factura + "");
}

function Fact(factura, idpersona) {

    $('#numfact').val(factura);
    $('#txtfactura').text(factura);
    $("#idpersona").val(idpersona);


}


function grabarregistro2(evt) {
    evt.preventDefault();

    //console.log(typeof($('#cantidad').val()));

    if ($('#cantidad').val() === '') {
        alert('Cantidad necesaria');
    } else if ($('#vlcantidad').val() === '') {
        alert('valor indefinido');

    } else if ($('#descripcion').val() === '') {
        alert('Hace falta descripcion');
    } else {


        $.ajax({


            'url': baseurl + 'Cfactura/addfactura',
            'type': 'POST',
            'data': $('#formadd').serialize(),
            success: function(data) {
                alert('Registro adicionado a factura');



            }


        })
    }





}