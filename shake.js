/* shake the clickable images on the page */
const rotationDegrees = 2;

let rot = 1;
let images = document.getElementsByClassName("clickable");

function rotate() {
	rot *= -1;
	for (let i = 0; i < images.length; ++i) {
		let deg = i % 2 == 0 ? rotationDegrees : rotationDegrees * -1;
		images[i].style.rotate = rot * deg + "deg";
	}
}

/* start out rotated */
rotate();
window.setInterval(rotate, 500);
