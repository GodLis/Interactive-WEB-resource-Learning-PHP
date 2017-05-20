<?php include_once("header.php");
session_destroy();
?>

<div class="mypadding" style="text-align: justify">

    <div class="h1" style="text-align: center">
        Цикл FOR в PHP
    </div>
    <div>
        <p>
            Основним завданням комп'ютерів є обробка великої кількості інформації, яке у людини
            зайняло б дуже багато часу.
        </p>
        <p>
            Для обробки таких завдань комп'ютер використовує цикли. Першим циклом яким ми почнемо
            вивчення буде цикл <code>for</code>. Нижче наведено його синтаксис:
        </p>
        <pre>
            for (exp1; exp2; exp3) statement
        </pre>
        <p>
            У вираз <b>exp1</b> вставляють початкове значення для лічильника циклу -
            змінна, яка рахує кількість разів виконання тіла циклу.
        </p>
        <p>
            <b>exp2</b> - задає умову повторення циклу. Цикл буде виконуватися поки ця умова буде true.
        </p>
        <p>
            <b>exp3</b> - виконується кожен раз після виконання тіла циклу. Зазвичай, воно використовується
            для зміни (збільшення або зменшення) лічильника.
        </p>
        <p>
            Приклад:
        </p>
        <code>
            &lt;?php<br>
            for ($i = 0; $i < 10; $i++)<br>
            {<br>
            echo "Виведення рядку. 10 разів &lt;br>";<br>
            }<br>
            ?>
        </code>
        <p>
            Відображення в браузері:
        </p>
        <blockquote>
            Виведення рядку. 10 разів<br>
            Виведення рядку. 10 разів<br>
            Виведення рядку. 10 разів<br>
            Виведення рядку. 10 разів<br>
            Виведення рядку. 10 разів<br>
            Виведення рядку. 10 разів<br>
            Виведення рядку. 10 разів<br>
            Виведення рядку. 10 разів<br>
            Виведення рядку. 10 разів<br>
            Виведення рядку. 10 разів
        </blockquote>
    </div>

    <div class="h1" style="text-align: center">
        Цикли WHILE в PHP
    </div>
    <div>
        <p>
            Цикл WHILE, замість використання лічильника циклу перевіряє певну умова до того, поки ця умова
            Істина (TRUE). Синтаксис:
        </p>
        <pre>
            <b>while</b> (exp) statement
        </pre>
        <p>
            Умова перевіряється перед виконанням циклу, якщо вона буде хибною на початку, то цикл
            не виконається жодного разу!
        </p>
        <p>
            У тілі циклу повинна бути змінна яка буде впливати на умову, щоб запобігти зацикленню. Приклад:
        </p>
        <code>
            &lt;?php<br>
            $counter = 0;<br>
            while ($counter < 5)<br>
            {<br>
                echo "Цей рядок виведеться 5 разів &lt;br>";<br>
                $counter++;<br>
            }<br>
            ?>
        </code>
        <p>
            Відображення в браузері:
        </p>
        <blockquote>
            Цей рядок виведеться 5 разів <br>
            Цей рядок виведеться 5 разів <br>
            Цей рядок виведеться 5 разів <br>
            Цей рядок виведеться 5 разів <br>
            Цей рядок виведеться 5 разів
        </blockquote>
        <p>
            Після виведення рядка, змінна <code>$counter</code> збільшується на 1,
            і коли вона стане більше або дорівнюватиме 5, то цикл завершиться.
        </p>
    </div>

    <div class="h1" style="text-align: center">
        Цикл DO... WHILE в PHP
    </div>
    <div>
        <p>
            Головна відмінність циклу DO ... WHILE від WHILE в тому, що перший спочатку виконується тіло циклу,
            а потім перевіряє умову. Тобто, якщо умова відразу Хибна, то тіло циклу виконається лише один раз.
        </p>
        <p>
            Синтаксис:
        </p>
        <pre>
            do
               statement
            while (condition)
        </pre>
        <p>
            Використання циклу DO ... WHILE:
        </p>
        <code>
            &lt;?php<br>
            $counter = 6;<br>
            <br>
            do<br>
            {<br>
                echo "Цей рядок виведеться 1 раз &lt;br>";<br>
                $counter++;<br>
            }<br>
            while ($counter < 5);<br>
            <br>
            ?>
        </code>
        <p>
            У браузері ми отримаємо таке:
        </p>
        <blockquote>
            Цей рядок виведеться 1 раз
        </blockquote>
        <p>
            Так як умова циклу відразу Хибна (6 > 5), то цикл виконався всього один раз, так як спочатку
            виконується тіло циклу, а потім перевіряється умова циклу.
        </p>
    </div>

    <div class="h1" style="text-align: center">
        Цикл FOREACH в PHP
    </div>
    <div>
        <p>
            Цикл FOREACH представлений для спрощення роботи з масивами (масиви буде розглянуто далі).
            Масиви складаються з окремих елементів, цикл FOREACH призначений для перебору цих елементів без лічильника.
        </p>
        <p>
            Синтаксис:
        </p>
        <pre>
            <b>foreach</b> (<b>array</b> as $value) statement
            <b>foreach</b> (<b>array</b> as $key => $value) statement
        </pre>
        <p>
            Використання циклу:
        </p>
        <code>
            &lt;?php<br>
            $array = array ("Apple", "Limon", "Chery", "Oranges");<br>
            <br>
            foreach ($array as $value)<br>
            {<br>
                echo "Ви обрали фрукт - $value &lt;br>";<br>
            }<br>
            ?>
        </code>
        <p>
            Відображення в браузері:
        </p>
        <blockquote>
            Ви обрали фрукт - Apple<br>
            Ви обради фрукт - Limon<br>
            Ви обрали фрукт - Chery<br>
            Ви обрали фрукт - Oranges<br>
        </blockquote>
    </div>

    <div class="row-fluid" style="text-align: center">
        <div class="span12">
            <div class="row-fluid">

                <div class="span6 btn btn-link">
                    <a href="conditionalStatements.php">
                        <button type="button">
                            <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                        </button>
                    </a>
                </div>

                <div class="span6 btn btn-link">
                    <a href="strings.php">
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