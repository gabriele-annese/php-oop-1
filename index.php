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
            $movie1 = new Movie('Qui rido io','2021', '10', 20,
            '18' );
        ?>
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
    </div>

    <div class="card">
        <?php 
            $movie2 = new Movie('Spider-man','2002', '7', 20,
            '16' );
        ?>
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

    <div class="card">
        <?php 
            $movie3 = new Movie('House of Gucci','2021', '9', 20,
            '18' );
        ?>
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
</body>
</html>