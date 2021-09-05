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
    <title>Eristics | News Archive</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="icon" type="image/png" href="images/eristics_logo_small.png" size="32X32">
    <link rel="stylesheet" href="controller/style.css">
    
</head>
<body>
    <?php include "header.php";?>
    <?php include "navigation.php";?>
    
    <main>
        <section id="searchResults">
            
            <h2>News Archive</h2>
            <hr>
            <div class="results">
                
                <?php 
                    $get_news = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 10) AS details, story_id, title, category, foto, posted_by, update_status, post_date, headline_id, post_time, update_status FROM stories WHERE update_status = 1 ORDER BY Post_time DESC");
                    $get_news->execute();
                    $shows = $get_news->fetchAll();
                    foreach($shows as $show):
                ?>
                <figure>
                    <a href="javascript:void(0);" onclick="showItems('<?php echo $show->story_id?>')">
                        <img src="<?php echo 'media/'.$show->foto;?>" alt="<?php echo $show->title;?>">
                    
                        <figcaption>
                            <div class="todo">
                                <h3><?php echo $show->title?></h3>
                                <p><?php echo $show->details?></p>
                                <p><i class="fas fa-layer-group"></i> <?php echo $show->category?></p>
                                <p class="post_date"><!-- <i class="fas fa-calendar"></i> --> <?php echo date("jS M, Y", strtotime($show->post_date));?></p>
                            </div>
                            
                        </figcaption>
                    </a>
                </figure>
                
                <?php endforeach ?>
            </div>
        </section>

        
    </main>
    <?php include "footer.php"?>
    <script src="controller/jquery.js"></script>
    <script src="controller/script.js"></script>
    
</body>
</html>
