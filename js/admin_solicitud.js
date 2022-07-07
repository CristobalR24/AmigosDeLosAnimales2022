window.onload = function() {

    const element = document.querySelector('form');
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


function testeo()
{
   
   
    let table = document.getElementById("tbl");
    let id;          
    let dialog = document.getElementById('dialog');    
    for(let i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
             //rIndex = this.rowIndex;
           id=this.cells[0].innerHTML;
           document.getElementById("perro").style.backgroundColor='#1177BF';
           document.getElementById("perro").style.color='white';
         //  dialog.show();
           console.log(id);
        };
    }
    
}

function filtro(){
  let filtro = document.getElementById("busqueda").value.toUpperCase();
  let fila = document.querySelector("#tbl tbody").rows;
  
  for (let i = 0; i < fila.length; i++) {
      //var firstCol = rows[i].cells[0].textContent.toUpperCase();
      let Col = fila[i].cells[1].textContent.toUpperCase();
      if (Col.indexOf(filtro) > -1) {
        fila[i].style.display = "";
      } else {
        fila[i].style.display = "none";
      }      
  }
}


function test()
{
  console.log("Just testing");
}

