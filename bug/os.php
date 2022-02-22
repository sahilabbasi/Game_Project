<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta htt="" content="width=device-width, initial-scale=1.0">

</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
<input type="text" name="command" id="">
<button type="submit">button</button>

</form>

<?php

error_reporting(0);


$x = $_GET["command"];

// echo escapeshellcmd(shell_exec("ping ".$x));



system("ping ".escapeshellcmd($x));

?>

</body>
</html>