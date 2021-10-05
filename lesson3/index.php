<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method</title>
</head>
<body>
    <form 
        method="POST" 
        action="submit.php">
        <p>
            Name:
            <input 
                type="text" 
                name="txt_name" 
                placeholder="Enter Name"
            />
        </p>
        <p>
            Age:
            <input 
                type="number" 
                name="txt_age" 
                placeholder="Enter Age"
            />
        </p>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
</body>
</html>