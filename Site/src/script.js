function check() {
    var min = -3;
    var max = 5;
    var str = document.getElementById("x").value;
    if (/[^0-9.]/.test(str) || Number(str) < min || Number(str) > max) {
        alert("Value X is not correct");
    } else if (y == '') alert("Value Y is not chosen");
    else document.getElementById("calculate").submit();
}

var y = '';

function set(value) {
    y = value;
}