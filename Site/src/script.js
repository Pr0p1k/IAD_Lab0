function check() {
    var min = -3;
    var max = 3;
    var r = document.getElementById("Coord_R").value;
    var y = document.getElementById("y").value;
    var x = document.getElementsByName("X");
    var xChecked = false;
    for (var i = 0; i < x.length; i++) {
        if (x[i].checked) {
            xChecked = true;
            break;
        }
    }
    if (isNaN(y) || Number(y) <= min || Number(y) >= max || y == '') {
        alert("Invalid Y value");
        return false;
    } else if (isNaN(r)) {
        alert("Value R is not selected");
        return false
    } else if (!xChecked) {
        alert("Value X is not selected");
        return false;
    } else return true;
}

var color = window.getComputedStyle(document
    .getElementsByClassName("btn").item(0)).backgroundColor;
var previous;

function setR(button) {
    if (previous != undefined) previous.style.backgroundColor = color;
    button.style.backgroundColor = 'chartreuse';
    document.getElementById("Coord_R").value = button.value;
    previous = button;
}

function draw() {
    var canvas = document.getElementById("result");
    var context = canvas.getContext("2d");
    var width = canvas.width;
    var height = canvas.height;

    context.clearRect(0, 0, width, height);
    context.beginPath();
    context.moveTo(width / 2, height);
    context.lineTo(width / 2, 0);
    context.fillText("  Y", width / 2, height * 0.05);
    context.lineTo(width / 2 - width * 0.01, width * 0.03);
    context.moveTo(width / 2, 0);
    context.lineTo(width / 2 + width * 0.01, width * 0.03);
    context.moveTo(0, height / 2);
    context.lineTo(width, height / 2);
    context.fillText("X", width * 0.97, height * 0.57);
    context.lineTo(width - width * 0.03, height / 2 - height * 0.01);
    context.moveTo(width, height / 2);
    context.lineTo(width - width * 0.03, height / 2 + height * 0.01);

    context.moveTo(width * 0.1, height / 2 + height * 0.01);
    context.lineTo(width * 0.1, height / 2 - height * 0.01);

    context.moveTo(width * 0.3, height / 2 + height * 0.01);
    context.lineTo(width * 0.3, height / 2 - height * 0.01);

    context.moveTo(width * 0.7, height / 2 + height * 0.01);
    context.lineTo(width * 0.7, height / 2 - height * 0.01);

    context.moveTo(width * 0.9, height / 2 + height * 0.01);
    context.lineTo(width * 0.9, height / 2 - height * 0.01);

    context.moveTo(width / 2 + width * 0.01, height * 0.1);
    context.lineTo(width / 2 - width * 0.01, height * 0.1);

    context.moveTo(width / 2 + width * 0.01, height * 0.3);
    context.lineTo(width / 2 - width * 0.01, height * 0.3);

    context.moveTo(width / 2 + width * 0.01, height * 0.7);
    context.lineTo(width / 2 - width * 0.01, height * 0.7);

    context.moveTo(width / 2 + width * 0.01, height * 0.9);
    context.lineTo(width / 2 - width * 0.01, height * 0.9);

    context.closePath();
    context.text
    context.strokeStyle = "black";
    context.fillStyle = "black";

    context.stroke();
}