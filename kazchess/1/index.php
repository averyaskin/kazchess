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

            <script>
                let isMenuOpened = false; // Переменная для отслеживания состояния меню

                document.querySelector('.close').addEventListener('click', function() {
                    // Получаем элементы
                    const secondMenu = document.querySelector('.second-menu');
                    const items = document.querySelectorAll('.a-hid');
                    const content = document.querySelector('.content');
                    const data_col = document.querySelector('.data-col');
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
                        data_col.style.maxWidth = '1186px';
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
                        data_col.style.maxWidth = '';
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
                <a href="index.php"><div class="item item1 open"><span class="a-hid">Профиль</span></div></a>
                <a href="index2.php"><div class="item item2"><span class="a-hid">Kazchess ID</span></div></a>
                <a href="index3.php"><div class="item item3"><span class="a-hid">Турниры</span></div></a>
                <a href="index4.php"><div class="item item4"><span class="a-hid">Документы</span></div></a>
                <a href="index5.php"><div class="item item5"><span class="a-hid">Достижения</span></div></a>
            </div>


        </div>




        <div class="content">
            <div class="breadcrumbs">
                <a href="#">Главная</a> » <span class="target-page">Профиль</span>
            </div>

            <div class="tabs">
                <div class="three-tabs">
                    <div class="tab active">Спортсмен</div>
                    <div class="tab">Тренер</div>
                    <div class="tab">Судья</div>
                </div>
                <script>
                    const tabs = document.querySelectorAll('.tab');

                    tabs.forEach(tab => {
                        tab.addEventListener('click', () => {
                            tabs.forEach(t => t.classList.remove('active')); // убираем класс .active со всех вкладок
                            tab.classList.add('active'); // добавляем класс .active на нажатую вкладку
                        });
                    });
                </script>
                <div class="share">
                    <i></i>Поделиться профилем
                </div>
            </div>
            <div class="profile-container">
                <img src="../images/person.png" class="profile-image">
                <div class="mobileonly download-pdf"><a href="#" target="_blank" class="no"><i></i> Скачать сертификат PDF</a></div>
                <div class="profile-info">
                    <div class="info-table">
                    <span class="profile-name">Жанель Садыкова</span>
                        <div class="profile-box">
                            <div class="divTable" >
                                    <div class="divTableRow">
                                        <div class="divTableCell">KazChess ID:</div>
                                        <div class="divTableCell">0 000 555</div>
                                        <div class="divTableCell">Гражданство:</div>
                                        <div class="divTableCell">Казахстан</div>
                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell">Дата рождения:</div>
                                        <div class="divTableCell">1990</div>
                                        <div class="divTableCell">Пол:</div>
                                        <div class="divTableCell">Женский</div>
                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell">FIDE ID:</div>
                                        <div class="divTableCell">1503104</div>
                                        <div class="divTableCell">FIDE:</div>
                                        <div class="divTableCell">Гроссмейстер</div>
                                    </div>
                            </div>

                        </div>
                    </div>
                    <span class="rating">
                        <span class="profile-rating">FIDE рейтинг</span>
                        <div class="rating-item">
                            <div class="item1">std: 2831</div>
                            <div class="item2">rapid: 2825</div>
                            <div class="item3">blitz: 2893</div>
                        </div>
                    </div>
                </div>
            <section class="pconly">
                <div class="download-pdf"><a href="#" target="_blank" class="no"><i></i> Скачать сертификат PDF</a></div>
            </section>

            <section>
                <div class="two-cols-data">
                    <div class="data-col">
                        <span class="zag-base">Данные для входа</span>
                        <div class="auth-data">

                            <form action="#" method="POST">
                                <div class="w50">
                                    <label for="email">E-mail:</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                <div class="w50">
                                    <label for="name">Имя:</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="w50">
                                    <label for="surname">Фамилия:</label>
                                    <input type="text" id="surname" name="surname" required>
                                </div>
                                <div class="w50">
                                    <label for="patronymic">Отчество:</label>
                                    <input type="text" id="patronymic" name="patronymic" required>
                                </div>
                                <div class="w50">
                                    <label for="phone">Номер телефона:</label>
                                    <input type="tel" id="phone" name="phone" required placeholder="+7 777 777 77 77">
                                </div>
                                <div class="w50">
                                    <label for="social">Соц сеть:</label>
                                    <input type="text" id="social" name="social" required>
                                </div>
                                <div class="w50 m-w50">
                                    <label for="password">Новый пароль:</label>
                                    <input type="password" id="password" name="password" required>
                                </div>
                                <div class="w50 m-w50">
                                    <label for="confirm-password">Повторите пароль:</label>
                                    <input type="password" id="confirm-password" name="confirm-password" required>
                                </div>

                                <button type="submit">Сохранить</button>
                            </form>
                        </div>

                        <span class="zag-base">Спортивные данные</span>
                        <div class="auth-data">

                            <form action="#" method="POST">
                                <div class="w100">
                                    <label for="city-sport">Область / Город</label>
                                    <div class="custom-select-input custom-select-sport">
                                        <div class="select-trigger-input select-trigger-sport">Выберите ваш город</div>
                                        <div class="options-input options-sport">
                                            <div data-value="ru">Астана</div>
                                            <div data-value="ua">Атырау</div>
                                            <div data-value="by">Актау</div>

                                        </div>
                                    </div>

                                    <input type="hidden" name="city-sport" id="city-sport">

                                    <script>
                                        const trigger1 = document.querySelector('.select-trigger-sport');
                                        const options1 = document.querySelector('.options-sport');
                                        const hiddenInput1 = document.getElementById('city-sport');

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
                                            if (!e.target.closest('.custom-select-sport')) {
                                                options1.style.display = 'none';
                                            }
                                        });
                                    </script>
                                </div>
                                <div class="w100">
                                    <label for="education">Место обучения/ работы</label>
                                    <div class="custom-select-input custom-select-education">
                                        <div class="select-trigger-input select-trigger-education">Выберите вариант</div>
                                        <div class="options-input options-education">
                                            <div data-value="ru">РОО “Казахстанская Федерация Шахмат”</div>
                                            <div data-value="ua">Второй вариант</div>
                                            <div data-value="by">Третий вариант</div>

                                        </div>
                                    </div>

                                    <input type="hidden" name="education" id="education">

                                    <script>
                                        const trigger3 = document.querySelector('.select-trigger-education');
                                        const options3 = document.querySelector('.options-education');
                                        const hiddenInput3 = document.getElementById('education');

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
                                            if (!e.target.closest('.custom-select-education')) {
                                                options3.style.display = 'none';
                                            }
                                        });
                                    </script>
                                </div>

                                <div class="w100">
                                    <label for="fio">ФИО тренера</label>
                                    <div class="custom-select-input custom-select-fio">
                                        <div class="select-trigger-input select-trigger-fio">Выберите вариант</div>
                                        <div class="options-input options-fio">
                                            <div data-value="ru">Садыков Сады Садыкович</div>
                                            <div data-value="ua">Второй вариант</div>
                                            <div data-value="by">Третий вариант</div>

                                        </div>
                                    </div>

                                    <input type="hidden" name="fio" id="fio">

                                    <script>
                                        const trigger4 = document.querySelector('.select-trigger-fio');
                                        const options4 = document.querySelector('.options-fio');
                                        const hiddenInput4 = document.getElementById('fio');

                                        trigger4.addEventListener('click', function() {
                                            options4.style.display = options4.style.display === 'block' ? 'none' : 'block';
                                        });

                                        options4.addEventListener('click', function(e) {
                                            const value = e.target.getAttribute('data-value');
                                            trigger4.textContent = e.target.textContent;
                                            hiddenInput4.value = value;
                                            options4.style.display = 'none';
                                        });

                                        document.addEventListener('click', function(e) {
                                            if (!e.target.closest('.custom-select-fio')) {
                                                options4.style.display = 'none';
                                            }
                                        });
                                    </script>
                                </div>
                                <div class="w50 m-w50 be-more">
                                    <label for="rank">Спортивное звание</label>
                                    <div class="custom-select-input custom-select-rank">
                                        <div class="select-trigger-input select-trigger-rank">Выберите звание</div>
                                        <div class="options-input options-rank">
                                            <div data-value="ru">Молодец</div>
                                            <div data-value="ua">Супер</div>
                                            <div data-value="by">Пупер</div>

                                        </div>
                                    </div>

                                    <input type="hidden" name="rank" id="rank">

                                    <script>
                                        const trigger5 = document.querySelector('.select-trigger-rank');
                                        const options5 = document.querySelector('.options-rank');
                                        const hiddenInput5 = document.getElementById('rank');

                                        trigger5.addEventListener('click', function() {
                                            options5.style.display = options5.style.display === 'block' ? 'none' : 'block';
                                        });

                                        options5.addEventListener('click', function(e) {
                                            const value = e.target.getAttribute('data-value');
                                            trigger5.textContent = e.target.textContent;
                                            hiddenInput5.value = value;
                                            options5.style.display = 'none';
                                        });

                                        document.addEventListener('click', function(e) {
                                            if (!e.target.closest('.custom-select-rank')) {
                                                options5.style.display = 'none';
                                            }
                                        });
                                    </script>
                                </div>


                                <div class="w50 m-w50">
                                    <label for="more">&nbsp;</label>
                                    <div onclick="add_field()" class="add-more-field" type="button">Добавить еще</div>
                                    <script>
                                        function add_field() {
                                            // Создаем новое поле
                                            var newField = document.createElement('div');
                                            newField.className = 'w50 m-w50';
                                            newField.innerHTML =  '<label for="more">Дополнительное поле</label>' +
                                                '<input type="text" name="field[]"></div>';

                                            // Находим контейнер и добавляем новое поле после него
                                            var container = document.querySelector('.be-more');
                                            container.insertAdjacentElement('afterend', newField);
                                        }
                                    </script>
                                </div>
                                <div class="w100">
                                    <div class="zayavka-more-fields">
                                    <p>Не нашли школу или тренера,<br>оставьте заявку на добавление</p>
                                        <div type="button">Оставить заявку</div>
                                    </div>
                                </div>

                                        <div class="w100">
                                <button type="submit">Сохранить</button>
                                        </div>
                            </form>

                        </div>

                        <span class="zag-base">Паспортные данные</span>
                        <div class="auth-data">

                            <form action="#" method="POST">
                                <div class="w50">
                                    <label for="IIN">ИИН (для граждан<br>Республики Казахстан)</label>
                                    <input type="text" id="IIN" name="IIN" required>
                                </div>
                                <div class="w50">
                                    <label for="sex">&nbsp;<br>Пол</label>
                                    <input type="text" id="sex" name="sex" required>
                                </div>
                                <div class="w50">
                                    <label for="bdate">Дата рождения</label>
                                    <input type="text" id="bdate" name="bdate" required>
                                </div>
                                <div class="w50">
                                    <label for="nationality">Гражданство</label>
                                    <input type="text" id="nationality" name="nationality" required>
                                </div>
                                <div class="w100">
                                    <label for="city">Область / Город</label>
                                    <div class="custom-select-input custom-select-city">
                                        <div class="select-trigger-input select-trigger-city">Выберите ваш город</div>
                                        <div class="options-input options-city">
                                            <div data-value="ru">Астана</div>
                                            <div data-value="ua">Атырау</div>
                                            <div data-value="by">Актау</div>

                                        </div>
                                    </div>

                                    <input type="hidden" name="city" id="city">

                                    <script>
                                        const trigger2 = document.querySelector('.select-trigger-city');
                                        const options2 = document.querySelector('.options-city');
                                        const hiddenInput2 = document.getElementById('city');

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
                                            if (!e.target.closest('.custom-select-city')) {
                                                options2.style.display = 'none';
                                            }
                                        });
                                    </script>
                                </div>

                                <div class="w100">
                                    <label for="file" class="file-label">Загрузить личные документы</label>
                                    <div class="upload-container">
                                        <p>Выберите файл или перетащите</p>
                                        <p style="color: #858585;">JPG или PNG, не более 10MB</p>
                                        <label class="upload-button">
                                            Выбрать файл
                                            <input type="file" accept=".jpg, .png" name="file" access="false" multiple="true" />
                                        </label>
                                    </div>



                                    <script>
                                        function validateFileSize(event) {
                                            const file = event.target.files[0];
                                            const maxSize = 10 * 1024 * 1024; // 10 MB
                                            const errorMessageDiv = document.getElementById('error-message');

                                            errorMessageDiv.textContent = ''; // Очистить предыдущее сообщение об ошибке

                                            if (file && file.size > maxSize) {
                                                errorMessageDiv.textContent = 'Файл слишком большой. Максимальный размер: 10MB.';
                                                event.target.value = ''; // Очистить выбранный файл
                                            }
                                        }
                                    </script>
                                </div>


                                <button type="submit">Сохранить</button>
                            </form>

                        </div>













                    </div>

                    <div class="banners-col pconly">
                        <img src="../images/ban1.png">
                        <img src="../images/ban2.png">
                        <img src="../images/ban3.png">
                    </div>

                </div>
            </section>

            <section>
                <span class="zag-base">Участие в турнирах</span>
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
                            <a class="already no">Текущий</a>
                            <a class="regist no">Вы зарегистрированы</a>
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
                            <a class="end no">Завершен</a>
                            <a class="result no">Вы участвовали — результаты</a>
                        </div>
                    </div>

                </div>
            </section>

            <section style="margin-top:40px;">
                <p class="zag-base">Регистрация на турнир</p>
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

            <section class="tournament-with-map">
                <div class="table-box">
                    <div class="first mobileonly">Список турниров</div>
                    <div class="table-box__head">
                        <div class="first pconly">Список турниров</div>
                    </div>
                </div>
                <table class="table-box__body">
                    <tr>
                        <th>Название</th>
                        <th>
                            <span class="pconly">Область/город</span>
                            <span class="mobileonly">Даты и место</span>
                        </th>
                        <th>Дата проведения</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Чемпионат Республики Казахстан среди кадетов и юниоров 2025
                            <div class="mobileonly"><br><a href="#">Подать&nbsp;заявку</a></div>
                        </td>
                        <td>
                            <div class="mobileonly">01.02.24–02.03.24<br></div>
                            Астана
                        </td>
                        <td>01.02.24–02.03.24</td>
                        <td><a href="#">Подать&nbsp;заявку</a></td>
                    </tr>
                    <tr>
                        <td>Турнир среди блогеров и сотрудников СМИ "Кубок двух столиц 2024"
                            <div class="mobileonly"><br><a href="#">Подать&nbsp;заявку</a></div>
                        </td>
                        <td>
                            <div class="mobileonly">01.02.24–02.03.24<br></div>
                            Алматы
                        </td>
                        <td>01.02.24–02.03.24</td>
                        <td><a href="#">Подать&nbsp;заявку</a></td>
                    </tr>
                    <tr>
                        <td>Финал чемпионата Республики Казахстан по классическим шахматам 2024 года среди мужчин
                            <div class="mobileonly"><br><a href="#">Подать&nbsp;заявку</a></div>
                        </td>
                        <td>
                            <div class="mobileonly">01.02.24–02.03.24<br></div>
                            Акмолинская область
                        </td>
                        <td>01.02.24–02.03.24</td>
                        <td><a href="#">Подать&nbsp;заявку</a></td>
                    </tr>

                </table>
            </section>




            <section class="mobileonly">
                <div class="banners-col">
                    <img src="../images/ban1.png">
                    <img src="../images/ban2.png">
                    <img src="../images/ban3.png">
                </div>
            </section>

            </div>



    </section>


  </main>
<?php //include('inc/footer.php'); ?>

</body>
</html>
