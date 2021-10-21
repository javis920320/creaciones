
cargarproductos();
let factura = '';

/*$('#btnbuscar').on('click', function() {
    $('#alerta').addClass('hide');
    $('#nombres').val('');
    $('#telefono').val('');
    txtide = $('#idcliente').val();
    if (txtide == '') {

        $('#alerta1').removeClass('hide');
    } else {
        $('#alerta1').addClass('hide');
        $.post(baseurl + "Cajax/buscarcliente", { id: txtide },
            function(data) {

                if (data == 0) {
                    console.log(data);
                    $('#alerta').removeClass('hide');
                    $('.contenedor_json').addClass('hide');
                    $('#formingc').removeClass('hide');

                } else {
                    $('#formularioacceso').removeClass('hide');
                    $('#factura').removeClass('hide');
                    $('#ingpedido').removeClass('hide');
                    var obj = JSON.parse(data);
                    $.each(obj, function(i, items) {
                        $('#nombres').val(items.nombres);
                        $('#telefono').val(items.telefono);
                        $(".contenedor_json").html('<span class="text-success"><strong><h1> Cliente:' + items.nombres + '</h1><strong></span>');
                        $('#idpersona').val(items.idcliente);
                    });

                    

                }

            });
    }


});*/


function cargarproductos() {
    document.getElementById('cont_tpcli').disabled=true;
    document.getElementById('dep').disabled=true;
    $.post(baseurl + "Ctipoprod/gettipoprod",
        { id: 1 },
        function(data) {
            var obj = JSON.parse(data);
            console.log(obj[0].nomtipoprod);
            html = '<select id="seltp" name="seltp" class="form-control">';
            $.each(obj, function(i, items) {
                html += '<option value="' + items.idtipoprod + '">' + items.nomtipoprod + '</option>';
            });

            html += '</select>';
            $(".prodtp").append(html);
            $("#tpprod").html(html);
            $("#tpprod2").html(html);

        });
}

/*$('#ingpedido').submit(function() {
   
    $.ajax({


        url: baseurl + 'Cpedidos/insertpedido',

        type: 'POST',
        data: $(this).serialize(),
        success: function(data) {
            alert(data);
    

        }
    });
});
*/

/*$('#tblpedidos').DataTable({
    'paging': true,
    'info': true,
    'filter': true,
    'stateSave': true,
    'destroy': true,

    'ajax': {

        "url": baseurl + "Cpedidos/lista",


        'type': 'POST',
        dataSrc: ''
    },

    'columns': [
        { data: 'factura', 'sClass': 'dt-body-center' },
        { data: 'nomtipoprod' },
        { data: 'facultad' },
        { data: 'cantidad' },
        { data: 'talla' },
        { data: 'descripcion' },
        { data: 'nombres' },
        { data: 'fecha_ingreso' },
        { data: 'fentrega' },
        {
            "orderable": true,
            render: function(data, type, row) {

                return '<span class="pull-right">' +
                    '<div class="dropdown">' +
                    '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                    '    Acciones' +
                    '  <span class="caret"></span>' +
                    '  </button>' +
                    '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                    '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\'' + row.factura + '\',\'' + row.facultad + '\',\'' + row.cantidad + '\',\'' + row.talla + '\',\'' + row.idpedido + '\',\'' + row.descripcion + '\',\'' + row.fentrega + '\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                    '    <li><a href="#" title="Enviar Pedido"  data-toggle="modal" data-target="#estado"  onClick="estadopedido(\'' + row.idpedido + '\',\'' + row.nombres + '\',\'' + row.telefono + '\')"><i style="color:green;" class="glyphicon glyphicon-plane"></i> Enviar Pedido</a></li>' +
                    '    <li><a href="#" title="Eliminar"  data-toggle="modal" data-target="#eliminar" onClick="eliminar(' + row.idpedido + ')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Eliminar</a></li>' +
                    '    </ul>' +
                    '</div>' +
                    '</span>' +
                    '<input type="checkbox" class="chk" name="chk"  value=' + row.idpedido + '>'

                ;

                
            }
        }


    ],

    "order": [
        [0, "asc"]
    ],

});
*/
/*eliminar = function(idpedido) {
    $('#idpedidod').val(idpedido);




};


function eliminarp() {

    var idpedido = $('#idpedidod').val();
    $.ajax({
        'url': 'Cajax/eliminarp',
        'type': 'POST',
        'data': { idpedido: idpedido },
        success: function(data) {
            alert(data);
            $('#tblpedidos').DataTable().ajax.reload();
            $('#tblresumen').DataTable().ajax.reload();



        }

    });
}

*/



