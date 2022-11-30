<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo asset('css/styleMain.css')?>" type="text/css"> 
    <title>Funny Comics Land</title>
</head>
<body>

    <header class="headerTop">
        <div class="singinup">
            <div class="Registraciya" role="link">
                <a href="#">Регистрация</a>
            </div>

            <div class="Vhod" role="link">
                <a href="#">Вход</a>
            </div>
        </div>
    </header>

    <header class="headerBottom">
        <div class="header">
            <div class="menu">
                <div class="O_Nas" role="link">
                    <a href="#">О нас</a>
                </div>

                <div class="Katalog" role="link">
                    <a href="#">Каталог</a>
                </div>

                <div class="Tovar" role="link">
                    <a href="#">Товар</a>
                </div>

                <div class="Gde_Nas_Naiti" role="link">
                    <a href="#">Где нас найти?</a>
                </div>
            </div>
        </div>

        <div class="korzina">
            <img src="images/Icons/Karzina.png">
        </div>

    </header>
    <div class="novinki">
        <div>Новинки нашего магазина</div>

        <div class="Novie_Knigi">
            <div class="Novaya_Knigga">
                <img src="images/books/340951.jpg">
                <div class="avtor">Джон Френч</div>
                <div class="Nazvanie">Мортис</div>
            </div>
            <div class="Novaya_Knigga">
                <img src="images/books/341024.jpg">
                <div class="avtor">Грэм Макнилл</div>
                <div class="Nazvanie">Ярость Магнуса</div>
            </div>
            <div class="Novaya_Knigga">
                <img src="images/books/339398.jpg">
                <div class="avtor">Дэн Абнетт</div>
                <div class="Nazvanie">Под знаком Сатурна</div>
            </div>
        </div>
    </div>

    <div class="O_Nas1">
        <div class="Deviz">Принесём веру императора в каждый дом!</div>
        <div class="O_Nas2">!!!Название магазина!!! крупнейший поставщик книг и комиксов по Warhammer 40.000, Warhammer: Age of Sigma, Warhammer: The Horus Heresy. Дотавка осуществляется на всей территории Российской Федерации.</div>
    </div>

    <div class="Katalog_Header">
        <div>
            <a href="#"><img href="#" src="images/katalogImg/40k-nav-logo.webp"></a>
        </div>
        <div>
            <a href="#"><img href="#" src="images/katalogImg/HH-Nav-logo.webp"></a>
        </div>
        <div>
            <a href="#"><img href="#" src="images/katalogImg/New_AOS_Logo.webp"></a>
        </div>
    </div>
    <div class="Katalog_Tovarov">
        <div class="Cikl1">
        <div class="Nazvanie_Cikla">«Ересь Хоруса. Осада Терры».</div>
            <section>
                <div class="card">
                    <a href="#"><img src="images/books/solar_war.jpg" alt="Солнечная война"></a>
                    <h3>Солнечная война</h3>
                    <h5>Джон Фетч</h5>
                    <p class="price">859 руб.</p>
                    <button>В корзину</button>
                </div>
            </section>

            <section>
                <div class="card">
                    <img src="images/books/the_lost_and_the_damned.jpg" alt="Заблудшие и проклятые">
                    <h3>Заблудшие и проклятые</h3>
                    <h5>Гай Хейли</h5>
                    <p class="price">1 759 руб.</p>
                    <button>В корзину</button>
                </div>
            </section>

            <section>
                <div class="card">
                    @foreach($arr as $elem)
                        <img src="images/books/solar_war.jpg" alt="Солнечная война">
                        <h3>{{$elem->name}}</h3>
                        <h5>{{$elem->author}}</h5>
                        <p class="price">{{$elem->price}} руб.</p>
                    @endforeach
                    <button>В корзину</button>
                </div>
            </section>
        </div>
    </div>
</body>
</html>