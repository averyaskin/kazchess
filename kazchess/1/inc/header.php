<header id="header">
    <section>
        <div class="header-up">
            <div class="logo">
                <img alt="logo" src="../images/logo.svg" width="100px">
                <span class="logo-text">Делай в жизни правильные ходы!</span>
            </div>
            <div class="else">
                <div class="icons">
                    <div class="inst"><a href="#" class="no"></a></div>
                    <div class="fb"><a href="#" class="no"></a></div>
                    <div class="yt"><a href="#" class="no"></a></div>
                </div>
                <div class="search">
                    <input type="text" class="search-input" placeholder="Поиск по сайту">
                    <button class="search-button">
                        <span class="search-icon"></span>
                    </button>
                </div>
                <button class="auth toggleButtonPop" id="toggleButtonPop">Авторизация</button>
                <DIV class="auth_ready">
                    <img src="../images/foto.png"><p>Kazachess ID: <strong>0 000 555</strong> <i></i></p>
                    <div class="more-auth">
                        <a href="" class="no">Выйти</a>
                        <a href=""><div class="out-icon"></div></a>

                    </div>
                </DIV>
                <div class="lang">RU
                    <div class="more-lang">
                        <a href="" class="no">KZ</a>
                        <a href="" class="no">EN</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-down">
            <div class="mobileonly">
                <div class="logo">
                    <img alt="logo" src="../images/logo.svg" width="100px">
                    <span class="logo-text">Делай в жизни правильные ходы!</span>
                </div>
                <svg class="ham hamRotate ham8" id="ham" viewBox="0 0 100 100" width="80" id="toggleButton" onclick="toggleMenu()">
                    <path
                        class="line top"
                        d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                    <path
                        class="line middle"
                        d="m 30,50 h 40" />
                    <path
                        class="line bottom"
                        d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                </svg>
                <!--                  ДЛЯ МЕНЮ                  -->
                <script>
                    function toggleMenu() {
                        // Включаем анимацию бургера
                        document.getElementById('ham').classList.toggle('active');

                        // Открываем/закрываем подменю
                        var submenu = document.getElementById('header-mobile');
                        submenu.classList.toggle('active');

                        // Открываем/закрываем подменю
                        var submenu = document.getElementById('header');
                        submenu.classList.toggle('active');
                    }
                </script>
            </div>
        </div>
        <div class="header-mobile" id="header-mobile">
            <nav id="nav">
                <ul class="menu">
                    <li class="menu-item dropdown">Федерация&nbsp;<i></i>
                        <div class="submenu">
                            <a href="#">Деятельность</a>
                            <a href="#">Исполнительная дирекция</a>
                            <a href="#">Генеральный партнер</a>
                            <a href="#">Бюджет</a>
                            <a href="#">Документы</a>
                        </div>
                    </li>
                    <li class="menu-item dropdown">Турниры&nbsp;<i></i>
                        <div class="submenu">Список турниров</div>
                    </li>
                    <li class="menu-item dropdown">Спортсмены&nbsp;<i></i>
                        <div class="submenu">Список спортсменов</div>
                    </li>
                    <li class="menu-item dropdown">Социальные&nbsp;проекты&nbsp;<i></i>
                        <div class="submenu">Информация о проектах</div>
                    </li>
                    <li class="menu-item">Новости

                    </li>
                    <li class="menu-item">Контакты

                    </li>
                </ul>
                <!-- Выпадающий список, чтобы работало на iOS -->
                <script>
                    document.querySelectorAll('.menu-item').forEach(item => {
                        item.addEventListener('click', () => {
                            const submenu = item.querySelector('.submenu');
                            submenu.classList.toggle('active');
                        });
                    });
                </script>
            </nav>

            <div class="else">
                <div class="auth toggleButtonPop" id="toggleButtonPop">Авторизация</div>
                <!--  ЕСЛИ АВТОРИЗОВАН  -->
                <div class="auth-box-mob">
                    <a class="auth_ready">
                    <img src="../images/foto.png"><p>Kazachess ID: <strong>0 000 555</strong></p>
                </a>
                <a class="out" href="#">Выйти</a>
                </div>

                <div class="row-block">
                    <div class="icons">
                        <div class="inst"><a href="#" class="no"></a></div>
                        <div class="fb"><a href="#" class="no"></a></div>
                        <div class="yt"><a href="#" class="no"></a></div>
                    </div>
                    <div class="lang">
                        <span>RU</span>
                        <a href="" class="no"><span>KZ</span></a>
                        <a href="" class="no"><span>EN</span></a>
                    </div>
                </div>
                <div class="search">
                    <input type="text" class="search-input" placeholder="Поиск по сайту">
                    <button class="search-button">
                        <span class="search-icon"></span>
                    </button>
                </div>
            </div>
        </div>

    </section>





</header>

<!--   ПОПАП   -->

