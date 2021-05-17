<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        *{
            border: 0;
            margin: 0;
            padding: 0;
        }
        body{
            background: red;
        }
        #contenedor{

            height: 1050px;
            border: 1px solid black;
        }
        #header{
            background: brown;
        }
        .contendheader{
            display: inline;
            float: left;
            text-align: center;
        }
        .contendheader img{
            height: 75px;
        }
        #box1,#box3{
            background: green;
            width: 176px;
        }
        #box2{
            background-color: blueviolet;
            width: 400px;
            text-align: center;
        }

        #box1 img{
            width: 50%;
        }
        #box3 img{
            width: 50%;

        }
        #barra{
            border: 3px solid #008ad0;
            margin: 5px 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div id="contenedor">
    <div id="header">
        <div class="contendheader" id="box1">
            <img src="img/mega1.png" alt="">
        </div>
        <div class="contendheader" id="box2">
            <img src="img/calidad1.png" alt="">
        </div>
        <div class="contendheader" id="box3">
            <img src="img/TOnline1.png" alt="">
        </div>
    </div>
    <div id="barra"></div>
</div>
</body>
</html>