
function sesion()
{   
    let cedula=document.getElementById("cedula").value;
    let pass=document.getElementById("contrasena").value;
    let resultado;
    if(cedula.length>0&&pass.length>0)
    {
      const xmlhttp = new XMLHttpRequest();
      xmlhttp.onload = function() {
        resultado = this.responseText;
        console.log(resultado);
        if(resultado==1)
        {
          window.location.replace("../../secciones/fundación/administrar_solicitudes.php");
          
        }
        else
        {
          document.getElementById("falla").innerHTML="Verifique que los datos sean correctos";
        }
      }
    xmlhttp.open("GET", "../../BD/inicio_sesion.php?q="+cedula+"&p="+pass);
    xmlhttp.send();
    }
    else
      document.getElementById("falla").innerHTML="Rellene los campos solicitados";



 

}


function test()
{

      
//   const xmlhttp = new XMLHttpRequest();
//   xmlhttp.onload = function() {
//     document.getElementById("falla").innerHTML = this.responseText;
//   }
// xmlhttp.open("GET", "../../BD/inicio_sesion.php");
// xmlhttp.send();
alert("HILA");

}