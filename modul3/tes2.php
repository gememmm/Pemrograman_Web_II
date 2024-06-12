<!DOCTYPE html>
<html lang="en">
<head>
    <title>tes2</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background: red;
        }
        .container{
            margin: auto;
            width: 90%;
            max-width: 1200px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        .card{
            background: crimson;
            width: 30%;
            padding: 20px;
            min-width: 320px;
            height: 310px;
            box-sizing: border-box;
            border-radius: 5px;
            color: wheat;
        }
        .img{
            height: 200px;
            width: 100%;
            background: url(https://i.pinimg.com/564x/d1/6e/ee/d16eeea1f21aad582abbd08df435a95e.jpg);
            border-radius: 5px;
            background-size: cover;
            margin-bottom: 10px; 
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="img"></div>
        <h2>Demo post</h2>
        <p>Shit is Clean</p>
    </div>
    <div class="card">
        <div class="img"></div>
        <h2>Demo post</h2>
        <p>Shit is Clean</p>
    </div>
    <div class="card">
        <div class="img"></div>
        <h2>Demo post</h2>
        <p>Shit is Clean</p>
    </div>
    <div class="card">
        <div class="img"></div>
        <h2>Demo post</h2>
        <p>Shit is Clean</p>
    </div>
    <div class="card">
        <div class="img"></div>
        <h2>Demo post</h2>
        <p>Shit is Clean</p>
    </div>
    <div class="card">
        <div class="img"></div>
        <h2>Demo post</h2>
        <p>Shit is Clean</p>
    </div>
</div>
</body>
</html>