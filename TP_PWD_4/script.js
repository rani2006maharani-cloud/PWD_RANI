const tombol = document.getElementById("tombol");
window.onscroll= function(){
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500)
    {
        tombol.style.display="block";
    }else {
        tombol.style.display="none";
    }
};

tombol.onclick = function(){
    window.scrollTo ({ 
        top:0,behavior:"smooth"
    })
}
