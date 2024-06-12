<!DOCTYPE html>
<html lang="en">
<head>
    <title>test</title>
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
        min-height: 90vh;
        flex-wrap: wrap;
        gap: 10px;
    }
    .card{
        width: 30%;
        padding: 20px;
        min-width: 320px;
        height: 310px;
        border-radius: 10px;
        background-color: crimson;
        display: flex;
        align-items: center;
        justify-content: center;
        color: wheat;
        flex-direction: column;
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
            <h2>Lorem ipsum dolor sit</h2>
        </div>
        <div class="card">
            <div class="img"></div>
            <h2>Lorem ipsum dolor sit</h2>
        </div>
        <div class="card">
            <div class="img"></div>
            <h2>Lorem ipsum dolor sit</h2>
        </div>
        <div class="card">
            <div class="img"></div>
            <h2>Lorem ipsum dolor sit</h2>
        </div>
        <div class="card">
            <div class="img"></div>
            <h2>Lorem ipsum dolor sit</h2>
        </div>
    </div>
</body>
</html>