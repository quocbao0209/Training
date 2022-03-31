<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-3">
        <a href="index.php?controller=class&action=add" class="btn btn-primary">add</a>
        
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Code</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                foreach ($data as $class => $cl){
                    ?>
                    <tr>
                        <td><?php echo $cl['classname'] ?></td>
                        <td><?php echo $cl['classcode'] ?></td>
                        <td>
                            <a href="index.php?controller=class&action=edit&id=<?=$cl['id'] ?>" class="btn btn-primary">Edit</a>
                            <a href="index.php?controller=class&action=delete&id=<?=$cl['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>