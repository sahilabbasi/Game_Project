<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDOR VULERNBILITY </title>
</head>
<body>

<h1>Add You're Comments To This Site :)</h1>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">

<input type="text" name="comment" id="">
<button type="submit">Post The Comment</button>


</form>


<?php

try
{



if(isset($_GET["comment"]))
{
    $comment =  htmlspecialchars($_GET["comment"]);



$conn =  mysqli_connect("localhost", "root", "", "test");





if(!empty($comment))
{

$sql = "INSERT INTO `user` (`name`, `comment`) VALUES ('mohd suhail', '$comment')";
}
else
{
 
    echo mysqli_error($conn);

}

global $sql;




$result = mysqli_query($conn,$sql);

if($result)
{
    $sql2 = "SELECT * FROM `user`";

$test = mysqli_query($conn,$sql2);

if($test)
{
    while($row = mysqli_fetch_array($test)){
 
 echo   $name = "You're Name Is => ".$row["name"]."</br>";
  echo  $usercomment = "You're comment => ".$row["comment"];

    


    }
}
else
{
   echo  mysqli_error($con);
    
}


}

}


}

catch(Exception $e)
{
  echo $e;
}



?>


</body>
</html>