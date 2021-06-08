function initiate() {
	var databox = document.getElementById('databox');
	var button = document.getElementById('button');
	button.addEventListener('click', read, false);
}
function read() {
	var url = "textfile.txt";
	var request = new XMLHttpRequest();
	request.addEventListener('load', show, false);
	request.open("GET", url, true);
	request.send("nece");
}
function show(e) {
	var data = e.target;
	if (data.status == 200){
		databox.innerHTML = data.responseText;
	}
}
addEventListener('load', initiate, false);