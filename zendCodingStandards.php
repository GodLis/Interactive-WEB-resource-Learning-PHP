<?php include_once("header.php");
session_destroy();
?>

    <div class="mypadding content" style="text-align: justify">

        <div class="answers">
            <div class="h1" style="text-align: center">
                Посилання на оригінальну документацію: <a href="https://framework.zend.com/learn">
                    ZEND Coding Standarts
                </a>
            </div>
        </div>

        <div class="row-fluid" style="text-align: center">
            <div class="span12">
                <div class="row-fluid">

                    <div class="span6 btn btn-link">
                        <a href="pearCodingSrandards.php">
                            <button type="button">
                                <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                            </button>
                        </a>
                    </div>

                    <div class="span6 btn btn-link">
                        <a href="symfonyCodingStandards.php">
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