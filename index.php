<?php

    session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPEAKER PORTAL</title>

    <link rel="stylesheet" href="style.css">

    <!-- bootstrap ini -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type="text/javascript"></script>


</head>
<body>

<header>
    <div class="container">
        <div class="row">

            <!-- bal oldali szekció -->
            <div class="col-md-6">
                <table class="left_table">
                    <tr>
                        <td><img src="picture/speaker_portal_sign.jpg" alt="speaker_img" class="img-fluid"></td>
                        <td>
                            <div class="verti-line"></div>
                        </td>
                        <td>
                            <h1>SPEAKER<br>PORTAL</h1>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- jobb oldali szekció -->
            <div class="col-md-6" style="text-align: right">
                <img src="picture/right_logo.jpg" alt="logo" class="logo">

                <table class="right_table">
                    <tr>
                        <td class="upper_row">English</td>
                        <td class="border-header-right"></td>
                        <td class="upper_row">Contact</td>
                        <td class="upper_row">Sitemap</td>
                    </tr>
                    <tr style="border-bottom: solid 2px lightgray">
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="bottom_row"><i class="fa fa-fw fa-envelope bottom_row"></i>My collection</td>
                        <td class="bottom_row"><a href="index.php?page=logout">Logout</a></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</header>



<nav class="shadow-lg navbar navbar-expand-sm bg-light navbar-light">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link currently_active" href="index.php?page=login"><i class="fa fa-fw fa-home"></i></a>
            </li>
            <li class="nav-item mystuff">
                <a class="nav-link" href="index.php?page=mpaf">MPAF</a>
            </li>
            <li class="nav-item mystuff">
                <a class="nav-link" href="index.php?page=venous">VENOUS</a>
            </li>
            <li class="nav-item mystuff">
                <a class="nav-link" href="index.php?page=acs">ACS</a>
            </li>
            <li class="nav-item mystuff">
                <a class="nav-link" href="index.php?page=studies">KIVAMOXOBAN STUDIES</a>
            </li>
            <li class="nav-item mystuff">
                <a class="nav-link" href="index.php?page=background_info">BACKGROUND INFORMATION</a>
            </li>
            <li class="line"></li>
        </ul>
    </div>
</nav>




<div class="container-fluid">
    <?php

        $l = mysqli_connect('localhost', 'root', '', 'speaker_portal');

        switch ($_GET['page'])
        {
            case 'mpaf': include 'mpaf.php'; break;
            case 'logout': include 'logout.php'; break;
            case 'venous': include 'venous.php'; break;
            case 'acs': include 'acs.php'; break;
            case 'studies': include 'studies.php'; break;
            case 'background_info': include 'background.php'; break;

            default: include 'login.php'; break;

        }

        mysqli_close($l);
    ?>
</div>



<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="footer_links">
                    <a href="#">Conditions of use</a>
                    <div class="footer_border"></div>
                    <a href="#">Privacy statement</a>
                    <div class="footer_border"></div>
                    <a href="#">Imprint</a>
                </div>
            </div>
            <div class="col-md-6">
                <p class="footer_text">This site is intended to provide information to an international audience outside the USA and UK.</p>
            </div>
        </div>
    </div>
</footer>


</body>
</html>


