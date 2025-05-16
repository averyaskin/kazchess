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
                        close.style.background = 'url(/upload/item0.svg) center center no-repeat';
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
                <a href="#">Главная</a> » <span class="target-page">Турниры</span>
            </div>
            <section>
                <h2 class="h2">Турниры</h2>
                <p class="podzag-grey">От региональных чемпионатов до международных событий</p>
            </section>
            <section>
                <div class="choose-tournament">
                    <form action="#" method="POST">
                        <div>
                            <div class="custom-select-input2 custom-select-tournament">
                                <div class="select-trigger-input2 select-trigger-tournament">Тип турнира</div>
                                <div class="options-input2 options-tournament">
                                    <div data-value="first">Первый</div>
                                    <div data-value="second">Второй</div>
                                    <div data-value="third">Третий</div>

                                </div>
                            </div>

                            <input type="hidden" name="city-tournament" id="city-tournament">

                            <script>
                                const trigger1 = document.querySelector('.select-trigger-tournament');
                                const options1 = document.querySelector('.options-tournament');
                                const hiddenInput1 = document.getElementById('city-tournament');

                                trigger1.addEventListener('click', function() {
                                    options1.style.display = options1.style.display === 'block' ? 'none' : 'block';
                                });

                                options1.addEventListener('click', function(e) {
                                    const value = e.target.getAttribute('data-value');
                                    trigger1.textContent = e.target.textContent;
                                    hiddenInput1.value = value;
                                    options1.style.display = 'none';
                                });

                                document.addEventListener('click', function(e) {
                                    if (!e.target.closest('.custom-select-tournament')) {
                                        options1.style.display = 'none';
                                    }
                                });
                            </script>


                        </div>

                        <div>
                            <div class="custom-select-input2 custom-select-region">
                                <div class="select-trigger-input2 select-trigger-region">Регион</div>
                                <div class="options-input2 options-region">
                                    <div data-value="fst">Первый</div>
                                    <div data-value="sec">Второй</div>
                                    <div data-value="thd">Третий</div>

                                </div>
                            </div>

                            <input type="hidden" name="city-region" id="city-region">

                            <script>
                                const trigger2 = document.querySelector('.select-trigger-region');
                                const options2 = document.querySelector('.options-region');
                                const hiddenInput2 = document.getElementById('city-region');

                                trigger2.addEventListener('click', function() {
                                    options2.style.display = options2.style.display === 'block' ? 'none' : 'block';
                                });

                                options2.addEventListener('click', function(e) {
                                    const value = e.target.getAttribute('data-value');
                                    trigger2.textContent = e.target.textContent;
                                    hiddenInput2.value = value;
                                    options2.style.display = 'none';
                                });

                                document.addEventListener('click', function(e) {
                                    if (!e.target.closest('.custom-select-region')) {
                                        options2.style.display = 'none';
                                    }
                                });
                            </script>


                        </div>

                        <div>
                            <div class="custom-select-input2 custom-select-month">
                                <div class="select-trigger-input2 select-trigger-month">Выберите месяц</div>
                                <div class="options-input2 options-month">
                                    <div data-value="november">Ноябрь</div>
                                    <div data-value="december">Декабрь</div>

                                </div>
                            </div>

                            <input type="hidden" name="city-month" id="city-month">

                            <script>
                                const trigger3 = document.querySelector('.select-trigger-month');
                                const options3 = document.querySelector('.options-month');
                                const hiddenInput3 = document.getElementById('city-month');

                                trigger3.addEventListener('click', function() {
                                    options3.style.display = options3.style.display === 'block' ? 'none' : 'block';
                                });

                                options3.addEventListener('click', function(e) {
                                    const value = e.target.getAttribute('data-value');
                                    trigger3.textContent = e.target.textContent;
                                    hiddenInput3.value = value;
                                    options3.style.display = 'none';
                                });

                                document.addEventListener('click', function(e) {
                                    if (!e.target.closest('.custom-select-month')) {
                                        options3.style.display = 'none';
                                    }
                                });
                            </script>


                        </div>
                    </form>
                </div>

            </section>


            <section style="margin-top:30px;">
                <div class="choose-box">
                    <div class="left">
                        <p class="podzag-base">Выбрать турнир</p>
                        <p><a href="" class="month-tournament">Ноябрь 2024</a></p>
                    </div>
                    <div class="right">
                        <button class="item active">Все турниры</button>
                        <button class="item">Участие в турнирах</button>
                    </div>
                </div>
                <div class="tournament-two-cols">

                    <div class="card-orange">
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

                    <div class="card-orange">
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

            <section style="margin-top:30px;">
                <div class="choose-box">
                    <div class="left">
                        <p><a href="" class="month-tournament">Декабрь 2024</a></p>
                    </div>
                </div>
                <div class="tournament-two-cols">

                    <div class="card-orange">
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

                    <div class="card-orange">
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


        </div>



    </section>


</main>
<?php //include('inc/footer.php'); ?>

</body>
</html>
