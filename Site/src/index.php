<?php
setlocale(LC_ALL, 'ru_RU.utf8');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>ПИП</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="img/logo.png" rel="shortcut icon" type="image/x-icon">
    <script src="jquery-3.3.1.min.js" defer></script>
    <script src="script.js" defer></script>
    <meta name="description" content="Лабораторная работа по программированию интернет приложений">
    <meta charset="utf-8">
</head>

<body>
<div class="header">
    <div id="logo">
        <img src="img/logo.png" alt="Логотип ВТ">
    </div>
    <div id="author">
        <p>Прокопьев Александр</p>
    </div>

    <div id="group">
        <p>Группа P3212</p>
    </div>
    <div id="variant">
        <p>Вариант 28214</p>
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
    <div class="io">
        <div class="data_input">
            <form id="calculate" method="GET">
                <div class="elements">
                    <div id="X_input">
                        <label><span>Величина X</span>
                            <input type="radio" name="X" value="-3">-3
                            <input type="radio" name="X" value="-2">-2
                            <input type="radio" name="X" value="-1">-1
                            <input type="radio" name="X" value="0">0
                            <input type="radio" name="X" value="1">1
                            <input type="radio" name="X" value="2">2
                            <input type="radio" name="X" value="3">3
                            <input type="radio" name="X" value="4">4
                            <input type="radio" name="X" value="5">5
                        </label><br>
                    </div>
                    <div id="Y_input">
                        <label><span>Величина Y</span>
                            <input type="text" name="Y" placeholder="(-3 ... 3)" id="y">
                        </label><br>
                    </div>
                    <div id="R_input">
                        <label><span>Величина R</span>
                            <input type="button" class="btn" value="1" name="R" onclick="setR(this)">
                            <input type="button" class="btn" value="1.5" name="R" onclick="setR(this)">
                            <input type="button" class="btn" value="2" name="R" onclick="setR(this)">
                            <input type="button" class="btn" value="2.5" name="R" onclick="setR(this)">
                            <input type="button" class="btn" value="3" name="R" onclick="setR(this)">
                            <input type="hidden" name="R" id="Coord_R" value="null">
                        </label>
                    </div>
                </div>
                <div class="send">
                    <input type="submit" id="send" class="btn" value="Проверить">
                </div>
            </form>
        </div>
        <div id="script_output">
            <table id="table_result">
                <caption>Результат работы скрипта</caption>
                <thead>
                <tr>
                    <td>X</td>
                    <td>Y</td>
                    <td>R</td>
                    <td>Время начала</td>
                    <td>Время работы</td>
                    <td>Попадание</td>
                </tr>
                </thead>
                <?php
                @session_start();
                if (!isset($_SESSION['history'])) {
                    $_SESSION['history'] = array();
                }
                foreach ($_SESSION['history'] as $row) {
                    echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td>$row[4]</td>";
                    echo "<td>$row[5]</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
    <div id="computed_result">
        <canvas id="result"></canvas>
    </div>
</div>
<div class="main" id="footer">
    <p id="educator">Письмак А.Е.</p>
    <p id="info">Санкт-Петербург 2018 год</p>
</div>
</body>
</html>