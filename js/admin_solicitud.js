window.onload = function() {

    const element = document.querySelector('form');
    document.getElementById("dialog").style.display="none";
  element.addEventListener('submit', event => {
  event.preventDefault();
 
});
   solicitud(1);
   solicitud(2);
   solicitud(3);

};


function solicitud(tipo)
{   let cont=tipo;
    let cantidad;
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      cantidad=this.responseText;
      if (cont==1)
        document.getElementById("espera").append(": "+cantidad);
      else if(cont==2)
      document.getElementById("aprobada").append(": "+cantidad);

      else if (cont==3)
      document.getElementById("rechazada").append(": "+cantidad);

    }
  xmlhttp.open("GET", "../../BD/contar_solicitud.php?q="+cont);
  xmlhttp.send();
  
}


function filtro(){
  let filtro = document.getElementById("busqueda").value.toUpperCase();
  let fila = document.querySelector("#tbl tbody").rows;
  
  for (let i = 0; i < fila.length; i++) {
      let Col = fila[i].cells[1].textContent.toUpperCase();
      if (Col.indexOf(filtro) > -1) {
        fila[i].style.display = "";
        
      } else {
        fila[i].style.display = "none";
      }      
  }
}
function filtro_tipo_form(formt) {
  let filtro =formt.toUpperCase();
  let fila = document.querySelector("#tbl tbody").rows;
  
  for (let i = 1; i < fila.length; i++) {
      let Col = fila[i].cells[2].textContent.toUpperCase();
      if (Col.indexOf(filtro) > -1) {
        fila[i].style.display = "";
       
      } else {
        fila[i].style.display = "none";
      }      
  }
}

function filtro_tipo_mascota(type_pet) {
  let filtro =type_pet.toUpperCase();
 
  let fila = document.querySelector("#tbl tbody").rows;
  
  for (let i = 1; i < fila.length; i++) {
      let Col = fila[i].cells[5].textContent.toUpperCase();
     
      if (Col.indexOf(filtro) > -1) {
        fila[i].style.display = "";
        if(document.getElementById("busqueda").value.length>0)
        this.filtro();
        
      } else {
        fila[i].style.display = "none";
      }      
  }
}


function info(){


    
  let table = document.getElementById("tbl");
  let id;          
  let dialog = document.getElementById('dialog');    
  for(let i = 1; i < table.rows.length; i++)
  {
      table.rows[i].onclick = function()
      {
           //rIndex = this.rowIndex;
         id=this.cells[0].innerHTML;
         document.getElementById("dialog").style.display="";
         document.cookie = "id="+id;
         mas_info(id);
         console.log("VERGA");
      };
  }
}

function mas_info(identificador)
{ let info=document.getElementById("contenido");
  const xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function() {
    info.innerHTML=this.responseText;
  }
xmlhttp.open("GET", "../../BD/obtener_info.php?q="+identificador);
xmlhttp.send();

}


function actualizar()
{
  let opc=document.getElementById("opc").value;
  let id=getCookie("id")
  let info=document.getElementById("contenido");
  if(opc!=0)
  {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
  document.getElementById("dialog").style.display="none";
     
    }
  xmlhttp.open("GET", "../../BD/actualizar_soli.php?q="+opc+"&p="+id);
  xmlhttp.send();
  }
  else
  {
    document.getElementById("error").innerHTML="Elija una opcion para esta solicitud"
  }

}

function cerrar()
{
  document.getElementById("dialog").style.display="none";
}



function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}


