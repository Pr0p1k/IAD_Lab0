<!DOCTYPE html>
<?php
session_start();
//global vars
$_SESSION['arr'] = array();
?>

<html>
<head>
    <title>IAD_Lab0</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="img/logo.png" rel="shortcut icon" type="image/x-icon">
</head>

<body>
<div class="header">
    <div id="logo">
        <img src="img/logo.png" alt="CS School Logo">
    </div>
    <div id="author">
        <p>Prokopiev Alexandr</p>
    </div>

    <div id="group">
        <p>Group P3212</p>
    </div>
    <div id="variant">
        <p>Variant 228</p>
    </div>

</div>
<div class="main">
    <div id="task_text">
        <img src="img/task.PNG" id="text" alt="Task text">
    </div>
    <div id="task_area">
        <img src="img/area.PNG" id="area" alt="Task area">
    </div>
</div>
<div class="main">
    <div class="data_input">
        <form id="calculate" action="handler.php" method="GET">
            <div class="elements">
                <div>
                    <label>Variation of X
                        <input type="text" name="X" placeholder="(-3 ... 5)" id="x">
                        <script src="script.js" async></script>
                    </label><br>
                </div>
                <div>
                    <label>Variation of Y
                        <input type="button" class="btn" value="-4" name="Y" onclick="setY(this)">
                        <input type="button" class="btn" value="-3" name="Y" onclick="setY(this)">
                        <input type="button" class="btn" value="-2" name="Y" onclick="setY(this)">
                        <input type="button" class="btn" value="-1" name="Y" onclick="setY(this)">
                        <input type="button" class="btn" value="0" name="Y" onclick="setY(this)">
                        <input type="button" class="btn" value="1" name="Y" onclick="setY(this)">
                        <input type="button" class="btn" value="2" name="Y" onclick="setY(this)">
                        <input type="button" class="btn" value="3" name="Y" onclick="setY(this)">
                        <input type="button" class="btn" value="4" name="Y" onclick="setY(this)">
                    </label><br>
                </div>
                <div>
                    <label>Variation of R
                        <input type="radio" name="R" value="1">1
                        <input type="radio" name="R" value="2">2
                        <input type="radio" name="R" value="3" checked>3
                        <input type="radio" name="R" value="4">4
                        <input type="radio" name="R" value="5">5
                    </label>
                </div>
            </div>
            <div class="send">
                <input type="button" class="btn" name="send" onclick="check()" value="Calculate">
            </div>
        </form>
    </div>
    <div id="computed_result">
        <img src="img/areas.png" id="result" alt="Result of script work">
    </div>
</div>
</body>
</html>