function resize() {
	var width = document.getElementById("emailForm").offsetWidth;
	document.getElementById("emailInput").size = (width-125)/10;
	console.log(document.body.clientWidth);
}
window.onload = resize;
window.onresize = resize;
