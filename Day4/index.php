<?php
include 'includes/person.inc.php';
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
    $person1 = new Person("Danny", "brown", 22);
    echo $person1->name;
    echo $person1->eyeColor;
    echo $person1->age;

    echo $person1->getName();
    ?>
</body>

</html>