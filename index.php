<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- CSS custom -->
    <link rel="stylesheet" href="./css/style.css" />
</head>




<?php require_once './films_db.php' ?>
<div class="ms_container mt-4 ">

    <h1 class="text-center text-warning mt-4">Best Movies in Town!!!</h1>

    <div class="row">
        <?php foreach ($movies as $movie) { ?>
            <div class="col-sm-4">
                <div class="card text-center  mt-4 mb-4">
                    <h3><?php echo $movie->title; ?></h3>
                    <img src="<?php echo $movie->image; ?>" alt="">
                    <p class="mt-2">Genres: <?php echo implode(",", $movie->genres); ?></p>
                    <p>Year: <?php echo $movie->year; ?> </p>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
</body>

</html>