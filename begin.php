<?php include_once("header.php");
session_destroy();
?>

    <div class="mypadding" style="text-align: justify">

        <div class="h1" style="text-align: center">
            Виведення тексту на екран. Оператор echo.
        </div>
        <div>
            <p>Коли потрібно відобразити текст на веб-сторінці, то оператор echoє найбільш вживаним оператором в PHP. Як
            його іcпользовать - після слова echoпотрібно помістити рядок тексту в лапки:
            </p>
            <code>
                &lt;?php echo 'Привет от PHP'; ?>
            </code>
            <p>
            Відображення в браузері:
            </p>
            <blockquote>
                Привет от PHP
            </blockquote>
            <p>
            Для відображення тексту можна використовувати як подвійні лапки, так і одинарні.
            Для чисел лапки можна не використовувати:
            </p>
            <code>
                &lt;?php echo 2016; ?>
            </code>
            <p>
            Оператор echo також може брати участь у форматуванні веб-сторінки:
            </p>
            <code>
                &lt;?php echo 'Петров Иван<br>Родился<br>...'; ?>
            </code>
            <p>
            Відображення в браузері:
            </p>
            <blockquote>
                Петров Иван<br>
                Родился<br>
                ...
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Синтаксис HEREDOC
        </div>
        <div>
            <p>
            Для відображення великої кількості тексту використовують т. Н. синтаксис heredoc. Він починається з
            символів <<< , після яких може бути записаний довільний ідентифікатор. Після наявного тексту варто вказати
            той самий ідентифікатор, що і на початку коду:
            </p>
            <code>
                &lt;?php<br>
                echo <<<END<br>
                <p>Для отображения большого <br> количества текста используют<br>
                синтаксис heredoc</p>
                END;<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Для отображения большого
                количества текста используют синтаксис heredoc
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Коментарі в скриптах
        </div>
        <div>
            <p>
                Коментарі потрібні для опису написаного скрипта. Вони потрібні, якщо скрипт розробляється довгий час,
                або
                розробляється кількома особами, то неможливо запам'ятати всю структуру програми не залишаючи опис в
                коментарях.
            </p>
            <p>
                У PHP існує 3 типи коментарів.
            </p>
            <p><b>Перший</b> дозволяє розміщувати коментарі в декількох рядках. Починається такий тип коментарів з
                символів
                /*і закінчуються */, наприклад:
            </p>
            <code>
                &lt;?php<br>
                /* Тут может быть размещен любой текст,<br>
                даже в несколько строк */<br>
                ?>
            </code>
            <p>
                Слід мати на увазі, що вкладені коментарі не припустимі. Такий код викличе помилку:
            </p>
            <code>
                &lt;?php<br>
                /* Тут может быть размещен любой текст, <br>
                /*даже в */<br>
                несколько строк */<br>
                ?>
            </code>
            <p>
                Наступні два типи є однорядковими. Такі коментарі починаються з символів //або #і тривають до кінця
                рядка. приклад:
            </p>
            <code>
                &lt;?php<br>
                // Тут может быть размещен любой текст<br>
                # Только в одной строке !<br>
                echo "Привет Всем !";<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Змінні в PHP
        </div>
        <div>
            <p>
                PHP створений не тільки для форматування статичного тексту. Для того, щоб обробляти різні дані були
                придумані <b>змінні</b> . Змінна - контейнер c даними. Кожна змінна містить певне значення.
            </p>
            <p>
                Синтаксис змінної складається з знака долара - $ і "вільного" ідентифікатора якому
                присвоюється якесь значення. наприклад:
            </p>
            <code>
                &lt;?php<br>
                $name = "Виктор";<br>
                ?>
            </code>
            <p class="text-primary">
                Запомните, имя (идентификатор) переменной не может начинаться с цифр и пробела!
            </p>
            <p class="text-warning">
                Имя переменной чувствительно к регистру!
            </p>
        </div>

        <div class="h1" style="text-align: center">
            Створення змінної
        </div>
        <div>
            <p>
                Мінлива створюється тоді, коли їй присвоюють якесь значення. Для присвоєння значення змінної
                використовують оператор присвоєння, який складається з знака рівності =. наприклад:
            </p>
            <code>
                    &lt;?php<br>
                    $surname = "Петров";<br>
                    $number = 1269794645;<br>
                    $pi = 3.14159265;<br>
                    $hello = "Hi all";<br>
                    ?>
            </code>
            <p>
                Змінну можна вивести на екран за допомогою оператора echo , ось так:
            </p>
            <code>
                &lt;?php<br>
                $name = "Виктор";<br>
                <br>
                echo "Ваше имя ", $name, "<br>";<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Ваше имя Виктор
            </blockquote>
            <p>
                Тепер давайте створимо змінну, яка буде містити значення кількості бананів, друга змінна кількість
                лимонів, а третя - їх сумарна кількість.
            </p>
            <code>
                &lt;?php<br>
                $bann = 5; // Бананы <br>
                $lim = 10; // Лимоны <br>
                $together = $bann + $lim; // Всего <br>
                <br>
                echo "Количество фруктов ", $together;<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Количество фруктов 15
            </blockquote>
            <p>
                Як ви бачите, в третьої змінної ми самі нічого не складали, за нас це зробив PHP.
            </p>
        </div>

        <div class="h1" style="text-align: center">
            Інтерполяція змінних в PHP
        </div>
        <div>
            <p>
                Значення змінної може бути відображено наприклад так:
            </p>
            <code>
                &lt;?php<br>
                $capital = "Paris";<br>
                <br>
                echo "The capital of France is", $capital,"<br />";<br>
                ?>
            </code>
            <p>
                Але є спосіб зробити це простіше. Якщо ім'я змінної укладено в подвійні (НЕ одинарні) лапки, то змінна
                інтерполюється. наприклад:
            </p>
            <code>
                &lt;?php<br>
                $capital = "Paris";<br>
                <br>
                echo "The capital of France is $capital <br />";<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                The capital of France is Paris
            </blockquote>
            <p>
                Також існує одна тонкість при використанні інтерполяції змінних. наприклад:
            </p>
            <code>
                &lt;?php<br>
                $text = "news";<br>
                echo "Where's the $textpaper <br />";<br>
                ?>
            </code>
            <p>
                Очікується, що ім'я змінної <u>$text</u> буде замінено на її значення. Але в результаті буде виведено
                повідомлення про помилку. Щоб цього не траплялося потрібно вказати яку частину слова <i>textpaper</i>
                ми маємо введу за ім'я змінної. Для цього потрібно взяти ту частину яка нам потрібна в фігурні дужки:
            </p>
            <code>
                &lt;?php<br>
                $text = "news";<br>
                echo "Where's the {$text}paper <br />";<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Змінні, що містять імена інших змінних
        </div>
        <div>
            <p>
                У PHP можливо розміщувати в значення змінних не тільки звичайні значення, а й імена інших змінних.
            </p>
            <code>
                &lt;?php<br>
                $apples = 5;    // Создаем переменную $apples <br>
                $fruit = "apples";    /* Создаем переменную $fruit, которая содержит имя переменной $apples */<br>
                <br>
                // Сейчас мы можем вывести $apples, как $$fruit<br>
                <br>
                echo "Число яблок - ", $$fruit;<br>
                ?>
            </code>
            <p>
                Для коректного відображення подібних змінних в строкових константах, взятих в подвійні лапки,
                слід також використовувати фігурні дужки: <code>${$fruit}</code>. наприклад:
            </p>
            <code>
                &lt;?php<br>
                echo "Число яблок - ${$fruit}";<br>
                ?>
            </code>
            <blockquote>
                Число яблок - 5
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Константи в PHP
        </div>
        <div>
            <p>
                Коли не потрібно міняти задане значення для змінної, то має сенс створити константу і
                потім використовувати її в будь-якій частині скрипта. Для опису константи використовують
                функцію <u>define</u>, якої передається її ім'я і значення, наприклад:
            </p>
            <code>
                &lt;?php<br>
                define("pi", 3.14);<br>
                ?>
            </code>
            <p>
                Ім'я константи потрібно завжди брати в лапки, а її значення тільки тоді коли воно є рядком.
            </p>
            <p>
                Приклад використання константи:
            </p>
            <code>
                &lt;?php<br>
                define("pi", 3.14);<br>
                <br>
                echo "Математическая константа Пи равняется ", pi;<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Математическая константа Пи равняется 3.14
            </blockquote>
            <p>
                Спроба зміни константи призведе до непрацездатності скрипта!
            </p>
            <p>
                Як ім'я константи не можна використовувати зарезервовані слова в PHP, які описані нижче:
            </p>
            <table style="width:100%">
                <tr>
                    <th>
                        __CLASS__
                    </th>
                    <th>
                        __FILE__
                    </th>
                    <th>
                        __FUNCTION__
                    </th>
                    <th>
                        __LINE__
                    </th>
                    <th>
                        __METHOD__
                    </th>
                </tr>
                <tr>
                    <td>
                        and
                    </td>
                    <td>
                        default
                    </td>
                    <td>
                        endif
                    </td>
                    <td>
                        global
                    </td>
                    <td>
                        print
                    </td>
                </tr>
                <tr>
                    <td>
                        array
                    </td>
                    <td>
                        die
                    </td>
                    <td>
                        endswitch
                    </td>
                    <td>
                        if
                    </td>
                    <td>
                        require
                    </td>
                </tr>
                <tr>
                    <td>
                        as
                    </td>
                    <td>
                        do
                    </td>
                    <td>
                        endwhile
                    </td>
                    <td>
                        include
                    </td>
                    <td>
                        require_once
                    </td>
                </tr>
                <tr>
                    <td>
                        break
                    </td>
                    <td>
                        echo
                    </td>
                    <td>
                        eval
                    </td>
                    <td>
                        include_once
                    </td>
                    <td>
                        return
                    </td>
                </tr>
                <tr>
                    <td>
                        case
                    </td>
                    <td>
                        else
                    </td>
                    <td>
                        exeption
                    </td>
                    <td>
                        isset
                    </td>
                    <td>
                        static
                    </td>
                </tr>
                <tr>
                    <td>
                        cfunction
                    </td>
                    <td>
                        elseif
                    </td>
                    <td>
                        exit
                    </td>
                    <td>
                        list
                    </td>
                    <td>
                        switch
                    </td>
                </tr>
                <tr>
                    <td>
                        class
                    </td>
                    <td>
                        empty
                    </td>
                    <td>
                        extends
                    </td>
                    <td>
                        new
                    </td>
                    <td>
                        unset
                    </td>
                </tr>
                <tr>
                    <td>
                        const
                    </td>
                    <td>
                        enddeclare
                    </td>
                    <td>
                        for
                    </td>
                    <td>
                        old_function
                    </td>
                    <td>
                        use
                    </td>
                </tr>
                <tr>
                    <td>
                        continue
                    </td>
                    <td>
                        endfor
                    </td>
                    <td>
                        foreach
                    </td>
                    <td>
                        or
                    </td>
                    <td>
                        while
                    </td>
                </tr>
                <tr>
                    <td>
                        declare
                    </td>
                    <td>
                        endforeach
                    </td>
                    <td>
                        function
                    </td>
                    <td>
                        php_user_filter
                    </td>
                    <td>
                        xor
                    </td>
                </tr>
            </table>
            <br>
            <p>
                <b>__LINE__</b> - Номер поточного рядка скрипта
            </p>
            <p>
                <b>__FILE__</b> - Повне ім'я файлу поточного скрипта
            </p>
            <p>
                <b>__FUNCTION__</b> - Ім'я поточної виконуваної функції
            </p>
            <p>
                <b>__CLASS__</b> - Ім'я поточного класу
            </p>
            <p>
                <b>__METHOD__</b> - Ім'я поточного методу класу
            </p>
            <p>
                <b>PHP_VERSION</b> - версія PHP
            </p>
            <p>
                <b>PHP_OS</b> - Операційна система під управлінням якої працює PHP
            </p>
            <p>
                <b>DEFAULT_INNCLUE_PATH</b> - Список шляхів, в яких PHP шукає спільні файли
            </p>
        </div>

        <div class="h1" style="text-align: center">
            Типи даних PHP
        </div>
        <div>
            <p>
                PHP є мовою динамічної типізації, тип змінної визначається на основі її значення.
                Але все ж потрібно знати які типи даних існують в PHP. Нижче перераховані всі типи,
                які можна використовувати в PHP:
            </p>
            <ul>
                <li>
                    <b>Boolean. </b>Це логічний тип, який містить значення <code>true</code> або <code>false</code>.
                </li>
                <li>
                    <b>Integer. </b>Містить значення цілого числа (Наприклад: <code>4</code> або <code>10</code> або
                    інше ціле число).
                </li>
                <li>
                    <b>String. </b>Містить значення тексту довільної довжини (Наприклад: Олег, Київ, Австрія).
                </li>
                <li>
                    <b>Float. </b>Дійсне число (Наприклад: 1.2, 3.14, 8.5498777).
                </li>
                <li>
                    <b>Object. </b>Об'єкт.
                </li>
                <li>
                    <b>Array. </b>Масив.
                </li>
                <li>
                    <b>Resource. </b>Ресурс (Наприклад: файл).
                </li>
                <li>
                    <b>NULL. </b>Значення NULL.
                </li>
            </ul>
            <code>
                &lt;?php<br>
                $bool = true;    // Значение Boolean<br>
                $int = 100;    // Значение Integer<br>
                $string = "Переменная содержит текст";    // Значение String<br>
                $string2 = "5425";    // Значение String, так как число взято в кавычки !<br>
                $float = 44.122;    // Значение Float<br>
                ?>
            </code>
            <p>
                Для запобігання появи помилок рекомендується не змішувати різні типи даних.
            </p>
            <p>
                Якщо ви хочете явно змінити тип даних змінної, то для цього потрібно зліва від імені змінної в
                круглих дужках вказати потрібний тип:
            </p>
            <code>
                &lt;?php<br>
                $str = "50000";    // Значение String<br>
                $new_str = (integer) $str;    // Теперь значение стало Integer<br>
                <br>
                // Проверяем... <br>
                <br>
                echo $new_str + $new_str;<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                100000
            </blockquote>
            <p>
                <a href="http://php.net/manual/ru/language.types.type-juggling.php">
                    Більш докладно про типізації в PHP </a> (офіційна документація)
            </p>
        </div>

        <div class="row-fluid" style="text-align: center">
            <div class="span12">
                <div class="row-fluid">

                    <div class="span6 btn btn-link">
                        <a href="tutorialFirst.php">
                            <button type="button">
                                <div class="glyphicon glyphicon-arrow-left"></div> Попередня сторінка
                            </button>
                        </a>
                    </div>

                    <div class="span6 btn btn-link">
                        <a href="begin.php">
                            <button type="button" >
                                Наступна сторінка <div class="glyphicon glyphicon-arrow-right"></div>
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>

<?php include_once("footer.php");