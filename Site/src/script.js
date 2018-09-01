let x, y, r;

function check() {
    let min = -3;
    let max = 3;
    r = document.getElementById("Coord_R").value;
    y = document.getElementById("y").value;
    let xArr = document.getElementsByName("X");
    let xChecked = Array.from(xArr).some(function (item) {
        if (item.checked) {
            x = item.value;
            return true;
        }
    });
    if (isNaN(y) || Number(y) <= min || Number(y) >= max || y === '') {
        alert("Invalid Y value");
        return false;
    } else if (isNaN(r)) {
        alert("Value R is not selected");
        return false;
    } else if (!xChecked) {
        alert("Value X is not selected");
        return false;
    } else compute();
    return false;
}

let color = window.getComputedStyle(document
    .getElementsByClassName("btn").item(0)).backgroundColor;
let previous;

function setR(button) {
    if (previous !== undefined) previous.style.backgroundColor = color;
    button.style.backgroundColor = 'chartreuse';
    document.getElementById("Coord_R").value = button.value;
    previous = button;
}

function draw() {
    let canvas = document.getElementById("result");
    let context = canvas.getContext("2d");
    let width = canvas.width;
    let height = canvas.height;
    drawArea(canvas, context, width, height);
    drawLines(canvas, context, width, height);
    drawDot(canvas, context, width, height);
}

function drawLines(canvas, context, width, height) {
    context.fillStyle = "black";
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
    context.fillText(-r, width * 0.1, height * 0.53);

    context.moveTo(width * 0.3, height / 2 + height * 0.01);
    context.lineTo(width * 0.3, height / 2 - height * 0.01);
    context.fillText(-r / 2, width * 0.3, height * 0.53);

    context.fillText(0, width * 0.51, height * 0.53);

    context.moveTo(width * 0.7, height / 2 + height * 0.01);
    context.lineTo(width * 0.7, height / 2 - height * 0.01);
    context.fillText(r / 2, width * 0.7, height * 0.53);

    context.moveTo(width * 0.9, height / 2 + height * 0.01);
    context.lineTo(width * 0.9, height / 2 - height * 0.01);
    context.fillText(r, width * 0.9, height * 0.53);

    context.moveTo(width / 2 + width * 0.01, height * 0.1);
    context.lineTo(width / 2 - width * 0.01, height * 0.1);
    context.fillText(r, width * 0.53, height * 0.1);

    context.moveTo(width / 2 + width * 0.01, height * 0.3);
    context.lineTo(width / 2 - width * 0.01, height * 0.3);
    context.fillText(r / 2, width * 0.53, height * 0.3);

    context.moveTo(width / 2 + width * 0.01, height * 0.7);
    context.lineTo(width / 2 - width * 0.01, height * 0.7);
    context.fillText(-r / 2, width * 0.53, height * 0.7);

    context.moveTo(width / 2 + width * 0.01, height * 0.9);
    context.lineTo(width / 2 - width * 0.01, height * 0.9);
    context.fillText(-r, width * 0.53, height * 0.9);

    context.closePath();
    context.strokeStyle = "black";
    context.stroke();
}

function drawArea(canvas, context, width, height) {
    context.clearRect(0, 0, width, height);
    context.fillStyle = "#3399ff";
    context.fillRect(width * 0.1, height / 2, width * 0.4, height * 0.2);
    context.beginPath();
    context.moveTo(width * 0.5, height * 0.1);
    context.lineTo(width * 0.9, height * 0.5);
    context.lineTo(width * 0.5, height * 0.5);
    context.fill();
    context.beginPath();
    context.arc(width / 2, height / 2, width * 0.2, 0, Math.PI, true);
    context.fill();
}

function drawDot(canvas, context, width, height) {
    context.fillRect(width / 2 + width * 0.4 * x / r - 2, height / 2 - width * 0.4 * y / r - 2, 4, 4);

}

function compute() {
    draw();
    $.ajax({
        url: 'handler.php',
        type: 'GET',
        data: {X: x, Y: y, R: r},
        success: function (data) {
            console.log(x + " " + y + " " + r + ";\n");
            let table = $(document).find("#table_result");
            let currentTime = data.split("\n")[0];
            let leadTime = data.split("\n")[1];
            let result = data.split("\n")[2];
            let row = $("<tr/>");
            row.append($('<td/>').text(currentTime));
            row.append($('<td/>').text(leadTime));
            row.append($('<td/>').text(result));
            table.append(row);
        },
        error: function (data) {
            let table = $(document).find("#table_result");
            let row = $("<tr/>");
            let cell = $("<td colspan='3'/>").text("Error occurred");
            row.append(cell);
            table.append(row);
        }
    });
}