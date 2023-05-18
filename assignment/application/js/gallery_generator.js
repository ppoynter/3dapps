
function getXMLHttp() {
	var xmlHttp
	try {
		xmlHttp = new XMLHttpRequest ();
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				return false;
			}
		}
	}
	return xmlHttp;
}

var xmlHttp = getXMLHttp();
var htmlCode = "";
var response;

//set up the images to act as buttons to select each 3d model
$(document).ready(function() {
	var send = "application/view/hook.php";
	xmlHttp.open("GET", send, true);
	xmlHttp.send(null);
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
			response = xmlHttp.responseText.split("~");
			for (var i=0;i<response.length;i++) {
				switch (response[i]) {
					case 'application/assets/images/gallery_images/Coke.png':
						htmlCode += '<img class="card-img-top img-thumbnail" onclick="cokeScene(); cokeDescription(); stopShake();" src="' + response[i] + '"/>';
						break;
					case 'application/assets/images/gallery_images/Dr Pepper.png':
						htmlCode += '<img class="card-img-top img-thumbnail" onclick="pepperScene(); pepperDescription(); stopShake();" src="' + response[i] + '"/>';
						break;
					case 'application/assets/images/gallery_images/Sprite.png':
						htmlCode += '<img class="card-img-top img-thumbnail" onclick="spriteScene(); spriteDescription(); stopShake();" src="' + response[i] + '"/>';
						break;
				}	
			}
			document.getElementById('gallery').innerHTML = htmlCode;
		}
	}
});

