var imgs  = document.getElementById('imgs');
let i=0 ;
var img = document.getElementsByClassName('NumImg').length;
setInterval(slideshows,3000);

function slideshows()  {
    imgs.style.transform = "translateX(-"+840*i+"px)";
    i++ ;
    if(i==img) i=0;
}




