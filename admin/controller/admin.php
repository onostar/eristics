<?php
    require "server.php";
    session_start();
    if(isset($_SESSION['users'])){
        $user = $_SESSION['users'];

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
    <title>Eristics | Admin Portal</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.css">
    <link rel="icon" type="image/png" href="../images/eristics_mini_logo.png" size="32X32">
    <link rel="stylesheet" href="style.css">
    
</head>
<body id="mainBody">
    <header class="admin_header">
    <h1 class="logo">
            <a href="admin.php" title="home">
                <img src="../images/eristics_logo_small.png" alt="Eristics" class="img-fluid">
                <span>eristics</span>
            </a>
        </h1>
        <div class="rms">
            <h2>Administrator Portal</h2>
            
        </div>
        <div class="login">
            <button id="loginDiv"><i class="far fa-user"></i> 
                <?php 
                    /* $statement = $connectdb->prepare("SELECT * FROM users WHERE email = :email");
                    $statement->bindvalue('email', $user);
                    $statement->execute();
                    $infos = $statement->fetchAll();
                    foreach($infos as $info){
                        echo "Hello $info->first_name";
                    }
                       */
                ?> Hello Admin
                <i class="fas fa-chevron-down"></i></button>
            <div class="login_option" id="account">
                <div>
                    <a href="javascript:void(0);" class="signupBtn">Change password</a>
                    <!-- <a href="javascript:void(0);" class="signupBtn">My orders</a> -->
                    <button id="logoutBtn"><a href="logout.php">Logout</a></button>
                    
                </div>
            </div>
        </div>
        <div class="menu_icon">
            <a href="javascript:void(0)"><i class="fas fa-bars"></i></a>
        </div>
    </header>
    <main class="admin_main">
        <aside class="main_menu" id="desktop_menu">
            <div class="login">
                <button id="loginDiv"><i class="far fa-user"></i> 
                     Hello Admin
                    <i class="fas fa-chevron-down"></i></button>
                <div class="login_option" id="account">
                    <div>
                        <a href="javascript:void(0);" class="signupBtn">Change password</a>
                
                        <button id="logoutBtn"><a href="logout.php">Logout</a></button>
                        
                    </div>
                </div>
            </div>
            <nav>
                <h3><a href="admin.php" title="Home"><i class="fas fa-user"></i> Admin</a></h3>
                <ul>
                    <li><a href="javascript:void(0);" id="addCat" title="Add item categories">Add Category <i class="fas fa-layer-group"></i></a></li>
                    <li><a href="javascript:void(0);" id="addMenu" title="Add updates and stories">Post Updates <i class="fas fa-newspaper"></i></a></li>
                    <li><a href="javascript:void(0);" id="deleteItem" title="Delete stories">Delete Update <i class="fas fa-trash"></i></a></li>
                    
                    <li><a href="javascript:void(0);" id="uploadBanner">Upload Adverts <i class="fas fa-image"></i></a></li>
                    <li><a id="customerList"  href="javascript:void(0);">Advert List <i class="fas fa-list"></i></a></li>
                
                    <li><a id="showUsers" href="javascript:void(0);">News and Event List <i class="fas fa-blog"></i></a></li>
                    <li><a id="modifyPrice" href="javascript:void(0);">I-Report List <i class="fas fa-eye"></i></a></li>
                    <li><a id="featured" href="javascript:void(0);">Headlines <i class="fas fa-tv"></i></a></li>
                    <li><a href="javascript:void(0);" id="disableUser">Message <i class="fas fa-envelope"></i></a></li>
                    <li><a id="subscriberList"  href="javascript:void(0);">Subscribers <i class="fas fa-users"></i></a></li>
                </ul>
            </nav>
        </aside>
        <!-- <aside class="main_menu" id="mobile_aside">
            <div class="login">
                <button id="loginDiv"><i class="far fa-user"></i> 
                     Hello Admin
                    <i class="fas fa-chevron-down"></i></button>
                <div class="login_option" id="account">
                    <div>
                        <a href="javascript:void(0);" class="signupBtn">Change password</a>
                
                        <button id="logoutBtn"><a href="logout.php">Logout</a></button>
                        
                    </div>
                </div>
            </div>
            <h3><a href="admin.php" title="Home"><i class="fas fa-user"></i> Admin</a></h3>
                <ul>
                    <li><a href="javascript:void(0);" id="addCat" title="Add item categories">Add Category <i class="fas fa-layer-group"></i></a></li>
                    <li><a href="javascript:void(0);" id="addMenu" title="Add updates and stories">Post Updates <i class="fas fa-newspaper"></i></a></li>
                    <li><a href="javascript:void(0);" id="deleteItem" title="Delete stories">Delete Update <i class="fas fa-trash"></i></a></li>
                    
                    <li><a href="javascript:void(0);" id="uploadBanner">Upload Adverts <i class="fas fa-image"></i></a></li>
                    <li><a id="customerList"  href="javascript:void(0);">Advert List <i class="fas fa-list"></i></a></li>
                
                    <li><a id="showUsers" href="javascript:void(0);">News and Event List <i class="fas fa-blog"></i></a></li>
                    <li><a id="modifyPrice" href="javascript:void(0);">I-Report List <i class="fas fa-eye"></i></a></li>
                    <li><a id="featured" href="javascript:void(0);">Headlines <i class="fas fa-tv"></i></a></li>
                    <li><a href="javascript:void(0);" id="disableUser">Message <i class="fas fa-envelope"></i></a></li>
                    <li><a id="subscriberList"  href="javascript:void(0);">Subscribers <i class="fas fa-users"></i></a></li>
                </ul>
            </nav>
        </aside> -->
        
        <section id="contents">
            <div class="success_message">
                <p>
                    <?php
                        if(isset($_SESSION['success'])){
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        }
                    ?>
                </p>
            </div>
            <div class="error_message">
                <p>
                    <?php
                        if(isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                    ?>
                </p>
            </div>
            <div id="dashboard">
                <!-- <div id="userSummary">
                    <figure>
                        <div id="user_img">
                            <img src="images/admin.png" alt="restuarant logo">
                        </div>
                        <figcaption>
                            <h3>Foodies</h3>
                            <h3>Onostar Media</h3>
                            <h3>Super Admin</h3>
                        </figcaption>
                    </figure>
                </div> -->
                <div class="cards" id="card0">
                    <a href="javascript:void(0)">
                        <p>Stories</p>
                        <div class="infos">
                            <i class="fas fa-newspaper"></i>
                            <p>
                                <?php
                                    
                                    $get_stories = $connectdb->prepare("SELECT * FROM stories WHERE update_status = 1");
                                    $get_stories->execute();
                                    
                                    $stories = $get_stories->rowCount();
                                    
                                    echo $stories;
                                ?>
                            </p>
                        </div>
                    </a>
                </div> 
                <div class="cards" id="card1">
                    <a href="javascript:void(0)">
                        <p>I Reports</p>
                        <div class="infos">
                            <i class="fas fa-eye"></i>
                            <p>
                                <?php
                                    $get_stories = $connectdb->prepare("SELECT * FROM stories WHERE i_report = 1");
                                    $get_stories->execute();
                                    
                                    echo $get_stories->rowCount();
                                
                                ?>
                            </p>
                        </div>
                    </a>
                </div> 
                <div class="cards" id="card2">
                    <a href="javascript:void(0)">
                        <p>Comments</p>
                        <div class="infos">
                            <i class="fas fa-comment"></i>
                            <p>
                                <?php
                                    $comments = $connectdb->prepare("SELECT * FROM comments WHERE comment_date = CURDATE()");
                                    $comments->execute();
                                    echo $comments->rowCount();
                                ?>
                            </p>
                        </div>
                    </a>
                </div> 
                <div class="cards" id="card3">
                    <a href="javascript:void(0)">
                        <p>Messages</p>
                        <div class="infos">
                            <i class="fas fa-envelope"></i>
                            <p>
                                <?php
                                    $users = $connectdb->prepare("SELECT * FROM messages WHERE status = 0");
                                    $users->execute();
                                    echo $users->rowCount();
                                ?>
                            </p>
                        </div>
                    </a>
                </div> 
            </div>
            <!-- add categories -->
            <div id="addCategories">
                <div class="info"></div>
                <div class="add_user_form">
                    <h3>Add Item Category</h3>
                    <form method="POST"  id="addCatForm">
                        <div class="inputs">
                            <div class="data">
                                <input type="text" name="category" id="category" placeholder="Enter item category" required>
                            </div>
                            <button type="submit" id="add_categories" name="add_categories">Add Category <i class="fas fa-sink"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- add items -->
            <div id="addItems">
                <div class="info"></div>
                <div class="add_user_form">
                    <h3>Add Stories to Archive</h3>
                    <form method="POST" id="addItemForm" action="add_items.php" enctype="multipart/form-data">
                        <div class="inputs">
                            <input type="hidden" name="posted_by" value="Admin">
                            <div class="data">
                                <label for="menu_category">Category</label><br>
                                <select name="category" id="category" required>
                                    <option value="" selected>Select Categroy</option>
                                    <?php
                                        $select_category = $connectdb->prepare("SELECT category from categories ORDER BY category");
                                        $select_category->execute();
                                        $rows = $select_category->fetchAll();
                                        foreach($rows as $row):
                                    ?>
                                    <option value="<?php echo $row->category;?>"><?php echo $row->category;?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="data">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" placeholder="Enter item Name" required>
                            </div>
                        </div>
                        <div class="inputs">
                            
                            <!-- <div class="data" style="width:100%;">
                                <label for="item_prize">Summary</label>
                                <input type="text" name="summary" id="summary" placeholder="Story summary" required>
                            </div> -->
                               
                        </div>
                        <div class="inputs">
                            
                            <div class="data" style="width:100%; height:30vh;">
                                <textarea style="height:100%;" name="details" id="details" placeholder="Enter story details"></textarea>
                            </div>
                        </div>    
                        <div class="inputs">
                            <div class="data">
                                <label for="item_foto">Upload Photo</label>
                                <input type="file" name="foto" id="foto" placeholder="Upload images">
                            </div>
                            <div class="data">
                                <button type="submit" id="add_items" name="add_items">Post story <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- delete items -->
            <div id="deleteItems">
                <div class="info"></div>
                <div class="add_user_form">
                    <h3>Delete Updates from archive</h3>
                    <form method="POST" id="deleteItemForm">
                        <div class="inputs">
                            <div class="data">
                                <label for="restaurant">Category</label><br>
                                <select name="restaurantToDelete" id="restaurantToDelete" required>
                                    <option value="" selected>Select Category</option>
                                    <?php
                                        $select_restaurant = $connectdb->prepare("SELECT category from categories ORDER BY category ASC");
                                        $select_restaurant->execute();
                                        $rows = $select_restaurant->fetchAll();
                                        foreach($rows as $row):
                                    ?>
                                    <option value="<?php echo $row->category;?>"><?php echo $row->category;?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="data">
                                <label for="itemName">Select Item</label><br>
                                <select name="itemToDelete" id="itemToDelete" required>
                                    <option value="" selected>Select item</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" id="delete_item" name="delete_item">Delete <i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </div>
           <!-- Upload Banner and Adverts -->
           <?php include "banner_ads.php";?>
           <!-- Advert list -->
           <div id="customers" class="management">
                <h3>Advert Lists</h3>
                <hr>
                <div class="search">
                    <input type="search" id="searchCustomers" placeholder="Enter keyword">
                </div>
                <table id="customerTable">
                    <thead>
                        <tr>
                            <td>S/N</td>
                            <td>Advert title</td>
                            
                            
                            
                        </tr>
                    </thead>

                    <?php
                        $n = 1;
                        $select_customer = $connectdb->prepare("SELECT * FROM ads ORDER BY ads_title DESC");

                        $select_customer->execute();
                        
                        $rows = $select_customer->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <tbody>
                        <tr>
                            <td style="text-align:center;"><?php echo $n?></td>
                            <td><?php echo $row->ads_title?></td>
                            
                        </tr>
                    </tbody>

                    <?php $n++; endforeach;?>
                    
                </table>
            </div>
            <!-- News items -->
            <div id="userList" class="management">
                <h3>News, Events & Updates List</h3>
                <hr>
                <div class="search">
                    <input type="search" id="searchUsers" placeholder="Enter keyword">
                </div>
                <table id="userTable" class="sum_table">
                    <thead>
                        <tr>
                            <td>S/N</td>
                            <td>Category</td>
                            <td>Title</td>
                            <td>Posted By</td>
                            <td>Posted Date</td>
                        </tr>
                    </thead>

                    <?php
                        $n = 1;
                        $select_story = $connectdb->prepare("SELECT * FROM stories WHERE update_status = 1 ORDER BY post_date DESC");

                        $select_story->execute();
                        
                        $rows = $select_story->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <tbody>
                        <tr>
                            <td style="text-align:center;"><button style="padding:5px 10px; background:#fff; color:rgb(77, 74, 74); box-shadow:2px 2px 2px var(--secondaryColor);" title="Click to View Event" onclick="displayEvent('<?php echo $row->story_id;?>');"><?php echo $n?></button></td>
                            <td><?php echo $row->category?></td>
                            <td><?php echo $row->title?></td>
                            <td><?php echo $row->posted_by?></td>
                            <td><?php echo date("jS M, Y", strtotime($row->post_date));?></td>
                        </tr>
                    </tbody>

                    <?php $n++; endforeach;?>
                </table>
            </div>
             
            <!-- I-reports list -->
            <div id="priceList" class="management">
                <h3>Eye witness reports</h3>
                <hr>
                <div class="search">
                    <input type="search" id="searchUsers" placeholder="Enter keyword">
                </div>
                <table id="userTable" class="sum_table">
                    <thead>
                        <tr>
                            <td>S/N</td>
                            <td>Category</td>
                            <td>Title</td>
                            <td>Posted By</td>
                            <td>Posted Date</td>
                            <td>Status</td>
                        </tr>
                    </thead>

                    <?php
                        $n = 1;
                        $select_story = $connectdb->prepare("SELECT * FROM stories WHERE i_report = 1 ORDER BY post_time DESC");

                        $select_story->execute();
                        
                        $rows = $select_story->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <tbody>
                        <tr>
                            <td style="text-align:center;"><button style="padding:5px 10px; background:#fff; color:rgb(77, 74, 74); box-shadow:2px 2px 2px var(--secondaryColor);" title="Click to View Event" onclick="displayEvent('<?php echo $row->story_id;?>');"><?php echo $n?></button></td>
                            <td><?php echo $row->category?></td>
                            <td><?php echo $row->title?></td>
                            <td><?php echo $row->posted_by?></td>
                            <td><?php echo date("jS M, Y", strtotime($row->post_date));?></td>
                            <td style="text-transform:uppercase">
                                <?php $order_status = $row->update_status;
                                if($order_status == 1){
                                    echo "<p style='color:green'>Approved</p>";
                                }else{
                                    echo "<p style='  color:rgb(89, 92, 92);'>In Review</p>";
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>

                    <?php $n++; endforeach;?>
                </table>
            </div>
            <!-- View story details -->
            <div class="management" id="events_info">
                <?php
                    if(isset($_GET['update'])){
                        $story_id = $_GET['update'];
                
                        $select_event = $connectdb->prepare("SELECT * FROM stories WHERE story_id = :story_id");
                        $select_event->bindvalue("story_id", $story_id);
                        $select_event->execute();
                
                        $views = $select_event->fetchAll();
                        foreach($views as $view):
                ?>
                
                    <h3><?php echo $view->title;?></h3>
                    <hr>
                    <div class="events">
                        <div class="appointments">
                            <div class="event_info">
                                <p style="text-transform:uppercase;"><strong>Posted by:</strong> <input type="text" name="posted_by" value="<?php echo $view->posted_by;?>"></p>
                                <p><i class="fas fa-layer-group"></i> <input type="text" name="category" value="<?php echo $view->category;?>"></p>

                            </div>
                            <div class="event_date">
                                
                                <p><strong>Date: </strong><input type="text" name="post_date" value="<?php echo date("jS M, Y", strtotime($view->post_date));?>"></p>
                            </div>
                        </div>
                        <!-- <div class="story_summary">
                            <p><strong>Summary:</strong> <?php echo $view->summary?></p>
                        </div> -->
                        <div class="event_descriptions">
                            <h4>Details</h4>
                            <hr>
                            <p><?php echo $view->details;?></p>
                        </div>
                        
                
                        <div class="status">
                            <?php
                                $event_status = $view->update_status;
                                if($event_status == 0):
                            ?>
                                    <button id="eventDone" onclick="eventDone('<?php echo $view->story_id;?>')">Approve <i class="fas fa-thumbs-up"></i></button>
                                
                            <?php endif;?>
                            
                            <button id="eventCancelled" onclick="eventCancelled('<?php echo $view->story_id;?>')">Delete <i class="fas fa-trash"></i></button>
                            <button id="updateStory" onclick="updateStory('<?php echo $view->story_id;?>')">Update <i class="fas fa-edit"></i></button>
                        </div>
                        <div class="clear"></div>
                    </div>

                <?php endforeach; }?>            
            </div>
            <!-- Update Story details -->
            <div class="management" id="events_info">
                <?php
                    if(isset($_GET['edit'])){
                        $story_id = $_GET['edit'];
                
                        $select_event = $connectdb->prepare("SELECT * FROM stories WHERE story_id = :story_id");
                        $select_event->bindvalue("story_id", $story_id);
                        $select_event->execute();
                
                        $views = $select_event->fetchAll();
                        foreach($views as $view):
                ?>
                <form action="update_story.php" method="POST">
                    <input type="hidden" name="story_id" value="<?php echo $view->story_id;?>">
                    <h3><input type="text" name="title" id="title" value="<?php echo $view->title;?>"></h3>
                    <hr>
                    <div class="events">
                        <div class="appointments">
                            <div class="event_info">
                                <p style="text-transform:uppercase;"><strong>Posted by:</strong> <input type="text" name="posted_by" value="<?php echo $view->posted_by;?>"></p>
                                <p><i class="fas fa-layer-group"></i> <input type="text" name="category" value="<?php echo $view->category;?>"></p>

                            </div>
                            <div class="event_date">
                                
                                <p><strong>Date: </strong><input type="text" name="post_date" value="<?php echo date("jS M, Y", strtotime($view->post_date));?>"></p>
                            </div>
                        </div>
                        <!-- <div class="story_summary">
                            <p><strong>Summary:</strong> <input type="text" name="summary" value="<?php echo $view->summary?>"></p>
                        </div> -->
                        <div class="event_descriptions">
                            <h4>Details</h4>
                            <hr>
                            <textarea name="details" id="story_details"><?php echo $view->details;?></textarea>
                        </div>
                        
                
                        <div class="status">
                            
                            <button type="submit" name="update_news">Update <i class="fas fa-pen-alt"></i></button>
                        </div>
                        <div class="clear"></div>
                    </div>
                </form>

                <?php endforeach; }?>            
            </div>
            <!-- headlines -->
            <div id="featuredItems" class="management">
                <div class="info"></div>
                <div class="add_user_form" id="addFeatured">
                    <h3 style="color:#fff;">Add News Headlines</h3>
                    <form method="POST"  id="deleteItemForm">
                        <div class="inputs">
                            <div class="data">
                                <label for="restaurant">Category</label><br>
                                <select name="featuredRestaurant" id="featuredRestaurant" required>
                                    <option value="" selected>Select Category</option>
                                    <?php
                                        $select_restaurant = $connectdb->prepare("SELECT category from categories ORDER BY category ASC");
                                        $select_restaurant->execute();
                                        $rows = $select_restaurant->fetchAll();
                                        foreach($rows as $row):
                                    ?>
                                    <option value="<?php echo $row->category;?>"><?php echo $row->category;?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="data">
                                <label for="itemName">Select Item</label><br>
                                <select name="featuredItem" id="featuredItem" required>
                                    <option value="" selected>Select Story</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" id="add_feat" name="add_feat">Add Headline <i class="fas fa-plus"></i></button>
                    </form>
                </div>
                <h3>Eristics Headlines</h3>
                <hr>
                <!-- <div class="search">
                    <input type="search" id="searchUsers" placeholder="Enter keyword">
                </div> -->
                <div class="newTable">
                    <table id="featuredTable">
                    
                        <thead>
                            <tr>
                                <td>S/N</td>
                                <td>Category</td>
                                <td>title</td>
                                <td>Posted by</td>
                                <td>Post Date</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <?php
                            $n = 1;
                            $select_user = $connectdb->prepare("SELECT * FROM stories WHERE headline_id = 1 ORDER BY title");

                            $select_user->execute();
                            
                            $rows = $select_user->fetchAll();
                            foreach($rows as $row):
                        ?>
                        <tbody>
                            <tr>
                                <td style="text-align:center;"><?php echo $n?></td>
                                <td><?php echo $row->category?></td>
                                <td><?php echo $row->title?></td>
                                <td><?php echo $row->posted_by?></td>
                                <td><?php echo date("jS M, Y", strtotime($row->posted_by))?></td>
                                <td><button style="background:transparent; border:none; width:80%; margin:0 auto;" title="remove from featured" onclick="removeFeatured('<?php echo $row->story_id?>')"><i class="fas fa-trash" style="color:red; font-size:1.3rem; text-align:center;" ></i></button></td>
                            </tr>
                            
                        </tbody>
                        <?php $n++; endforeach;?>
                        
                    </table>
                </div>
            </div>
            <!-- messages -->
            <div id="disableUsers" class="management">
                <h3>Contact Messages</h3>
                <hr>
                <div class="search">
                    <input type="search" id="searchUsers" placeholder="Enter keyword">
                </div>
                <table id="userTable" class="sum_table">
                    <thead>
                        <tr>
                            <td>S/N</td>
                            <td>Sender</td>
                            <td>Subject</td>
                            <td>Date</td>
                            <td>Status</td>
                        </tr>
                    </thead>

                    <?php
                        $n = 1;
                        $select_story = $connectdb->prepare("SELECT * FROM messages ORDER BY sent_date DESC");

                        $select_story->execute();
                        
                        $rows = $select_story->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <tbody>
                        <tr>
                            <td style="text-align:center;"><button style="padding:5px 10px; background:#fff; color:rgb(77, 74, 74); box-shadow:2px 2px 2px var(--secondaryColor);" title="Click to View Event" onclick="openMessage('<?php echo $row->message_id;?>');"><?php echo $n?></button></td>
                            <td><?php echo $row->contact_name?></td>
                            <td><?php echo $row->mail_subject?></td>
                            <td><?php echo date("jS M, Y", strtotime($row->sent_date))?></td>
                            
                            <td style="text-transform:uppercase">
                                <?php $order_status = $row->status;
                                if($order_status == 1){
                                    echo "<p style='color:red; font-size:1.1rem;'><i class='fas fa-envelope-open-text'></i></p>";
                                }else{
                                    echo "<p style='  color:green; font-size:1.1rem;'><i class='fas fa-envelope'></i></p>";
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>

                    <?php $n++; endforeach;?>
                </table>
            </div>
            
             <!-- Messages details -->
             <div class="management" id="events_info">
                <?php
                    if(isset($_GET['message'])){
                        $message_id = $_GET['message'];
                
                        $select_event = $connectdb->prepare("SELECT * FROM messages WHERE message_id = :message_id");
                        $select_event->bindvalue("message_id", $message_id);
                        $select_event->execute();
                
                        $views = $select_event->fetchAll();
                        foreach($views as $view):
                ?>
                <h3>Message Details</h3>
                <hr>
                <div class="events">
                    <div class="appointments">
                        <div class="event_info">
                            <p style="text-transform:uppercase;"><strong></strong><?php echo $view->contact_name;?></p>
                            <p><?php echo $view->contact_email;?></p>

                        </div>
                        <div class="event_date">
                            <p><strong>Date: </strong><?php echo date("jS M, Y", strtotime($view->sent_date));?></p>
                        </div>
                    </div>
                    <div class="event_descriptions">
                        <h4>Message Content</h4>
                        <hr>
                        <p><?php echo $view->contact_message;?></p>
                    </div>
                    
                    <div class="status">
                        <?php 
                            if($view->status == 0):
                        ?>
                        <button id="eventDone" onclick="markRead('<?php echo $view->message_id;?>')">Mark as Read <i class="fas fa-book"></i></button>
                        <?php endif?>
                        <button id="eventCancelled" onclick="deleteMessage('<?php echo $view->message_id;?>')">Delete <i class="fas fa-trash"></i></button>
                    </div>
                    <div class="clear"></div>
                </div>

                <?php endforeach; }?>            
            </div>
            
            <!-- Subscriber list -->
            <div id="subscribers" class="management">
                <h3>List of Subscribers</h3>
                <hr>
                <div class="search">
                    <input type="search" id="searchSubscribers" placeholder="Enter keyword">
                </div>
                <table id="subscriberTable">
                    <thead>
                        <tr>
                            <td>S/N</td>
                            <td>Email</td>
                            
                            
                        </tr>
                    </thead>

                    <?php
                        $n = 1;
                        $select_subscriber = $connectdb->prepare("SELECT * FROM subscribers");

                        $select_subscriber->execute();
                        
                        $rows = $select_subscriber->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <tbody>
                        <tr>
                            <td style="text-align:center;"><?php echo $n?></td>
                            
                            <td><?php echo $row->contact_email?></td>
                            
                        </tr>
                    </tbody>

                    <?php $n++; endforeach;?>
                    
                </table>
            </div>
            <!-- Profile -->
            <div id="account" class="management">
                <?php include "profile.php";?>
            </div>
        </section>
    </main>
    

    <script src="jquery.js"></script>
    <script src="script.js"></script>

</body>
</html>

<?php
    }else{
        header("Location: ../index.php");
    }
?> 