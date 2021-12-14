<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $lowisko=$_POST['lowisko'];
    $Data=$_POST['data'];
    $Sedzia=$_POST['sedzia'];
    
    $db=new mysqli('localhost','root','','wedkowanie');
    $sql="INSERT INTO `zawody_wedkarskie` (`id`, `Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (NULL, '0', '$lowisko', '$Data', '$Sedzia')";
    $db->query($sql);
    $db->close();
    ?>
</body>
</html>