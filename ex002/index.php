<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>PHP Example</h1>

    <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Today is day " . date("d/M/Y");
    echo " The current time is " . date('G:i:s');
    ?>

</body>

</html>