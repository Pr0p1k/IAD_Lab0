function check() {
    var min = -3;
    var max = 5;
    var str = document.getElementById("x").value;
    if (/[^0-9.]/.test(str) || Number(str) <= min || Number(str) >= max) {
        alert("Value X is not correct");
    } else if (y == undefined) alert("Value Y is not chosen");
    else if (str == '') alert("Value X is not entered")
    else {
        document.getElementById("calculate").submit();
    }
}

var y;
var previous;

function setY(button) {
    if (previous != undefined) previous.style.backgroundColor = window
        .getComputedStyle(document.getElementsByClassName('btn').item(0)).backgroundColor;
    button.style.backgroundColor = 'chartreuse';
    previous = button;
    y = button.value;
}