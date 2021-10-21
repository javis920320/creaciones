let catalogoJson = [{
        "id": 1,
        "url": "https://w85tcq.by.files.1drv.com/y4mDRq0eoIw0_5T75DC8vJl2QXgLZONy0PxIM_hly60p7XBh-43I2dryAzJcW1koRxVrYUhEVGnlYTT8p9OaFXXhBGRyuKZxDIiDWm8s-UNdRvlD00A--NEDphtza_izA2bvxMhZDmmGoJV3Vz1vno_iMRQ8d396Kmi-k0IQ8Btsf_o_-_e_IWchY1hVPP3VbNaD8akvXg6m9Cq-B_SCLIREw?width=660&height=495&cropmode=none",
        "TipoEntidad": "Colegio",
        "tipoProducto": "Camisa",
        "nombreEntidad": "Inem",
        "fechaCreacion": "2019-12-31",
        "Estado": "Activo"

    },

    {
        "id": 2,
        "url": "https://w85tcq.by.files.1drv.com/y4mDRq0eoIw0_5T75DC8vJl2QXgLZONy0PxIM_hly60p7XBh-43I2dryAzJcW1koRxVrYUhEVGnlYTT8p9OaFXXhBGRyuKZxDIiDWm8s-UNdRvlD00A--NEDphtza_izA2bvxMhZDmmGoJV3Vz1vno_iMRQ8d396Kmi-k0IQ8Btsf_o_-_e_IWchY1hVPP3VbNaD8akvXg6m9Cq-B_SCLIREw?width=660&height=495&cropmode=none",
        "TipoEntidad": "Universidad",
        "nombreEntidad": "Mariana",
        "tipoProducto": "Pantalon",
        "fechaCreacion": "2019-12-31",
        "Estado": "Activo"

    }


];

let Colegios = [{
    "id": 1,
    "Nombre": "Inem",
    "Jornada": "Diurna",
    "Estado": "Prueba",


}, {
    "id": 1,
    "Nombre": "Maria Goretty",
    "Jornada": "Diurna",
    "Estado": "Prueba",


}];
class Catalogo {

    constructor(url, tipoentidad, empresa, producto) {
        this.url = url;
        this.tipoentidad = tipoentidad;
        this.empresa = empresa;
        this.producto = producto;

    }


    GuardarCatalogo(catalogo) {
        $.ajax({
            url: baseurl + 'Cproductos/AgregaraCatalogo',
            type: 'POST',
            data: { 'array': JSON.stringify(catalogo) },
            success: function(data) {
                //alert(data);

            }

        });

    }
}

class Interfaz {



    listarEntidades(tipo) {
        if (tipo != '') {
            /*P= particular
            E=empresa
            U =Universidad
            C= colegio*/
            let tipoD;
            switch (tipo) {
                case 'Universidad':
                    tipoD = 'U';

                    break;

                case 'Colegios':
                    tipoD = 'C';

                    break;
                case 'Particulares':
                    tipoD = 'P';
                    break;
                case 'Empresas':
                    tipoD = 'E';
                    break;
            }



            $.ajax({
                url: baseurl + 'Cpedidomultiple/tipoentidad',
                type: 'POST',
                data: { tipoentidad: tipoD },
                success: function(data) {
                    var x = JSON.parse(data);
                    html = "<select id='seleccion' class=' cont_tpcli form-control'><option value=''>Seleccione una opcion</option>";
                    //html='':
                    $.each(x, function(i, items) {
                        html += "<option value=" + items.identidad + ">" + items.nomentidad + "</option>";
                    });
                    html += "</select>";


                    $('#lista-entidades').html(html);

                }
            })

        }
    }

    MostrarMensaja(mensaje, tipo) {
        const div = document.createElement('p');
        const mens = document.querySelector('#mensaje');

        if (tipo === 'error') {
            div.classList.add('alert-danger', 'alert', 'form-control');

        } else {
            div.classList.add('alert-success', 'alert');

        }

        div.innerHTML = `${mensaje}`;
        mens.appendChild(div);
        setTimeout(function() {

            document.querySelector('.alert').remove();

        }, 2000);



    }

