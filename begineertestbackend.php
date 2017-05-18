<?php

$sum_right_answer = 0;
$sum_not_right_answer = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["q1"] == "0") {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }

    $quality = ($sum_right_answer/$sum_not_right_answer)*100;
}
include_once("header.php");
session_destroy();
?>

<div class="mypadding content" style="text-align: justify">

    <div style="text-align: center">
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