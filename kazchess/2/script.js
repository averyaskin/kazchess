
// КНОПКА СКРОЛЛА НАВЕРХ
const totopbutton = document.getElementById('totopbtn');

window.onscroll = function() {
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        totopbutton.classList.add('show'); // Добавляем класс для показа кнопки
    } else {
        totopbutton.classList.remove('show'); // Убираем класс для скрытия кнопки
    }
};

totopbutton.onclick = function() {
    window.scrollTo({top: 0, behavior: 'smooth'}); // Плавная прокрутка вверх
};



// ГОРИЗОНТАЛЬНЫЙ СКРОЛЛБАР
$(function(){

    $(".scrollBox").scrollBar();

});
$(function(){

    $(".scrollBox").scrollBar({
        barWidth: 10,
        barHeight: 16

    });

});
$(function(){

    $(".scrollBox").scrollBar({
        position:"x,y"
    });

});
$(function(){

    $(".scrollBox").scrollBar({
        wheelDis: 25
    });

});


// Функция для ограничения количества символов в заголовках новостей
const limitNewsTitleChars = () => {
    const titleElements = document.querySelectorAll('.news-zag');

    titleElements.forEach(element => {
        let text = element.textContent;

        if (text.length > 45) {
            text = text.slice(0, 42) + '...';
            element.textContent = text;
        }
    });
};

// Функция для ограничения количества символов в тексте новостей
const limitNewsTextChars = () => {
    const textElements = document.querySelectorAll('.news-text');

    textElements.forEach(element => {
        let text = element.textContent;

        if (text.length > 97) {
            text = text.slice(0, 94) + '...';
            element.textContent = text;
        }
    });
};

document.addEventListener('DOMContentLoaded', limitNewsTitleChars);
document.addEventListener('DOMContentLoaded', limitNewsTextChars);


document.addEventListener('DOMContentLoaded', limitNewsTitleChars);
document.addEventListener('DOMContentLoaded', limitNewsTextChars);




//Слайдер логотипов партнеров
$(document).ready(function(){
    $('.slider_partners').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    });
});
//Слайдер логотипов партнеров
$(document).ready(function(){
    $('.slider_school-partners').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    });
});


// Слайдер новостей
$(document).ready(function(){
    $('.slider_news').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1.2,
                    nav: false
                },
                600: {
                    items: 1.2,
                    nav: false
                },
                1000: {
                    items: 3
                }
            }
        });
    });
});

// Слайдер Мы в соц сетях
$(document).ready(function(){
    $('.slider_we-on-social').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1.2,
                    nav: false
                },
                600: {
                    items: 1.2,
                    nav: false
                },
                1000: {
                    items: 3
                }
            }
        });
    });
});

// Слайдер Видео
$(document).ready(function(){
    $('.slider_videohronics').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1.2,
                    nav: false
                },
                600: {
                    items: 1.2,
                    nav: false
                },
                1000: {
                    items: 2
                }
            }
        });
    });
});
// Слайдер Календарь
$(document).ready(function(){
    $('.slider_sborcalendar').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1.2,
                    nav: false
                },
                600: {
                    items: 1.2,
                    nav: false
                },
                1000: {
                    items: 3
                }
            }
        });
    });
});
// Слайдер Цитаты
$(document).ready(function(){
    $('.slider_citati').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 3
                }
            }
        });
    });
});

