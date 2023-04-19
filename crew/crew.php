<?php
include '../space.php';
$letturajson = new Space();


if (isset($_GET['crewId'])) {
    $idCrew = $_GET['crewId'];
    $arrayJsonCrew = $letturajson->crewJson($idCrew);
}


/* $arrayJsonPianeti = $letturajson->pianetiJson($idPianeta);
var_dump($arrayJsonPianeti['images']['webp']); */

/*
$idTech = 0;
$arrayJsonTech = $letturajson->techJson($idTech);
 echo $arrayJsonTech['name'];  */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./styleCrew.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1">
    <title>Crew</title>
</head>

<body>

    <div class="container containerCrew">
        <?php require '../nav/navbar.php' ?>
        <div class="heroCrew">
            <div class="introText">
                <h4>02</h4>
                <h3>meet your crew</h3>
            </div>
            <div class="descriptionMember">
                <h6><?php echo $arrayJsonCrew['role'] ?></h6>
                <h2><?php echo $arrayJsonCrew['name'] ?></h2>
                <h5><?php echo $arrayJsonCrew['bio'] ?></h5>
            </div>
            <div class="dots">
                <a href="./crew.php?crewId=0" style=" <?php if (isset($_GET['crewId']) && $_GET['crewId'] == 0) {
                                            echo 'opacity: 1;';
                                        } ?>"></a>
                <a href="./crew.php?crewId=1" style=" <?php if (isset($_GET['crewId']) && $_GET['crewId'] == 1) {
                                            echo 'opacity: 1;';
                                        } ?>"></a>
                <a href="./crew.php?crewId=2" style=" <?php if (isset($_GET['crewId']) && $_GET['crewId'] == 2) {
                                            echo 'opacity: 1;';
                                        } ?>"></a>
                <a href="./crew.php?crewId=3" style=" <?php if (isset($_GET['crewId']) && $_GET['crewId'] == 3) {
                                            echo 'opacity: 1;';
                                        } ?>"></a>
            </div>
            <div class="imgMember">
                <img src=".<?php echo $arrayJsonCrew['images']['png'] ?>" alt="">
            </div>
        </div>
    </div>



</body>

</html>