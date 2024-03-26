<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR</title>
    <style> 
            body{
                background-color: skyblue;
                color: 
            }
        input[type="button"]{
            width : 80px;
            padding : 10px 20px;
            background-color:black;
            color: white;
            font-size:15px;
            font-family:'pacifico',sans-serif;
            border-radius:150px;
            border-color:436850;
        }
        input[type="text"]{
            width : 250px;
            height :25px;
            padding : 10px 20px;
            border-radius:40px;
        }

</style>
</head>

<body>
    <center>
        <h1>KALKULATOR SEDERHANA👻</h1>
        <div class="container">
            <form action="" method="post" name="form1">
                <input type="text" name="a" id=""><br><br>
                <div class="calculator-bottons">
                    <input type="button" value="1" onClick="form1.a.value+='1'">
                    <input type="button" value="2" onClick="form1.a.value+='2'">
                    <input type="button" value="3" onClick="form1.a.value+='3'">
                    <input type="button" value="+" onClick="form1.a.value+='+'"><br>
                    <input type="button" value="4" onClick="form1.a.value+='4'">
                    <input type="button" value="5" onClick="form1.a.value+='5'">
                    <input type="button" value="6" onClick="form1.a.value+='6'">
                    <input type="button" value="-" onClick="form1.a.value+='-'"><br>
                    <input type="button" value="7" onClick="form1.a.value+='7'">
                    <input type="button" value="8" onClick="form1.a.value+='8'">
                    <input type="button" value="9" onClick="form1.a.value+='9'">
                    <input type="button" value="x" onClick="form1.a.value+='*'"><br>
                    <input type="button" value="0" onClick="form1.a.value+='0'">
                    <input type="button" value="=" onClick="form1.a.value=eval(form1.a.value)">
                    <input type="button" value="AC" onClick="form1.a.value=''">
                    <input type="button" value="/" onClick="form1.a.value+='/'"><br>
                    
            </form>
</div>
</body>
</html>