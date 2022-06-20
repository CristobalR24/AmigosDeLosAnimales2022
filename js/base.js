function abrirMenu(){
    let x = document.getElementById("barra");
    let y = document.getElementById("menu");
    if(x.style.display=="block"){
        x.style.display="none";
        y.src="img/recursos/menu-icon.png";
    }
    else
    {x.style.display = "block";
     y.src="img/recursos/menu-icon-close.png";}

}
