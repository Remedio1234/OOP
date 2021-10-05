<?php if(isset($_GET['btn_form'])) { ?>
    <p>
        Name: <?php echo $_GET['fullname'] ?>
    </p>
    <p>
        Age: <?php echo $_GET['age'] ?>
    </p>
    <!-- <p>
        Address: <?php echo $_GET['address'] ?>
    </p> -->
    <!-- isset -->
    
<?php } else { ?>
    <p>not found</p>
    <?php }?>
    