addbtn = document.getElementById("btn");

addbtn.addEventListener(
	"onclick",
	function (event) {
		event.preventDefault();
		console.log("ok");
	},
	false
);

/***let test = document.querySelector("button[type=submit]#btn");

test.onclick = function (event) {
	event.preventDefault();
	console.log("ok");
};*/

/**let test = document.querySelector("#mainHeading");

test.onclick = function () {
	console.log("ok");
};*/

//document.addEventListener("button[type='submit']").onclick = changeClass();

//function changeClass() {
//	document.getElementById("btn").className = "checked";
//}
