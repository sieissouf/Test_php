<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
    if(!empty($_GET)){
        if(isset($_GET["name"]) && !empty($_GET["name"]))
        {
          $name = strip_tags($_GET["name"]);
         define("max", "15");
        }
        if (strlen($name) > max){
          echo "<h2>Mr $name votre nom est trop long</h2> ";

        }
        else
        {
         $voyelle = preg_match_all('/[aeuoiy]/i', $name);
         echo " <h1>Mr $name Votre nom contient $voyelle voyelles</h1>";
        }
    }
    

    ?>

</body>
</html>