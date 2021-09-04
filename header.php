<!-- <section class="top_head" id="topHeader">
        <div class="social_media">
            <a style="color:light-blue;" href="javascript:void(0);" target="_blank" title="Follow us on facebook"><i class="fab fa-facebook"></i></a>   
            <a href="javascript:void(0);" target="_blank" title="Follow us on twitter"><i class="fab fa-twitter"></i></a>
            <a style="color:brown;" href="javascript:void(0);" target="_blank" title="Follow us on instagram"><i class="fab fa-instagram"></i></a>   
            <a href="javascript:void(0);" target="_blank" title="Follow us on linkedin"><i class="fab fa-linkedin"></i></a>   
            <a style="color:red;" href="javascript:void(0);" target="_blank" title="Follow us on youtube"><i class="fab fa-youtube"></i></a>   
        </div>
        <div class="contact_phone">
            <p class="text-right"><i class="fas fa-tty"></i> <span class="call">Call us:</span> +2348032848508</p>
        </div>
    </section> -->
    <header>
        <h1 class="logo">
            <a href="index.php" title="home">
                <img src="images/eristics_mini_logo.png" alt="Eristics" class="img-fluid">
                <span>eristics</span>
            </a>
        </h1>
        <div class="search">
            <form class="form-inline" action="search_result.php" method="POST">
                <input type="search" name="search_items" placeholder="search news, stories, categories">
                <button type="submit" name="search" class="main_searchbtn">Search</button>
                <button type="submit" name="search" class="mobilesearchbtn" ><i class="fas fa-search"></i></button>
            </form>
            
        </div>
        <nav id="navigation">
            <ul>
                <li>
                    <form action="categories.php" method="POST">
                        <input type="hidden" name="item_cat" value="news">
                        <i class="fas fa-signin-alt"></i> <input type="submit" value="News" name="check_category">
                    </form>
                </li>
                <li>
                    <form action="categories.php" method="POST">
                        <input type="hidden" name="item_cat" value="Events">
                        <input type="submit" value="Events" name="check_category">
                    </form>
                </li>
                <li> 
                    <form action="categories.php" method="POST">
                        <input type="hidden" name="item_cat" value="gossips">
                        <input type="submit" value="Gossips" name="check_category">
                    </form>
                </li>
                <!-- <li> 
                    <form action="categories.php" method="POST">
                        <input type="hidden" name="item_cat" value="sports">
                        <input type="submit" value="Sports" name="check_category">
                    </form> 
                </li> -->
                <button class="ireports" title="Eye witness Update"><i class="fas fa-eye"></i> IReport</button>
            </ul>
        </nav>
        
        <div class="menu_icon">
            <a href="javascript:void(0)"><i class="fas fa-bars"></i></a>
        </div>
    </header>