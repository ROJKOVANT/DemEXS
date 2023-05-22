<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/catalog.css">
    <title>CopyStar</title>
</head>
<body>
    @include('header')
    <div class="container-1">
        <h3>Каталог</h3>
        <div class="d-f">
            <div class="filter">
                <form action="">
                    <h6>Категория</h6>
                    <label>
                        <input type="radio" name="category" id="category" value="лазерные">
                        лазерные принтеры
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="category" id="category" value="струйные">
                        струйные принтеры
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="category" id="category" value="термо">
                        термопринтеры
                    </label>
                    <br>
                    <h6>Цена</h6>
                    <label>
                        <input type="radio" name="price" id="price" value="Дорогой">
                        Дорогой товар
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="price" id="price" value="Дешевый">
                        Дешевый товар
                    </label>
                    <h6>Год производства</h6>
                    <label>
                        <input type="radio" name="year" id="year" value="Новый">
                        Новый товар
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="year" id="year" value="Старый">
                        Старый товар
                    </label>
                        <button type="submit" class="btn_more">Применить</button>
                </form>
            </div>
            <div class="product">
                <div class="content">
                    <img src="img/block2img1.png" alt="">
                    <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
                    <p>5399 ₽</p>
                </div>
                <div class="content">
                    <img src="img/block2img1.png" alt="">
                    <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
                    <p>5399 ₽</p>
                </div>
                <div class="content">
                    <img src="img/block2img1.png" alt="">
                    <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
                    <p>5399 ₽</p>
                </div>
                <div class="content">
                    <img src="img/block2img1.png" alt="">
                    <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
                    <p>5399 ₽</p>
                </div>
                <div class="content">
                    <img src="img/block2img1.png" alt="">
                    <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
                    <p>5399 ₽</p>
                </div>
                <div class="content">
                    <img src="img/block2img1.png" alt="">
                    <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
                    <p>5399 ₽</p>
                </div>
                <div class="content">
                    <img src="img/block2img1.png" alt="">
                    <h4><a href="/openProduct" class="link-effect">Epson-TX117</a></h4>
                    <p>5399 ₽</p>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>
