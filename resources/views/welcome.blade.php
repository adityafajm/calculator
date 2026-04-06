<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .calculator {
            width:300px;
            border-radius:20px;
            padding:20px;
        }

        .display {
            font-size:30px;
            margin-bottom:10px;
            text-align:right;
        }

        button {
            width:60px;
            height:60px;
            margin:5px;
            border:none;
            border-radius:10px;
            font-size:18px;
        }

        /* THEMES */
        .dark { background:#2C2C2C; color:white; }
        .light { background:#f5f5f5; color:black; }

        .pastel { background:#81A6C6; }
        .vintage { background:#A47251; }
        .retro { background:#2C687B; }

    </style>
</head>
<body>

<div class="calculator dark" id="calc">
    <div class="display" id="display">0</div>

    <div>
        <button onclick="clearDisplay()">C</button>
        <button onclick="setTheme('dark')">🌙</button>
        <button onclick="setTheme('light')">☀️</button>
        <button onclick="setTheme('pastel')">P</button>
        <button onclick="setTheme('vintage')">V</button>
        <button onclick="setTheme('retro')">R</button>
    </div>

    <div>
        <button onclick="append('7')">7</button>
        <button onclick="append('8')">8</button>
        <button onclick="append('9')">9</button>
        <button onclick="append('/')">÷</button>
    </div>

    <div>
        <button onclick="append('4')">4</button>
        <button onclick="append('5')">5</button>
        <button onclick="append('6')">6</button>
        <button onclick="append('*')">×</button>
    </div>

    <div>
        <button onclick="append('1')">1</button>
        <button onclick="append('2')">2</button>
        <button onclick="append('3')">3</button>
        <button onclick="append('-')">-</button>
    </div>

    <div>
        <button onclick="append('0')">0</button>
        <button onclick="calculate()">=</button>
        <button onclick="append('+')">+</button>
    </div>
</div>

<script>
let display = document.getElementById('display');

function append(val){
    display.innerText += val;
}

function clearDisplay(){
    display.innerText = '0';
}

function calculate(){
    try {
        display.innerText = eval(display.innerText);
    } catch {
        display.innerText = 'Error';
    }
}

function setTheme(theme){
    document.getElementById('calc').className = 'calculator ' + theme;
}
</script>

</body>
</html>