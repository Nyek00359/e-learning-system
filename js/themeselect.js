const themeSelect = document.getElementById('themeSelect');
const mode =document.getElementById('mode');
const theme =document.getElementById('theme');
const themeStyleSheet = document.getElementById('themeStyleSheet');
const design =document.getElementById('design');
var index = 0;
const colors =["Dark","Light","Independence","Christmas"];


function themeselect(){
		themeStyleSheet.setAttribute("href","css/" + colors[index] + ".css");
		switch(index){
			case 0: 
			mode.setAttribute("value","Dark");
			mode.innerHTML="Dark";
			design.setAttribute("class","fas fa-moon fa-2x text-gray-300");
			break;
			case 1: 
			mode.setAttribute("value","Light");
			mode.innerHTML="Light";
			design.setAttribute("class","fas fa-sun fa-2x text-gray-300");
			break;
			case 2: 
			mode.setAttribute("value","Independence");
			mode.innerHTML="Independence";
			design.setAttribute("class","fas fa-flag fa-2x text-gray-300");
			break;
			case 3: 
			mode.setAttribute("value","Christmas");
			mode.innerHTML="Christmas";
			design.setAttribute("class","fas fa-gift fa-2x text-gray-300");
			break;
			default:
			mode.setAttribute("value","Light");
			mode.innerHTML="Default";
			design.setAttribute("class","fas fa-sun fa-2x text-gray-300");
}
		if(index>=colors.length-1){
			index =0;
		}
		else{
			index =index+1;
		}

	return;
}
