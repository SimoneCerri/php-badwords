<?php 
$paragraph = $_GET["paragraph"];
$censored = $_GET["censored"];
//$find = false;
//var_dump("have a bad word inside");

function checkBadWords()
{
    if(strpos($censored, $paragraph))
    {
        var_dump("have a bad word inside");
        $find = true;
        echo "Presente";
    };
};

?>