<?php
include '../space.php';
$letturajson = new Space();

$idPianeta = 0;
if (isset($_GET['planId'])) {
    $idPianeta = $_GET['planId'];
    $arrayJsonPianeti = $letturajson->pianetiJson($idPianeta);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./styleDestination.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1">
    <title>Destinations</title>
</head>

<body>

    <div class="container containerDest">
        <?php require '../nav/navbar.php' ?>

        <div class="heroDest">
            <div class="introText">
                <h4>01</h4>
                <h3>pick your destination</h3>
            </div>
            <div class="currentPlanet">
                <div class="imgPlanet">
                    <img src=".<?php echo $arrayJsonPianeti['images']['png'] ?>" alt="">
                </div>
                <div class="planetSide">
                    <div class="allPlanets">

                        <a href="./destinations.php?planId=0" style=" <?php if (isset($_GET['planId']) && $_GET['planId'] == 0) {
                                                                            echo 'border-bottom: 3px solid #fff';
                                                                        } ?>">
                            <h4 style=" <?php if (isset($_GET['planId']) && $_GET['planId'] == 0) {
                                            echo 'color:#fff';
                                        } ?>">Moon</h4>
                        </a>
                        <a href="./destinations.php?planId=1" style=" <?php if (isset($_GET['planId']) && $_GET['planId'] == 1) {
                                                                            echo 'border-bottom: 3px solid #fff';
                                                                        } ?>">
                            <h4 style=" <?php if (isset($_GET['planId']) && $_GET['planId'] == 1) {
                                            echo 'color:#fff';
                                        } ?>">mars</h4>
                        </a>
                        <a href="./destinations.php?planId=2" style=" <?php if (isset($_GET['planId']) && $_GET['planId'] == 2) {
                                                                            echo 'border-bottom: 3px solid #fff';
                                                                        } ?>">
                            <h4 style=" <?php if (isset($_GET['planId']) && $_GET['planId'] == 2) {
                                            echo 'color:#fff';
                                        } ?>">europe</h4>
                        </a>
                        <a href="./destinations.php?planId=3" style=" <?php if (isset($_GET['planId']) && $_GET['planId'] == 3) {
                                                                            echo 'border-bottom: 3px solid #fff';
                                                                        } ?>">
                            <h4 style=" <?php if (isset($_GET['planId']) && $_GET['planId'] == 3) {
                                            echo 'color:#fff';
                                        } ?>">titan</h4>
                        </a>
                    </div>
                    <div class="planetInfos">
                        <h2 class="nome"><?php echo $arrayJsonPianeti['name'] ?></h2>
                        <h5 class="descr"><?php echo $arrayJsonPianeti['description'] ?></h5>
                        <div class="travel">
                            <div class="distance">
                                <h4>avg. distance</h4>
                                <h2><?php echo $arrayJsonPianeti['distance'] ?></h2>
                            </div>
                            <div class="time">
                                <h4>est. travel time</h4>
                                <h2><?php echo $arrayJsonPianeti['travel'] ?></h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</body>

</html>