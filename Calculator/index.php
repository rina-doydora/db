<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="calculator">
        <input type="text" id="display" disabled>
        <div class="buttons">
            <button onclick="clearDisplay()">C</button>
            <button onclick="appendToDisplay('/')">/</button>
            <button onclick="appendToDisplay('*')">*</button>
            <button onclick="appendToDisplay('-')">-</button>
            <button onclick="appendToDisplay('+')">+</button>
            <button onclick="appendToDisplay('.')">.</button>
            <button onclick="appendToDisplay('0')" class="double">0</button>
            <button onclick="appendToDisplay('1')">1</button>
            <button onclick="appendToDisplay('2')">2</button>
            <button onclick="appendToDisplay('3')">3</button>
            <button onclick="appendToDisplay('4')">4</button>
            <button onclick="appendToDisplay('5')">5</button>
            <button onclick="appendToDisplay('6')">6</button>
            <button onclick="appendToDisplay('7')">7</button>
            <button onclick="appendToDisplay('8')">8</button>
            <button onclick="appendToDisplay('9')">9</button>
            <button onclick="calculate()" class="operator double">=</button>
        </div>
    </div>
    <script>
        function appendToDisplay(value) {
            const display = document.getElementById('display');
            // Prevent multiple operators or starting with an operator
            if (['+', '-', '*', '/'].includes(value) && display.value === '') return;
            // Prevent multiple operators in a row
            if (['+', '-', '*', '/'].includes(value) && ['+', '-', '*', '/'].includes(display.value.slice(-1))) return;
            display.value += value;
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function calculate() {
            const display = document.getElementById('display');
            try {
                // Evaluate the expression
                display.value = eval(display.value);
            } catch {
                display.value = 'Error';
            }
        }
    </script>
</body>
</html>
