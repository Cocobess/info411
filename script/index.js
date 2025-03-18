//const colors = ["red","blue", "yellow", "magenta", "purple", "brown", "cyan", "lime"]
//const h1 = document.querySelector("h1")
//setInterval(function() {
//	h1.style.color = colors[Math.floor(Math.random()*colors.length)]
//}, 100)


const ballElement = document.querySelector("#ball")
const ball = {
	x: 0,
	y: 0,
	vx: 1,
	vy: 0
}
setInterval(function() {
	ball.x += ball.vx
	ball.y += ball.vy
	ball.vy += .1
	if (ball.y > window.innerHeight-100) {
		ball.y -= ball.vy
		ball.vy *= -1

	}
	ballElement.style.top = ball.y+"px"
	ballElement.style.left = ball.x+"px"
}, 10)

