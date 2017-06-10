<?php

$sum_right_answer = 0;
$sum_not_right_answer = 0;
$quality = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["q1"] == "рівність") {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q2"] == 'switch') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q3"] == 'Повертає ASCII-код символу') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q4"] == 'повертає позицію першого входження підрядка в рядок') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q5"] == '4') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q6"] == 'array') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q7"] == 'foreach') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q8"] == 'unset') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q9"] == 'Повертає індекс поточного елемента масиву') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q10"] == 'формує масив з рядка') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    $quality = ($sum_right_answer/10)*100;
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
                    Якість результату: <?php echo $quality; ?> %
                </b>
            </div>
        </div>

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
                                Наступна сторінка<span class="glyphicon glyphicon-arrow-right"></span>
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>


<?php include_once("footer.php");