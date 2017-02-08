
var myIndex = 0;
carousel();
showDivs(myIndex);



function currentDiv(n) {
  showDivs(myIndex = n);
}



function carousel() {
    var i;
    var x = document.getElementsByClassName("slideshow");
	var dots = document.getElementsByClassName("demo");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
	 for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 6500); // Change image every 6.5 seconds
	dots[myIndex-1].className += " w3-white";
}

