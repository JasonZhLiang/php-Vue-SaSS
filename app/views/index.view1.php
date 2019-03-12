<!DOCTYPE html>
<html lang="en>"
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 3em;
            text-align: center;
        }
    </style>
</head>
<body>
<!--
<h1>Task For The day</h1>

<!--Email Form input-->
<!--<div class="form-group">-->
<!--    {{ Form::label('email', 'Email:')}}-->
<!--    {{ Form::text('email', null, ['class'=>'form-control'])}}-->
<!--</div>-->
<!---->
<!--<!--Password Form input-->-->
<!--<div class="form-group">-->
<!--    {{ Form::label('password', 'Password:')}}-->
<!--    {{ Form::password('password', null, ['class'=>'form-control'])}}-->
<!--</div>-->


<!--<ul>-->
<!--    --><?php ///*foreach ($task as $front => $spec): */?>
<!--        <li>-->
<!--            <strong>--><?///*= ucwords($front) */?><!--: </strong>--><?///*= $spec; */?>
<!--        </li>-->
<!--    --><?php ///*endforeach; */?>
<!---->
<!--    <li>-->
<!--        <strong>Status: </strong>--><?///*= $task['completed'] ? 'complete' : 'incomplete'; */?>
<!--    </li>-->
<!---->
<!--    <li>-->
<!--        <strong>Status: </strong>-->
<!---->
<!--        --><?php
///*        if ($task['completed']) {
//            echo '&#9989';
//        } else {
//            echo 'Incompleted';
//        }
//        */?>
<!---->
<!--    </li>-->
<!---->
<!---->
<!--    <li>-->
<!--        <strong>Status(regular): </strong>-->
<!---->
<!--        --><?php ///*if ($task['completed']): */?>
<!---->
<!--            <span class='icon'>&#9989</span> <!--html unicode utf-8-->-->
<!---->
<!--        --><?php ///*else: */?>
<!---->
<!--            <span class='icon'>Incomplete</span>-->
<!---->
<!--        --><?php ///*endif; */?>
<!---->
<!--    </li>-->
<!---->
<!--</ul>-->

<!--<ul>-->
<!--    --><?php ///*foreach ($task as $front => $spec) {
//        echo "<li><strong>$front-</strong>$spec</li>";
//    }
//    */?>
<!--</ul>-->


<!--<ul>---------------------------class------------------->
<!--    --><?php //foreach ($taskcelection as $item) { ?>
<!--        <li>-->
<!--<!--            -->--><?php ////if ($item->isComplete()) { ?>
<!--                <strike>-->
<!--                    --><?//= $item->description(); ?><!--<br>-->
<!--                </strike>-->
<!--<!--            -->--><?php ////} else { ?>
<!--<!--                -->--><?////= $item->description(); ?><!--<!--<br>-->-->
<!--<!--            -->--><?php ////} ?>
<!--        </li>-->
<!--    --><?php //} ?>
<!---->
<!--</ul>-->

<ul>---------------------------class-----------------
    <?php foreach ($SIMcards as $SIMcard) { ?>
        <li>
            <?php if ($SIMcard->DeleteFlag == 1) { ?>
                <strike>
                    <?= $SIMcard->ICCID; ?><br>
                </strike>
            <?php } else { ?>
                <?= $SIMcard->ICCID; ?><br>
            <?php } ?>
        </li>
    <?php } ?>

</ul>


-->

<!--<ul>---------------------------PDO database------------------->
<!--    --><?php //foreach ($SIMcards as $item) { ?>
<!--        <li>-->
<!--                <strike>-->
<!--                    --><?//= $item->SerialNumber; ?>
<!--                </strike>-->
<!--        </li>-->
<!--        <li>-->
<!--            <strike>-->
<!--                --><?//= $item->IMSI; ?><!--<br>-->
<!--            </strike>-->
<!--        </li>-->
<!---->
<!--    --><?php //} ?>
<!---->
<!--</ul>-->
<!--<header>-->
<!--    <h1>--><? //= ucwords($greeting); ?><!--</h1>-->
<!--</header>-->

<!--
<div class="form-group">

    <label for="exampleInputEmail">Email Address</label>
    <input type="email" class="form-contol" id="exmapleInputEmail" placeholder="Enter Email">

</div>-->

</body>
</html>


