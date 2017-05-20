<?php include_once("header.php");
session_destroy();
?>

<div class="mypadding" style="text-align: justify">

    <div class="h1" style="text-align: center">
        Функції для обробки рядків в PHP
    </div>
    <div>
        <p>
            Починаючи з цього розділу ми починаємо вивчати функції для обробки строкових даних.
        </p>
        <p>
            За допомогою цих фукнцій можна, наприклад, обрізати рядок, дописувати рядок, замінити частину рядка
            і багато іншого. Це дуже корисний інструмент і Ви частенько будете використовувати всі ці функції
            при розробці своїх скриптів.
        </p>
        <p>
            Всі функції для обробки рядків перераховані нижче:
        </p>
        <table style="width: 100%">
            <tr>
                <td>
                    chr
                </td>
                <td>
                    Повертає символ з його коду ASCII
                </td>
            </tr>
            <tr>
                <td>
                    chunk_split
                </td>
                <td>
                    Розбиває рядок на підрядки заданої довжини
                </td>
            </tr>
            <tr>
                <td>
                    crypt
                </td>
                <td>
                    Зашифровує рядок з використанням одного з алгоритмів
                </td>
            </tr>
            <tr>
                <td>
                    echo
                </td>
                <td>
                    Виводить один або кілька рядків
                </td>
            </tr>
            <tr>
                <td>
                    explode
                </td>
                <td>
                    Розбиває рядок на підрядки, обмежені заданим роздільником, і форматує з них масив
                </td>
            </tr>
            <tr>
                <td>
                    html_entity_decode
                </td>
                <td>
                    Декодує все HTML-вставки в відповідні символи. Функція обернена по відношенню до htmlentites
                </td>
            </tr>
            <tr>
                <td>
                    htmlentites
                </td>
                <td>
                    Кодує всі спеціальні символи в їх HTML-уявлення
                </td>
            </tr>
            <tr>
                <td>
                    htmlspecialchars
                </td>
                <td>
                    Кодує всі символи в їх HTML-уявлення
                </td>
            </tr>
            <tr>
                <td>
                    implode
                </td>
                <td>
                    Формує рядок з елементів масиву
                </td>
            </tr>
            <tr>
                <td>
                    ltrim
                </td>
                <td>
                    Видаляє початкові пробіли з рядка
                </td>
            </tr>
            <tr>
                <td>
                    rtrim
                </td>
                <td>
                    Видаляє кінцеві пробіли з рядка
                </td>
            </tr>
            <tr>
                <td>
                    number_format
                </td>
                <td>
                    Повертає число у вигляді рядка в різних форматах
                </td>
            </tr>
            <tr>
                <td>
                    ord
                </td>
                <td>
                    Повертає ASCII-код символу
                </td>
            </tr>
            <tr>
                <td>
                    parse_str
                </td>
                <td>
                    Розбиває рядок URL і надає значення змінним
                </td>
            </tr>
            <tr>
                <td>
                    print
                </td>
                <td>
                    Виводить рядок
                </td>
            </tr>
            <tr>
                <td>
                    printf
                </td>
                <td>
                    Виводить рядок з форматуванням
                </td>
            </tr>
            <tr>
                <td>
                    sprintf
                </td>
                <td>
                    Повертає рядок з форматуванням
                </td>
            </tr>
            <tr>
                <td>
                    setlocale
                </td>
                <td>
                    Встановлює інформацію про поточну сторінку
                </td>
            </tr>
            <tr>
                <td>
                    similar_text
                </td>
                <td>
                    Обчислює ступінь схожості двох рядків
                </td>
            </tr>
            <tr>
                <td>
                    sscanf
                </td>
                <td>
                    Розбиває рядок за шаблоном і привласнює отримані значення змінним
                </td>
            </tr>
            <tr>
                <td>
                    str_ireplace
                </td>
                <td>
                    Те ж саме, що і str_replace, але без урахування відмінностей в регістрі символів
                </td>
            </tr>
            <tr>
                <td>
                    str_pad
                </td>
                <td>
                    Доповнює рядок до заданої довжини інший рядком
                </td>
            </tr>
            <tr>
                <td>
                    str_repeat
                </td>
                <td>
                    Повторює рядок задану кількість разів
                </td>
            </tr>
            <tr>
                <td>
                    str_replace
                </td>
                <td>
                    Шукає в рядку всі входження підрядка і змінює на заданий рядок
                </td>
            </tr>
            <tr>
                <td>
                    str_shuffle
                </td>
                <td>
                    Випадковим чином перемішує всі символи в рядку
                </td>
            </tr>
            <tr>
                <td>
                    str_split
                </td>
                <td>
                    Формує масив із символів рядка
                </td>
            </tr>
            <tr>
                <td>
                    str_word_count
                </td>
                <td>
                    Підраховує кількість слів у рядку
                </td>
            </tr>
            <tr>
                <td>
                    strcasecmp
                </td>
                <td>
                    Виконує побайтово порівняння рядків без урахування регістру символів
                </td>
            </tr>
            <tr>
                <td>
                    strcht
                </td>
                <td>
                    Те ж саме що strstr
                </td>
            </tr>
            <tr>
                <td>
                    strcmp
                </td>
                <td>
                    Виконує побайтово порівняння рядків з урахуванням регістру символів
                </td>
            </tr>
            <tr>
                <td>
                    strip_tags
                </td>
                <td>
                    Видаляє з рядка всі HTML-і PHP-теги
                </td>
            </tr>
            <tr>
                <td>
                    stripos
                </td>
                <td>
                    Шукає перше входження підрядка в рядок без урахування регістру символів
                </td>
            </tr>
            <tr>
                <td>
                    stristr
                </td>
                <td>
                    Те ж саме що strstr, але без урахування регістру символів
                </td>
            </tr>
            <tr>
                <td>
                    strlen
                </td>
                <td>
                    Повертає довжину рядка
                </td>
            </tr>
            <tr>
                <td>
                    strnatcasecmp
                </td>
                <td>
                    Те ж саме що strnatcmp, але без урахування регістру символів
                </td>
            </tr>
            <tr>
                <td>
                    strncmp
                </td>
                <td>
                    Виконує побайтово порівняння перших n-символів рядків
                </td>
            </tr>
            <tr>
                <td>
                    strpos
                </td>
                <td>
                    Шукає перше входження підрядка в рядок
                </td>
            </tr>
            <tr>
                <td>
                    strrchr
                </td>
                <td>
                    Шукає останнє входження символа в рядок
                </td>
            </tr>
            <tr>
                <td>
                    strrev
                </td>
                <td>
                    Інвертує рядок - прочитує його справа наліво
                </td>
            </tr>
            <tr>
                <td>
                    strripos
                </td>
                <td>
                    Шукає останнє входження підрядка в рядок без урахування регістру символів
                </td>
            </tr>
            <tr>
                <td>
                    strrpos
                </td>
                <td>
                    Шукає останнє входження підрядка в рядок
                </td>
            </tr>
            <tr>
                <td>
                    strspn
                </td>
                <td>
                    Повертає довжину ділянки рядки, що складається з заданих символів
                </td>
            </tr>
            <tr>
                <td>
                    strstr
                </td>
                <td>
                    Повертає частину рядка від першого входження підрядка до кінця
                </td>
            </tr>
            <tr>
                <td>
                    strtolower
                </td>
                <td>
                    Перетворює великі літери на малі
                </td>
            </tr>
            <tr>
                <td>
                    strtoupper
                </td>
                <td>
                    Перетворює малі літери на прописні
                </td>
            </tr>
            <tr>
                <td>
                    strtr
                </td>
                <td>
                    Перетворює задані символи в рядку
                </td>
            </tr>
            <tr>
                <td>
                    substr_compare
                </td>
                <td>
                    Порівнює два рядки, починаючи з заданого зсуву
                </td>
            </tr>
            <tr>
                <td>
                    substr_count
                </td>
                <td>
                    Підраховує, скільки разів задана підстрока зустрічається в рядку
                </td>
            </tr>
            <tr>
                <td>
                    substr_replace
                </td>
                <td>
                    Шукає в заданій ділянці рядку всі входження підрядка і змінює на інший рядок
                </td>
            </tr>
            <tr>
                <td>
                    substr
                </td>
                <td>
                    Повертає задану частину початкового рядка
                </td>
            </tr>
            <tr>
                <td>
                    trim
                </td>
                <td>
                    Видаляє початкові і кінцеві пробіли з рядка
                </td>
            </tr>
            <tr>
                <td>
                    ucfirst
                </td>
                <td>
                    Перетворює першу букву рядка в прописну
                </td>
            </tr>
        </table>

        <br>
        <p class="text-success">
            Більш детальну інформацію про всі рядкові функції ви можете знайти на сторінці
            <a href="http://php.net/manual/ru/ref.strings.php">офіційної документації</a> .
        </p>
    </div>

    <div class="h1" style="text-align: center">
        Використання строкових функцій в PHP
    </div>
    <div>
        <p>
            Зараз ми подивимося як використовувати кілька строкових функцій для обробки тексту.
        </p>

        <div class="h2" style="text-align: center">
            Функція <code>substr</code>
        </div>
        <div>
            <p>
                Функція <code>substr</code> використовується для отримання частини рядка.
            </p>
            <p>
                Синтаксис:
            </p>
            <pre>
                string substr (string $string, int $start [, int $length ])
            </pre>
            <p>
                Перший параметр <code>$string</code> - рядок з якого потрібно отримати підрядок починаючи з позиції
                <code>$start</code> і довжиною в <code>$length</code>.
            </p>
            <p>
                Приклад:
            </p>
            <code>
                &lt;?php<br>
                echo substr("Hello world", 6, 5);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                world
            </blockquote>
            <p class="text-success">
                Останній параметр <code>$length</code> необов'язковий!
            </p>
            <code>
                &lt;?php<br>
                echo substr("Hello world !!!", 6);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                world !!!
            </blockquote>
            <p>
                Якщо <code>$start</code> негативний, то підрядок що повертається матиме значення від кінця рядка до
                позиції <code>$start</code> з кінця рядка.
            </p>
            <p class="text-warning">
                Для мультибайтних символів (наприклад, для кирилиці) використовуйте функцію <code>mb_substr</code>
                з тим же синтаксисом що і в <code>substr</code>!
            </p>
        </div>

        <div class="h2" style="text-align: center">
            Функція <code>strpos</code>
        </div>
        <div>
            <p>
                Функція повертає позицію першого входження підрядка в рядок
            </p>
            <pre>
                int strpos (string $string , mixed $needle [, int $offset = 0 ])
            </pre>
            <p>
                Перший параметр <code>$string</code> - рядок в якому буде проведений пошук, <code>$needle</code>
                - рядок, яку потрібно знайти,
                <code>$offset</code> - необов'язковий параметр, якщо цей параметр вказаний,
                то пошук буде розпочато з вказаної кількості символів з початку рядка.
            </p>
            <p>
                Приклад:
            </p>
            <code>
                &lt;?php<br>
                echo strpos("Hello world", "world"); // отримаємо 6<br>
                ?>
            </code>
            <p>
                В результаті, отримаємо 6, так як рядок "world" вперше зустрічається на 6 позиції
            </p>
            <p class="text-warning">
                Для мультибайтних символів (наприклад, для кирилиці) використовуйте функцію
                <code>mb_strpos</code> з тим же синтаксисом що і в <code>strpos</code>!
            </p>
        </div>

    </div>


    <div class="row-fluid" style="text-align: center">
        <div class="span12">
            <div class="row-fluid">

                <div class="span6 btn btn-link">
                    <a href="loops.php">
                        <button type="button">
                            <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                        </button>
                    </a>
                </div>

                <div class="span6 btn btn-link">
                    <a href="arrays.php">
                        <button type="button" >
                            Наступна сторінка <span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </div>

</div>

<?php include_once("footer.php");