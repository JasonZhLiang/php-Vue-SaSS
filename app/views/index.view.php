<?php require('partials/head.php');?>

<!--
<?php /*foreach ($SIMcards as $SIMcard) { */?>
    <li>
        <?php /*if ($SIMcard->DeleteFlag == 1) { */?>
            <strike>
                UPC code: <?/*= $SIMcard->UPCcode; */?>&nbsp
                Delete Date: <?/*= $SIMcard->DeleteDate; */?>
            </strike>
        <?php /*} else { */?>
            Serial Number: <?/*= $SIMcard->SerialNumber; */?>&nbsp
            ICCID: <?/*= $SIMcard->ICCID; */?>
        <?php /*} */?>
    </li>
<?php /*} */?>
-->

<h1>Home Page</h1>

<?php /*foreach ($users as $user) :*/?><!--

    <li><?/*= $user->name; */?></li>

<?php /*endforeach;*/?>


<h1>Submit Your Name</h1>
<form method="post" action="/names">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>-->


<?php require('partials/footer.php');?>



