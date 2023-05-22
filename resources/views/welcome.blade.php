<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/welcome.css">
    <title>CopyStar</title>
</head>
<body>
    @include('header')
    <div class="container-1">
        <h3>О нас</h3>
        <div class="block">
            <div class="map"></div>
            <div class="info">
                <h4>CopyStar</h4>
                <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.
                    Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона,
                    а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                    "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.."
                </p>
            </div>
        </div>
        <h3>Новинки компании</h3>
        <div class="product">
            <div class="content">
                <img src="img/block2img1.png" alt="">
                <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
            </div>
            <div class="content">
                <img src="img/block2img1.png" alt="">
                <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
            </div>
            <div class="content">
                <img src="img/block2img1.png" alt="">
                <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
            </div>
            <div class="content">
                <img src="img/block2img1.png" alt="">
                <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
            </div>
            <div class="content">
                <img src="img/block2img1.png" alt="">
                <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>