/*$('#pdf').on('click', function() {


    window.open(baseurl + "/Pdfci/");



});*/

/*$('#lista').on('click', function() {


    window.open(baseurl + "Clista/");



});*/

/*selPersona = function(factura, facultad, cantidad, talla, idpedido, descripcion, fentregae) {

    $('#facturaedit').val(factura);
    $('#facultadedit').val(facultad);
    $('#fentregae').val(fentregae);
    $('#editcantidad').val(cantidad);
    $('#tallaedit').val(talla);
    $('#idpersonaedit').val(idpedido);
    $('#descripcion_edit').text(descripcion);

};
*/


/*$('#form-edit').submit(function() {
    $.ajax({
        url: baseurl + 'Cpedidos/editar',
        type: 'POST',
        data: $(this).serialize(),
        success: function(data) {
            alert(data);
        }
    });


});

estadopedido = function(idpedido, nombres, telefono) {
    $('#idpedido').val(idpedido);
    $('#enviar').val(2);



};

*/

function cambioestado() {
    var idpedido = $('#idpedido').val();
    var enviar = $('#enviar').val();

    $.ajax({
        url: baseurl + 'Cpedidos/enviarpedido',
        type: 'POST',
        data: { idpedido: idpedido, enviar: enviar },
        success: function(data) {
            alert(data);

            $('#tblpedidos').DataTable().ajax.reload();
            $('#tblresumen').DataTable().ajax.reload();

        }

    });


}


function agregarcliente() {
    var identificacion = $('#idcliente').val();
    var nombre = $('#nombres').val();
    var telefono = $('#telefono').val();
    if (nombre == '') {
        $('#spnnombre').text('Este Campo es requerido');
    } else if (telefono == '') {
        $('#spntel').text('Este Campo es requerido');
    } else {
        $('#spnnombre').addClass('hide');
        $('#spntel').addClass('hide');

        $.ajax({
            'url': baseurl + 'Cajax/crearcliente',
            'type': 'POST',
            'data': { nombres: nombre, celular: telefono, identidad: identificacion },
            success: function(data) {
                if (data) {
                    alert(data);
                    $(".contenedor_json").html('<span class="text-success"><strong><h1> Cliente:' + nombres + '</h1><strong></span>');
                    $('#idpersona').val(data);
                    $('#formularioacceso').removeClass('hide');
                    $('#pr').addClass('hide');
                } else {

                    alert('Error');
                }
            }


        });

    }

}






