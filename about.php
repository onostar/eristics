<?php
    require "controller/server.php";
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eristics is a target oriented 
	and goal driven platform/blog with the sole aim of providing 
	value-driven services, correct and information through the application of strategic and dynamic 
	solutions to meet up with challenges in all strata of the society">
    <meta name="keyword" content="events, eristics, eristicminds, politics, gossips,
	graphics, web, blog, news">
    <title>Eristics | Who we are</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="icon" type="image/png" href="images/eristics_logo_small.png" size="32X32">
    <link rel="stylesheet" href="controller/style.css">
    
</head>
<body>
    <?php include "header.php";?>
    <?php include "navigation.php";?>
    
    <main class="who_we_are">
        <section id="about_us">
            <h3>Who we are</h3>
            <div class="about_us">
                <div class="about_text">
                    <p>Eristicminds is a target oriented and goal driven platform, managed by a group of young, talented, quick-witted and industrious minds, with the sole aim of providing value-driven services through the application of strategic and dynamic solutions to meet up with challenges in all strata of the society.<br><br>

                    The principal objective of the firm is to enhance, facilitate and provide value-driven services through the application of strategic and dynamic solutions to meet up with challenges in all strata of the society and to manage the rigors of daily activities in the private and public sectors.</p>
                </div>
                <div class="about_img">
                    <img src="images/about_us.png" alt="Eristic minds">
                </div>
            </div>
            
        </section>
        <section id="mission">
            <div class="vision">
                <h3>Vision statement</h3>
                <p>Our Vision is to build a professional firm of international standard in a changing world noted for ‘Quality Service, Integrity and Excellence’ and with a mission to provide highly innovative and articulate professional service.</p>
            </div>
            <div class="mission">
                <h3>Mission Statement</h3>
                <p>To create a catalogue of services and strategies that can be used through effective publicity and other media related activities to obtain best results for our esteem readers and to fully harness the potentials of advertising and marketing as Publicity strategy, that offer possibilities to clients Media and Publicity activities to become more productive with less cost while ensuring that their core message are clearly communicated to the public.</p>
            </div>
        </section>
        <section id="values">
            <h3>Core Values</h3>
        </section>
        
    </main>
    <?php include "footer.php"?>
    <script src="controller/jquery.js"></script>
    <script src="controller/script.js"></script>
    
</body>
</html>
