<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        // function test1() {
        //     echo "display test1";
        // }

        // function test2() {
        //     return "display test2";
        // }

        // test1();
        // echo test2();

        // function myname($a, $b){
        //     return $a + $b;
        // }

        // echo myname(1,2);

        function person($name, $age, $address){
            echo "<p>Name:" .$name. "</p>";
            echo "<p>Age:" .$age. "</p>";
            echo "<p>Address:" .$address. "</p>";
        }

        person("Jose rizal", 500, "Mandaue");
    ?>
</body>
</html>