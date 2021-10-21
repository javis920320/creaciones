class Pedido {
    nombre;
    identificacion;


}
class Interfaz {


    preloader = function () {


    }


}




const p = new Pedido();


//events 
const formulario = document.getElementById('formRegistro');
formulario.addEventListener('submit', (e) => {


    e.preventDefault();


    console.log('formulario enviado');
});


const validaPersona = document.getElementById('txtidentificacion');
validaPersona.addEventListener('blur', (e) => {
    e.preventDefault();

    buscarPersona(e.target.value);

})



///funciones 

function buscarPersona(id3) {

    const ui = new Interfaz();
    ui.preloader();



    const url = baseurl+"Cajax/buscarcliente";
    let data = { id: id3};

    console.log(data);

    fetch(url, {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers: {
            'Content-Type': 'application/json'
        }
    }).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => console.log('Success:', response));

}







