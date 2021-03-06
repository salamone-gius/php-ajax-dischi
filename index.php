<?php
    require_once __DIR__ . '/server/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- VUE -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <!-- Axios -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="css/style.css">
        <title>PHP-Ajax-Dischi</title>
    </head>
    <body>
        <div id="app">
            <header>
                <!-- <div class="container-fluid py-2">
                    <img class="my-2" src="img/spotify-logo.png" alt="Spotify-logo">
                </div> -->
            </header>
            <main>
                <section class="albums py-5">
                    <div class="container">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3 g-lg-5">
                            <?php foreach($database as $element) { ?>
                                <div class="col">
                                    <div class="album-card">
                                        <img src="<?php echo $element["poster"]; ?>" alt="<?php echo $element["title"]; ?>">
                                        <h1><?php echo $element["title"]; ?></h1>
                                        <h2><?php echo $element["author"]; ?></h2>
                                        <h5><?php echo $element["year"]; ?></h5>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
            </main>
        </div>

        <script src="js/main.js"></script>
    </body>
</html>