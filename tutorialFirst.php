<?php include_once("header.php");
session_destroy();
?>

<div class="mypadding" style="text-align: justify">

    <div class="h1" style="text-align: center">
        Що собою представляє PHP?
    </div>
    <div>
        PHP (англ. PHP: Hypertext Preprocessor) - скриптова мова програмування загального призначення,
        інтенсивно застосовується для розробки веб-додатків.
        В даний час підтримується переважною більшістю хостинг-провайдерів і є одним з лідерів серед мов програмування,
        що застосовуються для створення динамічних веб-сайтів.
    </div>

    <div class="h1" style="text-align: center">
        Особливості
    </div>
    <div>
        PHP — це мова, код якої можна вбудовувати безпосередньо в html-код Web-сторінок, які у свою чергу,
        будуть коректно оброблені PHP-інтерпретатором.
    </div>
    <br>
    <div>
        Обробник РНР просто починає виконувати код після відкриваючого тегу і продовжує виконання до того моменту,
        поки не зустріне закриваючий тег.
    </div>
    <br>
    <div>
        Велика різноманітність функцій PHP дає можливість уникати написання багаторядкових функцій,
        призначених для користувача, як це відбувається в C або Pascal.
        <ul>
            <li>
                Наявність інтерфейсів до багатьох баз даних:
                <ul>
                    <li>
                        в PHP вбудовані бібліотеки для роботи з MySQL, PostgreSQL, mSQL, Oracle, dbm,
                        Hyperware, Informix, InterBase, Sybase;
                    </li>
                    <li>
                        через стандарт відкритого інтерфейсу зв'язку з базами даних (Open Database Connectivity
                        Standard — ODBC) можна підключатися до всіх баз даних, до яких існує драйвер.
                    </li>
                </ul>
            </li>
            <li>
                Традиційність
                <div>
                    Мова PHP здаватиметься знайомою програмістам, що працюють в різних областях.
                    Багато конструкцій мови запозичені з С, Perl.
                    Код РНР дуже схожий на той, який зустрічається в типових програмах на С або Pascal.
                    Це помітно знижує початкові зусилля при вивченні PHP. PHP — мова,
                    що поєднує переваги Perl та С і спеціально спрямована на роботу в Інтернеті,
                    мова з універсальним і зрозумілим синтаксисом. І хоча PHP є досить молодою мовою,
                    вона здобула таку популярність серед web-програмістів,
                    що в наш час є найпопулярнішою мовою для створення веб-застосунків (скриптів).
                </div>
            </li>
            <li>
                Наявність серцевого коду та безкоштовність
                <div>
                    Стратегія Open Source і розповсюдження початкових текстів програм в масах,
                    безсумнівно справили благотворний вплив на багато проектів,
                    в першу чергу — Linux та успіх проекту Apache сильно підкріпили позиції прихильників Open Source.
                    Сказане відноситься і до історії створення PHP,
                    оскільки підтримка користувачів зі всього світу
                    виявилася дуже важливим чинником в розвитку проекту.
                </div>
                <div>
                    Ухвалення стратегії Open Source і безкоштовне розповсюдження початкових текстів PHP
                    надало неоціненну послугу користувачам. Окрім цього, користувачі PHP в усьому світі є свого роду
                    колективною службою підтримки,
                    і в популярних електронних конференціях можна знайти відповіді навіть на найскладніші питання.
                </div>
            </li>
            <li>
                Ефективність
                <div>
                    Ефективність є дуже важливим чинником у програмуванні для середовищ розрахованих
                    на багато користувачів, до яких належить і Web.
                    Важливою перевагою PHP є те, що ця мова належить до інтерпретованих.
                    Це дозволяє обробляти сценарії з достатньо високою швидкістю.
                    За деякими оцінками, більшість PHP-сценаріїв (особливо не дуже великих розмірів)
                    обробляються швидше за аналогічні їм програми, написані на Perl.
                    Проте хоч би що не робили розробники PHP, виконавчі файли, отримані за допомогою компіляції,
                    працюватимуть значно швидше — в десятки, а іноді і в сотні разів,
                    але продуктивність PHP достатня для створення цілком серйозних веб-застосунків.
                </div>
            </li>
        </ul>
    </div>

    <div class="h1" style="text-align: center">
        Додаткові можливості
    </div>
    <div>
        Мова явно підтримує HTTP cookies відповідно до специфікацій Netscape.
        Це дозволяє проводити встановлення та читання невеликих сегментів даних на стороні клієнта.
        PHP надає можливість організації роботи з користувачем протягом сеансів (сесій).
        В сесії можна зберігати різні дані, включаючи об'єкти.
    </div>

</div>

<?php include_once("footer.php");