<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('welcome/verify')?>" method="post">
    <?php echo form_error('nom');?>
    <input type="text" name="nom" id="">
    <?php echo form_error('mdp');?>
    <input type="password" name="mdp" id="">
    <input type="submit">
    </form>
</body>
</html>