<div id="popup" style="display: none;">
    <div class="popup_inner">
        <div class="popup-box">
            <div class="left" id="reg">
                <div id="closeButtonPop" class="closePopup closeButtonPop">На главную</div>
                <p class="head">Добро пожаловать в KazChess</p>
                <p>Уже есть аккаунт? <a class="to-regist" id="open-auth" href="#">Войдите</a></p>

                <form action="#" method="post" id="popup-form">
                <div>
                    <p>Тип пользователя:</p>
                    <div class="w100 four-col">
                        <label class="custom-radio">
                            <input type="radio" name="user-type" value="sportsman">
                            <span class="checkmark"></span>
                            Спортсмен
                        </label>
                        <label class="custom-radio">
                            <input type="radio" name="user-type" value="coach">
                            <span class="checkmark"></span>
                            Тренер
                        </label>
                        <label class="custom-radio">
                            <input type="radio" name="user-type" value="judge">
                            <span class="checkmark"></span>
                            Судья
                        </label>
                        <label class="custom-radio">
                            <input type="radio" name="user-type" value="school">
                            <span class="checkmark"></span>
                            Школа
                        </label>
                    </div>
                </div>
                    <div class="w100 three-col">
                        <div>
                            <label for="familiya">Фамилия*</label>
                            <input type="text" id="familiya" name="familiya" placeholder="Фамилия" required>
                        </div>
                        <div>
                            <label for="name-regist">Имя*</label>
                            <input type="text" id="name-regist" name="name-regist" placeholder="Имя" required>
                        </div>
                        <div>
                            <label for="otechestvo">Отчество</label>
                            <input type="text" id="otechestvo" name="otechestvo" placeholder="Отчество">
                        </div>
                    </div>
                    <div class="w50 m-w50">
                        <div>
                            <label for="email-regist">E-mail*</label>
                            <input type="email" id="email-regist" name="email-regist" placeholder="e-mail" required>
                        </div>
                    </div>

                    <div class="w50 m-w50">
                        <label for="phone-regist">Номер телефона*</label>
                        <div class="phone-regist">
                            <select id="country-code" onchange="updatePrefix()">
                                <option value="+7">RU</option>
                                <option value="+7">KZ</option>
                            </select>
                            <span class="fixed-prefix">+7</span>
                            <input type="text" id="phone-regist" placeholder="123 456 7890" maxlength="10" oninput="cleanInput()" required>
                        </div>

                        <script>
                            function cleanInput() {
                                const input = document.getElementById('phone-regist');
                                // Удаляем +7 и 8 если они введены
                                input.value = input.value.replace(/^(8|\+7)/, '');
                            }

                            function updatePrefix() {
                                const input = document.getElementById('phone-regist');
                                cleanInput();
                            }
                        </script>
                    </div>

                    <div class="w50 m-w50">
                        <div>
                            <label for="pol">Пол*</label>
                            <input type="text" id="pol" name="pol" placeholder="Пол" required>
                        </div>
                    </div>
                    <div class="w50 m-w50">
                        <div>
                            <label for="bdate-regist">Дату рождения*</label>
                            <input type="date" id="bdate-regist" name="bdate-regist" placeholder="Дата рождения" required>
                        </div>
                    </div>
                    <div class="w50 m-w50">
                        <div>
                            <label for="fadeid">FADE ID (если есть)</label>
                            <input type="text" id="fadeid" name="fadeid" placeholder="FADE ID">
                        </div>
                    </div>
                    <div class="w50 m-w50">
                        <div>
                            <label for="region">Регион</label>
                            <input type="text" id="region" name="region" placeholder="Актобе">
                        </div>
                    </div>
                    <div class="w50 m-w50">
                        <div style="position: relative;">
                            <label for="password-regist">Придумайте пароль*</label>
                            <input type="password" id="password-regist" name="password-regist" class="password" placeholder="Пароль" required>
                            <a href="#" class="password-control" onclick="show_hide_password(this)"></a>
                            <script>
                                function show_hide_password(target){
                                    var input = document.getElementById('password-regist');
                                    if (input.getAttribute('type') == 'password') {
                                        target.classList.add('view');
                                        input.setAttribute('type', 'text');
                                    } else {
                                        target.classList.remove('view');
                                        input.setAttribute('type', 'password');
                                    }
                                    return false;
                                }
                            </script>
                        </div>
                    </div>
                    <div class="w50 m-w50">
                        <div style="position: relative;">
                            <label for="password-regist-check">Повторите пароль*</label>
                            <input type="password" id="password-regist-check" name="password-regist-check" class="password" placeholder="Повторите пароль" required>
                            <a href="#" class="password-control" onclick="show_hide_password2(this)"></a>
                        </div>
                        <script>
                            function show_hide_password2(target2){
                                var input = document.getElementById('password-regist-check');
                                if (input.getAttribute('type') == 'password') {
                                    target2.classList.add('view');
                                    input.setAttribute('type', 'text');
                                } else {
                                    target2.classList.remove('view');
                                    input.setAttribute('type', 'password');
                                }
                                return false;
                            }
                        </script>
                    </div>
                    <div class="w100">
                        <label for="file-popup" class="file-label">Загрузить личные документы</label>
                        <div class="upload-container">
                            <p>Выберите файл или перетащите</p>
                            <p style="color: #858585;">JPG или PNG, не более 10MB</p>
                            <label class="upload-button">
                                Выбрать файл
                                <input type="file" accept=".jpg, .png" name="file-popup" access="false" multiple="true" />
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
                    <div class="w100">
                        <label class="custom-radio-soglas">
                            <input type="checkbox" name="user-soglas" value="soglasie" required>
                            <span class="checkmark-soglas"></span>
                            <span>Нажимая на кнопку, вы соглашаетесь <a href="#">на обработку персональных данных</a></span>
                        </label>
                    </div>
                    <div class="w100">
                        <button type="submit" class="submit">Зарегистрироваться</button>
                    </div>
                </form>
            </div>

            <div class="left" id="auth" style="display: none">
            <div id="closeButtonPop" class="closePopup closeButtonPop">На главную</div>
            <p class="head">Добро пожаловать в KazChess</p>
            <p>Впервые здесь? <a class="to-regist" id="open-reg" href="#">Зарегистрироваться</a></p>

            <form action="#" method="post" id="popup-form">
                <div class="w100">
                    <div>
                        <label for="auth-name">Введите свой номер телефона или E-mail</label>
                        <input type="text" id="uth-name" name="auth-name" placeholder="Номер телефона или Email" required>
                    </div>
                </div>

                <div class="w100">
                    <div style="position: relative;">
                        <label for="auth-password">Введите свой пароль</label>
                        <input type="password" id="auth-password" name="auth-password" class="password" placeholder="Пароль" required>
                        <a href="#" class="password-control" onclick="show_hide_password(this)"></a>
                    </div>
                </div>
                <div class="w100">
                    <p class="t-a-center"><a href="#" class="i-forget">Я не помню пароль</a></p>
                </div>
                <div class="w100">
                    <button type="submit" class="submit">Войти</button>
                </div>
            </form>
        </div>

            <div class="left" id="done-reg" style="display: none">

                <span class="thanks">Спасибо за регистрацию!<br>
                    Вам присвоен<br>
                    KazChess ID </span>
                <div class="kazchess-id">№0 000 555</div>

                <button id="open-auth2" type="submit" class="submit">Войти в личный кабинет</button>
            </div>

            <div class="left" id="done-reg-to-tour" style="display: none">
                <div>
                    <span class="thanks-left">Спасибо за регистрацию!</span>
                    <p>Вы зарегистрированы на турнир</p>
                </div>

                <button id="closeButtonPop" type="submit" class="closeButtonPop">На главную</button>
            </div>

            <div class="left" id="pay" style="display: none">
                <div>
                    <span class="thanks-left">Оплата турнира</span>
                    <p>Выберите способ оплаты</p>
                    <label class="payment-option" id="card-option">
                        <input type="radio" name="payment" value="card" checked="checked">
                        <span class="check"></span>
                        <span class="pay-name">Банковская карта</span>
                        <div class="payment-icon">
                            <img src="../images/pay-logos.svg">
                        </div>
                    </label>
                </div>
                <div>
                    <p class="summ">Сумма для оплаты: <span>15 000 ₸</span></p>
                    <button type="submit">Войти</button>
                </div>
            </div>

            <div class="left" id="pay-done" style="display: none">
                <div>
                    <span class="thanks-left">Оплата прошла успешно!</span>
                    <p>Вы зарегистрированы на турнир</p>

                </div>
                <div>
                    <button id="closeButtonPop" type="submit" class="closeButtonPop" type="submit">На главную</button>
                </div>
            </div>

            <div class="right">
                <button id="closeButtonPop" class="closeButtonPop">Закрыть</button>
                <div><img src="../images/logo-back-green.svg">
                    <p class="logo-podpis">Делай в жизни правильные ходы</p></div>
            </div>
        </div>
    </div>
