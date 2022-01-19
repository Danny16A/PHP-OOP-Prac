<?php
include_once __DIR__ . '/includes/person.inc.php';
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
    $person1 = new Person();
    $person1->setName('Danny');
    echo $person1->name;

    $person2 = new Person();
    $person1->setName('Ly');
    echo $person2->name;
    ?>
</body>

</html>