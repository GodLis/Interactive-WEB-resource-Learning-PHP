<?php include_once("header.php");
session_destroy();
?>

    <div class="mypadding" style="text-align: justify">

        <div class="h1" style="text-align: center">
            Функції в PHP, їх синтаксис, створення і виклик
        </div>
        <div>
            <p>
                Функція - це набір операторів, який ідентифікується певним ідентифікатором (ім'ям). Найпростіше
                розібратися що ж таке функція, це подивитися на приклад:
            </p>
            <code>
                &lt;?php<br>
                <b>function</b> square($num)<br>
                {<br>
                    $square = $num * $num;<br>
                <b>echo</b> $square;<br>
                }<br>
                <br>
                square(7);<br>
                <br>
                ?>
            </code>
            <p>
                Це проста функція, яка розраховує квадрат числа.
            </p>
            <p>
                Перш за все, ми створюємо функцію прописуючи ключове слово <code>function</code>,
                після якого ми можемо поставити будь-яке ім'я для нашої функції,
                в нашому випадку це ім'я - <code>square</code>. У дужках ми передаємо аргумент функції
                (те, що нам потрібно порахувати), в нашому випадку це змінна - <code>$num</code>
                (яке-небудь число).
            </p>
            <p>
                Далі, в тілі функції, ми прописуємо все, що ми хочемо, щоб функція виконувала.
                У нашому випадку, функція задає змінної <code>$square</code> квадрат числа,
                яке знаходиться в <code>$num</code>, після ми просто виводимо результат функції
                <code>$square</code>,
                за допомогою оператора <code>echo</code>.
            </p>
            <p>
                Після цих дій, ми можемо в будь-якій частині нашої сторінки викликати створену функцію ось так:
                <code>square(какое-нибудь число)</code>;
            </p>
            <p>
                Формальний синтаксис опису функції:
            </p>
            <pre>
                <b>function name</b>([argument_list...])
                    {
                        [statemetns;]
                        [<b>return</b> value;]
                    }
            </pre>
        </div>

        <div class="h1" style="text-align: center">
            Як в PHP передати дані в функцію
        </div>
        <div>
            <p>
                Функція може використовувати дані, які передані їй при виклику.
                Для цієї мети використовується список аргументів, які є переліком цих аргументів через кому.
            </p>
            <p>
                Давайте застосуємо ці знання на практиці. Припустимо, нам потрібно порахувати значення
                деякою функції <i>z = cos (x) + sin (y) + 2</i>.
                Для підрахунку значення <i>z</i> , ми можемо написати функцію і передати
                два аргументи: <i>x</i> і <i>y</i> . Код:
            </p>
            <code>
                &lt;?php<br>
                function myfunc($x,$y) {<br>
                    $res = cos($x) + sin($y) + 2;<br>
                    return $res;<br>
                }<br>
                <br>
                $x = 5;<br>
                $y = 7;<br>
                <br>
                $z = myfunc($x,$y);<br>
                <br>
                echo $z;<br>
                ?>
            </code>
            <p>
                Оператор <code>return</code> потрібен для того, щоб функція повертала якесь значення.
                Тобто в нашому разі ми порахували потрібне нам вираз,
                занесли його в змінну <code>$res</code> і повернули через оператор <code>return</code>.
                Якби ми цього не зробили, то змінна <code>$z</code> була б порожня.
            </p>
            <p>
                В результаті виконання даної функції, ми отримаємо такий результат:
            </p>
            <blockquote>
                2.940648784182
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Значення за замовчуванням для аргументів функції PHP
        </div>
        <div>
            <p>
                Давайте подивимося на наступну функцію:
            </p>
            <code>
                &lt;?php<br>
                function hello($text) {<br>
                    echo $text;<br>
                }<br>
                <br>
                hello('Привет');<br>
                ?>
            </code>
            <p>
                Ця функція буде виводить будь-який текст, який буде переданий їй як аргумент.
                Результат виконання функції з аргументом <i>"Привіт"</i> :
            </p>
            <blockquote>
                Привет
            </blockquote>
            <p>
                Що буде, якщо не передати значення для аргументу, тобто, що буде якщо викликати просто
                <code>hello()</code>:
            </p>
            <blockquote>
                Warning: Missing argument 1 for hello(), called in...
            </blockquote>
            <p>
                Як бачите, ми отримаємо повідомлення про помилку. Щоб цього не було, можна задати значення
                за умовчанням для аргументів функції. Ці значення будуть підставлятися, якщо не
                були передані дані для конкретного аргументу.
            </p>
            <p>
                Значення за замовчуванням задаються так:
            </p>
            <code>
                &lt;?php<br>
                function hello($text = "Привет") {<br>
                    echo $text;<br>
                }<br>
                <br>
                hello('Добрый день');<br>
                <br>
                echo "&lt;br/>";<br>
                <br>
                hello();<br>
                ?>
            </code>
            <p>
                Результат виконання цього коду:
            </p>
            <blockquote>
                Добрый день<br>
                Привет
            </blockquote>
            <p>
                Перший виклик функції <code>hello('Добрый день')</code> виведе: <i>"Добрий день"</i>,
                другий виклик функції <code>hello()</code> без передачі значення виведе: <i>"Привіт"</i>
                (тому що, ми вказали значення за замовчуванням).
            </p>
        </div>

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
                        <a href="phpAndHTML.php">
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