<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Ma calculatrice</title>
</head>
<body>
    <div class="container">
        <div class="calculator-content">
            <form>
              <div class="display">
                    <input type="text" name="display">
              </div> 
              <div>
                <input type="button" value="AC" onclick="display.value = '' ">
                <input type="button" value="DE" onclick="display.value = display.value.toString().slice(0, -1)">
                <input type="button" value="." onclick="display.value += '.'">
                <input type="button" value="/" onclick="display.value += '/'">
              </div> 
              <div>
                <input type="button" value="7" onclick="display.value += '7'">
                <input type="button" value="8" onclick="display.value += '8'">
                <input type="button" value="9" onclick="display.value += '9'">
                <input type="button" value="*" onclick="display.value += '*'">
              </div>
              <div>
                <input type="button" value="6" onclick="display.value += '6'">
                <input type="button" value="5" onclick="display.value += '5'">
                <input type="button" value="4" onclick="display.value += '4'">
                <input type="button" value="-" onclick="display.value += '-'">
              </div>
              <div>
                <input type="button" value="1" onclick="display.value += '1'">
                <input type="button" value="2" onclick="display.value += '2'">
                <input type="button" value="3" onclick="display.value += '3'">
                <input type="button" value="+" onclick="display.value += '+'">
              </div>
              <div>
                <input type="button" value="0" onclick="display.value += '0'">
                <input type="button" value="00" onclick="display.value += '00'">
                <input type="button" value="=" onclick="display.value = eval(display.value)" class="equal">
              </div>
            </form>
        </div>
    </div>
</body>
</html>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);
}
.container{
    width: 100%;
    height: 100vh;
    display:flex;
    align-items: center;
    justify-content: center;
}
.calculator-content{
    background-color: #3a4452;
    padding: 20px;
    border-radius: 10px;
}
.calculator-content form input {
    width: 60px; 
    height: 60px;
    border: 0;
    outline: 0;
    border-radius: 10px;
    margin: 4px;
    background: transparent;
    box-shadow: -6px -6px 12px rgba(255, 255, 255, 0.1), 6px 6px 12px rgba(0, 0, 0, 0.2);
    font-size: 20px;
    color: #fff;
    cursor: pointer;
}
form .display{
    display: flex;
    justify-content: flex-end;
    margin: 20px 0;
}
form .display input {
    text-align: right;
    flex: 1;
    font-size: 45px;
    box-shadow: none;
}
form input.equal{
    width: 132px;
}
</style>