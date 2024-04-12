<?php

$paragraph;
$censored;

function checkBadWords()
{
    $paragraph = strtolower($_GET["paragraph"]);
    $censored = strtolower($_GET["censored"]);

    if(strpos($paragraph,$censored) !== false)
    {
        $newParagraph = str_replace($censored, "***",$paragraph);
        echo "New paragraph: " .$newParagraph;
    }
    else
    {
        echo "There is no: " .$censored ." word in paragraph: ".$paragraph;
    }

    //return array($paragraph,$censored);
    //var_dump(array);
};


?>