</div>

<script>
// ОТКРЫТИЕ и ЗАКРЫТИЫЕ ПОПАПА
    document.addEventListener('DOMContentLoaded', function () {
        const popup = document.getElementById('popup');
        const toggleButtons = document.querySelectorAll('.toggleButtonPop');
        const closeButtons = document.querySelectorAll('.closeButtonPop');

        // Обработчик события для всех кнопок открытия
        toggleButtons.forEach(function(button) {
            button.addEventListener('click', function () {
                popup.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            });
        });

        // Обработчик события для всех кнопок закрытия
        closeButtons.forEach(function(button) {
            button.addEventListener('click', function () {
                popup.style.display = 'none';
                document.body.style.overflow = '';
            });
        });
    });


</script>

<script>
    // ПЕРЕКЛЮЧЕНИЯ ФОРМ
    document.getElementById('open-auth').addEventListener('click', function() {
        document.getElementById('auth').style.display = 'flex';
        document.getElementById('reg').style.display = 'none';
    });
    document.getElementById('open-reg').addEventListener('click', function() {
        document.getElementById('reg').style.display = 'flex';
        document.getElementById('auth').style.display = 'none';
    });
    document.getElementById('open-auth2').addEventListener('click', function() {
        document.getElementById('done-reg').style.display = 'none';
        document.getElementById('auth').style.display = 'flex';
    });

</script>