function pass_check()
{
    let pass1=document.getElementById("password").value;
    let pass2=document.getElementById("re_password").value;

    if(pass1!=pass2||pass2!=pass1)
     {
        document.getElementById("btn_crear").innerHTML="Las contraseñas no coinciden";
        //document.getElementById("btn_crear").disabled = false;
       
    }

    else
    {   
        document.getElementById("btn_crear").innerHTML="Crear Usuario";
       // document.getElementById("btn_crear").disabled = true;
    }


}


function nom_check()
{
    //let check = /^[a-zA-Z\s]+$/;
    let regex = /^[a-zA-Z\s]+$/;
    let nom=document.getElementById("nombre").value;
    console.log(nom.length);
    if(nom.length==0||regex.test(nom))
    { 
        document.getElementById("btn_crear").innerHTML="Crear Usuario";
        //document.getElementById("btn_crear").disabled = false;
      
    }

    else
        {
            document.getElementById("btn_crear").innerHTML="Nombre no valido";
            //document.getElementById("btn_crear").disabled = true;
           
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
        { //alert("ERORoooooo");
            document.getElementById("respuesta").innerHTML="No pudimos crear este usuario, intenta de nuevo";

        }
        else if(respuesta==1)
        { //alert("NO EROR");
            document.getElementById("respuesta").innerHTML="Usuario creado correctamente";
            document.getElementById("nombre").value="";
            document.getElementById("cedula").value="";
            document.getElementById("password").value="";
            document.getElementById("re_password").value="";

        }
        else if(respuesta==1062)
        {  // alert("EROR");
            document.getElementById("respuesta").innerHTML="Esta contraseña o Cedula ya se encuentra en uso";
        }

    

    }
  xmlhttp.open("GET", "../../BD/insertar_usuario.php?q="+nombres+"&p="+cedula+"&n="+contrasena);
  xmlhttp.send();
        }

        else 
        document.getElementById("respuesta").innerHTML="Rellene todos los campos del formulario";
}