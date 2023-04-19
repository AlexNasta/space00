<?php
include '../space.php';
$letturajson = new Space();
if (isset($_GET['techId'])) {
    $idTech = $_GET['techId'];
    $_SESSION["tech"]=$idTech;
    $arrayJsonTech = $letturajson->techJson($idTech);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="./styleTech.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1">
    <title>Technology</title>
</head>

<body>

    <div class="container containerTech">
        <?php require '../nav/navbar.php' ?>

        <div class="heroTech">
            <div class="introText">
                <h4>03</h4>
                <h3>space launch 101</h3>
            </div>
            <div class="techDots">
                <a href="./tech.php?techId=0" style=" <?php if (isset($_GET['techId']) && $_GET['techId'] == 0) {
                                                            echo 'background-color:#fff';
                                                        } ?>">
                    <h2 style=" <?php if (isset($_GET['techId']) && $_GET['techId'] == 0) {
                                    echo 'color:#0B0D17';
                                } ?>">1</h2>
                </a>
                <a href="./tech.php?techId=1" style=" <?php if (isset($_GET['techId']) && $_GET['techId'] == 1) {
                                                            echo 'background-color:#fff';
                                                        } ?>">
                    <h2 style=" <?php if (isset($_GET['techId']) && $_GET['techId'] == 1) {
                                    echo 'color:#0B0D17';
                                } ?>">2</h2>
                </a>
                <a href="./tech.php?techId=2" style=" <?php if (isset($_GET['techId']) && $_GET['techId'] == 2) {
                                                            echo 'background-color:#fff';
                                                        } ?>">
                    <h2 style=" <?php if (isset($_GET['techId']) && $_GET['techId'] == 2) {
                                    echo 'color:#0B0D17';
                                } ?>">3</h2>
                </a>
            </div>
            <div class="techInfo">
                <h3>the terminlogy... </h3>
                <h2><?php echo $arrayJsonTech['name'] ?></h2>
                <h5><?php echo $arrayJsonTech['description'] ?></h5>
            </div>
            <div class="imgTech">
            </div>
        </div>
    </div>
</body>

</html>