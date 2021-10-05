<?php
    echo "Name:".$_POST['txt_name'] ." <br/>";
    echo "Age:".$_POST['txt_age'] . "<br />";
    echo "POST METHOD";
?>

<pre>
    <?php
        print_r($_POST);
    ?>
</pre>