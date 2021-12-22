<?php include './oop.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop-Php</title>
</head>
<body>
    <h1>Hello</h1>
    <div class="card">
        <?php 
            $movie1 = new Movie('Qui rido io','2021', '10', 30,
            '18', 0, 'https://pad.mymovies.it/filmclub/2018/11/049/locandina.jpg' );
        ?>
        <img src="<?php echo $movie1->img ?>" width="200px" alt="">
        <h2>Titolo del film:
            <?php echo $movie1->title ?>
        </h2>
        <p>Anno di produzio1ne:
            <span>
                <strong>
                    <?php echo $movie1->year_movie ?>
                </strong>
            </span>
        </p>
        <span>
        <span>
            Voto della critica:
            <strong>
                <?php echo $movie1->vote ?>
                stelle su 10
            </strong>
        </span>
        <p>Prezzo bglietto: 
            <strong>
                <?php echo $movie1->price ?>$
            </strong>
        </p>
        <span>Il film é adatto ad un pubblico di etá superiore:
            <strong>
                <?php echo $movie1->age ?>+
            </strong>
        </span>
        <p>Sconto applicato:
            <strong>
                <?php echo $movie1->getSconto() ?>%
            </strong>
        </p>
        <hr>
    </div>

    <div class="card">
        <?php 
            $movie2 = new Movie('Spider-man 2','2002', '7', 5,
            '16', 0, 'http://upload.wikimedia.org/wikipedia/en/thumb/0/02/Spider-Man_2_Poster.jpg/220px-Spider-Man_2_Poster.jpg' );
        ?>
        <img src="<?php echo $movie2->img ?>" width="200px" alt="">
        <h2>Titolo del film:
            <?php echo $movie2->title ?>
        </h2>
        <p>Anno di produzio1ne:
            <span>
                <strong>
                    <?php echo $movie2->year_movie ?>
                </strong>
            </span>
        </p>
        <span>
        <span>
            Voto della critica:
            <strong>
                <?php echo $movie2->vote ?>
                stelle su 10
            </strong>
        </span>
        <p>Prezzo bglietto: 
            <strong>
                <?php echo $movie2->price ?>$
            </strong>
        </p>
        <span>Il film é adatto ad un pubblico di etá superiore:
            <strong>
                <?php echo $movie2->age ?>+
            </strong>
        </span>
        <p>Sconto applicato:
            <strong>
                <?php echo $movie2->getSconto() ?>%
            </strong>
        </p>
    </div>
    <hr>

    <div class="card">
        <?php 
            $movie3 = new Movie('House of Gucci','2021', '9', 25,
            '18', 0, 'https://www.liberta.it/wp-content/uploads/2021/12/house-of-gucci-691x1024-COVER-1280.jpg' );
        ?>
        <img src="<?php echo $movie3->img ?>" width="200px" alt="">
        <h2>Titolo del film:
            <?php echo $movie3->title ?>
        </h2>
        <p>Anno di produzio1ne:
            <span>
                <strong>
                    <?php echo $movie3->year_movie?>
                </strong>
            </span>
        </p>
        <span>
        <span>
            Voto della critica:
            <strong>
                <?php echo $movie3->vote ?>
                stelle su 10
            </strong>
        </span>
        <p>Prezzo bglietto: 
            <strong>
                <?php echo $movie3->price ?>$
            </strong>
        </p>
        <span>Il film é adatto ad un pubblico di etá superiore:
            <strong>
                <?php echo $movie3->age ?>+
            </strong>
        </span>
        <p>Sconto applicato:
            <strong>
                <?php echo $movie3->getSconto() ?>%
            </strong>
        </p>
    </div>
    <hr>

    <div class="card">
        <?php 
            $movie4 = new Movie('Sing 2 - Sempre più forte','2021', '5', 10,
            '6', 0 );
        ?>
        <img src="<?php echo $movie4->img ?>" width="200px" alt="">
        <h2>Titolo del film:
            <?php echo $movie4->title ?>
        </h2>
        <p>Anno di produzio1ne:
            <span>
                <strong>
                    <?php echo $movie4->year_movie?>
                </strong>
            </span>
        </p>
        <span>
        <span>
            Voto della critica:
            <strong>
                <?php echo $movie4->vote ?>
                stelle su 10
            </strong>
        </span>
        <p>Prezzo bglietto: 
            <strong>
                <?php echo $movie4->price ?>$
            </strong>
        </p>
        <span>Il film é adatto ad un pubblico di etá superiore:
            <strong>
                <?php echo $movie4->age ?>+
            </strong>
        </span>
        <p>Sconto applicato:
            <strong>
                <?php echo $movie4->getSconto() ?>%
            </strong>
        </p>
    </div>
    <hr>
</body>
</html>