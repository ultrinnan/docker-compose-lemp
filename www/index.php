<!DOCTYPE html>
<html lang="en-EN" prefix="og: http://ogp.me/ns#">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link rel="icon" type="image/png" href="assets/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEDIRKO.PRO - Full Stack Web Development and Solutions</title>
    <!--    Open Graph protocol-->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://fedirko.pro/">
    <meta property="og:site_name" content="FEDIRKO.PRO">
    <meta property="og:locale" content="en_EN">
    <meta property="og:title" content="FEDIRKO.PRO - Full Stack Web Development and Solutions">
    <meta property="og:image" content="https://fedirko.pro/images/logo_sqv.png">
    <meta property="og:description" content="Full stack web development and efficient solutions for your business. Consulting services, SEO, security audit, help and support, etc.">
    <meta name="author" content="Serhii Fedirko">
    <meta name="description" content="Full stack web development and efficient solutions for your business. Consulting services, SEO, security audit, help and support, etc.">
    <link href="assets/css/bootstrap.min.css?v=1525689513" rel="stylesheet">
    <link href="assets/css/main.min.css?v=1540910293" rel="stylesheet">
    <style>.first { background: url('assets/images/bg/space_bg.jpg') no-repeat center; background-size: cover;}</style></head>
<body>

<header>
    <div class="container">
        <a class="logo" href="/"></a>
        <div class="mobile_menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul id="w0" class="top_menu nav">
            <li class="dropdown">
                <a class="dropdown-toggle" href="https://fedirko.pro/solutions" data-toggle="dropdown">Solutions <span class="caret"></span></a>
                <ul id="w2" class="dropdown-menu">
                    <li><a href="https://fedirko.pro/solutions/full-cycle-development" tabindex="-1">FULL-CYCLE DEVELOPMENT</a></li>
                    <li><a href="https://fedirko.pro/solutions/wordpress-solutions" tabindex="-1">WORDPRESS SOLUTIONS</a></li>
                    <li><a href="https://fedirko.pro/solutions/mobile-solutions" tabindex="-1">MOBILE SOLUTIONS</a></li>
                    <li><a href="https://fedirko.pro/solutions/help-and-support" tabindex="-1">HELP AND SUPPORT</a></li>
                </ul>
            </li>
            <li id="contact_button"><a href="https://fedirko.pro/contact">Contact us</a></li></ul>    </div>
</header>

<main>
    <section class="first">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Docker Compose</h1>
                    <h2>LAMP stack local environment</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h3 class="title is-3 has-text-centered">Environment</h3>
                    <hr>
                    <div class="content">
                        <ul>
                            <li><?= apache_get_version(); ?></li>
                            <li>PHP <?= phpversion(); ?></li>
                            <li>
                                <?php
                                $link = mysqli_connect("mysql", "root", "tiger", null);

                                /* check connection */
                                if (mysqli_connect_errno()) {
                                    printf("MySQL connecttion failed: %s", mysqli_connect_error());
                                } else {
                                    /* print server version */
                                    printf("MySQL Server %s", mysqli_get_server_info($link));
                                }
                                /* close connection */
                                mysqli_close($link);
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <h3 class="title is-3 has-text-centered">Quick Links</h3>
                    <hr>
                    <div class="content">
                        <ul>
                            <li><a href="http://localhost/phpinfo.php">phpinfo()</a></li>
                            <li><a href="http://localhost:8080">phpMyAdmin</a></li>
                            <li><a href="http://localhost/test_db.php">Test DB Connection</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Like this Docker compose environment?</h3>
                    <h4>Please consider small donation :)</h4>
                    <a class="contact_button" href="https://fedirko.pro/donations">Support us</a>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <div class="row footer_list">
            <div class="col-md-6 col-sm-6">
                <div class="footer_title">Contacts</div>
                <div class="footer_phones">
                    <a href="tel:+380666272979">+3 8 066 627 29 79</a>
                    <br>
                    <a href="tel:+380660034001">+3 8 066 003 40 01</a>
                </div>
                <div><a href="mailto:contact&#64;fedirko&#46;pro">contact&#64;fedirko&#46;pro</a></div>
                <div class="footer_address">Ukraine, Kyiv</div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="footer_title">
                    <a href="https://fedirko.pro/solutions">Solutions</a>
                </div>
                <a href="https://fedirko.pro/solutions/full-cycle-development">FULL-CYCLE DEVELOPMENT</a><br>
                <a href="https://fedirko.pro/solutions/wordpress-solutions">WORDPRESS SOLUTIONS</a><br>
                <a href="https://fedirko.pro/solutions/mobile-solutions">MOBILE SOLUTIONS</a><br>
                <a href="https://fedirko.pro/solutions/help-and-support">HELP AND SUPPORT</a><br>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row footer_copy">
            Copyright 2014 — 2019 &copy; FEDIRKO.PRO. All rights reserved.
        </div>
    </div>
</footer>

<script src="assets/js/jquery.min.js?v=1525689513"></script>
<script src="assets/js/main.js?v=1530539347"></script>
</body>
</html>