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
            background-color: grey;
            height: 1050px;
        }
        #header{
            background: brown;
        }
        .contendheader{
            display: inline;
            float: left;
            height: 120px;
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
            width: 100%;
        }
        #box3 img{
            width: 100%;
            display: block;
            margin: 600vh auto;
        }
    </style>
</head>
<body>
<div id="contenedor">
    <div id="header">
        <div class="contendheader" id="box1">
            <img src="img/mega.png" alt="">
        </div>
        <div class="contendheader" id="box2">
            <img src="img/mega.png" alt="">
        </div>
        <div class="contendheader" id="box3">
            <img src="img/TOnline.png" alt="">
        </div>
    </div>
</div>
</body>
</html>