@extends('layouts.admin')

@section('content')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        @import 'https://fonts.googleapis.com/css?family=Bungee+Shade';

        *,
        *:after,
        *:before {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body,
        html {
            height: 100%;
            width: 100%;
            overflow-x: hidden;
            margin: 0;
        }

        .nepali-flag {
            position: absolute;
            top: -90px;
            left: 50%;
            width: 100px;
            height: auto;
            text-align: center;
        }

        h1 {
            font-family: 'Bungee Shade', cursive;
            text-align: center;
            color: #fff;
            padding: 30px;
            line-height: 1.2;
        }

        strong {
            font-size: 60px;
            color: #DC143C;
        }

        .sky,
        .grass,
        .road {
            position: relative;
        }

        .sky {
            height: 40%;
            background-color: skyblue;
            text-align: center;
        }

        .cloud {
            width: 150px;
            height: auto;
            max-width: 100%;
            position: absolute;
            left: 0;
        }

        .up {
            left: 100px;
            top: 0;
            opacity: .5;
            animation-name: wind;
            animation-duration: 60s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in;
            animation-direction: reverse;
        }

        .down {
            width: 200px;
            top: 50px;
            animation-name: wind;
            animation-duration: 40s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in;
            animation-direction: reverse;
        }

        .grass {
            height: 30%;
            background-color: seagreen;
        }

        .road {
            height: 30%;
            background-color: dimgrey;
            border-top: 10px solid gray;
            border-bottom: 10px solid gray;
            width: 100%;
        }

        .lines {
            border: 5px dashed #fff;
            height: 0px;
            width: 100%;
            position: absolute;
            top: 45%;
        }

        strong {
            color: linear-gradient(red, yellow);
        }

        .car {
            display: block;
            max-width: 100%;
            width: 100px;
            height: auto;
            position: absolute;
            left: 0;
        }

        .yellow {
            top: 0px;
            animation: drive 4s infinite ease-in-out,
                jump 0.3s 1.2s ease;
        }

        .blue {
            top: 75px;
            animation-name: drive;
            animation-duration: 6s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in;
        }

        @keyframes drive {
            from {
                transform: translateX(-20vw)
            }

            to {
                transform: translateX(120vw)
            }
        }

        @keyframes wind {
            from {
                transform: translateX(-20vw)
            }

            to {
                transform: translateX(120vw)
            }
        }

        @keyframes jump {

            0%,
            100% {
                top: 0px
            }

            50% {
                top: -30px;
            }
        }
    </style>

</head>

<body>
    <div class="sky">
        <img class="cloud up" src="http://clipart-library.com/images/8i6oA9x5T.png" alt="">
        <img class="cloud down" src="http://clipart-library.com/images/8i6oA9x5T.png" alt="">
    </div>
    <div class="grass">
        <img class="nepali-flag" src="http://clipart.info/images/ccovers/1495748346Nepal-Flag-PNG-Clip-Art.png" alt="">
        <h1>Best Car Sales<br><strong>By David Danelia</strong></h1>
    </div>
    <div class="road">
        <div class="lines"></div>
        <img class="yellow car" src="https://images.vexels.com/media/users/3/139423/isolated/preview/98bdee93f842013dc8495f64d1e1a735-car-racing-race-by-vexels.png" alt="">
        <img class="blue car" src="https://images.vexels.com/media/users/3/145211/isolated/preview/ca19aa88a716881725fdf3520d251829-yellow-car-illustration-by-vexels.png" alt="">

    </div>

</body>

</html>
@endsection