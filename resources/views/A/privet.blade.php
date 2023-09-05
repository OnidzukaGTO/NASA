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
    <div class="help">
        <button id="activateButton">
            <h1>
                ПОМОЧЬ ШРЕКАМ!
            </h1>
        </button>
    </div>
    <div id="hiddenContent" class="Ryan" style="display: none;">
        <img src="img/Billy.jpg" alt="Ryan" width="300px" height="168.85px">
        <img src="img/Ryan.jpg" alt="Ryan" width="300px">
        <img src="img/Ryan.jpg" alt="Ryan" width="300px">
    </div>
    
    <a href="{{route('nasa')}}">
        <div id="gif-container" class="hidden">
            <img src="img/boom.gif" alt="Моя GIF-анимация">
        </div>
    </a>
    

    
    
    <audio id="audio" loop src="sound/1.mp3"></audio>
    
    <script>

    var first = true;

    document.getElementById("activateButton").addEventListener("click", function() {
    if(first == true) audio.play()
    first = false;
    var hiddenContent = document.getElementById("hiddenContent");
    hiddenContent.style.display = "flex";
 
    const animationContainer = document.querySelector('.Ryan');
    const gifContainer = document.getElementById('gif-container');

    animationContainer.addEventListener('animationend', () => {
        // Отображаем GIF на весь экран
        gifContainer.classList.remove('hidden');
        gifContainer.classList.add('gif');
    });
    });
    </script>
</body>
</html>