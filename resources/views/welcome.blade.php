<!DOCTYPE html>
<html>
<head>
    <title>Calkyl</title>
    <style>
        body {
    font-family: 'Segoe UI';
    background: #dcdcdc;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;

    overflow-x: hidden; /* 🔥 biar gak geser */
}

        .app {
    display: flex;
    background: #f5f5f5;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    overflow: hidden;

    /* 🔥 TAMBAHAN */
    width: 140px;       /* tambah 30% */
    max-width: 1000px; /* biar gak kelebaran */
}

        .calculator {
    padding: 20px;
    width: 60%; /* 🔥 sebelumnya 300px */
}

        .display-small {
            color: gray;
        }

        .display {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        button {
            height: 60px;
            border-radius: 50%;
            border: none;
            font-size: 18px;
            cursor: pointer;
        }

        .num {
            background: #e6e6e6;
        }

        .op {
            background: #1976d2;
            color: white;
        }

        .equal {
            grid-row: span 2;
            border-radius: 30px;
            height: 130px;
        }

        .history {
    width: 40%;
    padding: 20px;
    border-left: 1px solid #ccc;
}

        .history-item {
            margin-bottom: 10px;
        }

    </style>
</head>
<body>

<div class="app">

    <!-- CALCULATOR -->
    <div class="calculator">
        <div class="display-small" id="exp"></div>
        <div class="display" id="display">0</div>

        <div class="buttons">

            <button class="num" onclick="clearDisplay()">AC</button>
            <button class="num" onclick="append('/')">/</button>
            <button class="num" onclick="append('*')">x</button>
            <button class="num" onclick="append('-')">-</button>

            <button class="num" onclick="append('7')">7</button>
            <button class="num" onclick="append('8')">8</button>
            <button class="num" onclick="append('9')">9</button>
            <button class="op" onclick="append('+')">+</button>

            <button class="num" onclick="append('4')">4</button>
            <button class="num" onclick="append('5')">5</button>
            <button class="num" onclick="append('6')">6</button>
            <button class="op equal" onclick="calculate()">=</button>

            <button class="num" onclick="append('1')">1</button>
            <button class="num" onclick="append('2')">2</button>
            <button class="num" onclick="append('3')">3</button>

            <button class="num" onclick="append('0')">0</button>
            <button class="num" onclick="append('.')">.</button>

        </div>
    </div>

    <!-- HISTORY -->
    <div class="history">
        <h3>History</h3>
        <div id="history"></div>
    </div>

</div>

<script>
let display = document.getElementById('display');
let exp = document.getElementById('exp');
let history = document.getElementById('history');

function append(val){
    // 🔥 FIX BUG 0
    if(display.innerText === '0' && !isOperator(val)){
        display.innerText = val;
    } else {
        display.innerText += val;
    }
}

function isOperator(val){
    return ['+','-','*','/','.'].includes(val);
}

function clearDisplay(){
    display.innerText = '0';
    exp.innerText = '';
}

function calculate(){
    try {
        let expression = display.innerText;
        let result = eval(expression);

        history.innerHTML += `
            <div class="history-item">
                ${expression} = <b>${result}</b>
            </div>
        `;

        exp.innerText = expression;
        display.innerText = result;
    } catch {
        display.innerText = 'Error';
    }
}
</script>

</body>
</html>