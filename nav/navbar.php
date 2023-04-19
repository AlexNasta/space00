<link rel="stylesheet" href="../styleStructure.css">
<link rel="stylesheet" href="../nav/styleNave.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow&family=Barlow+Condensed:wght@400;700&family=Bellefair&display=swap" rel="stylesheet">

<nav class="navbar">


    <a href="../home/home.php?home=si"><img class="logo" src="../imgs/shared/logo.svg" alt=""></a>
    <div class="string"></div>
    <img class="hambMenu" src="../imgs/shared/icon-hamburger.svg" alt="">
    <div class="navMenu">

        <img class="closeMenu" src="../imgs/shared/icon-close.svg" alt="">

        <div class="navOpt primo" style=" <?php if (isset($_GET['home'])) {
                                                echo ' border-bottom-width:3px ; ';
                                            } ?>">
            <a href="../home/home.php?home=si">
                <h4>00</h4>
                <h3>home</h3>
            </a>
        </div>
        <div class="navOpt" style=" <?php if (isset($_GET['planId'])) {
                                        echo ' border-bottom-width:3px ; ';
                                    } ?>">
            <a href="../destination/destinations.php?planId=0">
                <h4>01</h4>
                <h3>destination</h3>
            </a>
        </div>
        <div class="navOpt" style=" <?php if (isset($_GET['crewId'])) {
                                        echo ' border-bottom-width:3px ; ';
                                    } ?>">
            <a href="../crew/crew.php?crewId=0">
                <h4>02</h4>
                <h3>crew</h3>
            </a>
        </div>
        <div class="navOpt" style="<?php if (isset($_GET['techId'])) {
                                        echo ' border-bottom-width:3px ; ';
                                    } ?>">
            <a href="../technology/tech.php?techId=0">
                <h4>03</h4>
                <h3>technology</h3>
            </a>
        </div>

    </div>

    <script src="../nav/scriptNavBar.js"></script>
</nav>