<div id="mobile_menu">
            
            <aside id="asideLeft">
                <div class="login">
                    <h3><i class="fas fa-home"></i> Menu</h3>
                </div>
                <nav id="index_nav">
                    <ul>
                        <?php
                            $get_category = $connectdb->prepare("SELECT * FROM categories");
                            $get_category->execute();
                            $cats = $get_category->fetchAll();
                            foreach($cats as $cat):
                        ?>
                        <li>
                            <form action="categories.php" method="POST">
                                <input type="hidden" name="item_cat" value="<?php echo $cat->category;?>">
                                <i class="fas fa-newspaper"></i> <input type="submit" value="<?php echo $cat->category;?>" name="check_category">
                            </form> 
                        </li>
                        <?php endforeach?>
                        <li><a class="ireports" href="javascript:void(0)" title="Eye witness Update"><i class="fas fa-eye"></i> Post Eye witness news</a></li>
                        <li><a href="archive.php" title="All news"><i class="fas fa-archive"></i> Archive</a></li>
                    </ul>
                </nav>
                <hr>
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
                            <a href="about.php" title="Who we are">
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
                                    <h3>Invest</h3>
                                    <p>Support the dream</p>
                                </div>
                            </a>
                        </li>                          
                    </ul>
                </nav>
            </aside>
            
        </div>