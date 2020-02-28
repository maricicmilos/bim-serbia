<!DOCTYPE html>
<html lang="en">

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
                <img src="../img/BIM_Srbija_logo_small.jpg" name="logo_small" alt="Bim Srbija">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <ul id="main-nav-ss">
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="representatives.php">Representatives</a></li>
            <li><a href="members.php">Members</a></li>
            <li><a href="documents.php">Documents</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="../index.php"><img src="../img/flag2.png"></a></li>
        </ul>
        <div id="header">
            <div id="header-content">
                <div id="content-holder">
                <a href="index.php" style="margin-bottom:0;"><img src="../img/BIM_Srbija_logo.jpg" name="logo" alt="Bim Srbija"></a>
                    <div id="menu">
                        <a href="index.php" style="margin-bottom:0;"><img src="../img/BIM_Srbija_logo_small.jpg" name="logo_small" alt="Bim Srbija"></a>
                        <ul>
                        <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="representatives.php">Representatives</a></li>
                            <li><a href="members.php">Members</a></li>
                            <li><a href="documents.php">Documents</a></li>
                            <li><a href="events.php">Events</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="flag-holder"><a href="../index.php" style="margin:0;"><img src="../img/flag2.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="annauncement">
                <a href="agenda.php"><img src="../img/dogadjaji/27052019/enNS270519.jpg" alt="BIM DAYS NS 27052019" id="annImg"></a>
            </div>
        </div>
        <div id="ss-annauncement">
            <a href="agenda.php"><img src="../img/dogadjaji/27052019/enNS270519.jpg" alt="BIM DAYS NS 27052019" id="annImg"></a>
        </div>
        <section id="content">
            <div id="content-main">
                <div id="content-main-centar">
                    <h1>About the Association</h1>
                    <p>Association BIM Serbia is a non-governmental and nonprofit association established to achieve goals and activities aimed at promoting the application and standardization of information technologies and sciences in construction. The goal of the Association is organized networking, connecting, socializing, education, and facilitating the sharing of experience among academic experts, engineers, enthusiasts and other interested individuals in the field of BIM/VDC technology, as well as the work on the standardization of BIM/VDC technology along with their application, cooperation with public organizations, institutions and associations engaged in the same types of activities, both in the country and abroad.</p>
                    <a href="about-us.php" class="button">MORE INFO</a>
                </div>
                <div id="my-calendar"></div>
            </div>
            <div id="join">
                <div id="join-left">
                    <h2>Join our Team</h2>
                </div>
                <div id="join-right">
                    <a href="about-us.php#clanstvo" class="button">BECOME A MEMBER</a>
                </div>
            </div>
        </section>
        <?php require_once('inc/page_elements/footer.inc'); ?>
    </div>
</body>
<script type="text/javascript" src="js/event.js"></script>


</html>