<!DOCTYPE html>
<html lang="ru">
<head>
    <title>KazChess</title>
    <meta name="description" content=""/>

    <?php include('inc/meta.php'); ?>
</head>
<body>
<?php include('inc/header.php'); ?>


<main>
    <section id="profile">

        <div class="second-menu">
            <div class="close close-second-menu"></div>

            <script>//Для меню слева
                let isMenuOpened = false; // Переменная для отслеживания состояния меню

                document.querySelector('.close').addEventListener('click', function() {
                    // Получаем элементы
                    const secondMenu = document.querySelector('.second-menu');
                    const items = document.querySelectorAll('.a-hid');
                    const content = document.querySelector('.content');

                    const profile_menu = document.querySelector('.profile-menu');
                    const item1 = document.querySelector('.item1');
                    const item2 = document.querySelector('.item2');
                    const item3 = document.querySelector('.item3');
                    const item4 = document.querySelector('.item4');
                    const item5 = document.querySelector('.item5');
                    const close = document.querySelector('.close-second-menu');


                    if (!isMenuOpened) {
                        // Если меню сейчас закрыто, открываем его
                        secondMenu.style.maxWidth = '64px';
                        content.style.maxWidth = '1186px';
                        content.style.marginLeft = '64px';
                        items.forEach(item => {
                            item.style.display = 'none';
                        });
                        profile_menu.style.padding = '40px 0 0 0';
                        item1.style.backgroundPositionX = '22px';
                        item2.style.backgroundPositionX = '24px';
                        item3.style.backgroundPositionX = '22px';
                        item4.style.backgroundPositionX = '22px';
                        item5.style.backgroundPositionX = '22px';
                        close.style.backgroundImage = 'url(../images/item0.svg)';
                        close.style.marginTop = '10px';
                        close.style.marginRight = '-9px';

                    } else {
                        // Если меню сейчас открыто, возвращаем все назад
                        secondMenu.style.maxWidth = '';
                        content.style.maxWidth = '';
                        content.style.marginLeft = '';
                        items.forEach(item => {
                            item.style.display = '';
                        });
                        profile_menu.style.padding = '';
                        item1.style.backgroundPositionX = '';
                        item2.style.backgroundPositionX = '';
                        item3.style.backgroundPositionX = '';
                        item4.style.backgroundPositionX = '';
                        item5.style.backgroundPositionX = '';
                        close.style.background = '';
                        close.style.marginTop = '';
                        close.style.marginRight = '';
                    }

                    // Переключаем состояние
                    isMenuOpened = !isMenuOpened;
                });
            </script>


            <div class="profile-menu">
                <a href="index.php"><div class="item item1"><span class="a-hid">Профиль</span></div></a>
                <a href="index2.php"><div class="item item2 open"><span class="a-hid">Kazchess ID</span></div></a>
                <a href="index3.php"><div class="item item3"><span class="a-hid">Турниры</span></div></a>
                <a href="index4.php"><div class="item item4"><span class="a-hid">Документы</span></div></a>
                <a href="index5.php"><div class="item item5"><span class="a-hid">Достижения</span></div></a>
            </div>


        </div>




        <div class="content">
            <div class="breadcrumbs">
                <a href="#">Главная</a> » <span class="target-page">Kazchess ID</span>
            </div>
            <section>
                <h2 class="h2">Преимущества использования Kazchess ID:</h2>
                <p class="podzag-base">Kazchess ID — уникальный шахматный паспорт, который упрощает идентификацию игроков и предоставляет привилегии:</p>
                <div class="grid-3-col">
                    <img src="../images/img1.png">
                    <img src="../images/img2.png">
                    <img src="../images/img3.png">
                    <img src="../images/img4.png">
                    <img src="../images/img5.png">
                    <img src="../images/img6.png">
                </div>
            </section>





            <section style="margin-top:40px;">

                <p class="podzag-base">Выбрать турнир</p>
                <div class="tournament-two-cols">

                    <div class="card-blue">
                        <div class="first">
                            <div class="text">
                                <p><span class="data">22.11 (Пт) - 22.11 (Пт)</span><br>
                                    <span class="zagolovok">Финал кубка Казахстана 2024 года по классическим шахматам</span>
                                <div class="city">город Астана</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                        <div class="second">
                            <a class="end no">Завершен</a>
                            <a class="result no">Результаты</a>
                        </div>
                    </div>

                    <div class="card-blue">
                        <div class="first">
                            <div class="text">
                                <p><span class="data">22.11 (Пт) - 22.11 (Пт)</span><br>
                                    <span class="zagolovok">«Олимпиада Chess Class» среди школьных команд</span>
                                <div class="city">город Астана</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                        <div class="second">
                            <a class="already no">Текущий</a>
                        </div>
                    </div>

                    <div class="card-blue">
                        <div class="first">
                            <div class="text">
                                <p><span class="data">22.11 (Пт) - 22.11 (Пт)</span><br>
                                    <span class="zagolovok">1-й Открытый Кубок Акима Кызылординской области  по классическим шахматам</span>
                                <div class="city">город Астана</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                        <div class="second">
                            <a class="plan no">Запланирован</a>
                            <a class="result no">Регистрация</a>
                        </div>
                    </div>

                    <div class="card-blue">
                        <div class="first">
                            <div class="text">
                                <p><span class="data">22.11 (Пт) - 22.11 (Пт)</span><br>
                                    <span class="zagolovok">Diplomatic Chess Cup 2024</span>
                                <div class="city">город Астана</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                        <div class="second">
                            <a class="end no">Завершен</a>
                            <a class="result no">Результаты</a>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="button open-all">Все турниры</div>
            </section>



        </div>



    </section>


</main>
<?php //include('inc/footer.php'); ?>

</body>
</html>
