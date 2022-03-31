<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add</title>
</head>
<body>
    <div class="container mt-3">
        <?php
            if(isset($error)){
            ?>
                <p class="alert alert-danger"><?= $error ?></p>
            <?php
            }
        ?>
        <form method="POST" action="">
            <label for="name">Clas Name</label>
            <input type="text" name="name" class="form-control">
            <label for="name">Class Code</label>
            <input type="text" name="code" class="form-control">
            <input type="submit" name="submit" value="Add" class="btn btn-danger">
        </form>
    </div>
</body>
</html>