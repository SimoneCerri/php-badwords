<?php 

function checkBadWords()
{
    $paragraph = $_GET["paragraph"];
    $censored = $_GET["censored"];
    /* $newParagraph; */

    if(strpos($paragraph,$censored) !== false)
    {
        $newParagraph = str_replace($censored, "***",$paragraph);
        echo $newParagraph;
    }
    else
    {
        echo "There is no: " .$censored ." word in paragraph: ".$paragraph;
    }

    /* return $paragraph; */
};

?>