$('#agregarprod').on('click', function() {

    var cedula = $('#idpersona').val();
    var factura = $('#factura').val();
    var facultad = $('#facultad').val();
    var tipoprod = $('#seltp').val();
    var cantidad = $('#cantidad').val();
    var descripcion = $('#descripcion').val();
    var talla = $('#talla').val();
    var fentrega = $('#fentrega').val();

    if (factura == '') {
        $('#alerta2').removeClass('hide');

    } else if (facultad == '') {
        $('#alerta3').removeClass('hide');

    } else {


        $('#alerta2').addClass('hide');
        $('#alerta3').addClass('hide');

        $.post(baseurl + 'Cpedidos/insertpedido',
            
            { idpersona: cedula, factura: factura, facultad: facultad, cantidad: cantidad, talla: talla, descripcion: descripcion, seltp: tipoprod, fentrega: fentrega },
            function(data) {


                alert(data);


            });


        $('#cantidad').empty();
        $('#descripcion').empty();


        $('#tblresumen').DataTable({
            'paging': true,
            'info': true,
            'filter': true,
            'destroy': true,
            'stateSave': true,

            'ajax': {

                "url": baseurl + "Cpedidos/lista",
                'data': { factura: factura },

                'type': 'POST',
                dataSrc: ''
            },

            'columns': [
                { data: 'factura', 'sClass': 'dt-body-center' },
                { data: 'nomtipoprod' },
                { data: 'facultad' },
                { data: 'cantidad' },
                { data: 'talla' },
                { data: 'descripcion' },
                { data: 'nombres' },
                { data: 'fecha_ingreso' },
                { data: 'fentrega' },

                {
                    "orderable": true,
                    render: function(data, type, row) {



                        return '<span class="pull-right">' +
                            '<div class="dropdown">' +
                            '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                            '    Acciones' +
                            '  <span class="caret"></span>' +
                            '  </button>' +
                            '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                            '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#editarp" onClick="selpedido(\'' + row.factura + '\',\'' + row.facultad + '\',\'' + row.cantidad + '\',\'' + row.talla + '\',\'' + row.descripcion + '\',\'' + row.idpedido + '\',\'' + row.fentrega + '\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                            '    <li><a href="#" title="Eliminar"  data-toggle="modal" data-target="#eliminar" onClick="eliminar(' + row.idpedido + ')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Eliminar</a></li>' +
                            '    <li><a href="#" title="Enviar Pedido"  data-toggle="modal" data-target="#estado"  onClick="estadopedido(\'' + row.idpedido + '\',\'' + row.nombres + '\',\'' + row.telefono + '\')"><i style="color:green;" class="glyphicon glyphicon-plane"></i> Enviar Pedido</a></li>' +
                            //'    <li><a href="#" title="Desaprobar afiliado" onClick="updEstadoAfiliado('+row.idPersona+','+2+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Desaprobar</a></li>' +
                            '    </ul>' +
                            '</div>' +
                            '<input type="checkbox" class="chk" name="chk"  value=' + row.idpedido + '>' +
                            '</span>';




                        //return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
                        //return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
                    }
                }


            ],

            "order": [
                [0, "asc"]
            ],

        });





    }

});


selpedido = function(factura, facultad, cantidad, talla, descripcion, idpedido, fentrega) {
    $('#faced').val(factura);
    $('#facued').val(facultad);
    $('#canted').val(cantidad);
    $('#talled').val(talla);
    $('#desced').val(descripcion);
    $('#idpedidoed').val(idpedido);
    $('#fentregax').val(fentrega);




}


function editarpedido() {


    var factura = $('#faced').val();
    var facultad = $('#facued').val();
    var cantidad = $('#canted').val();
    var talla = $('#talled').val();
    var descripcion = $('#desced').val();
    var idpedido = $('#idpedidoed').val();
    var fentregax = $('#fentregax').val();

    $.ajax({
        'url': baseurl + 'Cpedidos/editar',
        'type': 'POST',
        'data': { facturaedit: factura, facultadedit: facultad, editcantidad: cantidad, tallaedit: talla, descripcion_edit: descripcion, idpersonaedit: idpedido, fentregae: fentregax },
        success: function(data) {
            $('#tblresumen').DataTable().ajax.reload();
            alert(data);

        }
    });




}

$('#camestado').submit(function() {

    alert($('.x').attr('data'));
});




function generarenvio() {

    var i = 0;
    selecciones = new Array();
    $('.chk').each(function() {
        var chk = $(this);
        if (chk.prop('checked')) {
            selecciones[i] = chk.val();

            i++;

        }



    });

    
    $.ajax({
        type: "POST",
        url: baseurl + 'Cproductosen/arreglo2',
        data: { 'array': JSON.stringify(selecciones) }, //capturo array     
        success: function(objView) {
            alert(objView);
            $('#tblresumen').DataTable().ajax.reload();

        }
    });

}


$('input[name="mtodo"]').on('change', function() {
    if ($('#mtodo').prop('checked')) {
        $('.chk').prop('checked', true);
    } else {
        $('.chk').prop('checked', false);
    }
});




$('#frmtp').submit(function() {
    $.ajax({


        url: baseurl + 'Ctipoprod/inserttprod',
        type: 'POST',
        data: $(this).serialize(),
        success: function(data) {
            alert(data);


        }

    });

});



/*DESC:cambios  en panel de envios*/



 const btnsubmittodo=document.querySelector('.enviartodo');

 btnsubmittodo.addEventListener('click',function(){
  
     if(!pedidos.length==0){
        pedidos.map((pedido)=>handlesubmit(pedido));

        $('#detallesPedido').html('<div></div>')
     }

    alert('Ningun dato para enviar..');

 })
 
