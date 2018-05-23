<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Juego JS</title>
</head>
<body>
    <div id="tablero">
        <div class="columna">
            <div id="casilla01" class="casilla N" onclick = "tablero.mover(casilla01)"></div>
            <div id="casilla02" class="casilla B" onclick = "tablero.mover(casilla02)"></div>
            <div id="casilla03" class="casilla N" onclick = "tablero.mover(casilla03)"></div>
            <div id="casilla04" class="casilla B" onclick = "tablero.mover(casilla04)"></div>
        </div>
    </div>
    <div id="tablero">
        <div class="columna">
            <div id="casilla05" class="casilla B" onclick = "tablero.mover(casilla05)"></div>
            <div id="casilla06" class="casilla N" onclick = "tablero.mover(casilla06)"></div>
            <div id="casilla07" class="casilla B" onclick = "tablero.mover(casilla07)"></div>
            <div id="casilla08" class="casilla N" onclick = "tablero.mover(casilla08)"></div>
        </div>
    </div>
    <div id="tablero">
        <div class="columna">
            <div id="casilla09" class="casilla N" onclick = "tablero.mover(casilla09)"></div>
            <div id="casilla10" class="casilla B" onclick = "tablero.mover(casilla10)"></div>
            <div id="casilla11" class="casilla N" onclick = "tablero.mover(casilla11)"></div>
            <div id="casilla12" class="casilla B" onclick = "tablero.mover(casilla12)"></div>
        </div>
    </div>
    <div id="tablero">
        <div class="columna">
            <div id="casilla13" class="casilla B" onclick = "tablero.mover(casilla13)"></div>
            <div id="casilla14" class="casilla N" onclick = "tablero.mover(casilla14)"></div>
            <div id="casilla15" class="casilla B" onclick = "tablero.mover(casilla15)"></div>
            <div id="casilla16" class="casilla N" onclick = "tablero.mover(casilla16)"></div>
        </div>
    </div>

    <div id="start-game" onclick = "tablero.startGame()">Start Game</div>

    <script src="js/js.js"></script>
</body>
</html>