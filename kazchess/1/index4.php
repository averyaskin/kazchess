<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Документы</title>
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
                <a href="index3.php"><div class="item item3"><span class="a-hid">Турниры</span></div></a>
                <a href="index4.php"><div class="item item4 open"><span class="a-hid">Документы</span></div></a>
                <a href="index5.php"><div class="item item5"><span class="a-hid">Достижения</span></div></a>
            </div>


        </div>




        <div class="content">
            <div class="breadcrumbs">
                <a href="#">Главная</a> » <span class="target-page">Документы</span>
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
            </div>
            <section>
                <h2 class="h2" style="margin-top: 15px">Личные документы</h2>
            </section>
            <div class="white-box">
                <div class="two-col-50">
                    <div class="">
                        <p class="text300">Свидетельство о рождении / удостоверение личности (загрузка скана или с Kaspi)</p>
                        <div class="upload-container">
                            <p>Выберите файл или перетащите</p>
                            <p style="color: #858585;">JPG или PNG, не более 10MB</p>
                            <label class="upload-button">
                                Выбрать файл
                                <input type="file" accept=".jpg, .png" name="file" access="false" multiple="true" />
                            </label>
                        </div>
                    </div>
                    <div class="">
                        <p class="text300">Удостоверение личности родителей (загрузка скана или с Kaspi) Мать, Отец (ФИО, ИИН, контактный номер)</p>
                        <div class="upload-container">
                            <p>Выберите файл или перетащите</p>
                            <p style="color: #858585;">JPG или PNG, не более 10MB</p>
                            <label class="upload-button">
                                Выбрать файл
                                <input type="file" accept=".jpg, .png" name="file" access="false" multiple="true" />
                            </label>
                        </div>
                    </div>
                    <div class="">
                        <p class="text300">В случае смены фамилии родителем:
                        <ul>
                            <li>Свидетельство о смене фамилии</li>
                            <li>Свидетельство о расторжении брака</li>
                        </ul>
                        </p>
                        <div class="upload-container">
                            <p>Выберите файл или перетащите</p>
                            <p style="color: #858585;">JPG или PNG, не более 10MB</p>
                            <label class="upload-button">
                                Выбрать файл
                                <input type="file" accept=".jpg, .png" name="file" access="false" multiple="true" />
                            </label>
                        </div>
                    </div>
                    <div class="">
                        <p class="text300"><br><br>Доверенность представителя (если оформлена) (загрузка документа)</p>
                        <div class="upload-container">
                            <p>Выберите файл или перетащите</p>
                            <p style="color: #858585;">JPG или PNG, не более 10MB</p>
                            <label class="upload-button">
                                Выбрать файл
                                <input type="file" accept=".jpg, .png" name="file" access="false" multiple="true" />
                            </label>
                        </div>
                    </div>
                </div>
                <div class="two-col-100">
                    <div class="">
                        <p class="text300">Номер банковского счета (загрузка справки о наличии счета из банка)</p>
                        <div class="upload-container">
                            <p>Выберите файл или перетащите</p>
                            <p style="color: #858585;">JPG или PNG, не более 10MB</p>
                            <label class="upload-button">
                                Выбрать файл
                                <input type="file" accept=".jpg, .png" name="file" access="false" multiple="true" />
                            </label>
                        </div>
                    </div>
                </div>
                <div class="two-col-50">
                    <div>
                    <p class="text300" style="color: #858585;">Адрес проживания</p>
                    <input type="text" class="basic-input" placeholder="г.Алматы, ул.Кабанбай Батыра, 4, кв.54">
                    </div>
                </div>

                <button class="button-save">Сохранить</button>
                <button class="button-edit">Редактировать</button>
            </div>


            <section>
                <h2 class="h2" style="margin-top: 15px">Документы</h2>
            </section>
            <section>

                <div class="docs-two-cols">
                    <div class="doc-box">
                        <div class="first">
                            <div class="text">
                                <p><span class="zagolovok">Документ 1</span>
                                <div class="city">Описание</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>

                    <div class="doc-box">
                        <div class="first">
                            <div class="text">
                                <p><span class="zagolovok">Документ 2</span>
                                <div class="city">Описание</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>

                    <div class="doc-box">
                        <div class="first">
                            <div class="text">
                                <p><span class="zagolovok">Документ 3</span>
                                <div class="city">Описание</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>

                    <div class="doc-box">
                        <div class="first">
                            <div class="text">
                                <p><span class="zagolovok">Документ 4</span>
                                <div class="city">Описание</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h2 class="h2" style="margin-top: 15px">Сертификаты</h2>
            </section>
            <section>

                <div class="docs-two-cols">

                    <div class="doc-box">
                        <div class="first">
                            <div class="text">
                                <p><span class="zagolovok">Сертификаты 1</span>
                                <div class="city">Описание</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>

                    <div class="doc-box">
                        <div class="first">
                            <div class="text">
                                <p><span class="zagolovok">Сертификаты 2</span>
                                <div class="city">Описание</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>

                    <div class="doc-box">
                        <div class="first">
                            <div class="text">
                                <p><span class="zagolovok">Сертификаты 3</span>
                                <div class="city">Описание</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>

                    <div class="doc-box">
                        <div class="first">
                            <div class="text">
                                <p><span class="zagolovok">Сертификаты 4</span>
                                <div class="city">Описание</div>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="button open-all">Все файлы</div>
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
