<?php 


$find = false;
//var_dump("have a bad word inside");

function checkBadWords()
{
    echo "ciao";
    $paragraph = $_GET["paragraph"];
    $censored = $_GET["censored"];
    
    if(strpos($paragraph,$censored))
    {
        //var_dump("have a bad word inside");
        //$find = true;
        echo "Presente";
    }
    else
    {
        echo "Nope";
    }
};

?>