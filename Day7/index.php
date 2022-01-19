<?php
include 'includes/autoloader.inc.php'
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
    <?php
    $person1 = new Person\Person('Danny', 'brown', '22');
    echo $person1->getPerson();

    echo "<br>";

    $house1 = new House('Duncan', '15');
    echo $house1->getHouse();
    ?>
</body>

</html>