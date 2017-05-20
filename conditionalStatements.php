<?php include_once("header.php");
session_destroy();
?>

<div class="mypadding" style="text-align: justify">

    <div class="h1" style="text-align: center">
        Умовний оператор IF в PHP
    </div>
    <div>
        <p>
            У всіх високорівневих мовах програмування є оператор <code>if</code>,
            в PHP синтаксис цього оператора такий:
        </p>
        <pre>
            if (exp)
                statement
        </pre>
        <p>
            <b>exp (вираз)</b> - логічний вираз, який може бути істиною (TRUE) або брехнею (FALSE).
        </p>
        <p>
            Наприклад, вираз 100 > 1 це істина (TRUE).
        </p>
        <p>
            <b>statement (інструкція)</b> виконується тоді,
            коли <b>exp</b> - істина, і не виконується коли <b>exp</b> - брехня!
        </p>
        <p>
            Наприклад, якщо швидкість машини буде більше 60 то це означає, що водій перевищує швидкість:
        </p>
        <code>
            &lt;?php<br>
            $speed = 80;<br>
            <br>
            if ($speed > 60)<br>
                echo "Перевищення швидкості !";<br>
            ?>
        </code>
        <p>
            Якщо потрібно щоб при виконанні умови виконувалися відразу декілька операторів,
            то потрібно вкласти їх у фігурні дужки <code>{і}</code>:
        </p>
        <code>
            &lt;?php<br>
            $speed = 80;<br>
            <br>
            if ($speed > 60)<br>
            {    // Початок<br>
                echo "Перевищення швидкості! &lt;br>";<br>
                echo "Будь-ласка, зменшість швидкість!";<br>
            }    // Кінець<br>
            ?>
        </code>
        <p>
            Відображення в браузері:
        </p>
        <blockquote>
            Перевищення швидкості!<br>
            Будь-ласка, зменшість швидкість!
        </blockquote>
    </div>

    <div class="h1" style="text-align: center">
        Оператори порівняння PHP
    </div>
    <div>
        <p>
            При вивченні умовного оператора if ми використовували знак > в умові,
            так як це і є один з операторів порівняння в PHP!
            Всі оператори порівняння які є в PHP зазначені в таблиці:
        </p>
        <table style="width: 100%">
            <tr>
                <td>
                    ==
                </td>
                <td>
                    рівність
                </td>
                <td>
                    Істина, якщо $ a дорівнює $ b
                </td>
            </tr>
            <tr>
                <td>
                    ===
                </td>
                <td>
                    ідентичність
                </td>
                <td>
                    Істина, якщо $ a дорівнює $ b, і вони одного і того ж типу
                </td>
            </tr>
            <tr>
                <td>
                    ! =
                </td>
                <td>
                    нерівність
                </td>
                <td>
                    Істина, якщо $ a не дорівнює $ b
                </td>
            </tr>
            <tr>
                <td>
                    <>
                </td>
                <td>
                    нерівність
                </td>
                <td>
                    Істина, якщо $ a не дорівнює $ b
                </td>
            </tr>
            <tr>
                <td>
                    ! ==
                </td>
                <td>
                    неідентичність
                </td>
                <td>
                    Істина, якщо $ a не дорівнює $ b, або вони не одного типу
                </td>
            </tr>
            <tr>
                <td>
                    <
                </td>
                <td>
                    менше
                </td>
                <td>
                    Істина, якщо $ a менше $ b
                </td>
            </tr>
            <tr>
                <td>
                    >
                </td>
                <td>
                    більше
                </td>
                <td>
                    Істина, якщо $ a більше $ b
                </td>
            </tr>
            <tr>
                <td>
                    <=
                </td>
                <td>
                    Менше або дорівнює
                </td>
                <td>
                    Істина, якщо $ a менше або дорівнює $ b
                </td>
            </tr>
            <tr>
                <td>
                    > =
                </td>
                <td>
                    Більше або дорівнює
                </td>
                <td>
                    Істина, якщо $ a більше або дорівнює $ b
                </td>
            </tr>
        </table>

        <p>
            Варто звернути увагу, що оператор порівняння записується як <code>==</code>,
            а не просто <code>=</code>.
        </p>
        <code>
            &lt;?php<br>
            $speed = 45;<br>
            <br>
            if ($speed <= 60)<br>
                echo "Швидкість в межах норми";<br>
            ?>
        </code>
    </div>

    <div class="h1" style="text-align: center">
        Логічні оператори PHP
    </div>
    <div>
        <p>
            Якщо нам потрібно застосувати до вираження кілька умов, наприклад: якщо більше 3 і менше 6, то за
            допомогою логічних операторів ми можемо це записати так:
        </p>
        <code>
            &lt;?php<br>
            $speed = 40;<br>
            <br>
            if ($speed > 35 && $speed < 55) {<br>
                echo "Швидкість в межах норми";<br>
            }
            ?>
        </code>
        <p>
            Повний список логічних операторів представлений в таблиці:
        </p>

        <table style="width: 100%">
            <tr>
                <td>
                    and
                </td>
                <td>
                    Логічне "І"
                </td>
                <td>
                    Істина, якщо істинно $ a і $ b
                </td>
            </tr>
            <tr>
                <td>
                    &&
                </td>
                <td>
                    Логічне "І"
                </td>
                <td>
                    Істина, якщо істинно $ a і $ b
                </td>
            </tr>
            <tr>
                <td>
                    or
                </td>
                <td>
                    Логічесоке "АБО"
                </td>
                <td>
                    Істина, якщо істинно $ a або $ b
                </td>
            </tr>
            <tr>
                <td>
                    ||
                </td>
                <td>
                    Логічне "АБО"
                </td>
                <td>
                    Істина, якщо істинно $ a або $ b
                </td>
            </tr>
            <tr>
                <td>
                    xor
                </td>
                <td>
                    Логічне "Що виключає АБО"
                </td>
                <td>
                    Істина, якщо істинно $ a або $ b, але не обидва одночасно
                </td>
            </tr>
            <tr>
                <td>
                    !
                </td>
                <td>
                    Логічне "НЕ"
                </td>
                <td>
                    Істина, якщо $ a брехня
                </td>
            </tr>
        </table>

        <p>
            Як ви бачите, в таблиці присутні два оператора "І" та "АБО".
            Це тому, що оператор && або || має більший пріоритет від "І" і "АБО".
        </p>
    </div>

    <div class="h1" style="text-align: center">
        Оператор ELSE в PHP
    </div>
    <div>
        <p>
            Дуже часто потрібно при істинному значенні виконати одну дію, а при помилковому іншу.
            Для цього в PHP є оператор <code>else</code>. Синтаксис оператора:
        </p>
        <pre>
            if(exp)
                statement1
            else
                statement2
        </pre>
        <p>
            Приклад:
        </p>
        <code>
            &lt;?php<br>
            $speed = 50;<br>
            <br>
            if ($speed > 60)<br>
                echo "Перевищення швидкості !";<br>
            else<br>
                echo "Швидкість в межах норми"<br>
            ?>
        </code>
        <p>
            У цьому випадку буде виведено повідомлення "Швидкість в межах норми".
        </p>
    </div>

    <div class="h1" style="text-align: center">
        Оператор ELSEIF в PHP
    </div>
    <div>
        <p>
            Оператор <code>if</code> має ще одне розширення, це оператор <code>elseif</code>,
            він використовується для послідовної перевірки умов. Синтаксис:
        </p>
        <pre>
            if (exp)
                statement1
            elseif (exp2)
                statement2
        </pre>
        <p>
            Також можна записувати так:
        </p>
        <pre>
            if (exp)
                statement1
            else if (exp2)
                statement2
        </pre>
        <p>
            Приклад:
        </p>
        <code>
            &lt;?php<br>
            $speed = 50;<br>
            <br>
            if ($speed < 30)<br>
                echo "Швидкість в межах норми";<br>
            <br>
            elseif ($speed == 30)<br>
                echo "Ваша швидкість 30 км/год";<br>
            <br>
            elseif ($speed == 40)<br>
                echo "Ваша швидкість 40 км/год";<br>
            <br>
            elseif ($speed == 50)<br>
                echo "Ваша швидкість 50 км/год";<br>
            <br>
            elseif ($speed == 60)<br>
                echo "Ваша швидкість 60 км/год";<br>
            <br>
            else<br>
                echo "Перевищення швидкості !";<br>
            ?>
        </code>
        <p>
            Також, таку частину коду можна записати і так:
        </p>
        <code>
            &lt;?php<br>
            $speed = 50;<br>
            <br>
            if ($speed < 30)<br>
                echo "Швидкість в межах норми";<br>
            <br>
            elseif ($speed >= 30 && $speed <= 60)<br>
                echo "Ваша швидкість {$speed} км/год";<br>
            <br>
            else<br>
                echo "Перевищення швидкості !";<br>
            ?>
        </code>
        <p>
            У цьому випадку буде виведено повідомлення "Ваша швидкість 50 км/год". А якби ні одна умова не підійшла
            б, то спрацював би оператор <code>else</code> і ми побачили "Перевищення швидкості!".
        </p>
    </div>

    <div class="h1" style="text-align: center">
        Тернарний оператор PHP
    </div>
    <div>
        <p>
            Тернарний оператор працює майже так само як і оператор <code>if</code> ,
            але при використанні тернарного оператора, ми замість ключових слів пишемо <code>?</code> і
            <code>:</code>.
        </p>
        <p>
            Синтаксис:
        </p>
        <pre>
            $var = condition ? exp1 : exp2;
        </pre>
        <p>
            Якщо умова виконується, то змінній <code>$var</code> присвоюється результат обчислення
            <code>exp1</code>, інакше <code>exp2</code>.
        </p>
        <p>
            Приклад:
        </p>
        <code>
            &lt;?php<br>
            $speed = 55;<br>
            <br>
            echo ($speed <= 60) ? "Швидкість в межах норми" : "Пепевищення швидкості !";<br>
            ?>
        </code>
        <p>
            В результаті ми побачимо рядок - "Швидкість в межах норми".
        </p>
    </div>

    <div class="h1" style="text-align: center">
        PHP 5.3
    </div>
    <div>
        <p>
            Починаючи з версії PHP 5.3 можна використовувати тернарний оператор в такому варіанті:
        </p>
        <code>
            &lt;?php<br>
            $var = $value ?: "Інше значення";<br>
            <br>
            // еквівалентно<br>
            $var = $value ? $value : "Інше значення";<br>
            ?>
        </code>
        <p>
            Цей варіант корисно використовувати, коли потрібно змінити значення змінної,
            тільки в разі, коли змінна що перевіряється не дорівнює <code>true</code>.
        </p>
    </div>

    <div class="h1" style="text-align: center">
        PHP 7
    </div>
    <div>
        <p>
            Також, вже починаючи з версії PHP 7.0 можна використовувати тернарний оператор в такому варіанті:
        </p>
        <code>
            &lt;?php<br>
            $var = $value ?? "Інше значення";<br>
            <br>
            // еквівалентно<br>
            $var = isset($value) ? $value : "Інше значення";<br>
            ?>
        </code>
        <p>
            Такий варіант корисно використовувати, якщо потрібно спочатку перевірити чи існує змінна.
            Якщо змінна не існує, то використовувати якесь інше значення.
        </p>
    </div>

    <div class="h1" style="text-align: center">
        Оператор SWITCH в PHP
    </div>
    <div>
        <p>
            Іноді навіть використання конструкції операторів <code>if</code> .. <code>elseif</code>
            дещо надоїдає.
        </p>
        <p>
            Щоб виправити цю ситуацію є оператор <code>switch</code>. Синтаксис:
        </p>
        <pre>
            switch (exp)
                {
                    case condition1:
                    exp1;
                    break;

                    case condition2:
                    exp2;
                    break;

                    case condition3:
                    exp3;
                    break;

                    default:
                    exp4;
                    break;
                }
        </pre>
        <p>
            Спочатку записується ключове слово <code>switch</code>, після якого в дужках
            записується деякий вираз.
        </p>
        <p>
            Далі, після слова <code>case</code> потрібно перерахувати можливі варіанти значень,
            якщо значення істина, то виконується група операторів, які записані до
            оператора <code>break</code>. Якщо ні одна умова не підходить, то виконується оператор
            <code>default</code>
            (якщо оператор <code>default</code> не писати, то при невиконанні ніяких інших умов
            нічого не станеться).
        </p>
        <code>
            &lt;?php<br>
            $speed = 55;<br>
            <br>
            switch($speed)<br>
            {<br>
                case 30 :<br>
                    echo "Ваша швидкість 30 км/год";<br>
                    break;<br>
            <br>
                case 58 :<br>
                    echo "Ваша швидкість 50 км/год";<br>
                    break;<br>
            <br>
                case 70 :<br>
                    echo "Перевищення швидкості !";<br>
                    break;<br>
            <br>
                default :<br>
                    echo "Швидкість в межах норми";<br>
                    break;<br>
            <br>
            }<br>
            ?>
        </code>
        <p>
            Також, при використанні оператора <code>switch</code>, ми можемо записати кілька умов для
            деякої дії:
        </p>
        <code>
            &lt;?php<br>
            $speed = 55;<br>
            <br>
            switch($speed)<br>
            {<br>
                case 30 :<br>
                case 58 :<br>
                    echo "Швидкість в межах норми";<br>
                    break;<br>
            <br>
                case 70 :<br>
                    echo "Перевищення швидкості !";<br>
                    break;<br>
            <br>
                default :<br>
                    echo "Швидкість в межаз норми";<br>
                    break;<br>
            <br>
            }<br>
            ?>
        </code>
        <p>
            В результаті ми побачимо - "Швидкість в межах норми".
        </p>
    </div>





    <div class="row-fluid" style="text-align: center">
        <div class="span12">
            <div class="row-fluid">

                <div class="span6 btn btn-link">
                    <a href="statements.php">
                        <button type="button">
                            <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                        </button>
                    </a>
                </div>

                <div class="span6 btn btn-link">
                    <a href="loops.php">
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