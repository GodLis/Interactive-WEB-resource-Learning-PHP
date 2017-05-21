<?php include_once("header.php");
session_destroy();
?>

    <div class="mypadding" style="text-align: justify">

        <div class="h1" style="text-align: center">
            Тестування по пройденному матеріалу. Частина №1
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
            <fieldset>
                <ol>
                    <li>
                        <label>
                            PHP - це...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q1" value="каскадні таблиці стилів">
                            каскадні таблиці стилів
                        </label>
                        <label class="radio">
                            <input type="radio" name="q1" value="гіпертекстовий препроцесор">
                            гіпертекстовий препроцесор
                        </label>
                        <label class="radio">
                            <input type="radio" name="q1" value="мова розмітки гіпертексту">
                            мова розмітки гіпертексту
                        </label>
                        <label class="radio">
                            <input type="radio" name="q1" value="низькорівнева мова програмування">
                            низькорівнева мова програмування
                        </label>
                        <label class="radio">
                            <input type="radio" name="q1" value="препроцесорна мова, що виконується на стороні клієнта">
                            препроцесорна мова, що виконується на стороні клієнта
                        </label>
                    </li>
                    <li>
                        <label>
                            Виконання коду обробником PHP відбувається...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q2"
                                   value='після відкриваючого тегу &lt;?php і продовжує виконання до того моменту,
                            поки не зустріне закриваючий тег'>
                            після відкриваючого тегу &lt;?php і продовжує виконання до того моменту,
                            поки не зустріне закриваючий тег
                        </label>
                        <label class="radio">
                            <input type="radio"
                                   name="q2" value='після закриваючого тегу &lt;?php і продовжує виконання
                                   до того моменту, поки не зустріне закриваючий тег'>
                            після закриваючого тегу &lt;?php і продовжує виконання до того моменту,
                            поки не зустріне закриваючий тег
                        </label>
                        <label class="radio">
                            <input type="radio" name="q2"
                                   value='після відкриваючого тегу ?> і продовжує виконання до того моменту,
                            поки не зустріне закриваючий тег'>
                            після відкриваючого тегу ?> і продовжує виконання до того моменту,
                            поки не зустріне закриваючий тег
                        </label>
                        <label class="radio">
                            <input type="radio" name="q2"
                               value="після закриваючого тегу ?> і продовжує виконання до того моменту,
                                поки не зустріне закриваючий тег">
                                після закриваючого тегу ?> і продовжує виконання до того моменту,
                                поки не зустріне закриваючий тег
                        </label>
                        <label class="radio">
                            <input type="radio" name="q2" value="будь-де при зустрічі виконуваних конструкцій PHP">
                            будь-де при зустрічі виконуваних конструкцій PHP
                        </label>
                    </li>
                    <li>
                        <label>
                            Чи підтримує спільнота PHP-розробників стратегію OpenSource?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q3" value="Так">
                            Так
                        </label>
                        <label class="radio">
                            <input type="radio" name="q3" value='Ні'>
                            Ні
                        </label>
                        <label class="radio">
                            <input type="radio" name="q3" value='Частково'>
                            Частково
                        </label>
                    </li>
                    <li>
                        <label>
                            Синтаксис змінної складається з ...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q4" value='знаку амперсанта - & і "вільного" ідентифікатора'>
                            знаку амперсанта - & і "вільного" ідентифікатора
                        </label>
                        <label class="radio">
                            <input type="radio" name="q4" value='знаку долара - $ і якогось числа'>
                            знаку долара - $ і якогось числа
                        </label>
                        <label class="radio">
                            <input type="radio" name="q4" value='знаку амперсанта - & і букви'>
                            знаку амперсанта - & і букви
                        </label>
                        <label class="radio">
                            <input type="radio" name="q4" value='знаку долара - $ і "вільного" ідентифікатора'>
                            знаку долара - $ і "вільного" ідентифікатора
                        </label>
                    </li>
                    <li>
                        <label>
                            Яку функцію використовують для опису констант?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q5" value="const">
                            const
                        </label>
                        <label class="radio">
                            <input type="radio" name="q5" value='define'>
                            define
                        </label>
                        <label class="radio">
                            <input type="radio" name="q5" value='const(int)'>
                            const(int)
                        </label>
                        <label class="radio">
                            <input type="radio" name="q5" value='static'>
                            static
                        </label>
                        <label class="radio">
                            <input type="radio" name="q5" value='variable'>
                            variable
                        </label>
                    </li>
                    <li>
                        <label>
                            Який тип даних не дозволений в PHP?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q6" value="array">
                            array
                        </label>
                        <label class="radio">
                            <input type="radio" name="q6" value='object'>
                            object
                        </label>
                        <label class="radio">
                            <input type="radio" name="q6" value='string'>
                            string
                        </label>
                        <label class="radio">
                            <input type="radio" name="q6" value='char'>
                            char
                        </label>
                        <label class="radio">
                            <input type="radio" name="q6" value='NULL'>
                            NULL
                        </label>
                    </li>
                    <li>
                        <label>
                            Який тип даних не дозволений в PHP?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q7" value="string">
                            string
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='integer'>
                            integer
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='float'>
                            float
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='char'>
                            char
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='array'>
                            array
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='object'>
                            object
                        </label>
                    </li>
                    <li>
                        <label>
                            Виберіть омбіновані математичні оператори:
                        </label>

                        <label class="radio">
                            <input type="radio" name="q8" value="+=, -=">
                            +=, -=
                        </label>
                        <label class="radio">
                            <input type="radio" name="q8" value='=+, =-'>
                            =+, =-
                        </label>
                        <label class="radio">
                            <input type="radio" name="q8" value='>=, =-'>
                            >=, =-
                        </label>
                    </li>
                    <li>
                        <label>
                            Що робить постінкремент?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q9"
                                   value="Повертає поточне значення, після чого збільшує його на одиницю">
                            Повертає поточне значення, після чого збільшує його на одиницю
                        </label>
                        <label class="radio">
                            <input type="radio" name="q9"
                                   value='Зменшує значення на одиницю, потім повертає значення'>
                            Зменшує значення на одиницю, потім повертає значення
                        </label>
                        <label class="radio">
                            <input type="radio" name="q9"
                                   value='Повертає поточне значення, після чого зменшує його на одиницю'>
                            Повертає поточне значення, після чого зменшує його на одиницю
                        </label>
                        <label class="radio">
                            <input type="radio" name="q9" value='Збільшує значення на одиницю, потім повертає значення'>
                            Збільшує значення на одиницю, потім повертає значення
                        </label>
                    </li>
                    <li>
                        <label>
                            Скільки основних математичних операторів в PHP?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q10" value="4">
                            4
                        </label>
                        <label class="radio">
                            <input type="radio" name="q10" value='8'>
                            8
                        </label>
                        <label class="radio">
                            <input type="radio" name="q10" value='2'>
                            2
                        </label>
                        <label class="radio">
                            <input type="radio" name="q10" value='24'>
                            24
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
                    <a href="">
                        <button type="button">
                            <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                        </button>
                    </a>
                </div>

                <div class="span6 btn btn-link">
                    <a href="">
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