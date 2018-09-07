<?php
setlocale(LC_ALL, 'ru_RU.utf8');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>ПИП</title>
    <link href="img/logo.png" rel="shortcut icon" type="image/x-icon">
    <script src="jquery-3.3.1.min.js" defer></script>
    <script src="script.js" defer></script>
    <meta name="description" content="Лабораторная работа по программированию интернет приложений">
    <meta charset="utf-8">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #64b5f6;
            font-size: 16px;
        }

        .header {
            position: fixed;
            float: top;
            height: 60px;
            width: 100%;
            z-index: 100;
            background-color: #2286c3;
            padding-top: 10px;
            padding-left: 10px;
            padding-right: 30px;

        }

        #logo {
            position: relative;
            float: left;
        }

        #logo img {
            height: 50px;
        }

        #author {
            position: relative;
            float: left;
            margin-left: 80px;
        }

        #group {
            position: relative;
            float: right;
            margin-right: 30px;
        }

        #variant {
            position: relative;
            float: right;
            margin-right: 30px;
        }

        .header p {
            font-family: sans-serif;
            color: black;
            font-weight: bold;
            font-size: 18px;
        }

        .main {
            height: fit-content;
            overflow: auto;
            margin: 0 10px 10px 10px;
            background-color: #9be7ff;
            border-radius: 10px;
            position: relative;
            top: 80px;
            padding: 10px;
            box-shadow: 0 0 8px #2286c3;
        }

        #task_text {
            width: 60%;
            overflow: hidden;
            float: left;
            margin-right: 10px;
        }

        #text {
            width: 100%;
        }

        .main div {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
        }

        #task_area {
            height: auto;
        }

        #area {
            width: 100%;
        }

        .error_comment {
            border: none;
            display: block;
            color: #aa0000;
            font-weight: bold;
            margin-left: 10px;
        }

        .io {
            width: 60%;
            float: left;
            margin-right: 10px;
        }

        .data_input {
            background-color: #2286c3;
            margin-bottom: 10px;
        }

        .btn {
            background-color: #80d6ff;
            padding: 10px;
            border-radius: 10px;
            font-family: sans-serif;
            border: 1px gray solid;
        }

        .elements div {
            padding: 5px;
            border: 2px black dotted;
            margin: 10px;
        }

        .elements {
            font-family: sans-serif;
            float: top;
        }

        .send {
            margin-left: 10px;
            margin-bottom: 10px;
            float: left;
        }

        #computed_result {
            background-color: white;
            width: auto;
            height: fit-content;
        }

        #computed_result {
            position: relative;
            margin: auto;
        }

        #computed_result canvas {
            width: 100%;
            height: 100%;
        }

        .btn:hover {
            background-color: #9be7ff;
        }

        #script_output {
            background-color: wheat;
            padding: 10px;
            margin: auto;
        }

        #script_output > table {
            margin: auto;
            font-family: sans-serif;
            font-weight: lighter;
            text-align: center;
        }

        table, td, tr {
            border: 2px black solid;
            border-spacing: initial;
            border-collapse: collapse;
        }

        #y {
            border-radius: 3px;
            border: none;
            padding: 3px;
            background-color: white;
        }

        .error {
            box-shadow: 0 0 20px #aa0000;
        }

        .error span {
            color: #aa0000;
        }

        #footer {
            background-color: #2286c3;
        }

        #educator {
            font-family: sans-serif;
            color: black;
            font-weight: bold;
            font-size: 18px;
            float: left;
            margin-left: 10px;
        }

        #info {
            font-family: sans-serif;
            color: black;
            font-weight: bold;
            font-size: 18px;
            float: right;
            margin-right: 10px;
        }

        .ok_comment {
            display: none;
        }

    </style>
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
                        <p class="ok_comment" id="X_comment">Значение X не выбрано</p>
                    </div>
                    <div id="Y_input">
                        <label><span>Величина Y</span>
                            <input type="text" name="Y" placeholder="(-3 ... 3)" id="y">
                        </label><br>
                        <p class="ok_comment" id="Y_comment">Значение Y не корректно</p>
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
                        <p class="ok_comment" id="R_comment">Значение R не выбрано</p>
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
