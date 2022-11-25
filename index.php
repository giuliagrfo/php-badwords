<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form action="greetings.php" method="get">
            <div class="form-group w-50 mb-3">
                <label for="paragraph" class="form-label text-uppercase">Input Paragraph</label>
                <input type="text" class="form-control" name="paragraph" id="paragraph">
            </div>
            <div class="form-group w-50 mb-3">
                <label for="word" class="form-label text-uppercase">Input A Bad Word</label>
                <input type="text" class="form-control" name="word" id="word">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" type="submit">Submit</button>
                <button type="submit" class="btn btn-danger"  type="delete">Delete</button>
            </div>
        </form>
    </div>
</body>
</html>