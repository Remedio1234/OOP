<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (isset($data['title']) ? $data['title'] : 'Home') ?>  | Facenote</title>
    <link rel="icon" href="assets/images/favicon.ico">
    <?php if(isset($css)): ?>
        <?php foreach ($css as $key => $new_css) { ?>
            <link href="<?php echo $new_css ?>" rel="stylesheet" >
        <?php } ?>    
    <?php endif; ?>
</head>
<body>
    <?php require "templates/nav.php" ?>