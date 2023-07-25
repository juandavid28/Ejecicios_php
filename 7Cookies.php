<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
     $cookie_name = "user";
     $cookie_value = "John Doe";
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    ?>
    
    <?php
    if(!isset($_COOKIE[$cookie_name])) 
    {
      echo "Cookie named '" . $cookie_name . "' is not set!";
    } else 
    {
      echo "Cookie '" . $cookie_name . "' is set!<br>";
      echo "El valor es: " . $_COOKIE[$cookie_name];
    }
    ?>

    <br>
    <hr>
    <br>

    <?php
     $cookie_name = "user";
     $cookie_value = "Alex Porter";
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    ?>
    
    <br>
    
    <?php
     if(!isset($_COOKIE[$cookie_name])) 
     {
        echo "Cookie named '" . $cookie_name . "' is not set!";
     }    
     else 
     {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
     }
    ?>

    <br>
    <hr>
    <br>

    <?php
     // set the expiration date to one hour ago
     setcookie("user", "", time() - 3600);
    ?>

    <?php
     echo "Cookie 'user' is deleted.";
    ?>

    <br>
    <hr>
    <br>

    <?php
     setcookie("test_cookie", "test", time() + 3600, '/');
    ?>

    <?php
     if(count($_COOKIE) > 0) 
     {
        echo "Cookies are enabled.";
     } 
    else 
    {
        echo "Cookies are disabled.";
    }
?>

</body>
</html>
</body>
</html>