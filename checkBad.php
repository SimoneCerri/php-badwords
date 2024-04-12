<?php

$paragraph;
$censored;

function checkBadWords()
{
    $paragraph = strtolower($_GET["paragraph"]); //fix the case sensivity
    $censored = strtolower($_GET["censored"]);  //fix the case sensivity

    if(strpos($paragraph,$censored) !== false) //check if word is in paragraph
    {
        $newParagraph = str_replace($censored, "***",$paragraph); //create the new paragraph with *** instead of the censored word
        echo "New paragraph: " .$newParagraph; //print new paragraph
    }
    else
    {
        echo "There is no: " .$censored ." word in paragraph: ".$paragraph; //else case if censored word is not in paragraph
    }

    //return array($paragraph,$censored);
    //var_dump(array);
};


?>