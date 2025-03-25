<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click!</title>
    <style>
        .body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;

        }
        .center{
            justify-content: center;
            display: flex;
            align-items: center;
            width: 300px;
            height: 200px;
        }
        .btn{
            padding: 15px, 20px;
            width:150px;
            height:75px;
            border-radius: 7px;
            border-width: 5px;
            border-style: solid;
            background-color: darkblue;
            color: #fff;
            box-shadow:0 12px #999;
            cursor:pointer;
        }
        .click:hover{
            background-color: blue;
        }
        .click:active{
            box-shadow:0 6px #666;
            transform: translateY(6px);
        }
    </style>
</head>
<body class="body">
    <div class="center">
        <p>Número de cliques: <span id="clicks">0</span></p>
        <br>
        <br>
        <button id="button" class="btn click">Clique Aqui!</button>
    </div>

    <script src="clicar.js"></script>
</body>
</html>