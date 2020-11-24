var modal = document.getElementById("modalImg");

var img = document.getElementById("detailImg");
var modalImg = document.getElementById("img01");

img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
}

var close = document.getElementsByClassName("close")[0];

close.onclick = function() { 
    modal.style.display = "none";
}

function changeImg(img) {
    document.getElementById("imgDisplay").innerHTML = "";
	document.getElementById('imgDisplay').style.backgroundImage = "url('" + img.src + "')";
	document.getElementById('imgDisplay').style.backgroundSize = "cover";
}