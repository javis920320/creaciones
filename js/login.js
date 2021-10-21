

const form= document.getElementById('login');


// Events

form.addEventListener('submit',(e)=>{
 e.preventDefault();

   const data=  new FormData(document.getElementById('login'));

   fetch(baseurl+'Loginuser/logueo', {
    method: 'POST',
    body: data
 }).then(function(response) {
    if(response.ok) {
        return response.text()
    } else {
        throw "Error en la llamada Ajax";
    }
 
 })
 .then(function(texto) {
    //console.log( typeof texto);

    if(texto==='0'){
        const div=document.createElement('p');
        div.classList.add('alert','alert-danger');

        div.textContent='Datos incorrectos  Verifica Nuevamente';
        const contenedor=document.getElementById('mensaje');
        contenedor.appendChild(div);

        setTimeout(function(){

           div.remove() ;

        },3000);
    }else{
        sessionLocal(texto);

    }

    
 })
 .catch(function(err) {
    console.log(err);
 });


  
})



// functiones

 function sessionLocal(param){

  sessionStorage.setItem('usuario',param);
  console.log(sessionStorage.getItem('usuario'));
  window.location.href='http://localhost/creaciones/Cadmin';


 }



 function clearSession(){

    sessionStorage.clear();
 }
