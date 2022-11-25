<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BADWORDS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <?php

    $paragraph = $_GET['paragraph'];
    $badword = $_GET['word'];
    echo $paragraph .' is ' .strlen($paragraph) .' characters long' .'<br>'; 

    $censored = str_ireplace($badword, '***', $paragraph);
    echo $censored . ' is '. strlen($censored) . ' characters long';

    ?>

</body>
</html>