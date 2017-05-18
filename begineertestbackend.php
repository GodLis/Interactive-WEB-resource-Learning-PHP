<?php

$sum_right_answer = 0;
$sum_not_right_answer = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["q1"] == "0") {
        $sum_right_answer++;
    } else {
        $sum_not_right_answer++;
    }
}
include_once("header.php");
session_destroy();
?>

<div class="mypadding" style="text-align: justify">

    <div>
        Результати тестування:
    </div>

    <div>
        Правильних відповідей:
        <?php echo $sum_right_answer; ?>
    </div>
    <div>
        Неправильних відповідей:
        <?php echo $sum_not_right_answer; ?>
    </div>


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