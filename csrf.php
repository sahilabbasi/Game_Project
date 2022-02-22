<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

session_start();

$x = $_SESSION["csrf"]=ceil(rand()*10);

?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET" >
<input type="text" name="name">
<input type="hidden" name="csrf" value="<?php  echo $x;  ?>">
<button type="submit">Button</button>

</form>

<?php

echo "<script>let x = 'hello'; </script>";

?>
</body>
</html>