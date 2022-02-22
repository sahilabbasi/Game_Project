<!-- LFI vulernbility !-->


<?php

// local fle inclusion stuck on here

$x  = $_GET["page"];


// $pattern = "/[.png][.jpg]/i";

// $lfi = preg_match($pattern,$x);


// $lfi = str_replace("test/","_",$x);


// if($x)
// {
    
// include "test/".$x;
    
// }

// else
// {
//     http_response_code(403);
//      die("You're Blocked :(");
    
// }


$fuck = fopen($x,"rb"); // fopen() is used to ssrf and incude use for lfi



echo fread($fuck,10000);

?>
