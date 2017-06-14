function resize() {
	var width = document.getElementById("emailForm").offsetWidth;
	document.getElementById("emailInput").size = width/10;
}
window.onload = resize;
window.onresize = resize;
