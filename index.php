<?php 
include 'checkBad.php';
//var_dump("have a bad word inside")
$paragraph;
$censored;
checkBadWords();

?>


<!doctype html>
<html lang='en'>

<head>

   <title>BadWords</title>
   <meta charset='utf-8'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <!-- #region link to Style -->
   <link href='./assets/css/style.css' rel='stylesheet'>
   <!-- #endregion link to Style -->
   <!-- #region link to FontAwesome (icons) -->
   <link rel='stylesheet' href='https: //cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.    css'integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIft+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=='crossorigin='anonymous' referrerpolicy='no-referrer'/>
   <!-- #endregion link to FontAwesome (icons) -->
   <!-- #region links to GoogleFonts (Nanum Gothic Coding) -->
   <link rel='preconnect' href='https: //fonts.googleapis.com'>
   <link rel='preconnect' href='https: //fonts.gstatic.com' crossorigin>
   <link href='https: //fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap' rel='stylesheet'>
   <!-- #endregion links to GoogleFonts (Nanum Gothic Coding) -->
   <!-- #region link to Bootstrap -->
   <link href='https: //cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH'crossorigin='anonymous'>
   <!-- #endregion link to Bootstrap -->

</head>

<body class='debug'>

   <div id='app'>
       <form action="" method="get">
        <input type="text" name="paragraph" id="" placeholder="Insert a paragraph">     
        <input type="text" name="censored" id="" placeholder="Insert a word to censored">
        <button type="submit">SUBMIT</button>
       </form>
   </div>
   <div class="form_content">
    <p>Your paragraph: <?php echo $paragraph ?></p>
    <span>Your censored word: <?php echo $censored ?></span>
    <!-- <span><?php checkBadWords($censored, $paragraph) ?></span> -->
    <!-- <span><?php var_dump("have a bad word inside") ?></span> -->
    <!-- <span><?php var_dump(checkBadWords()) ?></span> -->
   </div>
   <!-- #region Dev-only cdns, disable in production -->
   <!-- #region link to Vue-script -->
   <script src='https: //unpkg.com/vue@3/dist/vue.global.js'></script>
   <!-- #endregion link to Vue-script -->
   <!-- #region link to Bootstrap-script -->
   <script src='https: //cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
   <!-- #endregion link to Bootstrap-script -->
   <!-- #region link to Script -->
   <script src='./assets/js/main.js'></script>
   <!-- #endregion link to Script -->
   <!-- #endregion Dev-only cdns, disable in production -->

</body>

<style>
    body
    {
        background-color:#333;
        color: white;
    }

    #app 
    {
        display: flex;
        justify-content:center;
        align-items:center;
    }

    .form_content
    {
        display: flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        gap: 3em;
    }
</style>

</html>
