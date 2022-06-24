function abrirMenu(){
    let x = document.getElementById("sidebar");
    let y = document.getElementById("menu");
    
    if(x.classList.contains('sidebar-show')){
        x.classList.remove('sidebar-show');
        x.classList.add('sidebar-hidden');
        y.src="../../img/recursos/menu-icon.png";
    }
    else
    {x.classList.remove('sidebar-hidden');
     x.classList.add('sidebar-show');
     y.src="../../img/recursos/menu-icon-close.png";}

}
