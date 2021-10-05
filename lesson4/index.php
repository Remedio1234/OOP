<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELF SUBMIT</title>
</head>
<body>
    <form action="" method="GET">
        <p>
            #1 : <input 
                type="number" 
                name="n1" 
                placeholder="Enter #1"
                value="<?php echo (isset($_GET['n1']) ? $_GET['n1'] : '')?>"
                />
        </p>
        <p>
            #1 : <input 
                type="number" 
                name="n2" 
                placeholder="Enter #2"
                value="<?php echo (isset($_GET['n2']) ? $_GET['n2'] : '')?>"
                >
        </p>
        <p>
            <button type="submit" name="plus">+</button>
            <button type="submit" name="minus">-</button>
            <button type="submit" name="multiply">*</button>
            <button type="submit" name="division">/</button>
        </p>
    </form>
    <p>
        Result: 

        <?php
            $result = 0;
        ?>

        <?php
                if(isset($_GET['plus']))
                    $result = $_GET['n1'] + $_GET['n2'];
                
                // shorthand condition
        ?>

        <?php
            echo $result;
        ?>
    </p>
</body>
</html>