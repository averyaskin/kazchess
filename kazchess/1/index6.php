<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Онлайн-турнир по шахматам для учителей начальных классов</title>
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
                <a href="index2.php"><div class="item item2"><span class="a-hid">Kazchess ID</span></div></a>
                <a href="index3.php"><div class="item item3"><span class="a-hid">Турниры</span></div></a>
                <a href="index4.php"><div class="item item4 open"><span class="a-hid">Документы</span></div></a>
                <a href="index5.php"><div class="item item5"><span class="a-hid">Достижения</span></div></a>
            </div>


        </div>




        <div class="content">
            <div class="breadcrumbs">
                <a href="#">Главная</a> » <span class="target-page">Онлайн-турнир по шахматам для учителей начальных классов</span>
            </div>
            <section>
                <div class="white-container">
                    <h1 class="h1" style="margin-top: 15px">Онлайн-турнир по шахматам для учителей начальных классов</h1>
                    <div class="tournament-points">
                        <div class="first">
                            <div class="point">
                                <div>
                                <img src="../images/point-map.svg">
                                </div>
                                <div>
                                    <span class="grey">Локация</span>
                                    <span class="osn">Кызылординская<br>область</span>
                                </div>
                            </div>
                            <div class="point">
                                <div>
                                    <img src="../images/point-cost.svg">
                                </div>
                                <div>
                                    <span class="grey">Участие</span>
                                    <span class="osn">15 000 ₸</span>
                                </div>
                            </div>
                            <div class="point">
                                <div>
                                    <img src="../images/point-format.svg">
                                </div>
                                <div>
                                    <span class="grey">Формат</span>
                                    <span class="osn">Онлайн</span>
                                </div>
                            </div>
                            <div class="point-gold">
                                <div>
                                    <img src="../images/point-medal.svg">
                                </div>
                                <div>
                                    <span class="grey">Призовой фонд</span>
                                    <span class="osn">2 000 000 ₸</span>
                                </div>
                            </div>
                        </div>
                        <div class="second"></div>
                        <div class="third">
                            <div class="point">
                                <div>
                                    <img src="../images/point-date.svg">
                                </div>
                                <div>
                                    <span class="grey">Дата проведения</span>
                                    <span class="osn">23 ноября 2024 - 24 ноября 2024</span>
                                </div>
                            </div>
                            <div>
                                <button class="btn"><span class="down-icon">Регламент турнира <u>РУС</u></span></button>
                            </div>

                        </div>
                    </div>

                    <div class="text">
                        <p><strong>Diplomatic Chess Cup 2024 🏆</strong></p>
                        <p>К участию приглашаются сотрудники дипломатических служб, представители государственных учреждений и международных организаций, а также члены их&nbsp;семей. Каждая команда состоит из двух игроков.</p>
                        <p><strong>Цель турнира:</strong> развитие стратегического мышления и выявление лучших шахматистов среди сотрудников дипломатических служб.</p>
                        <p>Турнир пройдет по швейцарской системе в 7 туров с контролем времени 10 минут + 5 секунд на ход. Участники с рапид-рейтингом ФИДЕ не выше 2000 на 1 ноября 2024 года могут принять участие.</p>
                        <p>🏅 Тройка победителей получит дипломы, медали, а чемпион унесет домой Кубок победителя. 🏆</p>
                        <p>&nbsp;</p>
                        <a href="index7.php"><button class="btn-classic">Регистрация</button></a>
                        <p>&nbsp;</p>
                        <p><strong>Контакты для справок:</strong></p>
                        <p>Секретарь турнира - Нурали Ергалиулы +7 707 950 5460</p>
                        <p class="how-mach">Просмотров: 286</p>

                    </div>

                </div>

            </section>




            <section id="banner-all-width">
                <p>Участвуйте в программе лояльности и получайте повышенный кешбэк</p>
                <button onclick="location.href='#'">Выпустить карту Freedom bank</button>
            </section>
        </div>



    </section>


</main>
<?php //include('inc/footer.php'); ?>

</body>
</html>
