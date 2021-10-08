<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to Hello World</title>

    </head>

    <body>
        <div id="container">
            <h1>Hello World</h1>
        </div>
        <hr>
        HTML Helper 
        <?php echo br(3);
        ?>
        RMUTL <br> TAK

        <p>Heading</p>
        <?php echo heading("SUB",1);?>
        <?php echo heading("SUB",2);?>
        <?php echo heading("SUB",3);?>
        <?php echo heading("SUB",4);?>
        <?php echo heading("SUB",5);?>
        <?php echo heading("SUB",6);?>

        <p>nbs</p>
        <?php
            echo 'My Website';
            echo nbs(10);
            echo 'KODCHAKON';
        ?>

        <p>OL</p>
        <?php
            $list =array('Kodchakon','Suwanthao','Sub','Tak');
            echo ol($list);

            echo '<hr>';
            echo ul($list);
        ?>

    </body>
</html>