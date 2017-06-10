<?php include_once("header.php");
session_destroy();
?>

    <div class="mypadding" style="text-align: justify">

        <div class="h1" style="text-align: center">
            Введення в ОПП
        </div>
        <div>
            <p>
                ООП має вже більш ніж сорокарічну історію, але, незважаючи на це,
                до цих пір не існує чіткого загальноприйнятого визначення даної технології.
                Основні принципи, закладені в перші об'єктні мови і системи, зазнали істотної зміни
                (або спотворення) і доповнення при численних реалізаціях наступних часів.
            </p>
            <div class="h2" style="text-align: center">
                Основні терміни і поняття
            </div>
            <p>
                ООП розшифровується як об'єктно-орієнтоване програмування. Це парадигма (сукупність ідей і понять)
                програмування, в якій основними концепціями є поняття об'єктів і класів.
            </p>
            <p>
                <b>Абстракція</b> - абстрагування, це спосіб опису загальних характеристик об'єкта.
            </p>
            <p>
                <b>Інкапсуляція</b> - це властивість системи, що дозволяє об'єднати дані і методи, що працюють з
                ними, в класі, і приховати деталі реалізації від користувача.
            </p>
            <p>
                <b>Спадкування</b> - властивість системи, що дозволяє описати новий клас на основі вже існуючого з
                частково або повністю запозичує функціональністю. Клас, від якого виробляється
                спадкування, називається базовим, батьківським. Новий клас - нащадком або дочірнім класом.
            </p>
            <p>
                <b>Поліморфізм</b> - це властивість системи використовувати об'єкти з однаковим інтерфейсом без
                інформації про тип і внутрішню структуру об'єкта.
            </p>
            <p>
                <b>Клас</b> є описуваної мовою термінології вихідного коду моделлю ще не існуючої сутності (об'єкта).
                Фактично він описує пристрій об'єкта, будучи свого роду кресленням.
            </p>
            <p>
                <b>Об'єкт</b> - це екземпляр класу, сукупність даних (властивостей) і функцій (методів)
                для обробки даних.
            </p>
            <p>
                Це все, сухі визначення, але їх потрібно знати (або про них потрібно знати), щоб було хоча б
                якесь розуміння про ООП.
            </p>

        </div>

        <div class="h1" style="text-align: center">
            Класи
        </div>
        <div>
            <p>
                Клас є одним з типів даних. Кожне визначення класу починається з ключового слова class,
                потім слідує ім'я класу, пара
                фігурних дужок, усередині яких можна визначати властивості і методи цього класу.
            </p>
            <p>
                Іменем класу може бути будь-яке слово, за умови, що воно не входить в список зарезервованих
                слів PHP, починається з
                букви або символу підкреслення і за яким слідує будь-яка кількість букв, цифр або символів підкреслення.
            </p>
            <code>
                &lt;?php<br>
                class FirstClass<br>
                {<br>
                ...<br>
                }<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Об'єкти
        </div>
        <div>
            <p>
                Для створення екземпляра (об'єкта) класу використовується директива new.
            </p>
            <p>
                Приклад створення об'єкта:
            </p>
            <code>
                &lt;?php<br>
                $instance = new FirstClass();<br>
                <br>
                // Це можна зробити і за допомогою змінної<br>
                $className = 'FirstClass';<br>
                $instance = new $className(); // FirstClass()<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Конструктори\деструктори
        </div>
        <div>
            <p>
                PHP дозволяє оголошувати методи-конструктори. Класи, в яких оголошено метод-конструктор,
                будуть викликати цей метод при кожному створенні нового об'єкта.
            </p>
            <p>
                Синтаксис:
            </p>
            <pre>
                function __construct(mixed $args = "") { // можно передавати параметри
                   ...
                }
            </pre>
            <p>
                Використання:
            </p>
            <code>
                &lt;?php<br>
                class FirstClass<br>
                {<br>
                    function __construct($hello = "hi") {<br>
                        return $hello;<br>
                    }<br>
                }<br>
                <br>
                $instance = new FirstClass(); // поврене рядок "hi"<br>
                $instance = new FirstClass("hello"); // поверне рядок "hello"<br>
                ?>
            </code>
            <p>
                Також, в PHP представлені <b>деструктори</b>. Деструктор буде викликаний при звільненні всіх посилань
                на певний об'єкт або при завершенні скрипта (порядок виконання деструкторов не гарантовано).
            </p>
            <p>
                Приклад:
            </p>
            <code>
                &lt;?php<br>
                class FirstClass<br>
                {<br>
                    function __destruct() {<br>
                        echo "Виклик деструктора";<br>
                    }<br>
                }<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Властивості і функції
        </div>
        <div>
            <p>
                Змінні в класі, називаються "властивостями". Також їх називають, використовуючи інші терміни,
                такі як "атрибути" або "поля". Вони визначаються за допомогою
                ключових слів public, protected, або private, дотримуючись правил правильного опису змінних.
            </p>
            <p>
                Приклад визначення властивостей.
            </p>
            <code>
                &lt;?php<br>
                class FirstClass {<br>
                    public $var1 = "hello";<br>
                    private $var2 = 25;<br>
                    protected $var3 = ["one", "two"];<br>
                }<br>
                ?>
            </code>
            <p>
                Ключові слова public, protected, private - це область видимості.
            </p>
            <p>
                Функція в класах називаються "методом". Процес опису методу відбувається як при описі
                звичайної функції. Наприклад:
            </p>
            <code>
                &lt;?php<br>
                class FirstClass {<br>
                <br>
                    public function firstFunction() {<br>
                        $a = 25;<br>
                        $b = 35;<br>
                        return $a + $b;<br>
                    }<br>
                }<br>
                ?>
            </code>
            <p>
                В межах методів класу доступ до властивостей може бути отриманий за допомогою -> (об'єктного оператора)
                і покажчика $this, наприклад <code>$this-> $var1</code> (де <code>$var1</code> - ім'я змінної)
                або <code>$this-> firstFunction ()</code>
                (де <code>firstFunction</code> - ім'я методу).
            </p>
            <p>
                Приклад:
            </p>
            <code>
                &lt;?php<br>
                class FirstClass {<br>
                    private $var1;<br>
                <br>
                    public function setVar1($value) {<br>
                        $this->var1 = $value;<br>
                    }<br>
                }<br>
                <br>
                $instance =  new FirstClass();<br>
                <br>
                $instance->setVar1("orange"); // встановимо значення "orange" для змінної var1<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Константи
        </div>
        <div>
            <p>
                Відмінність змінних і констант полягає в тому, що при оголошенні останніх або при зверненні до них
                не використовується символ $.
            </p>
            <p class="text-warning">
                Починаючи з версії PHP 5.6, ви можете використовувати математичні операції для визначення констант.
            </p>
            <p>
                Оголошення та використання константи:
            </p>
            <code>
                &lt;?php<br>
                class FirstClass {<br>
                    const CONSTANT = "value";<br>
                    const CONSTANT2  = 80 * 2 + 40; // >= PHP 5.6<br>
                }<br>
                <br>
                // доступ до константи<br>
                echo FirstClass:: CONSTANT;<br>
                <br>
                // через метод в класі<br>
                class FirstClass {<br>
                    const CONSTANT = "orange";<br>
                <br>
                    function myFunc() {<br>
                        echo self::CONSTANT;<br>
                    }<br>
                }<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Область видимості
        </div>
        <div>
            <p>
                Як зазначено раніше ми могли використовувати ключове слово public перед змінною або класом.
                Слова public, private, protected визначають область видимості змінної або класу.
            </p>
            <p>
                <b>public</b> - елементи доступні всім
            </p>
            <p>
                <b>private</b> - елементи не доступні ззовні (за межами класу)
            </p>
            <p>
                <b>protected</b> - елементи доступні тільки класу і всім його нащадкам (буде розглянуто)
            </p>
            <p>
                Приклад:
            </p>
            <code>
                &lt;?php<br>
                class FirstClass {<br>
                    public $var1 = "public";<br>
                    private $var2 = "private";<br>
                    protected $var3 = "protected";<br>
                <br>
                    public function func1() {<br>
                        echo $this->var1;<br>
                        echo $this->var2;<br>
                        echo $this->var3;<br>
                    }<br>
                <br>
                    private function func2() {<br>
                    }<br>
                <br>
                    protected function func3() {<br>
                    }<br>
                }<br>
                <br>
                $instance = new FirstClass();<br>
                <br>
                $instance->var1; // працює<br>
                $instance->func1(); // працює, результат: public private protected<br>
                $instance->var2; // помилка<br>
                $instance->var3; // помилка<br>
                $instance->func2(); // помилка<br>
                $instance->func3(); // помилка<br>
                <br>
                ?>
            </code>
            <p class="text-warning">
                Методи, де визначення області видимості відсутнє, визначаються як public.
            </p>
        </div>

        <div class="h1" style="text-align: center">
            Спадкування
        </div>
        <div>
            <p>
                Спадкування корисно використовувати, коли ви розширюєте клас, дочірній клас успадковує всі публічні
                (public) і захищені (protected) методи з батьківського класу. Ці методи будуть мати вихідну
                функціональність до тих пір, поки не будуть перевизначені.
            </p>
            <p>
                Такий підхід корисний для абстрагування функціональності. Дозволяє реалізувати додаткову
                функціональність в схожих об'єктах без необхідності реалізовувати всю загальну функціональність.
            </p>
            <p>
                Щоб створити успадкування від іншого класу потрібно використовувати оператор <i>extends</i>
            </p>
            <p>
                Приклад успадкування:
            </p>
            <code>
                &lt;?php<br>
                class FirstClass {<br>
                    public $var1 = "value1";<br>
                <br>
                    protected function func1() {<br>
                    }<br>
                <br>
                    public function func2() {<br>
                    }<br>
                }<br>
                <br>
                class SecondClass extends FirstClass {<br>
                    public $var2 = "value2";<br>
                }<br>
                <br>
                $fc = new FirstClass();<br>
                $sc = new SecondClass();<br>
                <br>
                echo $fc->var1; // value1<br>
                echo $sc->var1; // value1<br>
                $sc->func2(); // работает<br>
                echo $sc->var2; // value2<br>
                ?>
            </code>
            <p>
                Якщо ми спробуємо викликати метод <code>$sc->func1()</code>, то отримаємо помилку, через те,
                що метод <code>func1</code> визначено в батьківському класі як <code>protected</code>,
                він не може бути викликаний зовні.
            </p>
            <code>
                &lt;?php<br>
                $sc->func1(); // не працює, метод захищений (protected)<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Абстрактні класи
        </div>
        <div>
            <p>
                Клас, який містить хоча б один абстрактний метод, повинен бути визначений як абстрактний.
                Абстрактні класи реалізують на практиці один з принципів ООП - поліморфізм.
                Потрібно пам'ятати, що не можна створити екземпляр абстрактного класу.
                Методи, оголошені абстрактними, лише описують сенс і не можуть включати реалізації.
            </p>
            <p>
                При спадкуванні від абстрактного класу, всі методи, помічені абстрактними в батьківському класі,
                повинні бути визначені в класі-нащадку;
                крім того, область видимості цих методів повинна збігатися (або бути менш суворою).
                Більш того, контроль типів (буде розглянуто) і кількість обов'язкових аргументів повинно бути однаковим
            </p>
            <p>
                Приклад абстрактного класу:
            </p>
            <code>
                &lt;?php<br>
                abstract class AbstClass {<br>
                    /* Даний метод повинен бути визначений в дочірньому класі */<br>
                    abstract protected function getValue();<br>
                <br>
                    /* Загальний метод */<br>
                    public function printValue() {<br>
                        print $this->getValue() . "\n";<br>
                    }<br>
                }<br>
                <br>
                class FirstClass extends AbstClass<br>
                {<br>
                    protected function getValue() {<br>
                        return "FirstClass";<br>
                    }<br>
                }<br>
                <br>
                $class1 = new FirstClass;<br>
                $class1->printValue();<br>
                ?>
            </code>
            <p>
                Результат:
            </p>
            <blockquote>
                FirstClass
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Ключове слово "static"
        </div>
        <div>
            <p>
                Оголошення властивостей і методів класу статичними (static) дозволяє звертатися до них без
                створення екземпляра класу.
                Атрибут класу, оголошений статичним, не може бути доступний за допомогою екземпляра класу
                (але статичний метод може бути викликаний).
            </p>
            <p>
                Доступ до статичних властивостей класу може бути отриманий через оператор ::
            </p>
            <p>
                Починаючи з версії PHP 5.3.0 існує можливість посилатися на клас використовуючи змінну.
                Тому значення змінної в такому випадку не може бути ключовим словом (наприклад, self, parent і static).
            </p>
            <p>
                Приклад статичного властивості:
            </p>
            <code>
                &lt;?php<br>
                class FirstClass<br>
                {<br>
                    public static $var1 = "var1";<br>
                <br>
                    public function staticValue() {<br>
                        return self::$var1;<br>
                    }<br>
                }<br>
                <br>
                class SecondClass extends FirstClass<br>
                {<br>
                    public function var1Static() {<br>
                        return parent::$my_static;<br>
                    }<br>
                }<br>
                <br>
                echo  FirstClass::$my_static;<br>
                ?>
            </code>
            <p>
                Приклад статичного методу:
            </p>
            <code>
                &lt;?php<br>
                class FirstClass {<br>
                    public static function myStaticMethod() {<br>
                        // ...<br>
                    }<br>
                }<br>
                <br>
                FirstClass::myStaticMethod(); // виклик методу<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Інтерфейси
        </div>
        <div>
            <p>
                За допомогою інтерфейсів можна описати методи, які повинні бути реалізовані в класі без
                необхідності опису їх функціоналу.
            </p>
            <p>
                Інтерфейси оголошуються так само, як і звичайні класи, але з використанням ключового слова interface.
                Тіла методів інтерфейсів повинні бути порожніми.
            </p>
            <p>
                Методи, всередині інтерфейсу, повинні бути визначені як публічні.
            </p>
            <p>
                Приклад опису інтерфейсу:
            </p>
            <code>
                &lt;?php<br>
                // Оголосимо інтерфейс 'CarTemplate'<br>
                interface CarTemplate<br>
                {<br>
                    public function getId(); // отримаємо id автомобіля<br>
                    public function getName(); // отримаємо назву<br>
                    public function add(); // додамо новий автомобіль<br>
                }<br>
                ?>
            </code>
            <p>
                Для реалізації інтерфейсу використовується оператор implements. Клас повинен реалізувати всі методи,
                описані в інтерфейсі, інакше станеться фатальна помилка. Якщо потрібно, то класи можуть реалізовувати
                більше одного інтерфейсу; реалізовані інтерфейси повинні розділятися комою.
            </p>
            <p>
                Приклад:
            </p>
            <code>
                &lt;?php<br>
                // Оголосимо інтерфейсс 'CarTemplate'<br>
                class Audi implements CarTemplate {<br>
                    function getId() {<br>
                        return "1-ATHD98";<br>
                    }<br>
                <br>
                    function getName() {<br>
                        return "Audi";<br>
                    }<br>
                <br>
                    function add() {<br>
                        // <br>
                    }<br>
                }<br>
                <br>
                <br>
                class Bmw implements CarTemplate {<br>
                    function getId() {<br>
                        return "2-HHFY14";<br>
                    }<br>
                <br>
                    function getName() {<br>
                        return "BMW";<br>
                    }<br>
                <br>
                    function add() {<br>
                        // <br>
                    }<br>
                <br>
                }<br>
                ?>
            </code>
            <p>
                Думаю, суть зрозуміла.
            </p>
        </div>

        <div class="h1" style="text-align: center">
            Перевантаження і магічні методи
        </div>
        <div>
            <p>
                Перевантаження в PHP дає можливість динамічно "створювати" властивості і методи.
                Такі методи і властивості обробляються за допомогою "магічних" методів, які можна створити в класі
                для різних видів дій.
            </p>

            <div class="h2" style="text-align: center">
                Перевантаження властивостей
            </div>
            <div>
                <p>
                    Звернення до властивостей об'єкта можуть бути перевантажені з використанням методів
                    <code>__get</code> і <code>__set</code>. Ці методи будуть спрацьовувати в тому випадку,
                    якщо об'єкт не містить властивості, до якої здійснюється доступ. Синтаксис:
                </p>
                <pre>
                    &lt;?php
                    public void __set (string $name , mixed $value)
                    public mixed __get (string $name)
                    ?>
                </pre>
                <p>
                    Приклад використання:
                </p>
                <code>
                    &lt;?php<br>
                    class MyClass {<br>
                    public $c = "c value";<br>
                    <br>
                    public function __set($name, $value) {<br>
                    echo "__set, property - {$name} is not exists \n";<br>
                    }<br>
                    <br>
                    public function __get($name) {<br>
                    echo "__get, property - {$name} is not exists \n";<br>
                    }<br>
                    }<br>
                    <br>
                    $obj = new MyClass;<br>
                    $obj->a = 1; // запис в властивість (властивість не існує)<br>
                    echo $obj->b; // отримуємо значення властивості (властивість не існує)<br>
                    echo $obj->c; // отримуємо значення властивості (властивість існує)<br>
                    ?>
                </code>
                <p>
                    Результат:
                </p>
                <blockquote>
                    __set, property - a is not exists<br>
                    __get, property - b is not exists<br>
                    c value
                </blockquote>
            </div>

            <div class="h2" style="text-align: center">
                Перевантаження методів
            </div>
            <div>
                <p>
                    Виклики методів можуть бути перевантажені з використанням методів <code>__call</code>.
                    Ці методи будуть спрацьовувати в тому випадку, якщо об'єкт не містить методу, до якого
                    здійснюється доступ. Синтаксис:
                </p>
                <pre>
                    &lt;?php
                    public mixed __call (string $name , array $arguments)
                    ?>
                </pre>
                <p>
                    Приклад:
                </p>
                <code>
                    &lt;?php<br>
                    class MyClass {<br>
                    public function __call($name, $arguments) {<br>
                    return "__call, method - {$name} is not exists \n";<br>
                    }<br>
                    <br>
                    public function getId() {<br>
                    return "AH-15474";<br>
                    }<br>
                    }<br>
                    <br>
                    $obj = new MyClass;<br>
                    echo $obj->getName(); // виклик методу (метод не існує)<br>
                    echo $obj->getId(); // виклик методу (метод не існує)<br>
                    ?>
                </code>
                <p>
                    Результат:
                </p>
                <blockquote>
                    __call, method - getName is not exists (при виклику getName)<br>
                    AH-15474 (при виклику getId)
                </blockquote>
            </div>

            <div class="h2" style="text-align: center">
                Магічний метод __toString
            </div>
            <div>
                <p>
                    Метод <code>__toString()</code> буде спрацьовувати при спробі перетворення класу в рядок.
                    Наприклад, <code>echo $obj</code>;.
                </p>
                <p>
                    Синтаксис:
                </p>
                <pre>
                    &lt;?php
                    public string __toString ()
                    ?>
                </pre>
                <p>
                    Приклад:
                </p>
                <code>
                    &lt;?php<br>
                    class MyClass {<br>
                        public function __toString() {<br>
                            return "MyClass class";<br>
                        }<br>
                    }<br>
                    <br>
                    $obj = new MyClass;<br>
                    echo $obj; // результат: MyClass class<br>
                    ?>
                </code>
            </div>

            <div class="h2" style="text-align: center">
                Магічний метод __invoke ()
            </div>
            <div>
                <p>
                    Метод <code>__invoke()</code> викликається, коли об'єкт намагаються викликати як функцію.
                </p>
                <p>
                    Синтаксис:
                </p>
                <pre>
                    &lt;?php
                    mixed __invoke ([ $... ] )
                    ?>
                </pre>
                <p>
                    Приклад:
                </p>
                <code>
                    &lt;?php<br>
                    class MyClass {<br>
                        public function __invoke($a) {<br>
                            return $a;<br>
                        }<br>
                    }<br>
                    <br>
                    $obj = new MyClass;<br>
                    echo $obj(75); // результат: 75<br>
                    ?>
                </code>
            </div>

        </div>

        <div class="h1" style="text-align: center">
            Контроль типу
        </div>
        <div>
            <p>
                В PHP 5 є можливість використання контролю типів. При передачі параметром є можливість перевірити дані
                на такі типи: об'єкти (шляхом вказівки імені класу в прототипі функції),
                інтерфейси, масиви, колбек з типом callable (починаючи з PHP 5.4).
            </p>
            <p>
                Приклад використання:
            </p>
            <code>
                &lt;?php<br>
                class MyClass {<br>
                <br>
                    public function names(array $names) { // тип array<br>
                        $res = "&lt;ul>";<br>
                        foreach($names as $name) {<br>
                            $res .= "&lt;li>{$name}&lt;/li>";<br>
                        }<br>
                        return $res .= "&lt;/ul>";<br>
                    }<br>
                <br>
                    public function otherClassTypeFunc(OtherClass $otherClass) { // тип OtherClass<br>
                        return $otherClass->var1;<br>
                    }<br>
                }<br>
                <br>
                $obj = new MyClass;<br>
                <br>
                $names = array(<br>
                    'Іван Андрєєв',<br>
                    'Олег Симонов',<br>
                    'Андрій Єфремов',<br>
                    'Олексій Самсонов'<br>
                );<br>
                echo $obj->names($names); // працює<br>
                <br>
                $names = "Олег Симонов";<br>
                <br>
                // отримаємо фатальну помилку: Argument 1 passed to MyClass::names() must be of the type array,
                string given<br>
                echo $obj->names($names);<br>
                <br>
                // отримаємо фатальну помилку: Argument 1 passed to MyClass::names() must be an instance of
                OtherClass, string given<br>
                echo $obj->otherClassTypeFunc("test string");<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Простори імен
        </div>
        <div>
            <p>
                Простори імен - це один із способів інкапсуляції елементів. Таке абстрактне поняття можна побачити в
                багатьох місцях. Наприклад, в операційній системі директорії служать для угруповання файлів і
                виступають в якості простору імен для знаходження в них файлів. Як приклад файл text.txt може
                перебувати відразу в декількох директоріях: /files і /docs, але дві копії text.txt не можуть
                існувати в одній директорії. Також, для доступу до text.txt ззовні, ми повинні додати ім'я директорії
                перед ім'ям файлу використовуючи роздільник (/files/text.txt). Такий же принцип поширюється
                і на простори імен.
            </p>
            <p>
                У PHP простори імен використовуються для вирішення двох проблем:
            </p>
            <ul>
                <li>
                    Конфлікт імен між вашим кодом і сторонніми.
                </li>
                <li>
                    Можливість створювати псевдоніми (або скорочення) для довгих імен, щоб полегшити першу
                    проблему і поліпшити читабельність вихідного коду.
                </li>
            </ul>
            <p>
                Приклад використання.
            </p>
            <p>
                Припустимо, у нас така файлова структура:
            </p>
            <pre>
                -- App
                --- Main
                ---- MyClass.php
                - namespace.php
            </pre>
            <p>
                Опишемо клас <i>MyClasss.php</i>:
            </p>
            <code>
                &lt;?php<br>
                // App/Main/MyClass.php<br>
                <br>
                namespace App\Main;<br>
                <br>
                class MyClass {<br>
                    function hello() {<br>
                        return "hello";<br>
                    }<br>
                }<br>
                ?>
            </code>
            <p>
                За допомогою простору імен ми можемо отримати доступ до класу
                <code>MyClass</code> (файл <i>namespace.php</i>):
            </p>
            <code>
                &lt;?php<br>
                // namespace.php<br>
                <br>
                namespace App\Main;<br>
                <br>
                require_once "App\Main\MyClass.php";<br>
                <br>
                $obj = new \App\Main\MyClass;<br>
                echo $obj->hello(); // hello<br>
                ?>
            </code>
            <p>
                Виходячи з опису, ми можемо створити такий же клас, тільки в іншій теці.
                Давайте створимо клас з такою ж назвою в папці App/Core.
            </p>
            <code>
                &lt;?php<br>
                // App/Core/MyClass.php<br>
                <br>
                namespace App\Core;<br>
                <br>
                class MyClass {<br>
                    function hello() {<br>
                        return "hello, it's core";<br>
                    }<br>
                }<br>
                ?>
            </code>
            <p>
                Отримаємо доступ до цього класу:
            </p>
            <code>
                &lt;?php<br>
                namespace App\Core;<br>
                <br>
                require_once "App\Core\MyClass.php";<br>
                <br>
                $obj = new \App\Core\MyClass;<br>
                echo $obj->hello(); // hello it’s core<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Створення псевдоніма для простору імен
        </div>
        <div>
            <p>
                Псевдоніми для просторів імен використовуються для більш простого доступу до потрібного простору.
                Наприклад, у вас така структура namespace App/Core/Controller/, щоб отримати доступ до
                одного з класів, потрібно буде написати весь цей шлях, наприклад,
                App/Core/Controller/ AppController.php. Набагато простіше було б написати
                CoreController/AppController.php. Це можна реалізувати за допомогою псеводнімов.
            </p>
            <p>
                Для створення псевдоніма використовують ключове слово <code>use</code>.
            </p>
            <p>
                Приклад:
            </p>
            <code>
                &lt;?php<br>
                use App/Core/Controller as CoreController;<br>
                <br>
                // …<br>
                <br>
                $app = new CoreController\AppControoler.php;<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Трейти
        </div>
        <div>
            <p>
                Починаючи з версії 5.4.0 в PHP є можливість використання інструментарію для повторного
                використання коду. Він називається - <b>трейт</b>.
            </p>
            <p>
                Трейт схожий на клас, але призначений для групування функціоналу структурованим чином.
                Неможливо створити самостійний екземпляр трейта. Це доповнення до звичайного спадкування,
                тобто можливість використання функціоналу класу без необхідності успадкування.
            </p>
            <p>
                Приклад написання:
            </p>
            <code>
                &lt;?php<br>
                trait MyTrait {<br>
                    public function myFunc() {<br>
                        return 2 + 2;<br>
                    }<br>
                }<br>
                ?>
            </code>

            <div class="h2" style="text-align: center">
                Використання
            </div>
            <div>
                <p>
                    Розглянемо приклад використання трейта на основі створення "транслітератора"
                    (суть: літери кирилиці переводимо в латиницю).
                </p>
                <code>
                    &lt;?php<br>
                    trait MyTransliterator {<br>
                        private $letters = array(<br>
                            'а' => 'a',   	'б' => 'b',     'в' => 'v',<br>
                            'г' => 'g',   	'д' => 'd',   	'е' => 'e',<br>
                            'ё' => 'e',   	'ж' => 'zh',  	'з' => 'z',<br>
                            'и' => 'i',   	'й' => 'y',   	'к' => 'k',<br>
                            'л' => 'l',   	'м' => 'm',   	'н' => 'n',<br>
                            'о' => 'o',   	'п' => 'p',   	'р' => 'r',<br>
                            'с' => 's',   	'т' => 't',   	'у' => 'u',<br>
                            'ф' => 'f',   	'х' => 'h',   	'ц' => 'c',<br>
                            'ч' => 'ch',  	'ш' => 'sh',  	'щ' => 'sch',<br>
                            'ь' => '',   	'ы' => 'y',   	'ъ' => '',<br>
                            'э' => 'e',   	'ю' => 'yu',  	'я' => 'ya',<br>
                            'А' => 'A',   	'Б' => 'B',   	'В' => 'V',<br>
                            'Г' => 'G',   	'Д' => 'D',   	'Е' => 'E',<br>
                            'Ё' => 'E',   	'Ж' => 'Zh',  	'З' => 'Z',<br>
                            'И' => 'I',   	'Й' => 'Y',   	'К' => 'K',<br>
                            'Л' => 'L',   	'М' => 'M',   	'Н' => 'N',<br>
                            'О' => 'O',   	'П' => 'P',   	'Р' => 'R',<br>
                            'С' => 'S',   	'Т' => 'T',   	'У' => 'U',<br>
                            'Ф' => 'F',   	'Х' => 'H',   	'Ц' => 'C',<br>
                            'Ч' => 'Ch',  	'Ш' => 'Sh',  	'Щ' => 'Sch',<br>
                            'Ь' => '',  	'Ы' => 'Y',   	'Ъ' => '_',<br>
                            'Э' => 'E',   	'Ю' => 'Yu',  	'Я' => 'Ya',<br>
                            'є' => 'ye', 	'ї' => 'yi', 	'і' => 'i',<br>
                            'Є' => 'YE', 	'Ї' => 'YI', 	'І' => 'I',<br>
                            ' ' => '_'<br>
                        );<br>
                    <br>
                        public function translate($str) {<br>
                            // Замінюємо символи кирилиці на символи латиниці<br>
                            return strtr(trim($str), $this->letters);<br>
                        }<br>
                    }<br>
                    <br>
                    class MyClass {<br>
                        use MyTransliterator;<br>
                    <br>
                        private $data;<br>
                    <br>
                        /**<br>
                         *	Деяка функція длядодавання нових даних в наш масив<br>
                         */<br>
                        public function setData(array $data) {<br>
                            $this->data = $data;<br>
                        }<br>
                    <br>
                        /**<br>
                         *	 Деяка функція для підготовки даних<br>
                         */<br>
                        public function getPreparedData() {<br>
                            // допустимо, що ми хочемо зробити адрес сторінки по назві<br>
                            // тоді нам потрібно перевести назву з врахуванням транслітерації<br>
                            $this->data['url'] = strtolower($this->translate($this->data['title']));<br>
                    <br>
                            return $this->data;<br>
                        }<br>
                    }<br>
                    <br>
                    $obj = new MyClass;<br>
                    <br>
                    $obj->setData([<br>
                        'title' => 'Не дуже проста назва для сторінки',<br>
                        'content' => 'Текст сторінки'<br>
                    ]);<br>
                    <br>
                    $data = $obj->getPreparedData();<br>
                    <br>
                    echo "&lt;pre>";<br>
                    print_r($data);<br>
                    echo "&lt;/pre>";<br>
                    ?>
                </code>
                <p>
                    Результат:
                </p>
                <blockquote>
                    Array<br>
                    (<br>
                    [title] => Не дуже проста назва для сторінки<br>
                    [content] => Текст сторінки<br>
                    [url] => ne_duzhe_prosta_nazva_dlya_storinku<br>
                    )
                </blockquote>
            </div>

            <div style="text-align: center">
                <p class="text-info">
                    Ви можете пройти коротке тестування по пройденному матеріалу за наступним посиланням:
                </p>
                <p>
                    <a href="tutorialTestPart3.php">
                        Перейди за мною :)
                    </a>
                </p>
            </div>
        </div>


        <div class="row-fluid" style="text-align: center">
            <div class="span12">
                <div class="row-fluid">

                    <div class="span6 btn btn-link">
                        <a href="phpAndHTML.php">
                            <button type="button">
                                <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                            </button>
                        </a>
                    </div>

                    <div class="span6 btn btn-link">
                        <a href="phpTheRigthWay.php">
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