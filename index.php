<?php

require_once __DIR__ . '/Model/Pizza.php';
require_once __DIR__ . '/Model/Media.php';
require_once __DIR__ . '/db/db.php';


//var_dump($diavola);

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5  d-flex ">

    <?php
    foreach($pizze as $pizza):

    ?>

        <div  class="card m-4 " style="width: 18rem;">
            <img  src="img/<?php  echo $pizza->image?->file_name ?? 'pizza_placeholder.png'  ?>" class="card-img-top" alt="<?php echo $pizza->image?->name ?? '' ?>">
            <div class="card-body">
                <h5 class="card-title"><?php  echo $pizza->name  ?></h5>
                <p class="card-text"><?php  echo implode(", " , $pizza->ingredients)  ?></p>
                <p class="card-text"> &euro; <?php  echo $pizza->price ?></p>
            </div>
        </div>
<?php
endforeach;
?>
    </div>

</body>

</html>