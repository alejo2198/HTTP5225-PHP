<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo '<h1>Welcome to HTTP525</h1>'; ?>

    <?php echo '<p>Let\'s learn:</p>'; ?>
   
    <?php
        echo 
        '<ul>
            <li>PHP</li>
            <li>Laravel</li>
         </ul>';
    ?>
    
    <!-- BOTH IMG ARE OKAY,SECOND IS PREFERED -->
    <?php
        echo ' <img src="https://placehold.co/600x400" alt="">'
    ?>
     <img src="<?php echo 'https://placehold.co/600x400' ?>" alt="">
    
    <?php
        $fname = "Alejandro";
        $lname = "Castro";

        $name['fname'] = "Alejandro";
        $name['lname'] = "Castro";

        // $name = array ('Alejandro','Castro')
        // $name[0];

        echo 'Hello ' . $fname . " " . $lname;
    ?>
   
    
</body>
</html>