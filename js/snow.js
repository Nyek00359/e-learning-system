var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var particlesOnScreen = 120;
var particleArray=[];
var w,h;
w = canvas.width = window.innerWidth;
h = canvas.height = window.innerHeight;

function random(min,max){
	return min + Math.random() * (max - min +1);
};
function clientResize(ev){
	w = canvas.width = window.innerWidth;
	h = canvas.height = window.innerHeight;

};
window.addEventListener("resize",clientResize);

function createSnowFlakes(){
	for (var i = 0;i < particlesOnScreen; i++) {
		particlesOnScreen.push({
			x: Math.random() * w,
			y: Math.random() * h,
			opacity: Math.random(),
			speedX: random(-11,11),
			speedX: random(7,15),
			radius: random(0.5,4.2),
		})
	}
};

function drawSnowFlakes() {
	for (var i = 0;i < particleArray.length; i++) {
		var gradient = ctx.createRadialGradient(
			particlesArray[i].x,
			particlesArray[i].y,
			0,
			particlesArray[i].x,
			particlesArray[i].y,
			particlesArray[i].radius,
			);
		gradient.addColorStop(0,"rgba(255,255,255"+particlesArray[i].opacity+")"); // white
		gradient.addColorStop(.8,"rgba(255,255,255"+particlesArray[i].opacity+")"); // bluish
		gradient.addColorStop(1,"rgba(255,255,255"+particlesArray[i].opacity+")"); // white bluish

		ctx.beginPath();
		ctx.arc(
			particlesArray[i].x,
			particlesArray[i].y,
			particlesArray[i].radius,
			0,
			Math.PI*2,
			false
			);
		ctx.fillStyle = gradient;
		ctx.fill();
	}
};
function moveSnowFlakes() {
	for (var i = 0; i < particlesArray.length; i++) {
		particlesArray[i].x += particleArray[i].speedX;
		particlesArray[i].y += particleArray[i].speedY;
		if(particlesArray[i].y>h){
			particlesArray[i].x = Math.random()*w*1.5;
			particlesArray[i].y = -50;
		}
	}
};

function updateSnowFall() {
	ctx.clearRect(0,0,w,h);
	drawSnowFlakes();
	moveSnowFlakes();
};
setInterval(updateSnowFall,50);
createSnowFlakes();