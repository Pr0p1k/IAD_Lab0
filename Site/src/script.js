function check() {
    var min = -3;
    var max = 5;
    var str = document.getElementById("x").value;
    if (/[^0-9.]/.test(str) || Number(str) < min || Number(str) > max) {
        alert("����������� �������� ����� X");
    } else if (y == '') alert("�� ������� �������� Y");
    else document.getElementById("calculate").submit();
}

var y = '';

function set(value) {
    y = value;
}