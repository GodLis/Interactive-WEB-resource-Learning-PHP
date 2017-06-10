<?php include_once("header.php");
session_destroy();
?>

    <div class="mypadding" style="text-align: justify">

        <div class="h1" style="text-align: center">
            Тестування по пройденному матеріалу. Частина №2
        </div>
        <div class="h3 text-info" style="text-align: center">
            <b>
                Примітка!
            </b>
            <p>
                На кожне запитання лише один вірний варіант відповіді!
            </p>
        </div>

        <form action="tutorialTestPart1Backend.php" method="post">
            <div>
                <ol>
                    <li>
                        <label>
                             Що означає наступна конструкція: <code>===</code>?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q1" value="трикратне присвоєння">
                            трикратне присвоєння
                        </label>
                        <label class="radio">
                            <input type="radio" name="q1" value="переприсвоєння значення">
                            переприсвоєння значення
                        </label>
                        <label class="radio">
                            <input type="radio" name="q1" value="рівність">
                            рівність
                        </label>
                        <label class="radio">
                            <input type="radio" name="q1" value="ідентичність">
                            ідентичність
                        </label>
                        <label class="radio">
                            <input type="radio" name="q1" value="така конструкція не допустима для використання в PHP">
                            така конструкція не допустима для використання в PHP
                        </label>
                    </li>
                    <li>
                        <label>
                            Який оператор виконується в PHP за умови перерахування можливих варіантів значень?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q2"
                                   value='switch'>
                            switch
                        </label>
                        <label class="radio">
                            <input type="radio"
                                   name="q2" value='if'>
                            if
                        </label>
                        <label class="radio">
                            <input type="radio" name="q2"
                                   value='elseif'>
                            elseif
                        </label>
                    </li>
                    <li>
                        <label>
                            Для чого потрібна функція <code>ord</code>?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q3" value="Формує рядок з елементів масиву">
                            Формує рядок з елементів масиву
                        </label>
                        <label class="radio">
                            <input type="radio" name="q3" value='Повертає довжину рядка'>
                            Повертає довжину рядка
                        </label>
                        <label class="radio">
                            <input type="radio" name="q3" value='Повертає ASCII-код символу'>
                            Повертає ASCII-код символу
                        </label>
                    </li>
                    <li>
                        <label>
                            Функція strpos ...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q4" value='використовується для отримання частини рядка'>
                            використовується для отримання частини рядка
                        </label>
                        <label class="radio">
                            <input type="radio" name="q4" value='повертає позицію першого входження підрядка в рядок'>
                            повертає позицію першого входження підрядка в рядок
                        </label>
                        <label class="radio">
                            <input type="radio" name="q4" value='використовується для отримання всього рядка'>
                            використовується для отримання всього рядка
                        </label>
                        <label class="radio">
                            <input type="radio" name="q4"
                                   value='повертає позицію останнього входження підрядка в рядок'>
                            повертає позицію останнього входження підрядка в рядок
                        </label>
                    </li>
                    <li>
                        <label>
                            Правильне присвоєння значення елементу масиву - це ...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q5" value="1">
                            <code>
                                $arr = "html";
                            </code>
                        </label>
                        <label class="radio">
                            <input type="radio" name="q5" value='2'>
                            <code>
                                $arr += "html";
                            </code>
                        </label>
                        <label class="radio">
                            <input type="radio" name="q5" value='3'>
                            <code>
                                $arr[$arr] = "html";
                            </code>
                        </label>
                        <label class="radio">
                            <input type="radio" name="q5" value='4'>
                            <code>
                                $arr["html"] = "html";
                            </code>
                        </label>
                    </li>
                    <li>
                        <label>
                            Яка функція використовується для створення масиву?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q6" value="array">
                            array
                        </label>
                        <label class="radio">
                            <input type="radio" name="q6" value='arr'>
                            arr
                        </label>
                        <label class="radio">
                            <input type="radio" name="q6" value='$arr'>
                            $arr
                        </label>
                        <label class="radio">
                            <input type="radio" name="q6" value='create_array'>
                            create_array
                        </label>
                    </li>
                    <li>
                        <label>
                            Щоб вивести на екран масив можна використовувати функцію ...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q7" value="switch">
                            switch
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='for'>
                            for
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='foreach'>
                            foreach
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='output'>
                            output
                        </label>
                    </li>
                    <li>
                        <label>
                            Функція для видалення одного елементу масиву:
                        </label>

                        <label class="radio">
                            <input type="radio" name="q8" value="drop_element">
                            drop_element
                        </label>
                        <label class="radio">
                            <input type="radio" name="q8" value='unset'>
                            unset
                        </label>
                        <label class="radio">
                            <input type="radio" name="q8" value='delete'>
                            delete
                        </label>
                    </li>
                    <li>
                        <label>
                            Функція <code>key</code> :
                        </label>

                        <label class="radio">
                            <input type="radio" name="q9"
                                   value="Повертає індекс поточного елемента масиву">
                            Повертає індекс поточного елемента масиву
                        </label>
                        <label class="radio">
                            <input type="radio" name="q9"
                                   value='Встановлює внутрішній покажчик на перший елемент масиву'>
                            Встановлює внутрішній покажчик на перший елемент масиву
                        </label>
                        <label class="radio">
                            <input type="radio" name="q9"
                                   value='Шукає заданий елемент в масиві і повертає відповідний йому індекс'>
                            Шукає заданий елемент в масиві і повертає відповідний йому індекс
                        </label>
                        <label class="radio">
                            <input type="radio" name="q9" value='Шукає елемнет масиву за заданим ключем'>
                            Шукає елемнет масиву за заданим ключем
                        </label>
                    </li>
                    <li>
                        <label>
                            Що робить функція <code>explode</code>?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q10" value="формує рядок з масиву">
                            формує рядок з масиву
                        </label>
                        <label class="radio">
                            <input type="radio" name="q10" value='формує масив з рядка'>
                            формує масив з рядка
                        </label>
                    </li>
                </ol>

            </div>

            <div style="text-align: center">
                <button type="submit" class="btn btn-success">Дізнатися результати!</button>
            </div>
        </form>


    <div class="row-fluid" style="text-align: center">
        <div class="span12">
            <div class="row-fluid">

                <div class="span6 btn btn-link">
                    <a href="arrays.php">
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