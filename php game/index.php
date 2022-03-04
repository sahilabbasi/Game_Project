<?php

error_reporting(0);

if(isset($_REQUEST["submit"]))
{
    $data = array("paper","scissors","rock");

    $paper = $_REQUEST["paper"];

    $scissors = $_REQUEST["scissors"];
    

    $rock = $_REQUEST["rock"];


    $reason;

// Check That What User Select Rock,Paper Or Scissors 

    if($paper)
    {
       $random_number =  rand(0,2);

    //    echo $random_number;

    $computer_value = $data[$random_number];


    // echo $computer_value."</br>";
    

   $url =  $_SERVER['REQUEST_URI'];

   $x = parse_url($url, PHP_URL_QUERY);

   $user = substr($x,0,5);


   // And Now Check What Commputer Give Us Value Soo That We Can Compared It 


if($computer_value === "paper")
{
    $reason = "Match Is Draw :(";

}
elseif($computer_value === "rock")
{
    $reason = "OOh Shit!!! Rock Beat The paper ";

}
elseif($computer_value == "scissors")
{
    $reason = "OOh Shit!!! I Hate Scissors";

}


    }

    // Check That What User Select Rock,Paper Or Scissors 

    if($scissors)
    {
        $random_number =  rand(0,2);

        //    echo $random_number;
    
        $computer_value = $data[$random_number];
    
    
        // echo $computer_value."</br>";
    
    
       $url =  $_SERVER['REQUEST_URI'];
    
       $x = parse_url($url, PHP_URL_QUERY);
    
       $user =  substr($x,0,8);


// And Now Check What Commputer Give Us Value Soo That We Can Compared It 

    if($computer_value == "scissors")
    {
        $reason = "Match Is Draw :(";
    }
    elseif($computer_value === "rock")
    {
        $reason = "Oops! You Lose,Because Rock Can Destroyed The Scissors";
    }
    elseif($computer_value === "paper")
    {
        $reason = "Hooray! You Again Won,Because Scissors Cut The Paper ";
    }
    
    
    }


    // Check That What User Select Rock,Paper Or Scissors 

    if($rock)
    {
        $random_number =  rand(0,2);

        //    echo $random_number;
    
        $computer_value = $data[$random_number];
    
       
        // echo $computer_value."</br>";
    
       $url =  $_SERVER['REQUEST_URI'];
    
       $x = parse_url($url, PHP_URL_QUERY);
    
      $user = substr($x,0,4);

       // And Now Check What Commputer Give Us Value Soo That We Can Compared It 


    if($computer_value === "rock")
    {
        $reason = "Match Is Draw :(";
    }
    elseif($computer_value === "paper")
    {
         $reason = "You Won!! Rock Easliy Destroyed The Paper.... ";
    }
    elseif($computer_value === "scissors")
    {
         $reason = "You Won!! Rock Easliy Destroyed The Scissors";
    }
    
    
    }



}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<img src="images.png" alt="" srcset="">

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">

Paper  : <input type="radio" name="paper" id="">
Scissors  : <input type="radio" name="scissors" id="">
Rock  : <input type="radio" name="rock" id="">
<button name="submit">Submit</button>

</form>

<div id="container">

<div id="user">You Selected The => <?php echo $user;  ?></div>

<div id="computer">Computer Have A => <?php echo $computer_value;  ?></div>

<div id="message">Result => <?php  echo $reason;  ?></div>

</div>


<style>
img{
    margin: auto;
    padding-left:450px;
    width: 500px;
    height: 300px;
}
#container
{
    
    text-align: center;
    padding:50px;
    font-size:20px;
    font-family:Tahoma;
    color:blue;
    
}
#user
{
    padding: 8px
}

#computer
{
    padding: 8px

}
#message
{
    padding: 8px

}

body
{
    background-color: #e6e6ff;
}

</style>
    
</body>
</html>
