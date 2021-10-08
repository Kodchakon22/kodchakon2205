<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to MY PAGE</title>
    </head>

    <body>
     <h1>My Page</h1>

     <a href="<?php echo site_url('Hello/index');?>">
    LINK TO  HELLO FN index</a>

    <br>

     <a href="<?php echo site_url('Hello/index2');?>">
    LINK TO  HELLO FN index2</a>
    
    <br>

    <a href="<?php echo site_url('welcome');?>">
    LInk TO  WELCOME</a>

    <br>

    <a href="<?php echo site_url('welcome/index2');?>">
    LInk TO  KODCHAKON</a>

    <br><br>
    <img src="<?php echo base_url('img/sub.jpg');?>" alt="">

    </body>
</html>