// Слайдер Топ10
$(document).ready(function(){
    $('.slider_top_10').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    dots: false,
                },
                600: {
                    items: 1,
                    nav: true,
                    dots: false,
                },
                1000: {
                    items: 1,
                    nav: true,
                    dots: true
                }
            }
        });
    });
});
// Слайдер Гранты
$(document).ready(function(){
    $('.slider_grants').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    dots: false,
                },
                600: {
                    items: 1,
                    nav: true,
                    dots: false,
                },
                1000: {
                    items: 3,
                    nav: true,
                    dots: false
                }
            }
        });
    });
});
// Слайдер Гранты
$(document).ready(function(){
    $('.slider_unie').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            autoHeight:true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    dots: true,
                },
                600: {
                    items: 1,
                    nav: true,
                    dots: true,
                },
                1000: {
                    items: 1,
                    nav: true,
                    dots: true
                }
            }
        });
    });
});
// Слайдер Гранты
$(document).ready(function(){
    $('.slider_legend').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            autoHeight:true,
            responsive: {
                0: {
                    items: 1.2,
                    nav: true,
                    dots: true,
                },
                600: {
                    items: 1.2,
                    nav: true,
                    dots: true,
                },
                1000: {
                    items: 2,
                    nav: true,
                    dots: true
                }
            }
        });
    });
});
// Слайдер Гранты
$(document).ready(function(){
    $('.slider_faces').each(function(){
        $(this).owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                    dots: true,
                },
                600: {
                    items: 2,
                    nav: false,
                    dots: true,
                },
                1000: {
                    items: 5,
                    nav: false,
                    dots: true
                }
            }
        });
    });
});
// Слайдер Гранты

$(document).ready(function(){
    $('.slider_year').each(function(){
        $(this).owlCarousel({
            loop: false,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: false,
            center: true,
            responsive: {
                0: {
                    items: 3,
                    nav: true,
                    dots: false,
                },
                600: {
                    items: 3,
                    nav: true,
                    dots: false,
                },
                1000: {
                    items: 3,
                    nav: true,
                    dots: false
                }
            }
        });
    });
});

// Сортировка таблицы
function sortTable(columnIndex) {
    const table = document.querySelector('.sportsmenraiting-table');
    const tbody = table.querySelector('tbody');
    const rows = Array.from(tbody.querySelectorAll('tr'));

    const isAscending = !tbody.classList.contains('ascending');
    tbody.classList.toggle('ascending', isAscending);

    rows.sort((a, b) => {
        const aText = a.cells[columnIndex].innerText;
        const bText = b.cells[columnIndex].innerText;

        if (!isNaN(aText) && !isNaN(bText)) {
            return isAscending ? aText - bText : bText - aText;
        }

        return isAscending
            ? aText.localeCompare(bText)
            : bText.localeCompare(aText);
    });

    rows.forEach(row => tbody.appendChild(row));
}


// КАЛЕНДАРЬ

const months = document.querySelectorAll('.month');
const yearElement = document.getElementById('year');
const datePicker = document.getElementById('date-picker');
let currentYear = parseInt(yearElement.textContent);

months.forEach((month, index) => {
    month.addEventListener('click', function() {
        months.forEach(m => m.classList.remove('selected'));
        this.classList.add('selected');

        // Получаем номер месяца (1-12)
        const monthNumber = index + 1;
        const monthString = monthNumber < 10 ? '0' + monthNumber : monthNumber; // Форматирование (например, 01, 02)
        const dateValue = `${currentYear}-${monthString}-01`; // Формат YYYY-MM-DD

        // Устанавливаем значение в инпут
        datePicker.value = dateValue;
    });
});

document.querySelector('.arrow.left').addEventListener('click', () => {
    currentYear--;
    yearElement.textContent = currentYear;
});

document.querySelector('.arrow.right').addEventListener('click', () => {
    currentYear++;
    yearElement.textContent = currentYear;
});

//Кнопка открытия в мобильном выбора города
const chooseCityDiv = document.querySelector('.choose-city');
const newDiv = document.querySelector('.popup-choose-city-tournament');

chooseCityDiv.addEventListener('click', () => {
    newDiv.style.display = 'block'; // Показываем новый див
});
const chooseCityDivclose = document.querySelector('.popup-choose-city-tournament-close');
const newDiv2 = document.querySelector('.popup-choose-city-tournament');

chooseCityDivclose.addEventListener('click', () => {
    newDiv2.style.display = 'none'; // Показываем новый див
});