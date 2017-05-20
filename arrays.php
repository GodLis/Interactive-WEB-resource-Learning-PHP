<?php include_once("header.php");
session_destroy();
?>

    <div class="mypadding" style="text-align: justify">

        <div class="h1" style="text-align: center">
            Створення масивів в PHP
        </div>
        <div>
            <p>
                Масив - це набір даних, які об'єднані під одним ім'ям. Масив складається з декількох елементів, які
                мають свій певний індекс.
            </p>
            <p>
                Масиви створюються за допомогою оператора присвоєння, також як і змінна.
            </p>
            <p>
                Імена масивів починаються зі знака <code>$</code>, після якого слідує довільний ідентифікатор,
                далі йдуть квадратні дужки: <b>$</b> arr [0] = "php";
            </p>
            <p>
                Дана конструкція створює масив і привласнює його елементу з індексом 0 значення "php",
                після чого ми можемо звертатися до цього елементу як до звичайної змінної: <code>echo $arr[0]</code>.
                В результаті ми побачимо слово <i>php</i> .
            </p>
            <p>
                Також, ми можемо додати ще елементи до масиву:
            </p>
            <code>
                &lt;?php<br>
                $arr[1] = "html";<br>
                $arr[2] = "css";<br>
                ?>
            </code>
            <p>
                В якості індексу елементів масиву ми можемо використовувати не тільки числа:
            </p>
            <code>
                &lt;?php<br>
                $arr["Kiev"] = 3000000;<br>
                $arr["Paris"] = 5000000;<br>
                $arr["LA"] = 15000000;<br>
                ?>
            </code>
            <p>
                Як значення індексів елементів і самих елементів ми можемо використовувати однакові типи даних
                <b>одночасно</b>!
            </p>
            <p>
                Також існує скорочений запис для індексування:
            </p>
            <code>
                &lt;?php<br>
                $arr[] = 3000000;<br>
                $arr[] = 5000000;<br>
                $arr[] = 15000000;<br>
                ?>
            </code>
            <p>
                У цьому випадку перший елемент (3000000) отримає індекс 0! Потрібно мати це на увазі.
            </p>
        </div>

        <div class="h1" style="text-align: center">
            Створення масивів
        </div>
        <div>
            <p>
                Для створення масиву ми можемо використовувати функцію <code>array</code>:
            </p>
            <code>
                &lt;?php<br>
                $arr = array("php", "html", "css");<br>
                ?>
            </code>
            <p>
                У цьому випадку перший елемент отримає індекс 0. Якщо потрібно присвоїти якийсь інший номер,
                то можна скористатися конструкцією <code>=></code>:
            </p>
            <code>
                &lt;?php<br>
                $arr = array(1 => "php", "html", "css");<br>
                ?>
            </code>
            <p>
                Тепер елемент під номером 1 це "php", а не "html"! Також, можна створити масив з строковим індексом:
            </p>
            <code>
                &lt;?php<br>
                $arr = array("first" => "php", "second" => "html", "third" => "css");<br>
                ?>
            </code>
            <p class="text-warning">
                PHP> = 5.4!
            </p>
            <p>
                Починаючи з версії PHP 5.4, масиви можна створити через квадратні дужки:
            </p>
            <code>
                &lt;?php<br>
                $arr = ["php", "laravel", "yii", "zend", "cakephp"];<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Модифікація елементів масиву в PHP
        </div>
        <div>
            <p>
                Нерідко, потрібно змінити значення того чи іншого елемента масиву, для цього потрібно всього лише
                звернутися до елементу масиву за його індексом, і привласнити йому нове значення.
            </p>
            <p>
                Наприклад, у нас є масив:
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                ?>
            </code>
            <p>
                Для того, щоб змінити значення елемента використовуємо оператор присвоєння :
            </p>
            <code>
                &lt;?php<br>
                $arr[1] = "JAVASCRIPT";<br>
                ?>
            </code>
            <p>
                Для того, щоб додати новий елемент в кінець масиву використовує конструкцію:
            </p>
            <code>
                &lt;?php<br>
                $arr[] = "JQUERY";<br>
                ?>
            </code>
            <p>
                Для того, щоб вивести на екран масив можна використовувати <code>foreach</code>:
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                <br>
                $arr[1] = "JAVASCRIPT";<br>
                $arr[]  = "JQUERY";<br>
                <br>
                <b>foreach</b>($arr <b>as</b> $key => $value) { // при переборі: <b>$key</b> - індекс элементу масива,
                <b>$value</b> - значення элементу масива<br>
                <b>echo</b> $value.'&lt;br/>';<br>
                }<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                PHP<br>
                JAVASCRIPT<br>
                CSS<br>
                JQUERY
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Видалення елементів масиву в PHP
        </div>
        <div>
            <p>
                Якщо нам потрібно видалити один з елементів масиву, то для цього ми повинні використовувати функцію
                <code>unset</code>:
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                <br>
                <b>unset</b>($arr[1]);<br>
                <br>
                <b>foreach</b>($arr <b>as</b> $key => $value) {<br>
                <b>echo</b> $value.'&lt;br/>';<br>
                }<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Перебір елементів масиву в PHP
        </div>
        <div>
            <p>
                Крім використання циклу <code>for</code> для виведення всіх елементів масиву
                на екран ми можемо використовувати функцію <code>print_r</code>,
                яка виведе всі елементи масиву разом з їх індексами.
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                <br>
                print_r($arr);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [0] => PHP [1] => HTML [2] => CSS )
            </blockquote>
            <p class="text-success">
                Також, щоб результат виведення функції <code>print_r</code> був більш наглядним, рекомендую перед
                використанням функції писати <code>echo "&lt;pre>"</code>, а після функції -
                <code>echo "&lt;/pre>"</code>.
            </p>
            <p>
                Також в PHP присутній спеціальний цикл для обробки масивів - цикл <code>foreach</code>
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                <br>
                <b>foreach</b>($arr <b>as</b> $value)<br>
                {<br>
                <b>echo</b> $value, "&lt;br>";<br>
                }<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                PHP<br>
                HTML<br>
                CSS
            </blockquote>
            <p>
                Для виведення індексу елемента потрібно використовувати другий варіант синтаксису циклу
                <code>foreach</code>
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                <br>
                <b>foreach</b>($arr <b>as</b> $key => $value) { // <b>$key</b> - індекс элементу масива,
                <b>$value</b> - значення элементу масива<br>
                <b>echo</b> "[{$key}] => {$value} &lt;br/>";<br>
                }<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                [0] => PHP<br>
                [1] => HTML<br>
                [2] => CSS
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Функції для роботи з масивами в PHP
        </div>
        <div>
            <p>
                Для роботи з масивами в PHP передбачено дуже багато функцій, повний список яких представлений нижче:
            </p>
            <table style="width: 100%">
                <tr>
                    <td>
                        array_chunk
                    </td>
                    <td>
                        Розбиває масив на кілька менших масивів заданого розміру
                    </td>
                </tr>
                <tr>
                    <td>
                        array_combine
                    </td>
                    <td>
                        Створює масив з двух заданих масивів - масиву індексів елементів і масиву значень
                    </td>
                </tr>
                <tr>
                    <td>
                        array_count_values
                    </td>
                    <td>
                        Формує масив, індексами якого є значення заданого масиву, а значеннями - число повторень
                        відповідного значення в заданому масиві
                    </td>
                </tr>
                <tr>
                    <td>
                        array_diff
                    </td>
                    <td>
                        Формує масив з тих елементів першого заданого масиву, які відсутні в інших заданих в якості
                        аргументів функції масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        array_fill
                    </td>
                    <td>
                        Заповнює масив заданим значенням
                    </td>
                </tr>
                <tr>
                    <td>
                        array_intersect
                    </td>
                    <td>
                        Формує масив з елементів, які присутні у всіх заданих масивах
                    </td>
                </tr>
                <tr>
                    <td>
                        array_key_exists
                    </td>
                    <td>
                        Перевіряє наявність заданого індексу в масиві
                    </td>
                </tr>
                <tr>
                    <td>
                        array_keys
                    </td>
                    <td>
                        Повертає масив з індексів заданого масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        array_merge
                    </td>
                    <td>
                        Об'єднує кілька масивів в один
                    </td>
                </tr>
                <tr>
                    <td>
                        array_multisort
                    </td>
                    <td>
                        Виконує сортування багатовимірного масиву або декількох одновимірних масивів
                    </td>
                </tr>
                <tr>
                    <td>
                        array_pad
                    </td>
                    <td>
                        Доповнює масив до заданої кількості елементів заданим значенням
                    </td>
                </tr>
                <tr>
                    <td>
                        array_pop
                    </td>
                    <td>
                        Повертає останній елемент масиву, одночасно видаляючи елемент з масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        array_push
                    </td>
                    <td>
                        Додає задані елементи в кінець масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        array_rand
                    </td>
                    <td>
                        Вибирає один або кілька випадково взятих елементів з масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        array_reduce
                    </td>
                    <td>
                        Здійснює послідовне застосування заданої функції до елементів масиву, формуючи підсумкове
                        значення
                    </td>
                </tr>
                <tr>
                    <td>
                        array_reverse
                    </td>
                    <td>
                        Виробляє зходження масиву - перший елемент стає останнім, другий - передостаннім і т.д.
                    </td>
                </tr>
                <tr>
                    <td>
                        array_search
                    </td>
                    <td>
                        Шукає заданий елемент в масиві і повертає відповідний йому індекс
                    </td>
                </tr>
                <tr>
                    <td>
                        array_shift
                    </td>
                    <td>
                        Повертає перший елемент масиву, одночасно видаляючи його з масиву з перенумерацією числових
                        індексів
                    </td>
                </tr>
                <tr>
                    <td>
                        array_slice
                    </td>
                    <td>
                        Вирізає з масиву підмасив заданої довжини, починаючи з зазначеного елементу
                    </td>
                </tr>
                <tr>
                    <td>
                        array_sum
                    </td>
                    <td>
                        Обчислює суму всіх елементів масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        array_unique
                    </td>
                    <td>
                        Видаляє дубльоване значення з масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        array_unshift
                    </td>
                    <td>
                        Додає один або кілька елементів в початок масиву з перенумерацією числових індексів
                    </td>
                </tr>
                <tr>
                    <td>
                        array_walk
                    </td>
                    <td>
                        Викликає задану функцію послідовно для кожного елемента масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        array
                    </td>
                    <td>
                        Створює масив із заданих значень або пар індекс - значеннь
                    </td>
                </tr>
                <tr>
                    <td>
                        arsort
                    </td>
                    <td>
                        Сортує масив по спадаючій його значень, зберігаючи індекси незмінними
                    </td>
                </tr>
                <tr>
                    <td>
                        asort
                    </td>
                    <td>
                        Сортує масив по зростанню його значень, зберігаючи індекси незмінними
                    </td>
                </tr>
                <tr>
                    <td>
                        krsort
                    </td>
                    <td>
                        Сортує масив по спадаючій його індексів
                    </td>
                </tr>
                <tr>
                    <td>
                        ksort
                    </td>
                    <td>
                        Сортує масив по зростанню його індексів
                    </td>
                </tr>
                <tr>
                    <td>
                        sort
                    </td>
                    <td>
                        Сортує масив по зростанню значень його елементів з перенумерацією його індексів
                    </td>
                </tr>
                <tr>
                    <td>
                        usort
                    </td>
                    <td>
                        Сортує масив з використання заданої функції порівняння елементів масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        rsort
                    </td>
                    <td>
                        Сортує масив по спадаючій значень його елементів з перенумерацією його індексів
                    </td>
                </tr>
                <tr>
                    <td>
                        natcasesort
                    </td>
                    <td>
                        Сортує масив природним чином без урахування регістру масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        natsort
                    </td>
                    <td>
                        Сортує масив природним чином з урахуванням регістру символів
                    </td>
                </tr>
                <tr>
                    <td>
                        count
                    </td>
                    <td>
                        Повертає кількість елементів у масиві
                    </td>
                </tr>
                <tr>
                    <td>
                        current
                    </td>
                    <td>
                        Повертає значення поточного елемента масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        each
                    </td>
                    <td>
                        Повертає поточні індекс і значення елемента масиву і просуває покажчики на наступний елемент
                    </td>
                </tr>
                <tr>
                    <td>
                        in_array
                    </td>
                    <td>
                        Перевіряє, чи присутнє задане значення в масиві
                    </td>
                </tr>
                <tr>
                    <td>
                        key
                    </td>
                    <td>
                        Повертає індекс поточного елемента масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        list
                    </td>
                    <td>
                        Привласнює значення з масиву списку змінних
                    </td>
                </tr>
                <tr>
                    <td>
                        pos
                    </td>
                    <td>
                        Синонім функції <i>current</i>
                    </td>
                </tr>
                <tr>
                    <td>
                        reset
                    </td>
                    <td>
                        Встановлює внутрішній покажчик на перший елемент масиву
                    </td>
                </tr>
                <tr>
                    <td>
                        shuffle
                    </td>
                    <td>
                        Переставляє елементи масиву випадковим чином
                    </td>
                </tr>
                <tr>
                    <td>
                        sizeof
                    </td>
                    <td>
                        Синонім функції <i>count</i>
                    </td>
                </tr>
            </table>

            <br>
            <p class="text-success">
                Більш детальну інформацію про всі функції для роботи з масивами ви можете знайти на
                <a href="http://php.net/manual/ru/ref.array.php">сторінці офіційної документації</a>.
            </p>
        </div>

        <div class="h1" style="text-align: center">
            Сортування масивів в PHP
        </div>
        <div>
            <p>
                Дуже часто потрібно впорядкувати масив за індексом його елементів, за алфавітом його елементів,
                по зростанню, по зменшенню і т. д. У PHP для цього існує гідна кількість функцій.
            </p>
            <p>
                Перша функція - <code>sort</code>, яка сортує масив по зростанню значень його елементів,
                при цьому змінюючи індекс після сортування:
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                <br>
                sort($arr);<br>
                <br>
                print_r($arr);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [0] => CSS [1] => HTML [2] => PHP )
            </blockquote>
            <p>
                Друга функція - <code>rsort</code>, яка сортує масив по спадаючій значень його елементів,
                при цьому не змінюючи індекс після сортування:
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                <br>
                rsort($arr);<br>
                <br>
                print_r($arr);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [0] => PHP [1] => HTML [2] => CSS )
            </blockquote>
            <p>
                Третя функція - <code>ksort</code>, яка сортує масив по ключам, зберігаючи відносини між ключами і
                значеннями:
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                <br>
                ksort($arr);<br>
                <br>
                print_r($arr);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [0] => PHP [1] => HTML [2] => CSS )
            </blockquote>
            <p>
                Наступна функція - <code>krsort</code>, яка сортує масив по спадаючій індексів його елементів:
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                <br>
                krsort($arr);<br>
                <br>
                print_r($arr);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [2] => CSS [1] => HTML [0] => PHP )
            </blockquote>
            <p>
                Це основні, але не всі функції для сортування масивів.
            </p>
        </div>

        <div class="h1" style="text-align: center">
            Навігація по масивах в PHP
        </div>
        <div>
            <p>
                Навігація по масиву дає можливо дізнатися поточний, наступний, попередній, останній елемент масиву.
            </p>
            <p>
                Для визначення поточного елемента масиву використовують функцію <code>current</code>:
            </p>
            <code>
                &lt;?php<br>
                echo "Now is: ", current($arr), "&lt;br>";<br>
                ?>
            </code>
            <p>
                Для визначення наступного елемента масиву використовують функцію <code>next</code>:
            </p>
            <code>
                &lt;?php<br>
                echo "Next is: ", next($arr), "&lt;br>";<br>
                ?>
            </code>
            <p>
                Для визначення попереднього елемента масиву використовують функцію <code>prev</code>:
            </p>
            <code>
                &lt;?php<br>
                echo "Previously is: ", prev($arr), "&lt;br>";<br>
                ?>
            </code>
            <p>
                Для визначення останнього елемента масиву використовують функцію <code>end</code>:
            </p>
            <code>
                &lt;?php<br>
                echo "The end is: ", end($arr), "&lt;br>";<br>
                ?>
            </code>
            <p>
                Для визначення першого (повернення покажчика) елемента масиву використовують функцію <code>reset:</code>
            </p>
            <code>
                &lt;?php<br>
                echo "First is: ", reset($arr), "&lt;br>";<br>
                ?>
            </code>
            <p>
                Приклад навігації по масивах:
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                <br>
                echo "Now is: ", current($arr), "&lt;br>";<br>
                echo "Next is: ", next($arr), "&lt;br>";<br>
                echo "Previously is: ", prev($arr), "&lt;br>";<br>
                echo "The end is: ", end($arr), "&lt;br>";<br>
                echo "First is: ", reset($arr), "&lt;br>";<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Now is: PHP<br>
                Next is: HTML<br>
                Previously is: PHP<br>
                The end is: CSS<br>
                First is: PHP
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Перетворення рядків в масиви і навпаки в PHP
        </div>
        <div>
            <p>
                PHP вміє перетворювати дані з рядка в масив і навпаки, для цього в PHP є функція
                <code>implode</code> і <code>explode</code>.
            </p>
            <p>
                <code>implode</code> - формує рядок з масиву.
            </p>
            <p>
                <code>explode</code> - формує масив з рядка.
            </p>
            <p>
                Використання функції <code>implode</code>:
            </p>
            <code>
                &lt;?php<br>
                $arr[0] = "PHP";<br>
                $arr[1] = "HTML";<br>
                $arr[2] = "CSS";<br>
                <br>
                $string = implode(", ", $arr);<br>
                <b>echo</b> $string;<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                PHP, HTML, CSS
            </blockquote>
            <p>
                Використання функції <code>explode</code>:
            </p>
            <code>
                &lt;?php<br>
                $string = "PHP, HTML, CSS";<br>
                $arr = explode(", ", $string);<br>
                print_r($arr);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [0] => PHP [1] => HTML [2] => CSS )
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Витягнення змінних з масивів в PHP
        </div>
        <div>
            <p>
                Якщо є потреба для масиву, який проіндексований малими даними, привласнити значення змінної,
                однойменною з відповідними індексами, то можна використовувати функцію <code>extract</code>.
            </p>
            <code>
                &lt;?php<br>
                $arr["one"] = "PHP";<br>
                $arr["two"] = "HTML";<br>
                $arr["three"] = "CSS";<br>
                <br>
                extract($arr);<br>
                <br>
                echo "\$one = $one &lt;br>";<br>
                echo "\$two = $two &lt;br>";<br>
                echo "\$three = $three &lt;br>";<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                $one = PHP<br>
                $two = HTML<br>
                $three = CSS<br>
            </blockquote>
            <p>
                Якщо потрібно скласти зі змінних масив, то потрібно використовувати функцію <code>compact</code>.
            </p>
            <code>
                &lt;?php<br>
                $one = "PHP";<br>
                $two = "HTML";<br>
                $three = "CSS";<br>
                <br>
                $arr = compact("one", "two", "three");<br>
                <br>
                print_r($arr);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [one] => PHP [two] => HTML [three] => CSS )
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Злиття і поділ масивів в PHP
        </div>
        <div>
            <p>
                Якщо вам потрібно додати в масив кілька елементів іншого масиву, то вам допоможе функція
                <code>array_slice</code>:
            </p>
            <code>
                &lt;?php<br>
                $arr["one"] = "PHP";<br>
                $arr["two"] = "HTML";<br>
                $arr["three"] = "CSS";<br>
                <br>
                $new_arr = array_slice($arr, 0, 2);<br>
                print_r($new_arr);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [one] => PHP [two] => HTML )
            </blockquote>
            <p>
                Перший параметр функції <code>array_slice</code> - це назва того масиву, з якого будуть братися
                елементи;
                другий - початковий номер елемента (з якого елементу починати брати елементи);
                третій - кількість елементів вибірки.
            </p>
            <p>
                Для з'єднання масивів в один потрібно використовувати функцію <code>array_merge</code>:
            </p>
            <code>
                &lt;?php<br>
                $arr[1] = "PHP";<br>
                $arr[2] = "HTML";<br>
                $arr[3] = "CSS";<br>
                <br>
                $arr2[1] = "PHOTOSHOP";<br>
                $arr2[2] = "PAINT.NET";<br>
                $arr2[3] = "DREAMWEAVER";<br>
                <br>
                $new_arr = array_merge($arr, $arr2);<br>
                print_r($new_arr);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [0] => PHP [1] => HTML [2] => CSS [3] => PHOTOSHOP [4] => PAINT.NET [5] => DREAMWEAVER
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Порівняння масивів в PHP
        </div>
        <div>
            <p>
                Якщо потрібно перевірити який елемент збігається в тому, чи іншому масиві, або навпаки НЕ збігається,
                то можна використовувати функцію <code>array_diff</code>:
            </p>
            <code>
                &lt;?php<br>
                $arr[1] = "PHP";<br>
                $arr[2] = "HTML";<br>
                $arr[3] = "CSS";<br>
                <br>
                $arr2[1] = "PHP";<br>
                $arr2[2] = "PAINT.NET";<br>
                $arr2[3] = "DREAMWEAVER";<br>
                <br>
                $diff = array_diff($arr, $arr2);<br>
                print_r($diff);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [2] => HTML [3] => CSS )
            </blockquote>
            <p>
                Якщо потрібно, щоб порівнювався ще і строковий індекс масивів, то тут вже потрібно використовувати
                функцію <code>array_diff_assoc</code>:
            </p>
            <code>
                &lt;?php<br>
                $arr["one"] = "PHP";<br>
                $arr["two"] = "HTML";<br>
                $arr["three"] = "CSS";<br>
                <br>
                $arr2[1] = "PHP";<br>
                $arr2["two"] = "HTML";<br>
                $arr2[3] = "DREAMWEAVER";<br>
                <br>
                $diff = array_diff_assoc($arr, $arr2);<br>
                print_r($diff);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [one] => PHP [three] => CSS )
            </blockquote>
            <p>
                Якщо вам потрібно знайти загальні елементи масивів, то вам допоможе функція
                <code>array_intersect</code>:
            </p>
            <code>
                &lt;?php<br>
                $arr[1] = "PHP";<br>
                $arr[2] = "HTML";<br>
                $arr[3] = "CSS";<br>
                <br>
                $arr2[1] = "PHP";<br>
                $arr2[2] = "PAINT.NET";<br>
                $arr2[3] = "DREAMWEAVER";<br>
                <br>
                $diff = array_intersect($arr, $arr2);<br>
                print_r($diff);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [1] => PHP )
            </blockquote>
            <p>
                Якщо при знаходженні загальних елементів масивів потрібно врахувати і
                індекс, то, за аналогією <code>array_diff_assoc</code>, використовуйте функцію
                <code>array_intersect_assoc</code>.
            </p>
        </div>

        <div class="h1" style="text-align: center">
            Обробка даних в масивах PHP
        </div>
        <div>
            <p>
                PHP має безліч функцій для обробки даних в масивах. Наприклад, якщо потрібно обчислити
                суму всіх елементів масиву, то можна скористатися функцією <code>array_sum</code>:
            </p>
            <code>
                &lt;?php<br>
                $arr[1] = 31;<br>
                $arr[2] = 1;<br>
                $arr[3] = 94;<br>
                <br>
                $sum = array_sum($arr);<br>
                <br>
                echo $sum;<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                126
            </blockquote>
            <p>
                Якщо, потрібно позбутися від елементів з повторюваним значенням, то варто використовувати функцію
                <code>array_unique</code>:
            </p>
            <code>
                &lt;?php<br>
                $arr = array(30, 44, 97, 30);<br>
                print_r($arr);<br>
                <br>
                $new_arr = array_unique($arr);<br>
                print_r($new_arr);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array ( [0] => 30 [1] => 44 [2] => 97 [3] => 30 )<br>
                Array ( [0] => 30 [1] => 44 [2] => 97 )
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Багатовимірні масиви в PHP
        </div>
        <div>
            <p>
                Крім одновимірних в PHP є ще і багатовимірні масиви. Це такі масиви, які мають під одним індексом
                два або більше значень. Наприклад, є масив <code>companies</code>,
                який має інформацію про пропозиції по роботі від різних компаній:
            </p>
            <code>
                &lt;?php<br>
                $companies["Microsoft"] = "Programmer";<br>
                $companies["Google"] = "IT";<br>
                $companies["Mozilla"] = "PR";<br>
                ?>
            </code>
            <p>
                А якщо компанія має кілька пропозицій, то тут вже потрібно використовувати багатовимірні масиви:
            </p>
            <code>
                &lt;?php<br>
                $companies["Microsoft"][1] = "Programmer";<br>
                $companies["Microsoft"][2] = "PR";<br>
                $companies["Microsoft"][3] = "Office Manager";<br>
                <br>
                $companies["Google"][1] = "IT";<br>
                $companies["Google"][2] = "Web-design";<br>
                <br>
                $companies["Mozilla"][1] = "PR";<br>
                $companies["Mozilla"][2] = "C++ Programmer";<br>
                <br>
                print_r($companies);<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array (<br>
                [Microsoft] => Array ( [1] => Programmer [2] => PR [3] => Office Maneger )<br>
                [Google] => Array ( [1] => IT [2] => Web-design )<br>
                [Mozilla] => Array ( [1] => PR [2] => C++ Programmer )<br>
                )
            </blockquote>
            <p>
                Також, цю конструкцію можна було записати так:
            </p>
            <code>
                &lt;?php<br>
                $companies = [<br>
                    "Microsoft" => ["Programmer", "PR", "Office Manager"],<br>
                    "Google" => ["IT", "Web-design"],<br>
                    "Mozilla" => ["PR", "C++ Programmer"]<br>
                ];<br>
                <br>
                // можна використовувати тег pre для форматування виведення<br>
                <b>echo</b> "&lt;pre>";<br>
                print_r($companies);<br>
                <b>echo</b> "&lt;/pre>";<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Array<br>
                (<br>
                [Microsoft] => Array<br>
                (<br>
                [0] => Programmer<br>
                [1] => PR<br>
                [2] => Office Manager<br>
                )<br>
                <br>
                [Google] => Array<br>
                (<br>
                [0] => IT<br>
                [1] => Web-design<br>
                )<br>
                <br>
                [Mozilla] => Array<br>
                (<br>
                [0] => PR<br>
                [1] => C++ Programmer<br>
                )<br>
                <br>
                )
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Використання циклів в багатовимірних масивах в PHP
        </div>
        <div>
            <p>
                Якщо нам потрібно перебрати (вивести на екран) елементи звичайного масиву, то ми можемо використовувати
                цикли. Ми також можемо використовувати цикли і для багатовимірних масивів, тільки потрібно трішки
                підправити код. Розглянемо приклад:
            </p>
            <code>
                &lt;?php<br>
                // Створення масиву<br>
                $companies[0][] = "Programmer";<br>
                $companies[0][] = "PR";<br>
                <br>
                $companies[1][] = "IT";<br>
                $companies[1][] = "Web-design";<br>
                <br>
                $companies[2][] = "PR";<br>
                $companies[2][] = "C++ Programmer";<br>
                <br>
                // Виведення масиву на экран<br>
                <b>for</b>($i = 0; $i < count($companies); $i++) {<br>
                <b>for</b>($j = 0; $j < count($companies[$i]); $j++) {<br>
                <b>echo</b> $companies[$i][$j], "&lt;br/>";<br>
                    }<br>
                }<br>
                ?>
            </code>
            <p>
                Змінна <code>$i</code> відповідає за лічильник в перших квадратних дужках масиву,
                а змінна <code>$j</code> за лічильник в других квадратних дужках масиву.
                Другий цикл <b>FOR</b> працює, поки в масиві не закінчаться елементи певного індексу.
            </p>
        </div>

        <div class="h1" style="text-align: center">
            Оператори для роботи з масивами в PHP
        </div>
        <div>
            <p>
                У PHP, крім спеціальних функцій для роботи з масивами, є оператори, які виконують такі дії:
            </p>
            <table style="width: 100%">
                <tr>
                    <td>
                        $ A + $ b
                    </td>
                    <td>
                        Об'єднання
                    </td>
                </tr>
                <tr>
                    <td>
                        $ A == $ b
                    </td>
                    <td>
                        Так само
                    </td>
                </tr>
                <tr>
                    <td>
                        $ A === $ b
                    </td>
                    <td>
                        Тотожно дорівнює
                    </td>
                </tr>
                <tr>
                    <td>
                        $ A! = $ B
                    </td>
                    <td>
                        Не дорівнює
                    </td>
                </tr>
                <tr>
                    <td>
                        $ A <> $ b
                    </td>
                    <td>
                        Не дорівнює
                    </td>
                </tr>
                <tr>
                    <td>
                        $ A! == $ b
                    </td>
                    <td>
                        Тотожно не дорівнює
                    </td>
                </tr>
            </table>

            <p>
                <b>Тотожно дорівнює</b> - коли значення і типи даних однакові. Приклад:
            </p>
            <code>
                &lt;?php<br>
                var_dump(1 === "1"); // integer === string -> false<br>
                var_dump(1 === 1); // integer === integer -> true<br>
                ?>
            </code>
        </div>

        <div class="row-fluid" style="text-align: center">
            <div class="span12">
                <div class="row-fluid">

                    <div class="span6 btn btn-link">
                        <a href="strings.php">
                            <button type="button">
                                <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                            </button>
                        </a>
                    </div>

                    <div class="span6 btn btn-link">
                        <a href="functions.php">
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