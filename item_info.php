<?php
    require "controller/server.php";
    session_start();
?>
<?php
    if(isset($_GET['item'])){
        $story_id = $_GET['item'];
        $view_story = $connectdb->prepare("SELECT * FROM stories WHERE story_id = :story_id");
        $view_story->bindvalue('story_id', $story_id);
        $view_story->execute();

        $items = $view_story->fetchAll();
        foreach($items as $item):
            

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $item->details?>">
    <meta name="keyword" content="events, eristics, eristicminds, politics, gossips,
	graphics, web, blog, news">
    <title> Eristics | <?php echo $item->title;?>
    </title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="icon" type="image/png" href="images/eristics_logo_small.png" size="32X32">
    <link rel="stylesheet" href="controller/style.css">
    
</head>
<body>
    <?php include "header.php";?>
    <?php include "navigation.php";?>
    
    <main class="story_main">
        <section id="itemContent">
            
            <div class="itemInfo">
                
                <?php
                    $item_category = $item->category;
                    $item_title = $item->title;
                ?>
                <div class="content_img">
                        <img src="<?php echo "media/".$item->foto?>" alt="<?php echo $item->title;?>">
                </div>
                <figure class="item_details"> 
                    
                    <div class="advertss">
                        <?php include "adverts.php";?>
                    </div>
                    <figcaption>
                        <h3><?php echo $item->title?></h3>
                        
                        <hr>
                        <div class="item_descriptions">
                            <p><?php echo $item->details;?></p><!-- 
                            <div class="comment">
                                <button id="comment">Comment</button>
                            </div> -->
                            <p class="post_date"><i class="fas fa-calendar"></i> Posted: <?php echo date("jS M, Y", strtotime($item->post_date));?></p>
                        </div> 
                        <!--  -->   
                    </figcaption>
                    
                </figure>
                
                <?php endforeach; }?>
                <div class="comment">
                    <p> Share <i class="fas fa-share-alt"></i></p>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://eristics.com.ng/item_info.php?item=<?php echo $story_id;?>" target="_blank" title="share on Facebook">Facebook <i style="color:blue;" class="fab fa-facebook"></i></a>
                    <a href="whatsapp://send?text=https://eristics.com.ng/item_info.php?item=<?php echo $story_id;?>" data-action="share/whatsapp/share" target="_blank" title="share on Whatsapp">Whatsapp <i style="color:green;" class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </section>
        <section id="searchResults" class="related">
            
            <h2>Related articles</h2>
            <hr>
            <div class="results">
                <?php
                    $select_featured = $connectdb->prepare("SELECT * FROM stories WHERE category LIKE '%$item_category%' AND title != '$item_title' ORDER BY post_date DESC LIMIT 4");
                    $select_featured->execute();
                    $shows = $select_featured->fetchAll();
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
            <!-- <button id="view_more">View more</button>
            <button id="show_less">Show less</button> -->
        </section>
    </main>    
    <?php include "footer.php";?>
    <!-- <script src="bootstrap.min.js"></script> -->
    <script src="controller/jquery.js"></script>
    <script src="controller/script.js"></script>
    
</body>
</html>
