<?php

$sum_right_answer = 0;
$sum_not_right_answer = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["q1"] == "0") {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q2"] == '$b = array{2, 4, 6}') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q3"] == 'Hello World') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q4"] == '1') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q5"] == 'Прибрати ++') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q6"] == 'nl2br()') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q7"] == 'char') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q8"] == 'session_register()') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q9"] == 'Value of a = 10') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q10"] == '4') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q11"] == 'Hello World!') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q12"] == 'strrpos') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q13"] == 'fappend') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q14"] == '1,1,2') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q15"] == '53') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q16"] == 'Екранувати всі спеціальні символи перед тим як вставляти дані в SQL-запит') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q17"] == 'function ModifyReport(&$Rptfile){}') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q18"] == 'Код продовжить виконання всередині наступного case, що може призвести до помилок') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q19"] == '1') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q20"] == 'Друкує вміст масиву') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    $quality = ($sum_right_answer/20)*100;
}
include_once("header.php");
session_destroy();
?>

<div class="mypadding content">

    <div class="answers">
        <div>
            <b>
                Результати тестування:
            </b>
        </div>
        <div>
            Правильних відповідей:
            <p class="right_answer">
                <?php echo $sum_right_answer; ?>
            </p>
        </div>
        <div>
            Неправильних відповідей:
            <p class="not_right_answer">
                <?php echo $sum_not_right_answer; ?>
            </p>
        </div>
        <div>
            <b>
                Якість результату: <?php echo $sum_not_right_answer; ?> %
            </b>
        </div>
    </div>

    <div class="row-fluid" style="text-align: center">
        <div class="span12">
            <div class="row-fluid">

                <div class="span6 btn btn-link">
                    <a href="begineertest.php">
                        <button type="button">
                            <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                        </button>
                    </a>
                </div>

                <div class="span6 btn btn-link">
                    <a href="">
                        <button type="button" >
                             Наступна сторінка<span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </div>

</div>


<?php include_once("footer.php");