    MostrarResumen(categoria, url, tipCate, prodvs) {
        const panel = document.getElementById('paneldefualt');

        panel.style.display = 'none';
        const img = document.createElement('img');
        img.src = `${url}`;
        img.setAttribute('width', 220);
        img.setAttribute('heigth', 300);
        const resumen = document.querySelector('.caption #descv');
        const div = document.createElement('div');

        div.innerHTML = `
        <img src='${url}' 'width=' 230'  heigth='200' style='width: 200px;  heigth:100px;'>
        <p>Producto: ${prodvs}</p>
        <p>Categoria: ${categoria}</p>
        <p>Entidad: ${tipCate}</p>
        
        `;
        let spinner = document.querySelector('#spinner');
        spinner.style.display = 'block';
        setTimeout(function() {
            spinner.style.display = 'none';
            document.querySelector('#descv').appendChild(div);
            contenedor.appendChild(img);

        }, 3000);


        //console.log(contenedor);





    }



}
//variables

const tipos = document.getElementById('tipo');
const formulario = document.getElementById('registroImagen');
const contenedor = document.getElementsByClassName('thumbnail');


var colegios = document.getElementById("colegios");
var universidades = document.getElementById("universidades");


//listeners

EventListeners();

function EventListeners() {

    document.addEventListener('DOMContentLoaded', function() {



        $.post(baseurl + "Ctipoprod/gettipoprod",


            { id: 1 },
            function(data) {
                //	alert(data);
                var obj = JSON.parse(data);

                html = '<select id="seltp" name="seltp" class="form-control">';
                $.each(obj, function(i, items) {
                    html += '<option value="' + items.idtipoprod + '">' + items.nomtipoprod + '</option>';

                    //$(".prodtp").append('<option value="'+items.idtipoprod+'">' + items.nomtipoprod+ '</option>');

                });


                html += '</select>';

                $("#productos").html(html);


            });

    })


}
const ui = new Interfaz();
//funciones
tipos.addEventListener('change', function() {


    const tipoSeleccionado = tipos.options[tipos.selectedIndex].value;


    ui.listarEntidades(tipoSeleccionado);

});

formulario.addEventListener('submit', function(e) {
    e.preventDefault();

    const tipoSeleccionado = tipos.options[tipos.selectedIndex].value;
    const url = document.getElementById('urlImagen').value;
    const tipoEn = document.getElementsByClassName('cont_tpcli');
    const productos = document.getElementById('seltp');
    const prodSelect = productos.options[productos.selectedIndex].value;
    const prodvs = productos.options[productos.selectedIndex].textContent;


    const tipoDef = $('#seleccion').val(); //tipoEn.options[tipoEn.selectedIndex].value;


    if (tipoSeleccionado === '' || url === '' || tipoDef === '') {
        ui.MostrarMensaja('Todos Los campos Son Queridos!', 'error');

    } else {
        ui.MostrarMensaja('Cargando Datos', 'correcto');

        let tpentidad;
        if (tipoSeleccionado != '') {
            /*P= particular
            E=empresa
            U =Universidad
            C= colegio*/

            switch (tipoSeleccionado) {
                case 'Universidad':
                    tpentidad = 'U';

                    break;

                case 'Colegios':
                    tpentidad = 'C';

                    break;
                case 'Particulares':
                    tpentidad = 'P';
                    break;
                case 'Empresas':
                    tpentidad = 'E';
                    break;
            }
        }




        //pasmos 

        const catalogo = new Catalogo(url, tpentidad, tipoDef, prodSelect);


        catalogo.GuardarCatalogo(catalogo);
        const categoria = tipos.options[tipos.selectedIndex].textContent;

        var combo = document.getElementById("seleccion");
        var selected = combo.options[combo.selectedIndex].text;
        //alert(selected)

        ui.MostrarResumen(categoria, url, selected, prodvs);

    }

});