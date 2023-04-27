<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> <?php echo "Introdução ao if e else";?> </h1>

    <?php
        $idade = 30;

        if ($idade < 18) {
            echo "Menor de idade!";
        }else{
            echo "Maior de idade!";
        }
    ?>

    <?php
        $x = 1;

        while($x <= 5) {
            echo "The number is: $x <br>";
            $x++;
        }
    ?>

</body>
</html>