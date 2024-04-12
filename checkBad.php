<?php 

function checkBadWords()
{
    $paragraph = $_GET["paragraph"];
    $censored = $_GET["censored"];

    if(strpos($paragraph,$censored) !== false)
    {
        echo "Presente ".strpos($paragraph,$censored);
    }
    else
    {
        echo "Nope";
    }

    /* return $paragraph; */
};

?>