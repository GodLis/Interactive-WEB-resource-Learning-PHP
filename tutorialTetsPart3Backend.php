<?php

$sum_right_answer = 0;
$sum_not_right_answer = 0;
$quality = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["q1"] == "набір операторів, який ідентифікується певним ідентифікатором (ім'ям)") {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q2"] == 'щоб функція повертала якесь значення') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q3"] == 'Так') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q4"] == '!empty') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q5"] == 'виконує валідацію електронної почти') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q6"] == 'екземпляр класу') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q7"] == 'Наслідування, абстракція, інкапсулція, поліморфізм') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q8"] == 'області видимості') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q9"] == 'звертатися до них без створення екземпляра класу') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q10"] == "об'єкт намагаються викликати як функцію") {
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