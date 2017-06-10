<?php include_once("header.php");
session_destroy();
?>

    <div class="mypadding" style="text-align: justify">

        <div class="h1" style="text-align: center">
            PSR-4 - Покращена автозагрузка
        </div>
        <div>
            <p>
                Слова «НЕОБХІДНО» / «ПОВИННО» ( "MUST"), «Неприпустимо» ( "MUST NOT"), «ПОТРІБНО» ( "REQUIRED"),
                «ПОТРІБНО» ( "SHALL"), «не дозволяє» ( "SHALL NOT "),« СЛІД »(" SHOULD "),« НЕ СЛІД »(" SHOULD NOT "),
                « РЕКОМЕНДУЄТЬСЯ »(" RECOMMENDED "),« МОЖЕ »/« МОЖЛИВО »(" MAY ") і« НЕОБОВ'ЯЗКОВО »(" OPTIONAL ")
                в цьому документі слід розуміти так, як це описано в
                <a href="http://www.ietf.org/rfc/rfc2119.txt">RFC 2119</a> (і його
                <a href="http://rfc.com.ru/rfc2119.htm">перекладі</a>).
            </p>

            <div class="h2" style="text-align: center">
                1. Огляд
            </div>
            <div>
                <p>
                    Даний стандарт описує специфікацію автозавантаження класів на основі шляхів до файлів. Він повністю
                    сумісний (і може використовуватися як доповнення) з будь-якої іншої специфікацією автозавантаження,
                    включаючи <a href="psr0.php">PSR-0</a> . Даний стандарт також описує правила розміщення файлів,
                    призначених для автозавантаження.
                </p>
            </div>

            <div class="h2" style="text-align: center">
                2. Специфікація
            </div>
            <div>
                <ul>
                    <li>
                        Тут під «класом» слід розуміти також інтерфейси (<code>interface</code>), домішки (
                        <code>trait</code>)
                        і інші подібні конструкції.
                    </li>
                    <li>
                        Повністю певний ім'я класу повинно мати наступну структуру:
                        <code>\ &lt;ПространствоІмён> (\ &lt;ПодпространствоІмён>) * \ &lt;ІмяКласса></code>
                    </li>
                    <li>
                        Повністю певний ім'я класу ПОВИННО починатися з простору імен вищого рівня, що вказує на
                        розробника коду ( «ім'я виробника»).
                    </li>
                    <li>
                        Повністю певний ім'я класу МОЖЕ включати в себе одне або більше підпросторів імен.
                    </li>
                    <li>
                        Повністю певний ім'я класу ПОВИННО закінчуватися ім'ям класу.
                    </li>
                    <li>
                        Символ <code>_</code> ( «знак підкреслення») не володіє ніяким особливим значенням в повністю
                        певному імені класу.
                    </li>
                    <li>
                        У повністю певному імені класу МОЖНА використовувати літерні символи в будь-яких комбінаціях
                        нижнього і верхнього регістрів.
                    </li>
                    <li>
                        Всі імена класів ПОВИННІ бути використані з дотриманням регістрочувствітельності.
                    </li>
                </ul>
                <p>
                    Під час завантаження файлу, відповідного повністю певного імені класу, використовуються наступні
                    правила:
                </p>
                <ul>
                    <li>
                        Послідовність з одного і більше просторів і підпросторів імен (не включаючи провідний
                        роздільник просторів імен) в повністю певному імені класу (т.зв. «префікс просторів імен»)
                        повинна відповідати хоча б одному «базовому каталогу».
                    </li>
                    <li>
                        Послідовність підпросторів імен після «префікса простору імен» відповідає подкаталогу в
                        «базовому каталозі», при цьому роздільники просторів імен <code>\</code> відповідають
                        розділювачам каталогів <code>/</code>. Ім'я підкаталогу і ім'я підпростору імен ПОВИННІ
                        збігатися аж до регістру символів.
                    </li>
                    <li>
                        Ім'я класу, яким завершує собою повністю певне ім'я, відповідає імені файлу з розширенням
                        <code>.php</code>. Файл та ім'я класу ПОВИННІ збігатися аж до регістру символів.
                    </li>
                </ul>
                <p>
                    У реалізації Автозавантажувача НЕПРИПУСТИМО породжувати виключення, помилкові ситуації будь-якого
                    рівня і НЕ СЛІД повертати яке б то не було значення.
                </p>
            </div>

            <div class="h2" style="text-align: center">
                3. Приклади
            </div>
            <div>
                <p>
                    У таблиці нижче представлені приклади відповідностей повністю певного імені класу, префікса
                    простору імен, базового каталогу і підсумкового шляху до файлу.
                </p>
                <table>
                    <tr>
                        <th>
                            Повністю певний ім'я класу
                        </th>
                        <th>
                            Префікс простору імен
                        </th>
                        <th>
                            Базовий каталог
                        </th>
                        <th>
                            Підсумковий шлях до файлу
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <code>\ Acme \ Log \ Writer \ File_Writer</code>
                        </td>
                        <td>
                            <code>Acme \ Log \ Writer</code>
                        </td>
                        <td>
                            <code>./acme-log-writer/lib/</code>
                        </td>
                        <td>
                            <code>./acme-log-writer/lib/File_Writer.php</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>\ Aura \ Web \ Response \ Status</code>
                        </td>
                        <td>
                            <code>Aura \ Web</code>
                        </td>
                        <td>
                            <code>/ Path / to / aura-web / src /</code>
                        </td>
                        <td>
                            <code>/path/to/aura-web/src/Response/Status.php</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>\ Symfony \ Core \ Request</code>
                        </td>
                        <td>
                            <code>Symfony \ Core</code>
                        </td>
                        <td>
                            <code>./vendor/Symfony/Core/</code>
                        </td>
                        <td>
                            <code>./vendor/Symfony/Core/Request.php</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>\ Zend \ Acl</code>
                        </td>
                        <td>
                            <code>Zend</code>
                        </td>
                        <td>
                            <code>/ Usr / includes / Zend /</code>
                        </td>
                        <td>
                            <code>/usr/includes/Zend/Acl.php</code>
                        </td>
                    </tr>
                </table>
                <p>
                    Приклади реалізації Автозавантажувач, відповідних даної специфікації, представлені в
                    <a href="https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md"
                    >файлі з прикладами</a>. Приклади реалізації НЕПРИПУСТИМО розглядати як частину специфікації, тому
                    що вони МОЖУТЬ змінитися в будь-який час.
                </p>
            </div>
        </div>


        <div class="row-fluid" style="text-align: center">
            <div class="span12">
                <div class="row-fluid">

                    <div class="span6 btn btn-link">
                        <a href="psr2.php">
                            <button type="button">
                                <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                            </button>
                        </a>
                    </div>

                    <div class="span6 btn btn-link">
                        <a href="pearCodingSrandards.php">
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