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
            $movie1 = new Movie('Spider-man','2002', '7', 20,
            '18' );
        ?>
        <h2>Titolo del film:
            <?php echo $movie1->title ?>
        </h2>
        <p>Anno di produzio1ne:
            <span>
                <strong>
                    <?php echo $movie1->tiyear_movietle ?>
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
            $movie1 = new Movie('House of Gucci','2021', '8','30','16');
        ?>
        <h2>Titolo del film:
            <?php echo $movie1->title ?>
        </h2>
        <p>Anno di produzio1ne:
            <?php echo $movie1->tiyear_movietle ?>
        </p>
        <span><?php echo $movie1->vote ?> 
             stelle su 10
        </span>
        <p>prezzo bglietto: 
            <?php echo $movie1->price ?>$
        </p>
        <span>Il film é adatto ad un pubblico di etá superiore:
            <?php echo $movie1->age ?>+
        </span>
        <p>Sconto applicato:
            <?php echo $movie1->getSconto($sconto) ?>%
        </p>
    </div>

    <div class="card">
        <?php 
            $movie1 = new Movie('Qui rido io','2021', '10','40','18');
        ?>
        <h2>Titolo del film:
            <?php echo $movie1->title ?>
        </h2>
        <p>Anno di produzio1ne:
            <?php echo $movie1->tiyear_movietle ?>
        </p>
        <span><?php echo $movie1->vote ?> 
             stelle su 10
        </span>
        <p>prezzo bglietto: 
            <?php echo $movie1->price ?>$
        </p>
        <span>Il film é adatto ad un pubblico di etá superiore:
            <?php echo $movie1->age ?>+
        </span>
        <p>Sconto applicato:
            <?php echo $movie1->getSconto($sconto) ?>%
        </p>
    </div>
</body>
</html>