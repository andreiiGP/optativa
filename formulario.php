<?php
           
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formuario php </title>
</head>
<body>

        <h1>formulario de contacto php</h1>

        <form method="post" action="">
        
        Correo electronico:
        <br>
        <input type="text" name="email" value="">
        <?php echo $email_error; ?>
        <br>
        <br>
        mensaje
        <br>
        <textarea name="mensaje"> <?php echo $mensaje_error ; ?> </textarea>
        <?php echo $email_error; ?>
        <br>
        <br>
        <input type="submit" value="submit">
        
        </from>
    
</body>
</html>