<?php

$sum_right_answer = 0;
$sum_not_right_answer = 0;
$quality = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["q1"] == "гіпертекстовий препроцесор") {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q2"] == 'після відкриваючого тегу &lt;?php і продовжує виконання до того моменту, 
    поки не зустріне закриваючий тег') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q3"] == 'Так') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q4"] == 'знаку долара - $ і "вільного" ідентифікатора') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q5"] == 'define') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q6"] == 'char') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q7"] == 'char') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q8"] == '+=, -=') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q9"] == 'Повертає поточне значення, після чого збільшує його на одиницю') {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    if ($_POST["q10"] == '4') {
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
                        <a href="statements.php">
                            <button type="button">
                                <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                            </button>
                        </a>
                    </div>

                    <div class="span6 btn btn-link">
                        <a href="conditionalStatements.php">
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