<!DOCTYPE html>
<html lang="sr">

<head>
    <?php require_once('inc/page_elements/head.meta.inc'); ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="js/jquery.calendar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="js/jquery.calendar.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/togglenav.js"></script>
</head>

<body>
    <div id="wrapp">
        <div id="header-sms">
            <div id="menu-sms">
                <img src="img/BIM_Srbija_logo_small.jpg" name="logo_small" alt="Bim Srbija">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <ul id="main-nav-ss">
            <li><a href="index.php">Početna</a></li>
            <li><a href="o-udruzenju.php">O Udruženju</a></li>
            <li><a href="organi-udruzenja.php">Organi udruženja</a></li>
            <li><a href="clanovi-udruzenja.php">Članovi udruženja</a></li>
            <li><a href="dokumenta.php">Dokumenti</a></li>
            <li><a href="dogadjaji.php">Događaji</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="en/index.php"><img src="img/flag1.png"></a></li>
        </ul>
        <div id="header">
            <div id="header-content">
                <div id="content-holder">
                <a href="index.php" style="margin-bottom:0;"><img src="img/BIM_Srbija_logo.jpg" name="logo" alt="Bim Srbija"></a>
                    <div id="menu">
                    <a href="index.php" style="margin-bottom:0;"><img src="img/BIM_Srbija_logo_small.jpg" name="logo_small" alt="Bim Srbija"></a>
                        <ul>
                            <li><a href="index.php">Početna</a></li>
                            <li><a href="o-udruzenju.php">O Udruženju</a></li>
                            <li><a href="organi-udruzenja.php">Organi udruženja</a></li>
                            <li><a href="clanovi-udruzenja.php">Članovi udruženja</a></li>
                            <li><a href="dokumenta.php">Dokumenti</a></li>
                            <li><a href="dogadjaji.php">Događaji</a></li>
                            <li><a href="kontakt.php">Kontakt</a></li>
                            <li class="flag-holder"><a href="en/index.php"><img src="img/flag1.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="annauncement">
                <a href="agenda.php"><img src="img/dogadjaji/27052019/NS270519.jpg" alt="BIM DANI NS 27052019" id="annImg"></a>
            </div>
        </div>
        <div id="ss-annauncement">
                <a href="agenda.php"><img src="img/dogadjaji/27052019/NS270519.jpg" alt="BIM DANI NS 27052019" id="annImg"></a>
        </div>
        <section id="content">
            <div id="content-main">
                <div id="content-main-centar">
                    <h1>O Udruženju </h1>
                    <p>Udruženje BIM Srbija je nevladino i neprofitno udruženje osnovano radi ostvarivanja ciljeva i aktivnosti u oblasti promocije primene i standardizacije informacionih tehnologija i nauka u građevinarstvu. Cilj Udruženja je organizovano umrežavanje, povezivanje, uzajamno druženje, obrazovanje i omogućavanje razmene iskustava između akademskih eksperata, inženjera, entuzijasta i drugih zainteresovanih pojedinaca u oblasti BIM / VDC tehnologije, kao i rad na standardizaciji BIM / VDC tehnologije i njihove primene, saradnje sa javnim ustanovama, institucijama i udruženjima u zemlji i inostranstvu koje se bave sličnim delatnostima.</p>
                    <a href="o-udruzenju.php" class="button">DETALJNIJE</a>
                </div>
                <div id="my-calendar"></div>
            </div>
            <div id="join">
                <div id="join-left">
                    <h2>Pridruži se našem timu</h2>
                </div>
                <div id="join-right">
                    <a href="o-udruzenju.php#clanstvo" class="button">POSTANI ČLAN</a>
                </div>
            </div>
        </section>
        <?php require_once('inc/page_elements/footer.inc'); ?>
    </div>
</body>
<script type="text/javascript" src="js/event.js"></script>


</html>