let cliente=[];
let pedidos=[];
if(pedidos.length>0){
    btnsubmittodo.classList.removeClass('disabled')

}
 const handlesubmit=(pedido)=>{
    $.ajax({

        'url': baseurl + 'Cpedidomultiple/pedidonuevo',
        'type': 'POST',
        'data': { fac: pedido.factura, entidad: pedido.entidad, dependencia: pedido.dependencia, facultad: pedido.nomentidad, fentrega: pedido.fechaentrega, codtipoprod: pedido.nomtipoprod, talla: pedido.talla, cantidad: pedido.cantidad, descripcion: pedido.descripcion, idPersona: pedido.idcliente},
        success: function(data) {
            let msg="";
            if(data==1){
                msg="Pedido registrado correctamente";

            }
           setTimeout(() => {
            $('.msg').html(``);
               
           }, 4000);
           $('.msg').html(`<div class='alert alert-success'>${msg}</div>`);
        
        
        }
    });
 }

 const appendPdo=(pedidos)=>{
    let pd="";


    pedidos.map((pedido,index)=>{


        pd=`<div class='card '>
            <small>Codigo: ${index}</small>
                <div class='card-body'>

                    <h4><strong>Factura:</strong>${pedido.factura}</h4>
                    <h4> <strong>Producto:</strong>${pedido.tipoprod}</h4>
                    <h4> <strong>Talla:</strong>${pedido.talla}</h4>
                    <h4> <strong>Cantidad:</strong>${pedido.cantidad}</h4>
                    <h4> <strong>Descripcion:</strong>${pedido.descripcion}|${pedido.nomentidad}| ${pedido.nomdependencia}</h4>

                </div>  
                
                <div class='card-footer'>
                    <p>info cliente :${vernombre(pedido.idcliente)}</p>
                    <button class='btn btn-success sendpedido' data='${index}' >Enviar</button> 
                    <button  class='btn btn-danger eliminarcard' data='${index}'>cancelar</button>     
                
                </div>
                    
        </div>`



    });

    $('#detallesPedido').append(pd);




 }


$('#idcliente').on('keyup', function() {
    
    $('#msj').text("Realizando Busqueda.....");          
    

     $('#idcliente').parent().removeClass('has-error'); 

    var txtide = $('#idcliente').val();


    $.post(baseurl + "Cajax/buscarcliente", { id: txtide },
        function(data) {
          
            if (data == 0) {
                cliente=[];
                $('#btnnuevocli').prop("disabled", false);
                $('#msj').text("No se encontro registros del cliente");
       

            } else if (data.length> 0) {
                

                var x = JSON.parse(data);
                $.each(x, function(i, items) {
                cliente.push(items.idcliente)
               
 
                    $('#nomcli').val(items.nombres);
                    $('#telcli').val(items.telefono);

                });
                $('#msj').text("Cliente registrado..");

                $('#btnnuevocli').prop("disabled", true);

            }

        });


});


function newcliente() {

    var identificacion = $('#idcliente').val();
    var nombre = $('#nomcli').val();
    var telefono = $('#telcli').val();
    var longmax = 10;
    var longmin = 5;
    var logitud = identificacion.length;


    if (identificacion == 0) {
        $('#idcliente').parent().addClass('has-error');

        alert('identificacion requerida');
    } else if (logitud > longmax) {
        $('#idcliente').parent().addClass('has-error');
        alert('identificacion no valida');

    } else if (logitud < longmin) {
        $('#idcliente').parent().addClass('has-error');

        alert('la identificacion debe contener  mas de 5 digitos');
    } else if (nombre == "") {
        alert('nombre requerido');

    } else if (telefono == 0) {
        alert('este dato es requerido');
    } else {

        //alert('EN ajax');

        $.ajax({
            'url': baseurl + 'Cajax/crearcliente',
            'type': 'POST',
            'data': { nombres: nombre, celular: telefono, identidad: identificacion },
            success: function(data) {
                //date return id client
                $('#btnnuevocli').prop("disabled", true);
                $('#msj').text("Cliente registrado..");
              

                cliente.push(data);
      
                alert("Cliente registrado");
               
            }


        });
    }
}



