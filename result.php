<?php
include_once("header.php");
session_destroy();
?>

    <div class="mypadding content" style="text-align: justify">

        <div class="answers">
            <div>
                <b>
                    Результати тестування:
                </b>
            </div>
            <div>
                Правильних відповідей:
            </div>
            <div>
                Неправильних відповідей:
            </div>
            <div>
                <b>
                    Якість результату:
                </b>
            </div>
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