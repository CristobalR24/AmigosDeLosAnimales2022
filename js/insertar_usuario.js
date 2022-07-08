function pass_check()
{
    let pass1=document.getElementById("password").value;
    let pass2=document.getElementById("re_password").value;

    if(pass1!=pass2||pass2!=pass1)
     {
        document.getElementById("btn_crear").innerHTML="Las contraseñas no coinciden";
      
       
    }

    else
    {   
        document.getElementById("btn_crear").innerHTML="Crear Usuario";
     
    }


}


function nom_check()
{
   
    let regex = /^[a-zA-Z\s]+$/;
    let nom=document.getElementById("nombre").value;
    console.log(nom.length);
    if(nom.length==0||regex.test(nom))
    { 
        document.getElementById("btn_crear").innerHTML="Crear Usuario";
      
      
    }

    else
        {
            document.getElementById("btn_crear").innerHTML="Nombre no valido";
           
           
        }
        
}


function enviar()
{   let nom=document.getElementById("nombre").value.length;
    let ced=document.getElementById("nombre").value.length;
    let pas=document.getElementById("password").value.length;
    if(document.getElementById("btn_crear").disabled == false&&nom>0&&ced>0&&pas>0)
        {
            let nombres=document.getElementById("nombre").value;
            let cedula=document.getElementById("cedula").value;
            let contrasena=document.getElementById("password").value;
            let respuesta;
            const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
       respuesta=this.responseText;
        if(respuesta==0)
        { 
            document.getElementById("respuesta").innerHTML="No pudimos crear este usuario, intenta de nuevo";
            document.getElementById("respuesta").style.color="black";

        }
        else if(respuesta==1)
        {
            document.getElementById("respuesta").innerHTML="Usuario creado correctamente";
            document.getElementById("respuesta").style.color="#068b06";
            document.getElementById("nombre").value="";
            document.getElementById("cedula").value="";
            document.getElementById("password").value="";
            document.getElementById("re_password").value="";

        }
        else if(respuesta==1062)
        {  
            document.getElementById("respuesta").innerHTML="Esta contraseña o Cedula ya se encuentra en uso";
            document.getElementById("respuesta").style.color="black";
        }

    

    }
  xmlhttp.open("GET", "../../BD/insertar_usuario.php?q="+nombres+"&p="+cedula+"&n="+contrasena);
  xmlhttp.send();
        }

        else 
            {document.getElementById("respuesta").innerHTML="Rellene todos los campos del formulario";
            document.getElementById("respuesta").style.color="black";}

}