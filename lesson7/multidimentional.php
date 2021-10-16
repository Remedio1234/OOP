<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional  Array</title>
</head>
<body>
    <pre>
        <?php
            $arr = array(
                array(
                    "name" => "Jose",
                    "age"  => 12,
                    array(1233,
                    array(23))
                ),
                array(
                    "name" => "Rizal",
                    "age"  => 15
                ),
                array(
                    "name" => "Andres",
                    "age"  => 20
                ),
            );
            print_r($arr);

            // echo $arr[1]["name"];
            echo $arr[0][0][0];
        ?>
    </pre>
    <p>Foreach</p>
    <table border="1">
        <thead>
        <tr>
            <td>Name</td>
            <td>Age</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $key => $row) { ?>
                   <tr>
                       <td> <?php echo $row['name']?> </td>
                       <td> <?php echo $row['age']?> </td>
                   </tr>
            <?php } ?>
        </tbody>
    </table>    
    <p>For Loop</p>
    <table border="1">
        <thead>
        <tr>
            <td>Name</td>
            <td>Age</td>
        </tr>
        </thead>
        <tbody>
            <?php for ($i=0; $i < count($arr); $i++) { ?>
                   <tr>
                       <td> <?php echo $arr[$i]['name']?> </td>
                       <td> <?php echo $arr[$i]['age']?> </td>
                   </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>