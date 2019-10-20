<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
?>

<div class="container">

    <div class="col-md-12">
        <div id="content" class="col-md-12">
            <div class="wrapper">
                <div class="date">
                    <span id="weekDay" class="weekDay"></span>,
                    <span id="day" class="day"></span> de
                    <span id="month" class="month"></span> del
                    <span id="year" class="year"></span>
                </div>
                <div class="clock">
                    <span id="hours" class="hours"></span> :
                    <span id="minutes" class="minutes"></span> :
                    <span id="seconds" class="seconds"></span>
                </div>
            </div>
            <div class="buttonw">
                <button type="button" class="btn btn-primary btn-lg">Marcar Asistencia</button>
            </div>
        </div>
    </div>
</div>

<?php
include "./function/footer.php";
?>