$(".radiov").on('click', function() {
    var tpentidad = $('input:radio[name=tpentidad]:checked').val();
  
    if (tpentidad == 'P') {
        html = "<span class='text-success'><strong>ENTIDAD  SIN DESCRIPCION</strong></span>";
        $('#cont_tpcli').html(html);
        document.getElementById('cont_tpcli').disabled=true;
        document.getElementById('dep').disabled=true;
        
       

    } else {
        document.getElementById('cont_tpcli').disabled=false;
        document.getElementById('dep').disabled=false;
        $.post(baseurl + "Cpedidomultiple/tipoentidad", { tipoentidad: tpentidad },
            function(data) {
                var x = JSON.parse(data);
                html = "<select class=' cont_tpcli form-control'><option value='0'>Seleccione una opcion</option>";
                //html='':
                $.each(x, function(i, items) {
                    html += "<option value=" + items.identidad + ">" + items.nomentidad + "</option>";
                });
                html += "</select>";


                $('#cont_tpcli').html(html);
            });
    }
});



$('#cont_tpcli').on('change', function() {
    var f = $('#cont_tpcli').val();
    //alert(f);


    $.post(baseurl + "Cpedidomultiple/dependencia", { dep: f },
        function(data) {
            ///alert(data);

            var x = JSON.parse(data);
            html = "<option value='0'>Seleccione una opcion</option>";
            $.each(x, function(i, items) {
                html += "<option value=" + items.iddependencia + ">" + items.nombredep + "</option>";
            });
            //html+="</option>";


            $('#dep').html(html);
        }

    );

});



function creapedido() {
    if (cliente.length<1) {
        alert('el cliente debe estar registrado')
    } else if ($('#faccli').val() == "") {

        alert("Ingresa la factura del cliente");

    } else {

        var tpc = $('input:radio[name=tpentidad]:checked').val();
        
        var s = $('#faccli').val();


        const detallesPedido={
            idcliente:cliente[0],
            factura:$('#faccli').val(),
            talla : $('#talla').val(),
            fechaentrega : $('#fecentre').val(),
            cantidad : $('#lblcn').val(),
            descripcion : $('#lbldesc').val(),
            entidad :$('#cont_tpcli').val(),
            dependencia : $('#dep').val(),
            nomentidad : $('#cont_tpcli option:selected').text(),
            nomdependencia : $('#dep option:selected').text(),
            tipoprod :$('#seltp option:selected').text(),
            nomtipoprod : $('#seltp option:selected').val(),

        }
        pedidos.push(detallesPedido);
        btnsubmittodo.classList.remove('disabled')
        appendPdo(pedidos);


    }

}
function vernombre(id){
    idcliente
    nomcli
    let identidad=document.getElementById('idcliente').value;
    let nombre=document.getElementById('nomcli').value;

    return identidad+' '+nombre;

}

function creaentidad() {



    var nomentidad = $("#nentidad").val();
    var tipo = $("#tipoent").val();
    $.ajax({

        'url': baseurl + 'Cpedidomultiple/nuevaentidad',
        'type': 'POST',
        'data': { nomentidad: nomentidad, tipo: tipo },
        success: function(data) {
            alert(data);

        }

    });




}


function parametros(x) {
    //alert(x);
    $('#tipoent').val(x);
    $('#contend').addClass('hide');
    $('#lstdepe').addClass('hide');



    $.post(baseurl + "Cpedidomultiple/tipoentidad", { tipoentidad: x },
        function(data) {
            var x = JSON.parse(data);
            html = "<select class=' x1 form-control'><option value='0'>Seleccione una opcion</option>";
            //html='':
            $.each(x, function(i, items) {
                html += "<option value=" + items.identidad + ">" + items.nomentidad + "</option>";
            });
            html += "</select>";


            $('#x1').html(html);
        });


}

$('#formentidad').on('click', function() {

    $('#contend').removeClass('hide');
    $('#lstdepe').addClass('hide');

});

$('#formdep').on('click', function() {

    $('#lstdepe').removeClass('hide');
    $('#contend').addClass('hide');

});

