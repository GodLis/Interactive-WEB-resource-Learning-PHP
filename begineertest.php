<?php include_once("header.php");
session_destroy();
?>

<div class="mypadding" style="text-align: justify">

    <div class="h1" style="text-align: center">
        Start testing
    </div>

    <form action="begineertestbackend.php" method="post">
        <fieldset>
            <ol>
                <li>
                    <label>
                        Який результат виконання наступного коду?
                    </label>
                    <blockquote>
                        &lt;php><br>
                        $a = 500;<br>
                        $b = 200;<br>
                        <br>
                        echo $a %2 *$b;<br>
                        ?>
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q1" value="Синтаксична помилка">
                        Синтаксична помилка
                    </label>
                    <label class="radio">
                        <input type="radio" name="q1" value="100">
                        100
                    </label>
                    <label class="radio">
                        <input type="radio" name="q1" value="500">
                        500
                    </label>
                    <label class="radio">
                        <input type="radio" name="q1" value="200">
                        200
                    </label>
                    <label class="radio">
                        <input type="radio" name="q1" value="0">
                        0
                    </label>
                </li>
                <li>

                </li>
            </ol>

        </div>

        <a href="result.php">asd</a>

        <button type="submit" class="btn">Дізнатися результати!</button>
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