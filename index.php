<?php 
    include "controller/server.php";
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
    <title>Eristics | Welcome</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="icon" type="image/png" href="images/eristics_mini_logo.png" size="32X32">
    <link rel="stylesheet" href="controller/style.css">
    
</head>
<body>
    <!-- <div class="construction">
        <div class="background">
            <img src="images/under_construction.jpg" alt="eristic">
        </div>
        <div class="construct">
            <h2>We are Under Construction</h2>
            <p>We will be live in a bit....</p>
            <img src="images/eristics_logo.png" alt="Eristics">
            <h1>eristics</h1>
        </div>
        
    </div> -->
    <div class="loader">
        <img src="images/eristics_logo_small.png" alt="Eristics">
        <h1>eristics</h1>

    </div>
    <div class="main">

        <?php include "header.php";?>
        <p class="successful">
            <?php
                if(isset($_SESSION['success'])){
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                }
            ?>
            <?php
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }
            ?>
        </p>
        <section id="bannerContents">
            <aside id="asideLeft" class="main_cat">
                <?php
                    $get_ad = $connectdb->prepare("SELECT * FROM ads WHERE ads_id = 2");
                    $get_ad->execute();
                    $ads = $get_ad->fetchAll();
                    foreach($ads as $ad):
                ?>
                <img src="<?php echo "media/".$ad->photo;?>" alt="Eristics ads">
                <?php 
                    endforeach;
                    if(!$get_ad->rowCount()){
                        echo "<div class='adds_non'>
                        <p>This space is for adds Placement<br> Contact <a class='contact_us' href='javascript:void(0)'>Admin</a> to place your adds here!</p>
                        </div>";
                    }

                ?>
            </aside>
            <?php include "navigation.php";?>
            <section id="banner">
                <div class="slide">
                    <?php
                        $get_banner1 = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 10) AS details, story_id, title, category, foto, posted_by, update_status, post_date, headline_id, post_time, update_status FROM stories WHERE headline_id = 1 AND update_status = 1");
                        $get_banner1->execute();
                        $banners = $get_banner1->fetchAll();
                        foreach($banners as $banner):
                    ?>
                    <div class="slides">
                        
                        <div class="slide_img">
                            <img src="<?php echo "media/".$banner->foto;?>" alt="<?php echo $banner->title;?>">
                        </div>
                        <div class="description">
                            <h2><?php echo $banner->title;?></h2>
                            <p><?php echo $banner->details;?></p>
                            <div class="links">
                                <a onclick="showItems('<?php echo $banner->story_id;?>')" href="javascript:void(0)"><i class="fas fa-paper-plane"></i> Read more</a>
                            </div>
                            
                        </div>
                        
                    </div>
                    <?php endforeach;?>                
                </div>
            </section>
            <aside id="asideRight">
                <nav id="help">
                    <ul>
                        <li>
                            <a class="contact_us" href="javascript:void(0)" title="Get in touch">
                                <i class="far fa-question-circle"></i>
                                <div class="note">
                                    <h3>Help center</h3>
                                    <p>Get in touch</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="about.php" title="who we are">
                                <i class="fas fa-street-view"></i>
                                <div class="note">
                                    <h3>About us</h3>
                                    <p>Who we are</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="fas fa-hand-holding-usd"></i>
                                <div class="note">
                                    <h3>Support Us</h3>
                                    <p>Join the Team</p>
                                </div>
                            </a>
                        </li>                          
                    </ul>
                </nav>
                <div id="adds">
                    <?php
                        $get_ad = $connectdb->prepare("SELECT * FROM ads WHERE ads_id = 1");
                        $get_ad->execute();
                        $ads = $get_ad->fetchAll();
                        foreach($ads as $ad):
                    ?>
                    <img src="<?php echo "media/".$ad->photo;?>" alt="Eristics ads">
                    <?php 
                        endforeach;
                        if(!$get_ad->rowCount()){
                            echo "<div class='adds_non'>
                            <p>This space is for adds Placement<br> Contact <a class='contact_us' href='javascript:void(0)'>Admin</a> to place your adds here!</p>
                            </div>";
                        }

                    ?>
                </div>
            </aside>
        </section>
        <section id="links">
            <?php include "adverts.php";?>
        </section>
        <main>
            <!-- Featured Items -->
            <section id="featured">
                <h2>Just in</h2>
                <hr>
                <div class="featured">
                    <?php
                        $select_featured = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 10) AS details, story_id, title, category, foto, posted_by, update_status, post_date, headline_id, post_time, update_status FROM stories WHERE update_status = 1 ORDER BY post_time DESC LIMIT 4");
                        $select_featured->execute();
                        $rows = $select_featured->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <figure>
                        <a href="javascript:void(0);" onclick="showItems('<?php echo $row->story_id?>')">
                            <img src="<?php echo 'media/'.$row->foto;?>" alt="Just in">
                            <figcaption>
                                <div class="todo">
                                    <h3><?php echo $row->title?></h3>
                                    <p><?php echo $row->details?></p>
                                    <p><i class="fas fa-layer-group"></i> <?php echo $row->category?></p>
                                    <!-- <button>Read more </button> -->
                                </div>
                                <p class="post_date"><i class="fas fa-calendar"></i> <?php echo date("jS M, Y", strtotime($row->post_date));?></p>
                            </figcaption>
                        </a>
                    </figure>
                    
                    <?php endforeach ?>
                    
                </div>
            <div class="archive">
                    <a href="archive.php">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
                
            </section>
            <section class="groups">
                <?php 
                    $get_cat = $connectdb->prepare("SELECT * FROM categories ORDER BY category DESC");
                    
                    $get_cat->execute();
                    $shows = $get_cat->fetchAll();
                    foreach($shows as $show):
                        $categories = $show->category;
                    
                ?>
                <div class="breaking each_cat" id="breaking_news">
                    <h2><?php echo $categories;?></h2>
                    <hr>
                    <div class="divs">
                        <?php
                            $get_news = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 10) AS details, story_id, title, category, foto, posted_by, update_status, post_date, headline_id, post_time, update_status FROM stories WHERE category = :category AND update_status = 1 ORDER BY post_time DESC LIMIT 4");
                            $get_news->bindvalue('category', $categories);
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
                                        <p class="post_date"><i class="fas fa-calendar"></i> <?php echo date("jS M, Y", strtotime($show->post_date));?></p>
                                    </div>
                                    
                                </figcaption>
                            </a>
                        </figure>
                    <?php endforeach; ?>
                        
                    </div>
                    
                    <form action="categories.php" method="POST">
                        <input type="hidden" name="item_cat" value="<?php echo $show->category;?>">
                        <button type="submit" name="check_category">View More <i class="fas fa-angle-double-right"></i></button>
                    </form>
                </div>
                <?php endforeach;?>
                
        </section>
        </main>
        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>
    <script src="controller/jquery.js"></script>
    <script src="controller/script.js"></script>
</body>
</html>