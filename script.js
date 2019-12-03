function get_page(page2) {
//document.getElementById('load').style.display='block';
	var xhrRequest = window.XMLHttpRequest ? new XMLHttpRequest()
			: new ActiveXObject('MSXML2.XMLHTTP.3.0');
	xhrRequest.open("GET", page2+'.html', true);
	xhrRequest.onreadystatechange = function() {
		if (xhrRequest.readyState == 4 && xhrRequest.status == 200) {
			var xmlString = xhrRequest.responseText;
			//document.getElementById('load').style.display='none';
			document.getElementById('cont').innerHTML = xmlString;
		}
	};
	xhrRequest.send(null);
}