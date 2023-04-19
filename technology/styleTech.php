<?php header("Content-type: text/css;charset: UTF-8"); ?>
<?php
include '../space.php';
$letturajson = new Space();

$idTech = $_SESSION["tech"];
$arrayJsonTech = $letturajson->techJson($idTech);

?>

<style type="text/css">
  @media screen and (max-width: 768px) {
    .container {
      background: url(../imgs/backgrounds/tech/background-technology-tablet.jpg);
      width: 768px;
      height: 1024px;
    }
  }

  .container {

    background: url(../imgs/backgrounds/tech/background-technology-desktop.jpg);
  }

  .heroTech {
    display: grid;
    grid-template: 272px 628px/325px 600px 515px;

  }

  .introText {
    grid-column-start: 1;
    grid-column-end: 3;
    grid-row-start: 1;
    grid-row-end: 2;
    display: flex;
    align-items: end;
    margin-left: 166.5px;
    gap: 24px;
    margin-bottom: 26px;
  }

  .introText h4 {
    font-size: 28px;
    letter-spacing: 4.8px;
    opacity: 0.25;

  }

  .introText h3 {
    font-size: 28px;
    letter-spacing: 4.8px;
    font-weight: 400;
  }

  .techDots {
    grid-column-start: 1;
    grid-column-end: 2;
    grid-row-start: 2;
    grid-row-end: 3;
    padding-left: 165px;
    margin-top: 110px;
    display: flex;
    flex-direction: column;
    gap: 32px;
  }

  .techDots a {
    position: relative;

    display: flex;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 1px solid rgb(255, 255, 255, .25);
    justify-content: center;
    align-items: center;
  }

  .techDots a:hover {
    border-color: rgb(255, 255, 255);
    transition: all .3s ease;
  }

  .techDots a h2 {
    position: absolute;
    font-size: 32px;
  }


  @keyframes scendi {
    0% {
      position: absolute;
      bottom: -100%;
      opacity: 0;
    }
    40%{
      opacity: 0.1;
    }
    80% {
      bottom: 5%;
    }
    100% {
    position: relative;
    bottom:0;
      opacity: 1;
    }
  }

  .techInfo {
    grid-column-start: 2;
    grid-column-end: 3;
    grid-row-start: 2;
    grid-row-end: 3;

  }

  .techInfo h3 {
     margin-top: 110px; 
    font-size: 16px;
    line-height: 19px;
    letter-spacing: 2.7px;
    color: #D0D6F9;
    animation: scendi .3s ease-in;
  }

  .techInfo h2 {

    font-size: 56px;
    line-height: 64px;
    margin-top: 11px;
    margin-bottom: 17px;
    animation: scendi .6s ease-in;
  }

  .techInfo h5 {
    font-size: 18px;
    line-height: 32px;
    color: #D0D6F9;
    width: 444px;
    animation: scendi 1s ease-in;
   /*  margin-bottom: 115px; */

  }

  .imgTech {
    grid-column-start: 3;
    grid-column-end: 4;
    grid-row-start: 2;
    grid-row-end: 3;
    animation: destra 1.5s ease;
  }

  @keyframes destra {
    0% {
      position: absolute;
      right: -100%;
      opacity: 0;
    }

    50% {
      right: -100%;
    }

    80% {

      opacity: 0.7;
      right: 5%;
    }

    100% {
      position: relative;
      opacity: 1;
      right: 0;
    }
  }

  .imgTech {
    background: <?php echo 'url(.' . $arrayJsonTech['images']['portrait'] . ')' ?>;
    background-size: contain;
    background-repeat: no-repeat;
  }

  @media screen and (max-width: 768px) {
    .container {
      background: url(../imgs/backgrounds/tech/background-technology-tablet.jpg);
      width: 768px;
      height: 1024px;
    }

    .heroTech {
      display: grid;
      grid-template: 220px 310px 160px 334px/768px;
    }

    .introText {
      gap: 16px;
      margin-bottom: 60px;
      margin-left: 38.5px;
    }

    .introText h4,
    .introText h3 {
      line-height: 24px;
      font-size: 20px;
      letter-spacing: 3.4px;
    }

    .techDots {
      grid-column-start: 1;
      grid-column-end: 2;
      grid-row-start: 3;
      grid-row-end: 4;
      flex-direction: row;
      gap: 16px;
      margin: 0;
      padding: 0;
      justify-content: center;
      margin-top: 56px;
    }

    .techDots a {
      width: 60px;
      height: 60px;
    }

    .techDots a h2 {
      font-size: 24px;
    }

    .imgTech {
      grid-column-start: 1;
      grid-column-end: 2;
      grid-row-start: 2;
      grid-row-end: 3;
      background: <?php echo 'url(.' . $arrayJsonTech['images']['landscape'] . ')' ?>;
      background-size: 774px;
    }

    .techInfo {
      grid-column-start: 1;
      grid-column-end: 2;
      grid-row-start: 4;
      grid-row-end: 4;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .techInfo h3 {
      margin: 0;
      font-size: 16px;
      line-height: 19px;
      letter-spacing: 2.7px;
      text-align: center;
    }

    .techInfo h2 {
      font-size: 40px;
      line-height: 46px;
      margin-top: 16px;
      margin-bottom: 16px;
      text-align: center;
    }

    .techInfo h5 {
      width: 458px;
      font-size: 16px;
      line-height: 28px;
      text-align: center;
    }
  }

  @media screen and (max-width: 376px) {

    html,
    body {
      height: 710px;
    }

    .container {
      background-size: cover;
      background: url(../imgs/backgrounds/tech/background-technology-mobile.jpg);
      width: 376px;
      max-height: 710px;
    }

    .heroTech {
      grid-template: 100px 170px 100px 300px/376px;
    }

    .introText {
      gap: 16px;
      margin: 0;
      justify-content: center;
    }

    .introText h4,
    .introText h3 {
      line-height: 19px;
      font-size: 16px;
      letter-spacing: 2.7px;
      margin-bottom: 32px;
    }

    .imgTech {
      background-size: cover;
    }

    .techDots {
      margin-top: 34px;
    }

    .techDots a {
      width: 40px;
      height: 40px;
    }

    .techDots a h2 {
      font-size: 16px;
    }

    .techInfo h3 {
      margin: 0;
      font-size: 14px;
      line-height: 17px;
      letter-spacing: 2.4px;

    }

    .techInfo h2 {
      font-size: 24px;
      line-height: 28px;
      margin-top: 9px;
      margin-bottom: 16px;

    }

    .techInfo h5 {
      width: 327px;
      font-size: 15px;
      line-height: 25px;
      text-align: center;

    }
  }
</style>