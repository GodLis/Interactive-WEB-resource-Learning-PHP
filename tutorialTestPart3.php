<?php include_once("header.php");
session_destroy();
?>

    <div class="mypadding" style="text-align: justify">

        <div class="h1" style="text-align: center">
            Тестування по пройденному матеріалу. Частина №3
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
                            Функція - це ...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q1" value="набір операторів, який ідентифікується певним класом">
                            набір операторів, який ідентифікується певним класом
                        </label>
                        <label class="radio">
                            <input type="radio" name="q1" value="набір операторів, які мають щось спільне">
                            набір операторів, які мають щось спільне
                        </label>
                        <label class="radio">
                            <input type="radio" name="q1"
                                   value="набір операторів, який ідентифікується певним ідентифікатором (ім'ям)">
                            набір операторів, який ідентифікується певним ідентифікатором (ім'ям)
                        </label>
                        <label class="radio">
                            <input type="radio" name="q1" value="математичний вираз">
                            математичний вираз
                        </label>
                    </li>
                    <li>
                        <label>
                            Для чого потрібен оператор <code>return</code>?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q2"
                                   value='щоб функція повертала якесь значення'>
                            щоб функція повертала якесь значення
                        </label>
                        <label class="radio">
                            <input type="radio"
                                   name="q2" value='щоб функція повертала саму себе'>
                            щоб функція повертала саму себе
                        </label>
                        <label class="radio">
                            <input type="radio" name="q2" value='даний оператор являється показчиком на функцію'>
                            даний оператор являється показчиком на функцію
                        </label>
                    </li>
                    <li>
                        <label>
                            Чи є обов'язковою властивість <code>action</code> для тегу <code>&lt;form></code>?
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
                            <input type="radio" name="q3" value='Не завжди'>
                            Не завжди
                        </label>
                    </li>
                    <li>
                        <label>
                            Яка конструкція в PHP перевіряє чи змінна не "пуста"?
                        </label>

                        <label class="radio">
                            <input type="radio" name="q4" value='not_null'>
                            not_null
                        </label>
                        <label class="radio">
                            <input type="radio" name="q4" value='!null'>
                            !null
                        </label>
                        <label class="radio">
                            <input type="radio" name="q4" value='empty'>
                            empty
                        </label>
                        <label class="radio">
                            <input type="radio" name="q4" value='!empty'>
                            !empty
                        </label>
                    </li>
                    <li>
                        <label>
                            Що робить наступна конструкція?
                        </label>
                        <code>
                            $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);
                        </code>

                        <label class="radio">
                            <input type="radio" name="q5" value="виконує фільтрування електронної почти">
                            виконує фільтрування електронної почти
                        </label>
                        <label class="radio">
                            <input type="radio" name="q5" value='виконує валідацію електронної почти'>
                            виконує валідацію електронної почти
                        </label>
                        <label class="radio">
                            <input type="radio" name="q5"
                                   value='видаляє всі лишні пробіли в рядку з адресом елктронної почти'>
                            видаляє всі лишні пробіли в рядку з адресом елктронної почти
                        </label>
                    </li>
                    <li>
                        <label>
                            Об'єкт - це ...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q6" value="сутність класу">
                            сутність класу
                        </label>
                        <label class="radio">
                            <input type="radio" name="q6" value='екземпляр класу'>
                            екземпляр класу
                        </label>
                        <label class="radio">
                            <input type="radio" name="q6" value='описувана конструкція в класі'>
                            описувана конструкція в класі
                        </label>
                        <label class="radio">
                            <input type="radio" name="q6"
                                   value='функціональна можливість розширення властивостей класу'>
                            функціональна можливість розширення властивостей класу
                        </label>
                    </li>
                    <li>
                        <label>
                            Основні принципи ООП - це ...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q7" value="Інкапсуляція, наслідування, абстракція">
                            Інкапсуляція, наслідування, абстракція
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='Інкапсулція, наслідування, поліморфізм'>
                            Інкапсулція, наслідування, поліморфізм
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='Насліування, спалкування, абстракція, інкапсулція'>
                            Насліування, спалкування, абстракція, інкапсулція
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='Наслідування, абстракція, інкапсулція, поліморфізм'>
                            Наслідування, абстракція, інкапсулція, поліморфізм
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='Їх дуже багато'>
                            Їх дуже багато
                        </label>
                        <label class="radio">
                            <input type="radio" name="q7" value='В PHP немає основних принципів ООП'>
                            В PHP немає основних принципів ООП
                        </label>
                    </li>
                    <li>
                        <label>
                            Ключові слова public, protected, private - це ...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q8" value="функції методів">
                            функції методів
                        </label>
                        <label class="radio">
                            <input type="radio" name="q8" value='функції класів'>
                            функції класів
                        </label>
                        <label class="radio">
                            <input type="radio" name="q8" value='області видимості'>
                            області видимості
                        </label>
                    </li>
                    <li>
                        <label>
                            Оголошення властивостей і методів класу статичними (static) дозволяє ...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q9"
                                   value="звертатися до них без створення екземпляра класу">
                            звертатися до них без створення екземпляра класу
                        </label>
                        <label class="radio">
                            <input type="radio" name="q9"
                                   value='Зменшує значення на одиницю, потім повертає значення'>
                            звертатися до них без символу $
                        </label>
                        <label class="radio">
                            <input type="radio" name="q9"
                                   value='Повертає поточне значення, після чого зменшує його на одиницю'>
                            звертатися до них з будь-якого місця коду
                        </label>
                    </li>
                    <li>
                        <label>
                            Магічний метод __invoke () викликається, коли ...
                        </label>

                        <label class="radio">
                            <input type="radio" name="q10" value="відбувається перевизначення типів">
                            відбувається перевизначення типів
                        </label>
                        <label class="radio">
                            <input type="radio" name="q10" value='коли потрібно прибрати "сміття"'>
                            коли потрібно прибрати "сміття"
                        </label>
                        <label class="radio">
                            <input type="radio" name="q10" value='відбувається перетворення класу в рядок'>
                            відбувається перетворення класу в рядок
                        </label>
                        <label class="radio">
                            <input type="radio" name="q10" value="об'єкт намагаються викликати як функцію">
                            об'єкт намагаються викликати як функцію
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
                        <a href="oop.php">
                            <button type="button">
                                <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                            </button>
                        </a>
                    </div>

                    <div class="span6 btn btn-link">
                        <a href="begineertest.php">
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