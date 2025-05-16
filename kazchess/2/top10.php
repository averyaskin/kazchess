<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Топ 10 шахматистов</title>
    <meta name="description" content=""/>
    <?php include('../1/inc/meta.php'); ?>
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">

</head>
<body>

<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="owl.carousel.min.js"></script>
<script src="scrollBar.js"></script>



<div id="totop"></div>
<div id="totopbtn" class="totop-button"><a href="#totop"></a></div>

<?php include('../1/inc/header.php'); ?>


<main class="page">
    <section>
        <div class="breadcrumbs">
            <a href="#">Главная</a>&nbsp;»&nbsp;<span class="target-page">Рейтинг шахматистов</span>
        </div>
    </section>
    <section class="no-back-content">

            <h1>Рейтинг шахматистов</h1>
        <h2 class="mobileonly">Топ-10 шахматистов Казахстана</h2>
        <div class="head-with-buttons">
            <h2 class="pconly">Топ-10 шахматистов Казахстана</h2>
            <div class="buttons100plus">
                <button class="kc-button active">Все спортсмены</button>
                <button class="kc-button">Мужчины</button>
                <button class="kc-button">Женщины</button>
            </div>
        </div>

        <div class="top10-box">
            <div class="owl-carousel owl-theme slider_top_10" id="slider">
                <div class="slide">
                    <div class="top10-box-item">
                        <div class="top10-box-item-img" style="background-image: url('../images/top10.png');">
                            <div class="top10-box-item-zag">
                                <div class="name"><div class="flag"></div>Асаубаева Бибисара</div>
                                <div>Raiting: 2456</div>
                            </div>
                        </div>
                    </div>

                    <div class="top10-box-item">
                        <div class="top10-box-item-img" style="background-image: url('../images/top10-2.png');">
                            <div class="top10-box-item-zag2">
                                IM, WGM
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="top10-box-item">
                        <div class="top10-box-item-img" style="background-image: url('../images/top10.png');">
                            <div class="top10-box-item-zag">
                                <div class="name"><div class="flag"></div>Асаубаева Бибисара</div>
                                <div>Raiting: 2456</div>
                            </div>
                        </div>
                    </div>

                    <div class="top10-box-item">
                        <div class="top10-box-item-img" style="background-image: url('../images/top10-2.png');">
                            <div class="top10-box-item-zag2">
                                IM, WGM
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sportsmenraiting">
        <form class="top10-form" id="top10-form" action="#" method="post">
            <select class="top10-gender m-w100" id="top10-pol" value="">
                <option value="man">Мужчины</option>
                <option value="woman">Женщины</option>
            </select>
            <input type="text" class="input1 m-w50" placeholder="ID">
            <input type="text" class="input2 m-w50" placeholder="Рейтинг std">
            <input type="text" class="input3 m-w50" placeholder="Год рождения">
            <input type="text" class="input4 m-w50" placeholder="Город">
            <input type="text" class="input5 m-w100" placeholder="Введите ФИО или Kazchess спортсмена">
            <button type="submit" class="search-button"><span class="search-icon"></span><span class="mobileonly">Поиск</span></button>
        </form>
        <div class="main-zagolovok2">
            <div>
                <span class="main-button"><a href="#">Найдено: 500</a></span>
                <span class="main-button"><a href="#">На странице: 50</a></span>
            </div>
            <h2 class="mobileonly">Рейтинг спортсменов </h2>
        </div>
        <div class="sportsmenraiting-box">
            <table class="sportsmenraiting-table">
                <thead>
                <tr>
                    <th class="column--sticky" onclick="sortTable(0)">Спортсмен</th>
                    <th onclick="sortTable(1)"><span>Спортивное звание</span></th>
                    <th onclick="sortTable(2)"><span>Kazchess ID</span></th>
                    <th onclick="sortTable(3)"><span>FIDE ID</span></th>
                    <th onclick="sortTable(4)"><span>Год рождения</span></th>
                    <th onclick="sortTable(5)"><span>std</span></th>
                    <th onclick="sortTable(6)"><span>rapid</span></th>
                    <th onclick="sortTable(7)"><span>blitz</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1. Жанель Садыкова</td>
                    <td>IM</td>
                    <td>0 000 555</td>
                    <td>1503014</td>
                    <td>2000</td>
                    <td>200</td>
                    <td>200</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>2. Екатерина Краснова</td>
                    <td>WGM</td>
                    <td>0 000 555</td>
                    <td>1503014</td>
                    <td>1999</td>
                    <td>174</td>
                    <td>174</td>
                    <td>174</td>
                </tr>
                <tr>
                    <td>3. Орынбаев Абдикарим</td>
                    <td>WGM</td>
                    <td>0 000 555</td>
                    <td>1503014</td>
                    <td>1998</td>
                    <td>105</td>
                    <td>105</td>
                    <td>105</td>
                </tr>
                <tr>
                    <td>4. Авани Рана</td>
                    <td>FM</td>
                    <td>0 000 555</td>
                    <td>1503014</td>
                    <td>2001</td>
                    <td>112</td>
                    <td>112</td>
                    <td>112</td>
                </tr>
                <tr>
                    <td>5. Гомбоев Аюр</td>
                    <td>IM</td>
                    <td>0 000 555</td>
                    <td>1503014</td>
                    <td>1998</td>
                    <td>156</td>
                    <td>156</td>
                    <td>156</td>
                </tr>
                <tr>
                    <td>6. Искакова Натаван</td>
                    <td>FM</td>
                    <td>0 000 555</td>
                    <td>1503014</td>
                    <td>2001</td>
                    <td>36</td>
                    <td>36</td>
                    <td>36</td>
                </tr>
                </tbody>

            </table>

        </div>
        <div class="news-pagination">
            <div class="start non"></div>

            <div class="str">
                <div class="numb active"><a href="">1</a></div>
                <div class="numb"><a href="">2</a></div>
                <div class="numb"><a href="">3</a></div>
            </div>

            <div class="end"></div>

        </div>
    </section>

</main>



<?php include('footer.php'); ?>
<script src="script.js"></script>
</body>
</html>