function creadependencia() {
    var identidad = $('#x1 option:selected').val();
    var nombredep = $('#ndepe').val();
    $.ajax({

        'url': baseurl + 'Cpedidomultiple/nwdependencia',
        'type': 'POST',
        'data': { identidad: identidad, nombredep: nombredep },
        success: function(data) {
            alert(data);

        }

    });


}



$(document).on('click', '.borrar', function(event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});

$(document).on('click', '.eliminarcard', function(event) {
    event.preventDefault();
  
    event.target.parentElement.parentElement.remove()

  const id=$(this).attr('data');

  let nwlista=pedidos.filter((pedido,index)=>{
   
      if(index!=id){
          return pedido;
      }
  });
  pedidos=[];
  pedidos=nwlista;
 


});




$(document).on('click', '.sendpedido', function(event) {
    event.preventDefault();
   

  const id=$(this).attr('data');

  let nwlista=pedidos.find((pedido,index)=>{
   
      if(index==id){
          handlesubmit(pedido)
          event.target.parentElement.parentElement.remove()

          
      }
  });

});


pedidosdia();

function pedidosdia() {


    $.get(baseurl + "Cpedidomultiple/cantidadpedidos", function(data) {
        var c = JSON.parse(data);

        $("#pedidosdia").text(data);

    });
}

$('#midial').dialog();

cargarlistares();



function cargarlistares() {


    $('#tblrecepcion').DataTable({
        'paging': true,
        'info': true,
        'filter': true,
        'destroy': true,
        'stateSave': true,

        'ajax': {

            "url": baseurl + "Cpedidomultiple/pedidoEnvio",
            'data': { factura: factura },

            'type': 'POST',
            dataSrc: ''
        },

        'columns': [
            { data: 'idpedido', 'sClass': 'dt-body-center' },
            { data: 'nomtipoprod' },
            { data: 'factura' },
            { data: 'facultad' },
            { data: 'cantidad' },
            { data: 'talla' },
            { data: 'descripcion' },
            { data: 'nombres' },
            { data: 'fecha_ingreso' },
            { data: 'fentrega' },
            { data: 'c' },


            {
                "orderable": true,
                render: function(data, type, row) {



                    return '<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"  onClick="recped(\'' + row.idpedido + '\');"><span class="glyphicon glyphicon-gift"></span> Recibir</button>';
                    
                }
            }


        ],

        "order": [
            [0, "asc"]
        ],

    });

}
lstsatelites();

function lstsatelites() {


    $.ajax({
        url: baseurl + 'Csatelite/listasatelites',
        type: 'POST',
        success: function(data) {
            var obj = JSON.parse(data);

            html = '';
            html += '<option value="">Seleccione una opcion</option>';
            html += '<option value="0" style="color:white; background:green">TALLER</option>';



            $.each(obj, function(i, items) {
                html += '<option value="' + items.idtrabajador + '"">' + items.nombres + '</option>';
            });

            $("#trabajador").html(html);

        }

    });
}



function recibopedido() {


    var idproceso = $("#cdproceso").val();
    var cantidadRecibida = $("#cdproceso").val();


    $.ajax({
        url: baseurl + 'Cpedidomultiple/registroRecepcion',
        type: 'POST',
        data: { idproceso: idproceso, cntrec: cantidadRecibida },
        success: function(data) {

            alert(data);

        }
    });




}


recped = function(idpedido) {
  
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



procesorec = function(idproceso, cantidad, idpedido) {

    $.ajax({
        url: baseurl + 'Cpedidomultiple/recibirPedidos',
        type: 'POST',
        data: { idproceso: idproceso, cantidad: cantidad, idpedido: idpedido },
        success: function(data) {

            alert(data);
            $('#tblrecepcion').DataTable().ajax.reload();
        }

    })
};



function crearDisponible() {
    var tipo = $("#seltp").val();
    var talla = $("#tall").val();
    var cantidad = $("#cant").val();
    var descripcion = $("#lbldesc").val();
    var factura = $("#factu").val();

    $.ajax({
        url: baseurl + 'Cpedidomultiple/crearDisponible',
        type: 'POST',
        async: false,
        data: { cantidad: cantidad, tipo: tipo, talla: talla, desc: descripcion, factura: factura },
        success: function(data) {

            alert(data);

        }

    })

}