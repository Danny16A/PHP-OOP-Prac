<?php
include 'includes/object.inc.php';
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
    $object = new NewObject('phone', 'iphone');
    echo $object->getProperty();
    echo "After unset object";
    unset($object);
    ?>
</body>

</html>