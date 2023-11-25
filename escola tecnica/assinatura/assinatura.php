<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/home-page-styles.css">
  <link rel="stylesheet" href="./css/back.css">
  <script src="./scripts/script.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;600&display=swap" rel="stylesheet">
  <title>Pop World</title>
</head>
<body>
    <div id="back">
    
        <video loop autoplay muted>
            <source src="../assets/1.mp4" type="video/mp4">
        </video>
     </div>
  <nav class="s-menu">
    <ul>
      <li class="s-menu__item">
        <a href="../index.html">Inicio</a>
      </li>
     
      <li class="s-menu__item s-menu__icon">
      <a href="../index.html"><img src="../assets/logo mic.png" width="36px" height="50px"></a>
      </li>
      <li class="s-menu__item">
        <a href="../login.html">Login</a>
      </li>
      
    </ul>
  </nav>
  <div class="s-container">
    <div class="s-cards-carousel" style="transform: translateZ(-40vw) rotateY(0deg);">
      <a href="./pages/tobey-maguire/spiderman1.html" class="s-card" id="spider-man-01">
        <img class="s-card__background" src="./img/1.png">
        <!--<img class="s-card__image" src="">-->
        <h2 class="s-card__title">Assine já</h2>
      </a>
      <a href="./pages/tom-holland/spiderman1.html" class="s-card" id="spider-man-02">
        <img class="s-card__background" src="./img/2 (2).png">
<!--<img class="s-card__image" src="">-->
        <h2 class="s-card__title">Assine já</h2>
      </a>
      <a href="./pages/andrew-garfield/spiderman1.html" class="s-card" id="spider-man-03">
        <img class="s-card__background" src="./img/3 (2).png">
        
        <h2 class="s-card__title">Assine já</h2>
      </a>
    </div>
  </div>
  <br>
  <br>

  <div class="s-controller">
    <div id="1" onclick="selectCarouselItem(this)" class="s-controller__button s-controller__button--active">
      01
    </div>
    <div id="2" onclick="selectCarouselItem(this)" class="s-controller__button">
      02
    </div>
    <div id="3" onclick="selectCarouselItem(this)" class="s-controller__button">
      03
    </div>
    <div class="s-controller__line"></div>
  </div>
</body>
</html>