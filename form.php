<html>
    <body>
        <?php
         $name = $_POST["name"];
        $email= $_POST["email"];

        ?>
    <h2>PHP Form</h2>
<form method="post" action="">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  Email: <input type="email" name="email" value="<?php echo $email;?>">
  <button type="submit" name="">Enviar</button>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
?>
</html>