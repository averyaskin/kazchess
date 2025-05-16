<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Регистрация на турнир</title>
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
                <a href="index3.php"><div class="item item3 open"><span class="a-hid">Турниры</span></div></a>
                <a href="index4.php"><div class="item item4"><span class="a-hid">Документы</span></div></a>
                <a href="index5.php"><div class="item item5"><span class="a-hid">Достижения</span></div></a>
            </div>


        </div>




        <div class="content">
            <div class="breadcrumbs">
                <a href="#">Главная</a> » <span class="target-page">Регистрация на турнир</span>
            </div>
            <section>
                <span class="zag-base pconly" >Регистрация на турнир</span>
                <div class="white-container" style="margin-top: 20px;">
                    <h1 class="h1" style="margin-top: 15px; text-align: center; font-weight: 400;">Заполните свои данные</h1>
                    <div class="pconly" style="width: 100%; text-align: right;">
                        <button class="btn"><span class="down-icon">Регламент турнира</span></button>
                    </div>
                    <div class="anketa">
                        <form action="#" method="post" id="anketa-form">
                            <div class="w50">
                                <label for="anketa-fio">ФИО</label>
                                <input type="text" id="anketa-fio" name="anketa-fio" placeholder="Садыкова Жанель Ахметовна " required="">
                            </div>

                            <div class="w50">
                                <label for="anketa-region">Область/ Город</label>
                                <select name="anketa-region" id="anketa-region">
                                    <option value="">Выберите из списка</option>
                                    <option value="aktobe">Актобе</option>
                                    <option value="aktau">Актау</option>
                                </select>
                            </div>
                            <div class="w50">
                                <label for="anketa-work">Место обучения/ работы</label>
                                <input type="text" id="anketa-work" name="anketa-work" placeholder="РОО “Казахстанская Федерация Шахмат”" required="">
                            </div>
                            <div class="w50">
                                <label for="anketa-post">Должность</label>
                                <select name="anketa-post" id="anketa-region">
                                    <option value="">Выберите из списка</option>
                                    <option value="sportsman">Спортсмен</option>
                                    <option value="couch">Тренер</option>
                                </select>
                            </div>
                            <div class="w50 m-w50">
                                <label for="anketa-email">E-mail</label>
                                <input type="email" id="anketa-email" name="anketa-email" placeholder="j.sadykova@mail.ru" required="">
                            </div>
                            <div class="w50 m-w50">
                                <label for="anketa-phone">Номер телефона</label>
                                <input type="text" id="anketa-phone" name="anketa-phone" placeholder="+7 777 777-77-77" required="">
                            </div>
                            <div class="w50 m-w50">
                                <label for="anketa-kid">Kazchess ID</label>
                                <input type="text" id="anketa-kid" name="anketa-kid" placeholder="0 000 555" required="">
                            </div>
                            <div class="w50 m-w50">
                                <label for="anketa-citizen">Гражданство</label>
                                <input type="text" id="anketa-citizen" name="anketa-citizen" placeholder="Казахстан" required="">
                            </div>
                            <div class="w100">
                                <label for="anketa-blog">Для блогеров</label>
                                <input type="text" id="anketa-blog" name="anketa-blog" placeholder="Cсылка на аккаунт" required="">
                            </div>
                        </form>

                        <div class="anketa-btns">
                            <button class="btn-classic-white">Редектировать данные</button>
                            <button class="btn-classic">Регистрация</button>
                        </div>

                    </div>

                </div>

            </section>



            
        </div>



    </section>


</main>
<?php //include('inc/footer.php'); ?>

</body>
</html>
