<?php
$fname= $_POST["prenom"];
$name= $_POST["nom"];
$mail= $_POST["courriel"];
$number= $_POST["number"];
$message= $_POST["message"];
$choix= $_POST["subject"];
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
    <p>
        <?php echo "Merci $fname $name de nous avoir contacté à propos de $choix . 
        Un de nos conseillers vous contactera soit à l’adresse $mail ou par téléphone au $number dans les plus brefs délais pour traiter votre demande :
         $message"?>
    </p>
</body>
</html>

