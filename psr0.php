<?php include_once("header.php");
session_destroy();
?>

<div class="mypadding" style="text-align: justify">

    <div class="h1" style="text-align: center">
        PSR-0 - Стандарт автозавантаження
    </div>

    <div>
        Нижче представлені вимоги, обов'язкові до виконання в цілях забезпечення сумісності
        механізмів автозавантаження.
    </div>

    <div class="h2" style="text-align: center">
        Обов'язкові вимоги
    </div>
    <div>
        <ul>
            <li>
                Повністю визначений простір імен і ім'я класу повинні мати наступну структуру:
                <code>
                    \ &lt;Vendor Name&gt; \ (&lt;Namespace&gt; \) * &lt;Class Name&gt;
                </code> .
            </li>
            <li>
                Кожен простір імен повинен починатися з простору імен вищого рівня,
                що вказує на розробника коду ( <code>&lt;Vendor Name&gt;</code>).
            </li>
            <li>
                Кожне простір імен може включати в себе необмежену кількість вкладених підпросторів імен.
            </li>
            <li>
                Кожен роздільник простору імен при зверненні до файлової системи перетворюється в
                РОЗДІЛЬНИК_ІМЕН_КАТАЛОГІВ .
            </li>
            <li>
                Кожен символ _ ( «знак підкреслення») в ІМЕНІ_КЛАСУ перетворюється в РОЗДІЛЬНИК_ІМЕН_КАТАЛОГІВ .
                При цьому символ _ ( «знак підкреслення») не володіє ніяким особливим значенням в імені простору імен
                (і не зазнає перетворень).
            </li>
            <li>
                При зверненні до файлової системи повністю певний простір імен і ім'я класу доповнюються суфіксом
                <code>.php</code> .
            </li>
            <li>
                В імені розробника, імені простору імен і імені класу допускається використання буквених символів
                в будь-яких комбінаціях нижнього і верхнього регістрів.
            </li>
        </ul>

    </div>

    <div class="h2" style="text-align: center">
        Приклади
    </div>
    <div>
        <ul>
            <li>
                <code>
                    \ Doctrine \ Common \ IsolatedClassLoader => /path/to/project/lib/vendor/Doctrine/Common/
                    IsolatedClassLoader.php
                </code>
            </li>
            <li>
                <code>
                    \ Symfony \ Core \ Request => /path/to/project/lib/vendor/Symfony/Core/Request.php
                </code>
            </li>
            <li>
                <code>
                    \ Zend \ Acl => /path/to/project/lib/vendor/Zend/Acl.php
                </code>
            </li>
            <li>
                <code>
                    \ Zend \ Mail \ Message => /path/to/project/lib/vendor/Zend/Mail/Message.php
                </code>
            </li>
        </ul>
    </div>

    <div class="h2" style="text-align: center">
        Знак підкреслення в просторах імен і класів
    </div>
    <div>
        <ul>
            <li>
                <code>
                    \ namespace \ package \ Class_Name => /path/to/project/lib/vendor/namespace/package/Class/Name.php
                </code>
            </li>
            <li>
                <code>
                    \ namespace \ package_name \ Class_Name => /path/to/project/lib/vendor/namespace/package_name/Class
                    /Name.php
                </code>
            </li>
        </ul>
        Представлені тут стандарти повинні сприйматися як мінімально необхідний набір правил для забезпечення
        сумісності Автозавантажувач. Ви можете перевірити, наскільки ви прямуєте зазначених вимог,
        скориставшись наступним прикладом реалізації SplClassLoader (орієнтований на завантаження класів PHP 5.3).
    </div>

    <div class="h2" style="text-align: center">
        Приклад реалізації
    </div>
    <div>
        Нижче представлений приклад функції, яка ілюструє, як описані вище вимоги впливають на процес автозавантаження:
        <br><br>
        <code>
            &lt;?php<br>
            <br>
            function autoload($className)<br>
            {<br>
                $className = ltrim($className, '\\');<br>
                $fileName  = '';<br>
                $namespace = '';<br>
                if ($lastNsPos = strrpos($className, '\\')) {<br>
                    $namespace = substr($className, 0, $lastNsPos);<br>
                    $className = substr($className, $lastNsPos + 1);<br>
                    $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;<br>
                }<br>
                $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';<br>
                <br>
                require $fileName;<br>
            }<br>
            spl_autoload_register('autoload');<br>
        </code>
    </div>

    <div class="h2" style="text-align: center">
        Реалізація SplClassLoader
    </div>
    <div>
        Нижче представлений приклад реалізації SplClassLoader , здатного виконувати автозагрузку ваших класів
        за умови, що ви слідуєте описаним вище вимогам. На даний момент такий підхід є рекомендованим для
        завантаження класів PHP 5.3 за умови дотримання даного стандарту:
        <br>
        <a href="http://gist.github.com/221634">http://gist.github.com/221634</a>
    </div>

    <br>
</div>

<?php include_once("footer.php");