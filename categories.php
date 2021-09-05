<?php
    require "controller/server.php";
    session_start();

?>
<?php
    if(isset($_POST['check_category'])){
        $item_search = ucwords(htmlspecialchars(stripslashes($_POST['item_cat'])));

        $search_query = $connectdb->prepare("SELECT * FROM stories WHERE category LIKE '%$item_search%' ORDER BY post_date");
        $search_query->execute();
        
    }

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
    <title>Eristics | <?php echo $item_search;?></title>
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
            
            <h2>Showing Stories for <strong><?php echo $item_search?></strong></h2>
            <hr>
            <div class="results">
                
                <?php 
                    if(!$search_query->rowCount()){
                        echo "<p class='no_result'>'No result found!'</p>";
                    }
                    $shows = $search_query->fetchAll();
                    foreach($shows as $show):
                ?>
                <figure>
                    <a href="javascript:void(0);" onclick="showItems('<?php echo $show->story_id?>')">
                        <img src="<?php echo 'media/'.$show->foto;?>" alt="<?php echo $show->title;?>">
                    
                        <figcaption>
                            <div class="todo">
                                <h3><?php echo $show->title?></h3>
                                <p><?php echo $show->summary?></p>
                                <p><i class="fas fa-layer-group"></i> <?php echo $show->category?></p>
                                <p class="post_date"><i class="fas fa-calendar"></i> <?php echo date("jS M, Y", strtotime($show->post_date));?></p>
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
