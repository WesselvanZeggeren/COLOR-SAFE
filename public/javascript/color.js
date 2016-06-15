var object = [document.getElementById("color-1"), document.getElementById("color-data")];
object[0].style.borderColor = "#000000"; 

function setRangeColor(idRange) {
	var red = 
	var green = 
	var blue = 
	setData(red + green + blue);
}

function selectThisColor(idButton) {
	object[0].style.borderColor = "#000000"; 
	object[0] = document.getElementById(idButton);
	object[0].style.borderColor = "#ff0000";
	return object[0];
}

function setHexCode() {
	var hex = document.getElementById("color-text-hex").value;
	if (/^#[0-9A-F]{6}$/i.test("#" + hex) && hex.length == 6) {
		document.getElementById("color-range-red").value = parseInt(hex.substring(0, hex.length - 4), 16);
		document.getElementById("color-range-green").value = parseInt(hex.substring(2, hex.length - 2), 16);
		document.getElementById("color-range-blue").value = parseInt(hex.substring(4, hex.length - 0), 16);
		document.getElementById("color-p").display = "none";
		object[0].style.backgroundColor = "#" + hex;
		setData(hex);
	} else {
		document.getElementById("color-p").display = "block";
	}
}

function setData(data) {
	if (object[0].id == "color-1") {
		object[1].value = data + object[1].value.substring(6, object[1].value.length - 0);
	} else if (object[0].id == "color-2") {
		object[1].value = object[1].value.substring(0, object[1].value.length - 34) + data + object[1].value.substring(13, object[1].value.length - 0);
	} else if (object[0].id == "color-3") {
		object[1].value = object[1].value.substring(0, object[1].value.length - 27) + data + object[1].value.substring(20, object[1].value.length - 0);
	} else if (object[0].id == "color-4") {
		object[1].value = object[1].value.substring(0, object[1].value.length - 20) + data + object[1].value.substring(27, object[1].value.length - 0)
	} else if (object[0].id == "color-5") {
		object[1].value = object[1].value.substring(0, object[1].value.length - 13) + data + object[1].value.substring(34, object[1].value.length - 0)
	} else if (object[0].id == "color-6") {
		object[1].value = object[1].value.substring(0, object[1].value.length - 6) + data;
	} 
}