<?php include_once("header.php");
session_destroy();
?>

    <div class="mypadding" style="text-align: justify">

        <div class="h1" style="text-align: center">
            Отримуємо дані від елементів форми за допомогою PHP
        </div>
        <div>
            <p>
                Зараз ми з допомогою функцій PHP отримаємо дані, які буде вводити користувач в форму.
            </p>
            <p>
                Перше, що нам потрібно - це створити форму:
            </p>
            <pre>
                &lt;form action="check.php" method="post">

                &lt;p>Ім'я: &lt;input name="name" type="text">&lt;/p>

                &lt;p>Прізвище: &lt;input name="surname" type="text">&lt;/p>

                &lt;p>E-mail: &lt;input name="email" type="text">&lt;/p>

                &lt;p>Повідомлення: &lt;br />&lt;textarea name="message" cols="30" rows="5">&lt;/textarea>&lt;/p>

                &lt;p>&lt;input type='submit' value='Відправити'>&lt;/p>

                &lt;/form>
            </pre>
            <code style="text-align: center">
                <form action="check.php" method="post">

                <p>Ім'я: <input name="name" type="text"></p>

                <p>Прізвище: <input name="surname" type="text"></p>

                <p>E-mail: <input name="email" type="text"></p>

                <p>Повідомлення: <br /><textarea name="message" cols="30" rows="5"></textarea></p>

                <p><input type='submit' value='Відправити'></p>

                </form>
            </code>
            <p>
                Зверніть увагу на рядок <b>action = "check.php"</b> - це адреса
                обробника форми, сюди будуть відправлятися дані форми, після натискання кнопки Відправити.
                Також, на параметр <b>name</b> у полів форми, ми будемо використовувати ці імена при написанні коду.
                Передавати дані будемо методом - POST.
            </p>
            <p>
                1. Давайте почнемо.
                Створіть і відкрийте (через редактор) обробник code.php - спочатку,
                це просто порожня сторінка. Далі відкрийте позначку PHP - <code>&lt;?php</code>.
            </p>
            <p>
                2. Нам потрібно перевірити, чи була відправлена форма, для цього ми будемо використовувати
                глобальну змінну <code>$_SERVER</code> і перевіряти <code>REQUEST_METHOD</code>.
            </p>
            <code>
                &lt;?php<br>
                if($_SERVER['REQUEST_METHOD'] == 'POST') {<br>
                    // наш код<br>
                }<br>
                ?>
            </code>
            <p>
                3. Далі, якщо форма відправлена, ми можемо отримати дані від поля "Ім'я",
                для цього, якій-небуть змінній присвоюємо отримане значення від цього поля, наприклад:
            </p>
            <code>
                <\&lt;?php<br>
                $name = $_POST['name'];<br>
                ?>
            </code>
            <p>
                <code>$_POST</code> - змінна, в якій зберігаються дані, якщо форма була відправлена ​​методом POST.
            </p>
            <p>
                <code>$_POST['name']</code> - отримуємо дані від поля <b>name</b>.
            </p>
            <p>
                4. Теж саме робимо і для інших наших полів:
            </p>
            <code>
                &lt;?php<br>
                $name = $_POST['name'];<br>
                <br>
                $surname = $_POST['surname'];<br>
                $email = $_POST['email'];<br>
                $message = $_POST['message'];<br>
                ?>
            </code>
            <p>
                5. Дані ми отримали, тепер ми можемо їх вивести, для цього в сторінку обробника дописуємо код:
            </p>
            <code>
                &lt;?php<br>
                $name = $_POST['name'];<br>
                <br>
                $surname = $_POST['surname'];<br>
                $email = $_POST['email'];<br>
                $message = $_POST['message'];<br>
                <br>
                echo $name."&lt;br />".$surname."&lt;br />".$email."&lt;br />".$message."&lt;br />";<br>
                ?>
            </code>
            <p class="text-warning">
                Не рекомендується просто так, без перевірки, виводити введені користувачем дані.
            </p>
            <p class="text-warning">
                Пропускайте змінні хоча б через функцію htmlspecialchars .
            </p>
            <p>
                Ось так, можна отримувати дані введені в елементи форми.
            </p>
            <ul>
                <li>
                    <a href="http://php.net/manual/ru/reserved.variables.post.php">Змінна $ _POST</a>
                </li>
                <li>
                    <a href="http://php.net/manual/ru/reserved.variables.server.php">Змінна $ _SERVER</a>
                </li>
            </ul>
        </div>

        <div class="h1" style="text-align: center">
            Перевірка даних форми за допомогою PHP
        </div>
        <div>
            <p>
                У попередньому уроці, ми отримували дані від форми , а тепер ми будемо перевіряти на коректність даних,
                що вводяться, так як якщо створити форму без такої перевірки, то "погані" користувачі можуть нашкодити
                вашому сайту.
            </p>
            <ol>
                <li>
                    <p>
                        Давайте використаємо ту частину коду, де ми отримали дані з форми:
                    </p>
                    <code>
                        &lt;?php<br>
                        $name = $_POST['name'];<br>
                        $surname = $_POST['surname'];<br>
                        $email = $_POST['email'];<br>
                        $message = $_POST['message'];<br>
                        ?>
                    </code>
                </li>
                <li>
                    <p>
                        Тепер нам потрібно перевірити передані нам дані. Щоб не писати один і той же код, давайте
                        створимо декілька функцій для перевірки.
                    </p>
                    <p>
                        Спочатку створимо функцію для очищення даних від HTML і PHP-тегів:
                    </p>
                    <code>
                        &lt;?php<br>
                        function clean($value = "") {<br>
                            $value = trim($value);<br>
                            $value = stripslashes($value);<br>
                            $value = strip_tags($value);<br>
                            $value = htmlspecialchars($value);<br>
                        <br>
                            return $value;<br>
                        }<br>
                        ?>
                    </code>
                    <p>
                        Тут, ми використовували функцію <code>trim</code> для видалення пробілів з початку
                        і кінця рядка.
                    </p>
                    <p>
                        Функція <code>stripslashes</code> потрібна для видалення екранованих символів
                        ( "Ваc звати O \ 'reilly?" => "Вас звати O'reilly?").
                    </p>
                    <p>
                        Функція <code>strip_tags</code> потрібна для видалення HTML і PHP-тегів.
                        Остання функція - <code>htmlspecialchars</code> перетворює
                        спеціальні символи в HTML-сутності ( '&' перетворюється в '& amp;' і т.д.)
                    </p>
                    <p>
                        Далі, створимо функцію для перевірки довжини рядка:
                    </p>
                    <code>
                        &lt;?php<br>
                        function check_length($value = "", $min, $max) {<br>
                            $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);<br>
                            return !$result;<br>
                        }<br>
                        ?>
                    </code>
                    <p>
                        Тут, ми використовували функцію <code>mb_strlen</code> для перевірки довжини рядка.
                        Перший параметр, <code>$value</code> - це рядок, який потрібно перевірити,
                        другий параметр <code>$min</code> - мінімально допустима довжина рядка,
                        третій параметр <code>$max</code> - максимально допустима довжина.
                        Якщо довжина рядка буде задовільна, то функція поверне TRUE інакше FALSE.
                    </p>
                </li>
                <li>
                    <p>
                        Нам потрібно "прогнати" змінні через ці функції:
                    </p>
                    <code>
                        &lt;?php<br>
                        $name = clean($name);<br>
                        $surname = clean($surname);<br>
                        $email = clean($email);<br>
                        $message = clean($message);<br>
                        <br>
                        if(!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {<br>
                            ...<br>
                        }<br>
                        ?>
                    </code>
                    <p>
                        Якщо значення не порожні (перевірили за допомогою функції <code>empty</code>),
                        то можна продовжувати перевірку далі:
                    </p>
                    <code>
                        &lt;?php<br>
                        if(!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {<br>
                            $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);<br>
                            <br>
                            if(check_length($name, 2, 25) && check_length($surname, 2, 50) &&
                        check_length($message, 2, 1000) && $email_validate) {<br>
                                ...<br>
                            }<br>
                        }<br>
                        ?>
                    </code>
                    <p>
                        Якщо довжина значень змінних нас влаштовує, то можемо продовжувати.
                        Також, ми використовували функцію <code>filter_var</code> з параметром
                        <code>FILTER_VALIDATE_EMAIL</code> для валідації електронної адреси.
                    </p>
                </li>
                <li>
                    <p>
                        Давайте додамо повідомлення про успішність операції, якщо дані пройшли всі перевірки.
                    </p>
                    <code>
                        &lt;?php<br>
                        if(!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {<br>
                            $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);<br>
                        <br>
                            if(check_length($name, 2, 25) && check_length($surname, 2, 50) &&
                        check_length($message, 2, 1000) && $email_validate) {<br>
                                echo "Дякуємо за повідомлення!";<br>
                            }<br>
                        }<br>
                        ?>
                    </code>
                </li>
                <li>
                    <p>
                        В кінці нам потрібно додати повідомлення, яке інформує про те, що дані не пройшли перевірку.
                    </p>
                    <code>
                        &lt;?php<br>
                        if(!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {<br>
                            $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);<br>
                        <br>
                            if(check_length($name, 2, 25) && check_length($surname, 2, 50) &&
                        check_length($message, 2, 1000) && $email_validate) {<br>
                                echo "Дякуємо за повідомлення!";<br>
                            } else { // додали повідомлення<br>
                                echo "Введені дані не коректні";<br>
                            }<br>
                        } else { // додали повідомлення<br>
                            echo "Заповінть пусті поля";<br>
                        }<br>
                        ?>
                    </code>
                </li>
            </ol>

            <p>
                Якщо все склалося успішно, то ми побачимо повідомлення <i>"Дякуємо за повідомлення!"</i>
            </p>
            <p class="text-warning">
                Ця перевірка не ідеальна, тому що не вказує на поля, які заповнені неправильно,
                також повідомлення про помилки дуже загальні.
            </p>

        </div>

        <div class="row-fluid" style="text-align: center">
            <div class="span12">
                <div class="row-fluid">

                    <div class="span6 btn btn-link">
                        <a href="functions.php">
                            <button type="button">
                                <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                            </button>
                        </a>
                    </div>

                    <div class="span6 btn btn-link">
                        <a href="oop.php">
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