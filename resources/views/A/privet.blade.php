<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="police-car">
            <img src="img/police-car.gif" alt="Police Car">
            <img src="img/Shrek.png" alt="Your Image">
            <img src="img/Shrek.png" alt="Your Image">
            <img src="img/Shrek.png" alt="Your Image">
            <img src="img/Shrek.png" alt="Your Image">
            <img src="img/Shrek.png" alt="Your Image">
            <img src="img/Shrek.png" alt="Your Image">
            <img src="img/Shrek.png" alt="Your Image">
            <img src="img/police-car.gif" alt="Police Car">
        </div>
    </header>

    <div class="snake-container">
        <div class="snake"></div>
    </div>
    <div class="snake-container">
        <img class="Ryan" src="img/Ryan.jpg" alt="Ryan">
    </div>



    <audio id="audio" loop src="sound/1.mp3"></audio>
    <script>
    var first = true;
    document.onclick = function(){
        if(first == true) audio.play()
        first = false;
    }
    </script>
</body>
</html>